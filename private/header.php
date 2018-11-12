<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>JBWestenberg</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<div class="header">
    <div id="pagetitle">
        <p>Portfolio</p>
        <i class="fas fa-caret-down"></i>
    </div>
    <ul class="navbar">
        <li><a href="../index.php" class="<?php if($cur_page == "home"){echo 'nav-active';}?>">HOME</a></li>
        <li><a href="../projecten.php" class="<?php if($cur_page == "projects"){echo 'nav-active';}?>">PROJECTEN</a></li>
        <li><a href="../mijn_skills.php" class="<?php if($cur_page == "skills"){echo 'nav-active';}?>">MIJN SKILLS</a></li>
        <li><a href="../contact.php" class="<?php if($cur_page == "contact"){echo 'nav-active';}?>"><div id="contactbtn">CONTACT</div></a></li>
    </ul>
</div>
