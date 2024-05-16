<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include 'Functions.php'; ?>
    <?php include 'Header.php' ?>
    <?php include 'Nav.php' ?>
</head>
<style><?php include 'style.css'?></style>
<body>
<div class="Main">
<h1> <?php echo get_the_title() ?> </h1>
<?php echo get_the_content() ?>
</div>
</body>
<footer>
    <?php include 'Footer.php' ?>
</footer>
</html>