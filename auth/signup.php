<!DOCTYPE html>
<?php require_once "../html_output/html_main.php"; ?>
<html lang="en">
    <head>
        <title>Signup</title>
        <!--HEADER-->
        <?php auth_display_header(); ?>
        <!--HEADER-->
<!--        <script src="../jquery-3.2.1.js"></script>-->
    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <!--SIGNUP FORM-->
                        <?php display_signup(); ?>
                    <!--SIGNUP FORM-->

                </div>
            </div>

            <!--HANDLE VALIDATION BEFORE DATA IS SENT TO THE SERVER-->
            <script>
                $(function(){
                    var password= $('#password');
                    var conf_password= $('#conf_password');
                    var error= $('#error');
                    var error2= $('#error2');
                    var email= $('#email');

                    $('form').submit(function(e){
                        if(password.val().length < 6 || password.val().length > 16){
                            error.html('Password must be between 6 - 16 characters');
                            error.delay(8000).fadeOut('slow');
                            e.preventDefault();
                        }
                        if(password.val() != conf_password.val()){
                            error2.html('Passwords do not match');
                            error2.delay(8000).fadeOut('slow');
                            e.preventDefault();
                        }
                    });

                    $('#name').blur(function(){
                        var name= $(this).val();
                        $.ajax({
                            url:"../database_functions/check_user.php",
                            data: {name:name},
                            dataType: "text",
                            method:"POST",
                            success: function(data){
                                var error= $('#error');
                                error.html(data);
                                if(error.text()){
                                    $('#name').focus();
                                }
                            }
                        });
                    });


                });
            </script>
            <!--HANDLE VALIDATION BEFORE DATA IS SENT TO THE SERVER-->
            
        </div>


        <!--FOOTER-->
        <?php auth_display_footer(); ?>
        <!--FOOTER-->
    </body>
</html>