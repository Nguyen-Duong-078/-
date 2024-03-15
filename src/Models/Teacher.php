<?php

namespace Power\Ethereal\Models;

use Power\Ethereal\Commons\Model;

class Teacher extends Model
{
    public function getAll()
    {
        try {
            $sql = "
                SELECT 
                    p.id            p_id,
                    c.teaching      c_teaching,
                    p.name          p_name,
                    p.phone         p_phone,
                    p.email         p_email,
                    p.address       p_address,
                    p.teachers      p_teachers
                FROM teacher p
                INNER JOIN teaching c ON p.teachers = c.id
                ORDER BY p.id DESC
            ";
            $stmt = $this->conn->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }

    public function getByID($id)
    {
        try {
            $sql = "
                SELECT 
                    p.id            p_id,
                    c.teaching      c_teaching,
                    p.name          p_name,
                    p.phone         p_phone,
                    p.email         p_email,
                    p.username      p_username,
                    p.password      p_password,
                    p.image         p_image,
                    p.address       p_address,
                    p.status        p_status,
                    p.teachers      p_teachers
                FROM teacher p
                INNER JOIN teaching c 
                ON p.teachers = c.id
                WHERE p.id = :id
            ";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            return $stmt->fetch();
        } catch (\Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }

    public function insert($name, $email, $phone, $username, $password, $address, $teacher, $avatarPath)
    {
        try {
            $sql = "
                    INSERT INTO teacher(name, email, phone, username, password, address, teachers, image) 
                    VALUES (:name, :email, :phone, :username, :password, :address, :teachers, :image)
                ";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':address', $address);
            $stmt->bindParam(':teachers', $teacher);
            $stmt->bindParam(':image', $avatarPath);

            $stmt->execute();
        } catch (\Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }

    public function update($id, $name, $teacher, $email, $username, $password, $avatar)
    {
        try {
            $sql = "
            UPDATE teacher 
            SET name = :name,
                teachers = :teacher,
                email = :email,
                username = :username,
                password = :password,
                image = :image
            WHERE id = :id
        ";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':teacher', $teacher);  // Remove the extra space here
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':image', $avatar);

            $stmt->execute();
        } catch (\Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }


    public function deleteByID($id)
    {
        try {
            $sql = "DELETE FROM teacher WHERE id = :id";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id', $id);

            $stmt->execute();
        } catch (\Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }

    public function getByEmailAndPassword($email, $password)
    {
        try {
            $sql = "SELECT * FROM teacher WHERE email = :email AND password = :password";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);

            $stmt->execute();
            return $stmt->fetch();
        } catch (\Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }
}
