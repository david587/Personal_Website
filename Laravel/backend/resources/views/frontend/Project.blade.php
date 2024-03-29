<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Baráth Dávid</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style\style.css">
        <link rel="stylesheet" type="text/css" href="style\About.css">
        <link rel="stylesheet" type="text/css" href="style\Project.css">
        <script type="module" src="\script\Project.js" defer="defer"></script>
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
            rel="stylesheet">
        <script src="https://kit.fontawesome.com/5daa8eb347.js" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/5daa8eb347.js" crossorigin="anonymous"></script>

    </head>
    <body class="body">
        <section class="header">
            <nav>
                <div class="nav">
                    <div class="picture">
                        <div class="profile_div">
                            <img
                                class="profile_pic"
                                src="\profile_pic\123026057_2099008166897023_618249393967907314_n.jpg"
                                alt="">
                        </div>
                    </div>
                    <div class="tabs_place">
                        <div class="tabs">
                            <div class="home">
                                <a href="/index">
                                    <span id="span" class="spn_home">Home</span></a>
                            </div>
                            <div class="about">
                                <a href="/about">
                                    <span>About</span></a>
                            </div>
                            <div class="projects">
                                <a href="/project">
                                    <span>Projects</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="theme">
                        <div class="btn_div">
                            <button data-color="changetheme" id="themebtn" class="theme_btn"><img class="theme_img" src="\profile_pic\theme-icon-29.jpg" alt=""></button>
                            <div>
                                <button class="mobile_btn">
                                    <i id="bar" class="fa-solid fa-bars"></i>

                                </button>
                            </div>
                        </div>
                        <div class="modal">
                            <div class="margin">
                                <div style="position:block ;">
                                    <div class="M_home">
                                        <a href="/index">
                                            <p class="m_home">Home</p>
                                        </a>
                                    </div>
                                    <div id="x" class="m_iksz">
                                        <i id="theme_i" class="fa-solid fa-xmark"></i>
                                    </div>
                                </div>
                                <div class="M_about">
                                    <a href="/about">
                                        <p class="m_about">About</p>
                                    </a>
                                </div>
                                <div class="M_Projects">
                                    <a href="/project">
                                        <p class="m_projects">Projects</p>
                                    </a>
                                </div>
                            </div>
                            <div class="borderline"></div>
                            <div class="ThemeBtn">
                                <button id="modal_btn" class="m_btn">
                                    <i id="theme_i" class="fa-solid fa-swatchbook"></i>Change theme</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </section>
    <h1 class="Proj_h1">My projects
    </h1>
    <p class="Proj_p">few projects</p>
    
        <div class="grid">
            <div class="el">
                <span>Restaurant menu</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia natus autem
                    quas consequuntur fugiat sapiente.</p>
                    <p>2022 July 14</p>
                <button onclick="window.open('https://github.com/david587/Js_Projects/tree/master/menu')">View <i class="fa-brands fa-github"></i></button>
            </div>
            <div class="el"><img src="\projects_grid\Képernyőkép 2022-07-26 222621.png"></div>

            <div class="el">
                <span>Workpost management</span>
                <p>Full stack web application, made with Laravel. User Can Register and Log In. Logged users can Make new Work posts</p>
                    <p>2022 Okt 12</p>
                <button onclick="window.open('https://github.com/david587/Js_Projects/tree/master/menu')">View <i class="fa-brands fa-github"></i></button>
            </div>
            <div class="el"><img src="\project_thumbnail\tic-tac-toe-5.png"></div>


            <div class="el">
                <span>Grocery List</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia natus autem
                    quas consequuntur fugiat sapiente.</p>
                    <p>2022 July 14</p>
                <button onclick="window.open('https://github.com/david587/Js_Projects/tree/master/todo')">View <i class="fa-brands fa-github"></i></button>
            </div>
            <div class="el"><img src="\projects_grid\Képernyőkép 2022-07-26 223127.png"></div>
            <div class="el">
                <span>Simple Calculator</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia natus autem
                    quas consequuntur fugiat sapiente.</p>
                    <p>2022 July 14</p>
                <button onclick="window.open('https://github.com/david587/Js_Calculator')">View <i class="fa-brands fa-github"></i></button>
            </div>
            <div class="el">
                <img src="\project_thumbnail\Screenshot_2019-05-08 JavaScript Event(1).png"></div>
            <div class="el">
                <span>Countdown</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia natus autem
                    quas consequuntur fugiat sapiente.</p>
                    <p>2022 July 14</p>
                <button onclick="window.open('https://github.com/david587/Js_Projects/tree/master/countdown-timer')">View <i class="fa-brands fa-github"></i></button>
            </div>
            <div class="el"><img src="\projects_grid\Képernyőkép 2022-07-26 222725.png"></div>
        </div>
        <div class="line">
            &#8259; &#8259; &#8259;</div>

    <!-- Photo Grid -->
    <!--mobile and button view-->
    <div class="row">
        <div class="column">
            <p class="title">Color Changer</p>
            <img src="\projects_grid\Képernyőkép 2022-07-26 222334.png" style="width:100%">
            <p class="title">Questions</p>
            <img src="\projects_grid\Képernyőkép 2022-07-26 224527.png" style="width:100%">
            <p class="title">Restaurant menu</p>
            <img src="\projects_grid\Képernyőkép 2022-07-26 222621.png" style="width:100%">
        </div>

        <div class="column">
            <p class="title">Reviews cards</p>
            <img src="\projects_grid\Képernyőkép 2022-07-26 222924.png" style="width:100%">
            <p class="title">Grocery List</p>
            <img src="\projects_grid\Képernyőkép 2022-07-26 223127.png" style="width:100%">
            <p class="title">Countdown</p>
            <img src="\projects_grid\Képernyőkép 2022-07-26 222725.png" style="width:100%">
        </div>

        <div class="column">
            <p class="title">Slider</p>
            <img src="\projects_grid\Képernyőkép 2022-07-26 223047.png" style="width:100%">
            <p class="title">Counter</p>
            <img src="\projects_grid\Képernyőkép 2022-07-26 222814.png" style="width:100%">
            <!-- <img src="\projects_grid\Képernyőkép 2022-07-26 224842.png"
            style="width:100%"> <img src="\project_thumbnail\Screenshot_2019-05-08
            JavaScript Event(1).png" style="width:100%"> -->

        </div>

        <div class="column">
            <p class="title">Video Player</p>
            <img src="\projects_grid\Képernyőkép 2022-07-26 224842.png" style="width:100%">
            <p class="title">Simple Calculator</p>
            <img
                src="\project_thumbnail\Screenshot_2019-05-08 JavaScript Event(1).png"
                style="width:100%">
        </div>
    </div>
</div>

</div>
<div class="bottom">
    <div class="name">
        <p>© 2022 Baráth Dávid</p>
    </div>
     <div class="social_div">
            <div class="social"><img class="git" src="\social\25231.png" alt=""></div>
            <div class="social"><img class="facebook" src="\social\Facebook_f_logo_(2019).svg.png" alt=""></div>
            <div class="social"><img
                class="linkedin"
                src="\social\Linkedin-logo-on-transparent-Background-PNG-.png"
                alt=""></div>
    </div>

    
        <div class="social_large"><img class="git" src="\social\25231.png" alt=""></div>
        <div class="social_large"><img class="facebook" src="\social\Facebook_f_logo_(2019).svg.png" alt=""></div>
        <div class="social_large"><img
            class="linkedin"
            src="\social\Linkedin-logo-on-transparent-Background-PNG-.png"
            alt=""></div>
    </div>
</body>
</html>