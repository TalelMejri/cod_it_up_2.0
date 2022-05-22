<?php 
session_start();
require_once "process.php";
?>
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
            <div id="signNav">Sign Up</div>
            <div id="loginNav">Login</div>
        </div>
    </nav>
        <form action="process.php" method="post">
            <div class="modal-container">
                <div id="loginDialog">
                    <div class="close"><a href="index.php">
                    <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="1.5"
                    d="M17.25 6.75L6.75 17.25"
                  ></path>
                  <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="1.5"
                    d="M6.75 6.75L17.25 17.25"
                  ></path>
                        </svg>
                        </a>
                    </div>
       
                    <header>
                        <?php if($update==true): ?>
                            <p>Update</p>
                        <?php else:?>
                            <p>Sign Up</p>
                        <?php endif;?>
                    </header>
                    <?php
         if(isset($_GET['error'])){
             ?>
            <span style="color:#fff;background:red;padding:10px 15px;font-size:18px;text-align:center;width:100%">
            <?= $_GET['error'];?>
             <?php }?>
         </span>
              <div class="infor">
                  <input type="hidden" value='<?php echo $id ?>'>
              <div class="userName">
                    <label for="userSign">Username</label><br />
                    <input
                      type="text"
                      placeholder="Enter Your Username"
                      id="userSign"
                      name="userName" value='<?php echo  $name ?>'
                    />
                  </div>
                <div class="email">
                    <label for="email">Email</label><br />
                    <input
                      type="text"
                      placeholder="Enter Your email"
                      id="email"
                      name="email" value='<?php echo $email ?>'
                    />
                  </div>
              </div>
              <div class="passwd">
                <label for="passSign">Password</label><br />
                <input
                  type="password"
                  placeholder="Enter Your Password"
                  id="passSign"
                  name="pass" value='<?php echo $password ?>'
                />
              </div>
              <div class="btn">
                <button name="save" type="submit" class="send">Create Account</button>
                <a style="background:blue;text-decoration:none;padding:30px 30px;color:#fff;font-size:20px;" href="log_in.php">Login</a>
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
