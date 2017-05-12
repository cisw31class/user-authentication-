<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Bookmark this</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="../assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="../assets/css/main.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="../assets/css/ie8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="../assets/css/ie9.css" /><![endif]-->

    <!--BOOTSTRAP w/ Jquery CORE-->
    <script src="../bootstrap/jquery-3.2.1.js"></script>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
    <script src="../bootstrap/js/bootstrap.js"></script>
    <!--BOOTSTRAP w/ Jquery CORE-->
    <?php require_once('../bookmark_functions/bookmark_fns.php'); ?>

    <style>
        #profile_pic {
            text-align: center;
        }
    </style>
</head>
<body>

<!-- Main -->

    <div class="container">
        <div class="row" align="center">
            <div class="col-md-12">
                <h1>Add to your list of bookmarks</h1>
                <?php display_message(); ?>
                <h3><?php echo $_GET['bk_message']; ?></h3>
            </div>
        </div>
    </div>

    <br><br>

    <div class="container>">
        <div class="row" align="center">
            <div class="col-md-4">
                <form action="" method="POST">
                <table class="table">
                    <tr>
                        <td>Bookmark</td>
                        <td>Delete</td>
                    </tr>
                <?php
                    $urls= get_user_urls($_SESSION['valid_user']);
                    if(!empty($urls)){
                        echo"<h3>Your Bookmarks</h3>";
                    }


                    foreach($urls as $url){
                        echo"<tr>";
                        echo "<td><a href='".$url."'>".$url."</a></td>";
                        echo"<td><input type='checkbox' name='del_me' class='form-control' value='".htmlspecialchars($url)."'></td>";
                        echo"</tr>";
                    }
                ?>
                </table>
                    <a href="#" onClick="bm_table.submit();">Delete BM</a>
                </form>
            </div>

            <div class="col-md-4">
                <img src="../images/bookmark.png" height="300" width="500">
            </div>

            <div class="col-md-4">
                <!--PLACEHOLDER-->
            </div>
        </div>
    </div>

    <br><br>

    <div class="container">
        <form action="add_bms.php" method="POST">
            <div class="row">
                <div class="col-md-4">
                    <!--PLACEHOLDER-->
                </div>

                <div class="col-md-4">
                    <label>Bookmark this URL</label><br>
                    <input type="text" name="new_url"><br>
                </div>

                <div class="col-md-4">
                    <!--PLACEHOLDER-->
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <!--PLACEHOLDER-->
                </div>

                <div class="col-md-4">
                    <input type="submit" name="submit" value="Go"> <span> </span><a href="../index.php" class="btn btn-default">Home</a>
                </div>

                <div class="col-md-4">
                    <!--PLACEHOLDER-->
                </div>
            </div>
        </form>
    </div>

<footer id="footer">
    <div align="center">
        <ul class="menu">
            <li><a href="#">Terms of Use</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
    </div>
</footer>

<!-- Scripts -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/jquery.scrolly.min.js"></script>
<script src="../assets/js/skel.min.js"></script>
<script src="../assets/js/util.js"></script>
<!--[if lte IE 8]><script src="../assets/js/ie/respond.min.js"></script><![endif]-->
<script src="../assets/js/main.js"></script>
<!-- Scripts -->
</body>
</html>
