<?php require_once "html_output/html_main.php"; ?>
<?php session_start(); ?>
    <!DOCTYPE HTML>
    <html>
<head>
    <title>Discussions</title>
    <!--HEADER-->
    <?php display_header(); ?>
    <!--HEADER-->
    <?php require_once "database_functions/url_fns.php"; ?>
</head>
<body>

<!--NAVIGATION-->
<?php display_nav_bar(); ?>
<!--NAVIGATION-->

<!-- Main -->
<div id="main" class="container">
    <header class="major">
        <h2>Our recommendations to you</h2>
        <p>Checks these out, most nerds love love them</p>
    </header>
    <div class="row 150%">
        <div class="4u 12u$(medium)">

            <!-- Sidebar -->
            <section id="sidebar">
                <section>
                    <h3>Did you know</h3>
                    <p>The mathematics involved in building the great pyramids is a whole
                        lot more complex than the mathematics involved in lifting an airplane into the sky?</p>
                    <footer>
                        <ul class="actions">
                            <li><a href="bookmarks/bookmark.php?bk_message=The truth doesn't stop being true, if you don't believe in it. " class="button small alt">Bookmark</a></li>
                        </ul>
                    </footer>
                </section>
            </section>

        </div>
        <div class="8u$ 12u$(medium) important(medium)">

            <!-- Content -->
            <section id="content">
<!--                <a href="#" class="image fit"><img src="images/recommend.jpg" alt="" /></a>-->
                <h1>You should look into...</h1>

                <?php
                $results= recommend_urls($_SESSION['valid_user'], $popularity=1);
                ?>

                <br><br>

                <?php
                display_message();
                foreach ($results as $result){
                    echo "<h3><a href='".$result."'>".$result."</a></h3>";
                }
                ?>
            </section>

        </div>
    </div>
</div>

<!-- Footer -->
<?php display_footer(); ?>
<!-- Footer -->

</body>
</html>