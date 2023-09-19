<?php

session_start();

include '../db/connect.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $name = $_POST['name'];
    // $email = $_POST['email'];
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $pass = $_POST['pass'];
    $confPass = $_POST['confirm'];
    $hashed = sha1($pass);

    // Generate activate_Code
    // echo 'code_'.rand(1000,100000).time();
    $activate_code = 'code_'.rand(1000,100000);

    // For activate_code Msg
    $headers = 'From: semicolon <info@semi-colen.com>' . "\r\n". 'Content-type: text/html; charset=utf-8' . "\r\n";
    $subject = 'رمز التحقق';
    $message = '
                <html>
                <head> 
                </head>
                <body>
                    <h3>  مرحبا  </h3>
                    <h3> لقد تلقينا طلبا لتفعيل حسابك الجديد على افاتار .</h3>
                    <h3 style="text-align:center">رمز التحقق الخاص بك هو  : </h3><br>
                    <h1 style="text-align:center" >'.$active_code.'</h1>
                </body>
                </html>
                '; 
    

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

            // Store Activate_code in DB
            $stmt = $connect->prepare("insert into `users` (username,email,password,activate_code) value (?,?,?,?) ");
            $stmt->execute([$name,$email,$hashed,$activate_code]);

            // Send Email
            if($stmt){

                mail($email,$subject,$message,$headers);

                $_SESSION['email'] = $email;

?>

                <script>
                    window.location.href="activate.php";
                </script>

<?php

            }

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