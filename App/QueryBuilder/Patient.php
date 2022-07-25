<?php


class Patient
{
    private $connect;
    public function __construct(PDO $connect)
    {
        $this->connect = $connect;
    }
    public function all()
    {
        return $this->connect->query("SELECT * FROM users WHERE user_type = 'patient'")->fetchAll();
    }
    public function edit($id)
    {
        $stmt = $this->connect->query("SELECT * FROM users WHERE id='$id'");
        $stmt->execute();
         if($user = $stmt->fetch(PDO::FETCH_ASSOC)) {
                return $user;
         }else{
                echo "No patients inserted";
         }
    }

    public function update($id)
    {
        if (isset($_POST['update'])) {

            $sql = "UPDATE users
                SET name = '".$_POST['name']."',
                    email = '".$_POST['email']."',
                    phone_number = '".$_POST['phone_number']."',
                    address = '".$_POST['address']."',
                    medical_condition = '".$_POST['medical_condition']."',
                    blood_type = '".$_POST['blood_type']."'
                WHERE id = '$id'";
            $stmt = $this->connect->prepare($sql);
            if ($stmt->execute()) {
                header('Location: ./index.php');
            } else {
                echo "Failed to update";
            }
        }
    }

    public function delete($id)
    {
        $sql = "DELETE FROM users where id= '$id'";
        $stmt = $this->connect->prepare($sql);
        if($stmt->execute()){
            header('Location: ./index.php');
        }
        else{
            echo "There was an error";
        }
    }

}