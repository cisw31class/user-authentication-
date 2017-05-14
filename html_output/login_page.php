<?php
/**
 * Created by PhpStorm.
 * User: ocean
 * Date: 4/30/17
 * Time: 7:13 AM
 */

function display_login(){
    //This function outputs the login form
    $login= <<<EOD
        <div class="row">
            <div class="col-md-3">
                <!--PLACEHOLDER-->
            </div>

            <div class="col-md-6">
                <div class="form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>Login to our site</h3>
                            <p>Enter username and password to log on:</p>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-lock"></i>
                        </div>
                    </div>
                    <div class="form-bottom">
                        <form role="form" action="../auth/login_script.php" method="POST" class="login-form">
                            <div class="form-group">
                                <label class="sr-only" for="form-username">Username</label>
                                <input type="text" name="name" placeholder="Username..." class="form-username form-control" id="form-username">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-password">Password</label>
                                <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
                            </div>
                            <button type="submit" class="btn">Sign in!</button><br><br>
                            <a href="../index.php"><button type="button" class="btn btn-danger">Go Back</button></a>

                        </form>
                    </div>
                </div>
            </div>	

            <div class="col-md-3">
                <!--PLACEHOLDER-->
            </div>
        </div>
EOD;
echo $login;
}