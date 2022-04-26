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

        <!-- WHOLE SCHOOL SECTION -->
        <div class="school-feed">
               <!-- FEED ANALYTICS-->
            <div class="feed-analytics">
                <h3>Feed Overview</h3>
                <span class="analyticsCard">
                    <h5 style="display: inline-block;">Today  4 <i class="fa-solid fa-newspaper"></i> </h5>
                </span> 
                <span class="analyticsCard">
                    <h5 style="display: inline-block;">This Week  4 <i class="fa-solid fa-newspaper"></i> </h5>
                </span> 
                <span class="analyticsCard">
                    <h5 style="display: inline-block;">This Month  4 <i class="fa-solid fa-newspaper"></i> </h5>
                </span> 
                <span class="analyticsCard">
                    <h5 style="display: inline-block;">This Year  4 <i class="fa-solid fa-newspaper"></i> </h5>
                </span> 
                <span class="analyticsCard">
                    <h5 style="display: inline-block;">Total  4 <i class="fa-solid fa-newspaper"></i> </h5>
                </span> 
            </div>
            
            
            <!-- SCHOOL MAIN NEWS -->
            <div class="school-feed-section">
                <h1 class="mt-4 h1">School Feed</h1>
                <a href="addSF.php" style="color: white;" class="btn btn-warning"> Add Post <i class="fa-solid fa-plus"></i></a>
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    
                    <?php for($i=1; $i<=50; $i++ ): ?>
                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne<?php echo $i?>"">
                            <button class="accordion-button bold" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne<?php echo $i?>" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                Sample Heading
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne<?php echo $i?>"" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">

                                <h2>Sample Heading</h2> 
                                <p><span class="fs-5 fw-semi0">Sample Author</span> | <span class="fw-bold text-secondary"> 1 April 2022 </span></p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit vitae, temporibus consectetur dolorum quam unde id consequuntur harum possimus laborum veniam atque eos natus ad culpa earum in iure. Deserunt labore in mollitia id quis aperiam inventore excepturi nam sapiente facere minima optio nulla ab placeat commodi quia nemo, perferendis eveniet ipsum vero error dolorum est laboriosam! Quis enim expedita, perspiciatis suscipit repellendus quaerat obcaecati fuga cupiditate commodi quos, dignissimos ad consequuntur ratione quo necessitatibus, recusandae vero facere fugiat animi nisi. Nihil, dicta? Alias aliquam cumque molestiae ratione dolores ducimus tempora ipsum illo tempore eveniet, aut sed repellat reprehenderit. Ut!
                                </p>
                                <img style="width: 60%;" src="/sps/img/system/bgPhil.png" alt="">
                            </div>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>


        
        <div class="system-menu-bottom">
            <div class="menu-wrapper">
                <a title="School Feed" class="active-img" href="./schoolfeed.php"><img src="/sps/img/system/schoolfeed.png" ></a>
                <a title="School Calendar" href="#"><img src="/sps/img/system/schoolcalendar.png" ></a>
                <a title="Processes"href="#"><img src="/sps/img/system/process.png" ></a>
                <a title="Forum" href="#"><img src="/sps/img/system/forum.png" ></a>
                <a title="Moderator"href="#"><img src="/sps/img/system/moderator.png" ></a>
                <a title="Announcement"href="#"><img src="/sps/img/system/announcement.png" ></a>
            </div>
        </div>
    </body>

</html>