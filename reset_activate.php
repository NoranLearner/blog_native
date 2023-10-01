<?php

session_start();

include 'inc/db/connect.php';

$title = 'تفعيل الحساب';

// include 'inc/init.php';
include 'inc/app/function.php';
include 'inc/app/head.php';

if (!isset($_SESSION['email'])) {
    header('location:login.php');
}

?>

<div class="technology">
    <div class="container">
        <div class="col-md-12 col-lg-2"></div>
        <div class="col-md-12 col-lg-8 ">
            <div id="content" class="contact-section text-right">
                <h2 class="w3 text-center">
                    تفعيل الحساب
                </h2>
                <div class="contact-grids">
                    <div class="col-md-12 contact-grid">
                        <div id="success"></div>
                        <form id="active" method="post">
                            <div class="form-group text-center">
                                <label> رمز التحقق </label>
                                <p>لقد ارسلنا رمز التفعيل علي البريد التالى </p>
                                <b>
                                    <?php echo $_SESSION['email']; ?>
                                </b>
                                <!-- <hr> -->
                                <input type="text" name="activate" placeholder="example: code_12345"  required style="margin: 1em 0;">
                            </div>
                            <div class="form-group">
                                <input type="submit" style="width:100%;" value=" تفعيل ">
                            </div>
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).on('submit', '#active', function (e) {
        e.preventDefault();
        var Form = $(this);
        $.ajax({
            type: 'POST',
            url:'inc/rest-pass/check.php', 
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (data) {
                $("#success").html(data);
            }
        })
    });
</script>