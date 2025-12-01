<?php
class UserController{
    public static function reg(){
        global $mysqli;
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $result = $mysqli -> query("SELECT * FROM users WHERE email='$email'");
        if($result->num_rows){
            echo "Такой пользователь уже существует <a href='/reg'>Зарегистрировать другого</a>";
        }else{
            $mysqli->query("INSERT INTO `users`(`name`, `lastname`, `email`, `pass`) VALUES ('$name','$lastname','$email','$pass')");
            echo "Пользователь зарегестрирован";
            header("Location:/login");
        }
    }

    public static function login(){
        global $mysqli;
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $result = $mysqli -> query ("SELECT * FROM Users WHERE email = '$email' AND pass = '$pass'" );
        $row = $result -> fetch_assoc();
        if($result->num_rows){
            $_SESSION['name'] = $row['name'];
            $_SESSION['lastname'] = $row['lastname'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['img']=$row['img'];
            return json_encode(['result'=>'success']);
        }else{
            return json_encode(['result'=>'error']);
        }
    }

    public static function getAuthUserData(){
        $userData = [
            "name"=> $_SESSION['name'],
            "lastname"=>$_SESSION['lastname'],
            "email"=>$_SESSION['email'],
            "id"=>$_SESSION['id'],
            "img"=>$_SESSION['img']
        ];
    return json_encode($userData);

    }

    public static function updateUserAvatar(){
        global $mysqli;
        $id=$_SESSION['id'];
        $userFile = $_FILES['userFile'];
        $arr=(explode(".", $userFile['name']));
        $extension=$arr[count($arr)-1];
        $goodExtension = ["png", "jpg", "webp", "jpeg", "gif"];
        foreach ($goodExtension as $e){
            if($e==$extension){
                //echo $e;
                $dir = 'img/user_avatar/';
                $temp = $_FILES['userFile']['tmp_name'];  
                $name = $_FILES['userFile']['name']; 
                $dirIn= 'img/user_avatar/'.$name;
                move_uploaded_file($temp, $dir.$name);
                $mysqli->query("UPDATE `users` SET `img`='$dirIn' WHERE id =$id");
                $_SESSION['img']=$dirIn;
                header("Location:/profile");
                exit();  
            }
        }
        exit("Type file ERROR!");
    }
}