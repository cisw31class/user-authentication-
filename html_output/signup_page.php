<?php
/**
 * Created by PhpStorm.
 * User: ocean
 * Date: 4/30/17
 * Time: 7:24 AM
 */
function display_signup(){
    $signup= <<<EOD
    <div class="row">
        <div class="col-md-3">      
        <!--PLACEHOLDER-->
        </div>
            
        <div class="col-md-6">
            <div class="form-box">
                <div class="form-top">
                    <div class="form-top-left">
                        <h3>Sign up now</h3>
                        <p>Fill in the form below to get instant access:</p>
                    </div>
                    <div class="form-top-right">
                        <i class="fa fa-pencil"></i>
                    </div>
                </div>
                <div class="form-bottom">
                    <form role="form" action="" method="post" class="registration-form">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Name..." class="form-first-name form-control" id="name">
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" placeholder="Email..." class="form-last-name form-control" id="email">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Password..." class="form-email form-control" id="password">
                        </div>
                        <div class="form-group">
                            <input type="password" name="conf_password" placeholder="Confirm Password..." class="form-email form-control" id="conf_password">
                        </div>
                        <button type="submit" class="btn">Sign me up!</button><br><br>
                         <a href="../index.php"><button type="button" class="btn btn-danger">Nevermind</button></a>
                    </form>
                </div>
            </div>
        </div>
    
    
        <div class="col-md-3">
            <!--PLACEHOLDER-->
        </div>
    </div>
EOD;
echo $signup;
}