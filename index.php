<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
    <?php

    ?>
</head>
<body>
    <form action="main.php" method="POST">
        <h1>login</h1><br/>
        <input type="text" id="username" required name="name" placeholder="name" /><br/>
        <input type="password" id="password" required name="password" placeholder="password" /><br/>
        <input type="email" id="email" required name="email" placeholder="name@example.com" /><br/>
        <input type="radio" id="gender_male" required name="gender" value="male" />male &nbsp;&nbsp;&nbsp;
        <input type="radio" id="gender_female" required name="gender" value="female" />female<br/>
        <input type="submit" id="submit" value="login" /><br/>
    </form>
</body>
</html>