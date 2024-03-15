<?php

namespace Power\Ethereal\Controllers\Admin;

use PHPExcel_IOFactory;
use Power\Ethereal\Commons\Controller;
use Power\Ethereal\Models\Teacher;
use Power\Ethereal\Models\Teaching;

class TeacherController extends Controller
{
    private Teacher $teacher;

    private string $folder = 'teachers.';
    const PATH_UPLOAD = '/uploads/teacher/';

    public function __construct()
    {
        $this->teacher = new Teacher;
    }

    // Danh sách
    public function index()
    {
        $data['teachers'] = $this->teacher->getAll();
        return $this->renderViewAdmin(
            $this->folder . __FUNCTION__,
            $data
        );
    }

    // Thêm mới
    public function create()
    {
        if (!empty ($_POST)) {
            $name = $_POST['fullname'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $username = $_POST['name'];
            $password = $_POST['password'];
            $address = $_POST['address'];
            $teacher = $_POST['teacher'];

            $avatar = $_FILES['image'] ?? null;
            $avatarPath = null;
            if (!empty ($avatar)) {
                $avatarPath = self::PATH_UPLOAD . $avatar['name'];
                if (!move_uploaded_file($avatar['tmp_name'], PATH_ROOT . $avatarPath)) {
                    $avatarPath = null;
                }
            }
            $this->teacher->insert($name, $email, $phone, $username, $password, $address, $teacher, $avatarPath);
            header('location: /admin/teacher');
            exit();
        }
        $data['teachings'] = (new Teaching)->getAll();
        return $this->renderViewAdmin($this->folder . __FUNCTION__, $data);
    }

    // Xem chi tiết theo ID
    public function show($id)
    {
        $data['teacher'] = $this->teacher->getByID($id);

        if (empty ($data['teacher'])) {
            Error_404();
        }

        return $this->renderViewAdmin(
            $this->folder . __FUNCTION__,
            $data
        );
    }

    // Cập nhật theo ID
    public function update($id)
    {
        $data['teachers'] = $this->teacher->getByID($id);
        if (empty ($data['teachers'])) {
            Error_404();
        }
        if (!empty ($_POST)) {
            $name = $_POST['fullname'];
            $teacher = $_POST['teacher'];
            $email = $_POST['email'];
            $username = $_POST['name'];
            $password = $_POST['password'];
            $avatar = $_FILES['image'] ?? null;
            $avatarPath = $data['teachers']['p_image'];
            $move = false;
            if (!empty ($avatar)) {
                $avatarPath = self::PATH_UPLOAD . $avatar['name'];
                if (!move_uploaded_file($avatar['tmp_name'], PATH_ROOT . $avatarPath)) {
                    $avatarPath = $data['teachers']['p_image'];
                } else {
                    $move = true;
                }
            }
            $this->teacher->update($id, $name, $teacher, $email, $username, $password, $avatarPath);
            if (
                $move
                && $data['teachers']['p_image']
                && file_exists(PATH_ROOT . $data['teachers']['p_image'])
            ) {
                unlink(PATH_ROOT . $data['teachers']['p_image']);
            }
            $_SESSION['success'] = 'Thao tác thành công!';
            header("Location: /admin/teacher/$id/update");
            exit();
        }
        $data['teaching'] = (new Teaching)->getAll();
        return $this->renderViewAdmin($this->folder . __FUNCTION__, $data);
    }


    // Delete theo ID
    public function delete($id)
    {
        $this->teacher->deleteByID($id);
        header('Location: /admin/teacher');
        exit();
    }

    // THÊM BẰNG EXCEL 

    public function import()
    {
        if (isset ($_POST['import'])) {
            $file = $_FILES['excel']['tmp_name'];
            $objReader = PHPExcel_IOFactory::createReaderForFile($file);

            $listWordSheet = $objReader->listWorksheetNames($file);
            debug($listWordSheet);

            $objReader->setLoadSheetsOnly('Văn');

            $objExcel = $objReader->load($file);
            $sheetData = $objExcel->getActiveSheet()->toArray(null, true, true, true);
            // debug($sheetData);

            $activeSheet = $objExcel->getActiveSheet();
            $highestRow = $activeSheet->getHighestRow();

            for ($row = 2; $row <= $highestRow; $row++) {
                $teacher = 7;
                $name = $sheetData[$row]['A'];
                $phone = $sheetData[$row]['B'];
                $email = $sheetData[$row]['C'];
                $username = $sheetData[$row]['D'];
                $password = $sheetData[$row]['E'];
                $address = $sheetData[$row]['F'];
                $avatarPath = null;
                $this->teacher->insert($name, $email, $phone, $username, $password, $address, $teacher, $avatarPath);
                header('location: /admin/teacher');
                exit();
            }
        }
    }
}