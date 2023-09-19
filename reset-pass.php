<?php

ob_start();

session_start();

include 'inc/db/connect.php';
include 'inc/app/head.php';

if (!isset($_SESSION['reset'])) {
    header("location:login.php");
} 

?>

<!-- banner -->
<!-- technology-left -->
<div class="technology">
    <div class="container">
        <div class="col-md-12 col-lg-2"></div>
        <div class="col-md-12 col-lg-8 ">
            <div class="contact-section text-right">
                <h2 class="w3 text-center">استعادة كلمة المرور</h2>
                <div class="contact-grids">
                    <div class="col-md-12 contact-grid">
                        <div id="success"></div>
                        <form id="reset">
                            <div class="form-group">
                                <label> كلمة المرور </label>
                                <br>
                                <input type="password" name="password">
                            </div>
                            <div class="form-group">
                                <label> تأكيد كلمة المرور </label>
                                <br>
                                <input type="password" name="confpass">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn-form" style="width:100%;"> تسجيل دخول </button>
                            </div>
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
        <!-- technology-right -->
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