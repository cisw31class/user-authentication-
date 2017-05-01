<!DOCTYPE html>
<?php require_once "../html_output/html_main.php"; ?>
<html lang="en">
    <head>
        <title>Signup</title>
        <!--HEADER-->
        <?php auth_display_header(); ?>
        <!--HEADER-->
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
                    var error= $('#error');
                    var error2= $('#error2');
                    var error3= $('#error3');
                    var error4= $('#error4');

                    function validateEmail(email){
                        var emailReg = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
                        var valid = emailReg.test(email);

                        return valid;
                    }

                    $('form').submit(function(e){
                        var username= $('#name');
                        var email= $('#email');
                        var password= $('#password');
                        var conf_password= $('#conf_password');

                        if(username.val().length > 17){
                            error3.html('User name cannot be greater than 16 characters');
                            error3.delay(8000).fadeOut('slow');
                            e.preventDefault();
                        }

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
                        if(!validateEmail(email.val())){
                            error4.html('Invalid email please try again');
                            error4.delay(8000).fadeOut('slow');
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