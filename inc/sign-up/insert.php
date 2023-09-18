<?php

session_start();

include '../db/connect.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $confPass = $_POST['confirm'];
    $hashed = sha1($pass);

    $stmt = $connect->prepare("SELECT * FROM `users` WHERE email = '$email' ");
    $stmt->execute();
    $count = $stmt->rowCount();

    if ($count > 0) {

?>

        <div class="alert alert-danger text-center">هذا البريد مستخدم من قبل شخص اخر</div>

<?php 
    
    } else {

        $errors = array();

        if($pass !== $confPass){
            $errors[] = 'كلمات المرور غير متطابقه';
        }
        if(mb_strlen($pass,'utf-8') < 8){
            $errors[] = 'الحد الأدنى لكلمات المرور 8 أحرف';
        }
        if(mb_strlen($pass,'utf-8') > 20){
            $errors[] = 'الحد الأقصى  لكلمات المرور 20 حرف';
        }
        if (!filter_var($email,FILTER_VALIDATE_EMAIL)) { 
            $errors[] = 'لقد ادخلت بريد الكترونى غير صالح';
        }

        if(empty($errors)){

            $stmt = $connect->prepare("insert into `users` (username,email,password) value (?,?,?) ");
            $stmt->execute([$name,$email,$hashed]);

        } else {

            foreach($errors as $error){
?>

                <div class="alert alert-danger text-center" ><?php echo $error; ?></div>  

<?php

            }

        }

        

    }

}


?>