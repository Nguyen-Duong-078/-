<?php

namespace Power\Ethereal\Models;

use Power\Ethereal\Commons\Model;

class Teaching extends Model
{
          public function getAll()
          {
                    try {
                              $sql = "SELECT * FROM teaching";
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
                              $sql = "SELECT * FROM teacher WHERE id = :id";
                              $stmt = $this->conn->prepare($sql);
                              $stmt->bindParam(':id', $id);
                              $stmt->execute();
                              return $stmt->fetch();
                    } catch (\Exception $e) {
                              echo 'ERROR: ' . $e->getMessage();
                              die;
                    }
          }

          public function insert($name, $email, $phone, $username, $password, $address, $avatarPath)
          {
                    try {
                              $sql = "
                    INSERT INTO teacher(name, email, phone, username, password, address, image) 
                    VALUES (:name, :email, :phone, :username, :password, :address, :image)
                ";

                              $stmt = $this->conn->prepare($sql);

                              $stmt->bindParam(':name', $name);
                              $stmt->bindParam(':email', $email);
                              $stmt->bindParam(':phone', $phone);
                              $stmt->bindParam(':username', $username);
                              $stmt->bindParam(':password', $password);
                              $stmt->bindParam(':address', $address);
                              $stmt->bindParam(':image', $avatarPath);

                              $stmt->execute();
                    } catch (\Exception $e) {
                              echo 'ERROR: ' . $e->getMessage();
                              die;
                    }
          }

          public function update($id, $name, $email, $password, $avatar)
          {
                    try {

                              $sql = "
                    UPDATE teacher 
                    SET name = :name,
                        email = :email,
                        password = :password,
                        avatar = :avatar
                    WHERE id = :id
                ";

                              $stmt = $this->conn->prepare($sql);

                              $stmt->bindParam(':id', $id);
                              $stmt->bindParam(':name', $name);
                              $stmt->bindParam(':email', $email);
                              $stmt->bindParam(':password', $password);
                              $stmt->bindParam(':avatar', $avatar);

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
