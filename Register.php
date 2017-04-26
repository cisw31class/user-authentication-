<html>
    <head>
        <title>Register Page</title>
    </head>

    <body>
        <h1>Register Page</h1>

            <form action="insert_user/createUser.php" method="POST">
                <label>Name:</label><br>
                <input type="text" name="name">
                <br><br>
                <label>Email:</label><br>
                <input type="text" name="email">
                <br><br>
                <label>Password:</label><br>
                <input type="password" name="password">
                <br><br>
                <label>Confirm Password:</label><br>
                <input type="password" name="confirmPassword">
                <br><br>
                <input type="submit" name="submit">
            </form>

    </body>
</html>