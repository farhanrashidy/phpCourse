<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>


        <form action="site.php" method="get">
            Name: <input type="text" name="name">
            <br>
            Age: <input type="number" name="age">
            <input type="submit">
        </form>
        <br>
        Hello <?php echo $_GET["name"]; ?>
        <br>
        You are <?php echo $_GET["age"]; ?> years old!
    </body>
</html>