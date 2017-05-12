<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Bookmark this</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="../assets/js/ie/html5shiv.js"></script><![endif]-->
<!--    <link rel="stylesheet" href="../assets/css/main.css" />-->
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
                <h1>Your bookmarks</h1>
                <?php display_message(); ?>
                <h3><?php echo $_GET['bk_message']; ?></h3>
            </div>
        </div>
    </div>

    <br><br>

    <div class="container>">
        <div class="row" align="center">
            <div class="col-md-4">
                <?php $urls= get_user_urls($_SESSION['valid_user']);
                    if(!empty($urls)){
                        echo"<h3>What you have so far</h3>
                            <form action=\"delete_user_bookmarks.php\" method=\"POST\" name=\"bm_table\">
                            <table class=\"table\">
                                                <tr>
                                                    <th>Bookmark</th>
                                                    <th>Delete</th>
                                                </tr>";
                    }
                    //user stored bookmarks with delete functionality
                    display_bookmarked_urls($urls);

                    if(!empty($urls)){
                        echo"</table>
                                <a href=\"#\" onClick=\"bm_table.submit();\" class=\"btn btn-danger\">Delete</a>
                            </form>";
                    }
                ?>
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
                    <input type="text" name="new_url" class="form-control"><br>
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
                    <input type="submit" name="submit" value="Go" class="btn btn-success"> <span> </span>
                    <a href="../index.php" class="btn btn-default">Home</a> <span> </span>
                    <a href="../profile.php" class="btn btn-default">Profile</a> <span> </span>
                    <a href="../recommend.php" class="btn btn-default">Recommendations</a>
                </div>

                <div class="col-md-4">
                    <!--PLACEHOLDER-->
                </div>
            </div>
        </form>
    </div>

    <br><br><br>


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
