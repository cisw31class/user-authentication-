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
                <h1>Bookmark this URL</h1>
                <h3><?php echo $_GET['bk_message']; ?></h3>
            </div>
        </div>
    </div>

    <br><br>

    <div class="container>">
        <div class="row" align="center">
            <div class="col-md-4">
                <h2>Ideas</h2>
                <h3>
                    <a href="">http://www.serverwatch.com</a><br>
                    <a href="">https://www.ubuntu.com</a><br>
                    <a href="">http://www.itworld.com</a><br>
                    <a href="">http://www.webopedia.com</a><br>
                    <a href="">https://www.suse.com</a><br>
                </h3>
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
        <form action="reset_pass/forgot_passwd.php" method="POST">
            <div class="row">
                <div class="col-md-4">
                    <!--PLACEHOLDER-->
                </div>

                <div class="col-md-4">
                    <label>URL</label><br>
                    <input type="text" name="username"><br>
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
                    <input type="submit" name="submit" value="Book"> <span> </span><a href="javascript:history.back()" class="btn btn-default">Nevermind</a>
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
