<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="firstFile.css" type = "text/css">
    <title> Intro page </title>
</head>
<body>

    <nav class="NavBar">

        <div class="navLeft">

            <div class="logoDiv">
                <img src="images/logo.svg" alt="logo" id="logo" class="logo">
            </div>

            <div class="menuDiv">
                <img src="images/icon-menu.svg" alt="menu" class="menu" id="menu">
            </div>
            
            <!-- nav Items -->

            <div id = "navBarMenu" class="NavBarMenu none">

                <div class="menuItems">

                    <div class="closemenuDiv">
                        <img src="images/icon-close-menu.svg" alt="closeMenu" class="closeMenu" id="closeMenu">
                    </div>

                    <div class="dropDown">

                        <div class=" drop siteFeatures">

                            <div class="site Feat textHover">
                                <h6 id = "Features" class = "navhead"> Features </h6>
                                <img src="images/icon-arrow-down.svg" alt="arrow" id="arrowOne" class="featureArrow arrow">
                            </div>
                            
                            <div id = "firstList" class="lists noneHack">
                                <div class="SF one">
                                    <img src="images/icon-todo.svg" alt="todo" id="todo" class="todo">
                                    <h6 id="textOne" class="text"> Todo List </h6>
                                </div>
                                <div class="SF two">
                                    <img src="images/icon-calendar.svg" alt="calendar" id="calendar" class="calendar">
                                    <h6 id="textTwo" class="text"> Calendar </h6>
                                </div>
                                <div class="SF three">
                                    <img src="images/icon-reminders.svg" alt="reminders" id="reminders" class="reminders">
                                    <h6 id="textThree" class="text"> Reminders </h6>
                                </div>
                                <div class="SF four">
                                    <img src="images/icon-planning.svg" alt="planning" id="planning" class="planning">
                                    <h6 id="textFour" class="text"> Planning </h6>
                                </div>
                            </div>
                        </div>

                        <div class=" drop companyDiv textHover">

                            <div class="site comp">
                                <h6 id = "Company" class = "navhead"> Company </h6>
                                <img src="images/icon-arrow-down.svg" alt="arrow" id="arrowTwo" class="companyArrow arrow">
                            </div>
                            
                            <div id = "secondList" class="lists noneHack">
                                <h6 id="History" class="texts"> History </h6>
                                <h6 id="OurTeam" class="texts"> Our Team </h6>
                                <h6 id="Blog" class="texts"> Blog </h6>
                            </div>
                        </div>

                        <h6 class="careers cursor-pointer textHover"> Careers </h6>
                        <h6 class="About cursor-pointer textHover"> About </h6>
                    </div>

                    <div class="navRight">
                        <h6 class="login cursor-pointer textHover"> Login </h6>
                        <h6 class="Register cursor-pointer textHover"> Register </h6>
                    </div>
                    
                </div>


            </div>

        </div>

    </nav>

    <!-- main body -->

    <section class="main">
        <div class="picsDiv">
            <img src="images/image-hero-mobile.png" alt="hero" class="hero picsOne" id="sm-img">
            <img src="images/image-hero-desktop.png" alt="hero" class="hero picsTwo" id="ls-img">
        </div>

        <div class="desc">
            <h6 class="heading"> Make <span> remote work </span> </h6>
            <h6 class="description">
                Get your team in sync, no matter your location.
                Streamline processes, create team rituals, and watch
                productivity soar.
            </h6>
            <div class="btn">
                <h6 class="button"> Learn more </h6>
            </div>
            <div class="ads">
                <img src="images/client-databiz.svg" alt="databiz_logo" class="advert adOne" id="databiz">
                <img src="images/client-audiophile.svg" alt="audiophile_logo" class="advert adTwo" id="audiophile">
                <img src="images/client-meet.svg" alt="meet_logo" class="advert adThree" id="meet">
                <img src="images/client-maker.svg" alt="maker_logo" class="advert adFour" id="maker">
            </div>
        </div>
    </section>

    <script src="index.js"></script>
</body>
</html>