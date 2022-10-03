<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Baráth Dávid</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" type="text/css" href="style\style.css">

        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"/>

        <script type="module" src="\script\Home.js"></script>
        <script type="module" src="\script\Modal.js"></script>
    </head>
    
    <body class="body">
        <section class="header">
            <nav>
                <div class="nav">
                    <div class="picture">
                        <div class="profile_div">
                            <img
                                class="profile_pic"
                                src="profile_pic\123026057_2099008166897023_618249393967907314_n.jpg"
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
                                
                                    <div class="M_home">
                                        <a href="/index">
                                            <p class="m_home">Home</p>
                                        </a>
                                    </div>
                                    <div id="x" class="m_iksz">
                                        <i id="theme_i" class="fa-solid fa-xmark"></i>
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
    <section class="mid">
        <div class="flex_mid">
            <div class="me">
                <h1>Im
                    <span class="David">&#68;a&nu;id</span>. Im a student, Lorem ipsum dolor sit amet consectetur , am.
                </h1>
            </div>
            <div class="profile"><img
                class="profile_mid"
                src="\profile_pic\123026057_2099008166897023_618249393967907314_n.jpg"
                alt=""></div>
        </div>
        <div class="btn">
            <div class="btn_me">
                <button onclick="location.href='About.html'" class="button_me">More about me</button>
            </div>
            <div class="btn_git">
                <button onclick="window.open('https://github.com/david587')" class="button_git">Check my Git</button>
            </div>
        </div>
        <div class="line">
            &#8259; &#8259; &#8259;</div>
    </section>
    <section class="project">
        <h2>I love to improve my skills through projects.</h2>
        <p>Check out a few of my most recent projects.</p>
    </div>
    <br>
    <div class="grid_projects">
        <div class="grid_top">
            <img
                onclick="location.href='/project'"
                class="grid_img"
                src="\project_thumbnail\Screenshot_2019-05-08 JavaScript Event(1).png"
                alt="">
            <p class="grid_p">Basic Calculator</p>
            <span class="grid_span">Jun 12,2022</span>
        </div>
        <div class="grid_mid">
            <img
                onclick="location.href='/project'"
                class="grid_img"
                src="\project_thumbnail\tic-tac-toe-5.png"
                alt="">
            <p class="grid_p">Tic Tac Toe</p>
            <span class="grid_span">Jun 14,2022</span>
        </div>
        <div class="grid_bot">
            <img
                class="grid_img"
                onclick="location.href='/project'"
                src="\project_thumbnail\todo.png"
                alt="">
            <p class="grid_p">To do App</p>
            <span class="grid_span">May 03,2022</span>
        </div>
    </div>
    
    <div class="Msg_div">
    <form method="POST" action="{{route('contact.send')}}" enctype="multipart/form-data">
        @csrf
    <div class="Color"></div>
        <p class="Contact"><span>Contact M</span>e</p>
        <p>Fell free to send me a private message :)</p>
        <div class="input_div">
        <input  id="name" name="name" type="text" placeholder="Name">
        <input id="email"name="email" type="text" placeholder="Email">
        <input id="message" name="message" type="text" placeholder="Message">
        </div>
        <button id="form_button" type="submit">SEND</button>
    </div>
    </form>
    <div class="line">
        &#8259; &#8259; &#8259;</div>
    
    <!-- <fieldset>
        <p class="grid_p">Send me a private message</p>
        <div class="input-container">
        <input class="text-input" type="text" placeholder="Enter your Firstname" required id="firstname" autocomplete="off">
            
        <input class="text-input" type="text" placeholder="Enter your Lastname"  required id="lastname" autocomplete="off">
       
        </div>
        </span>
        <div class="line2"></div>
        <form>
            <input id="input" class="spam" type="text" placeholder="Hi! :)">
            <button id="send" class="send_btn">Send</button>
        </form>
        <div class="line3"></div>
    </fieldset> -->
    <div class="line2"></div>
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
    </div>

</section>
</body>
</html>