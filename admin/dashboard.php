<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- LINKS bootstrap and cdns -->
        <?php  require_once "../cdn.php"  ?>

        <!-- CSS -->
        <link rel="stylesheet" href="/sps/css/main.css">

        <title>Dashboard - School Publication</title>
    </head>
    
    <body>
        <!-- HEADER -->
        <?php require_once "./components/header.php" ?>

        <div class="system-menu">
            <div class="menu-wrapper">
                <a href="./schoolfeed.php"><img src="/sps/img/system/schoolfeed.png" ></a>
                <a href="#"><img src="/sps/img/system/schoolcalendar.png" ></a>
                <a href="#"><img src="/sps/img/system/process.png" ></a>
                <a href="#"><img src="/sps/img/system/forum.png" ></a>
                <a href="#"><img src="/sps/img/system/moderator.png" ></a>
                <a href="#"><img src="/sps/img/system/announcement.png" ></a>
            </div>
        </div>
    </body>

</html>