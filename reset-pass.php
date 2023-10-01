<?php

session_start();

include 'inc/db/connect.php';

$title = 'استعاده كلمه المرور';

// include 'inc/init.php';
include 'inc/app/function.php';
include 'inc/app/head.php';

if (!isset($_SESSION['reset'])) {
    header("location:login.php");
} 

?>

<div class="technology">
    <div class="container">
        <div class="col-md-12 col-lg-2"></div>
        <div class="col-md-12 col-lg-8 ">
            <div class="contact-section text-right" style="direction:rtl;">
                <h2 class="w3 text-center">استعادة كلمة المرور</h2>
                <div class="contact-grids">
                    <div class="col-md-12 contact-grid">
                        <div id="success"></div>
                        <form id="reset" method="post">
                            <div class="form-group">
                                <label> كلمة المرور </label>
                                <input type="password" name="password" style="margin: 1em 0;">
                            </div>
                            <div class="form-group">
                                <label> تأكيد كلمة المرور </label>
                                <input type="password" name="confpass" style="margin: 1em 0;">
                            </div>
                            <div class="form-group">
								<input type="submit" style="width:100%;" value="تسجيل دخول">
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
    $(document).on('submit', '#reset', function (e) {
        e.preventDefault();
        var Form = $(this);
        $.ajax({
            type: 'POST',
            url: 'inc/rest-pass/update.php',
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (data) {
                $("#success").html(data);
            }
        })
    });
</script>