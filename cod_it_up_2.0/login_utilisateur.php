<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mEvent</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
<nav>
        <div class="logo">
            <img src="./image/mEvents.png" alt="" srcset="">
        </div>
        <div class="links">
            <div id="about"  onclick="showLinks('about')">About</div>
            <div id="event">Event</div>
            <div id="article">Article</div>
            <div id="contact" onclick="showLinks('contact')">Contact</div>
        </div>
        <div class="formulaire">
            <div id="signNav"><a href="sign_up.php">Sign Up</a> </div>
            <div id="loginNav" ><a href="log_in.php"> Login</a></div>
        </div>
    </nav>
        <form action="log_in_check.php" method="post">
            <div class="modal-container">
                <div id="loginDialog">
                    <div class="close" ><a href="index.php">
                        <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.25 6.75L6.75 17.25"></path>
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6.75 6.75L17.25 17.25"></path>
                        </svg>  
                        </a>
                    </div>
                    <header>
                        <p>Sign In</p>
                    </header>

                    <div class="userName">
                        <label for="user">Email</label><br>
                        <input type="text" placeholder="Enter Your Email" id="user" name="email">
                    </div>
                    <div class="passwd">
                        <label for="pass">Password</label><br>
                        <div class="show">
                            <input type="password" placeholder="Enter Your Password" id="pass" name="pass">
                            <svg width="24" height="24" fill="none" viewBox="0 0 24 24" class="eye hidden">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.25 12C19.25 13 17.5 18.25 12 18.25C6.5 18.25 4.75 13 4.75 12C4.75 11 6.5 5.75 12 5.75C17.5 5.75 19.25 11 19.25 12Z"></path>
                                <circle cx="12" cy="12" r="2.25" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></circle>
                            </svg>
                            <svg width="24" height="24" fill="none" viewBox="0 0 24 24" class="eyeOff">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18.6247 10C19.0646 10.8986 19.25 11.6745 19.25 12C19.25 13 17.5 18.25 12 18.25C11.2686 18.25 10.6035 18.1572 10 17.9938M7 16.2686C5.36209 14.6693 4.75 12.5914 4.75 12C4.75 11 6.5 5.75 12 5.75C13.7947 5.75 15.1901 6.30902 16.2558 7.09698"></path>
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.25 4.75L4.75 19.25"></path>
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.409 13.591C9.53033 12.7123 9.53033 11.2877 10.409 10.409C11.2877 9.5303 12.7123 9.5303 13.591 10.409"></path>
                            </svg>                          
                        </div>
                    </div>
                    <div class="btn">
                        <button type="submit" class="send" >Send</button>
                        <button class="create"><a href="sign_up.php">New Account</a> </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="aboutUs">
        <div class="img">
            <img src="image/mEvents.png" alt="mEvents-logo" />
        </div>
        <div class="aboutUs1">
            <div class="div1">
                <div class="info">
                    <div class="welcome">
                        <h2>Welcome</h2>
                        <p>welcome users if this your first visit to mEvents site let me introduce us :</p>
                        <br>
                        <p> mEvenets is a Tunisian website that allow you to create events or participate so feel free to join our plateforme </p>
                    </div>
                    <div class="how">
                        <h2>How to use ?</h2>
                        <p>just like any other website you need to make an account as an event creator or event participant </p><br>
                        <p> click on the <b >Sign Up</b> button </p><br>
                        <p> enter your Email Username and Password</p><br>
                        <p>chose your account type | event creator/participant |</p><br>
                        <p>welcome to our platforme hope you enjoy it</p><br>
    
                    </div>
                
                </div>
            <div class="developers" >
                <div class="divinside">
                    <img src="image/houssem.jpg" alt="">
                    <p> Houssemeddine Werhani</p>
                </div>
                <div class="divinside">
                    <img src="image/talel.jpg" alt="">
                    <p>Talel Maejri</p>
                </div>
                <div class="divinside">
                    <img src="image/rayen.jpg" alt="">
                    <p> Rayen Trabelsi</p>
                </div>
                
            </div>
           
            </div>
          
        </div>
    </div>
</body>
</html>
