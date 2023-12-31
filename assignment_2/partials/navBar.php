<?php
require "config/dbConn.php";
session_start();
?>
</head>

<body>
<div class="navBar">
    <div class="logoDiv">
        <a href="<?= ROOT_URL ?>">
            <img class="logo" src="./images/LogoItem.svg" alt="logo">
        </a>
    </div>
    <div class="links">
        <a href="<?= ROOT_URL ?>home.php">Home</a>
        <a href="<?= ROOT_URL ?>founder.php">Founder</a>
        <a href="<?= ROOT_URL ?>viewBlog.php">Blog</a>
        <a href="<?= ROOT_URL ?>index.php">View Users</a>
        <a id="contact" href="<?= ROOT_URL ?>contactUs.php">Contact Us</a>
        <a id="post" href="<?= ROOT_URL ?>postBlog.php">Add Blog</a>
        <?php 
        if(isset($_SESSION['currUserName'])){
            echo "<a id='signUp' href='processes/signOut.php'>Sign Out</a>";
        }
        else{
            echo "<a id='signUp' href='signIn.php'>Sign In</a>";
        }
        
        ?>
      
        <img class="avatar" src="./images/default-avatar.png" alt="avatar" />

    </div>
</div>