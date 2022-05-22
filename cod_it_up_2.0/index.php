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
            <div id="about" onclick="showLinks('about')">About</div>
            <div id="event"><a style="text-decoration:none;color:#000;" href="visiteur_event.php">Event</a></div>
            <div id="article"><a style="text-decoration:none;color:#000;" href="visiteur_article.php">Article</a> </div>
            <div id="contact" onclick="showLinks('contact')">Contact</div>
        </div>
        <div class="formulaire">
            <div id="signNav"><a style="text-decoration:none;color:#000;" href="sign_up.php">Sign Up</a> </div>
            <div id="loginNav" ><a style="text-decoration:none;color:#000;" href="log_in.php"> Login</a></div>
        </div>
    </nav>

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
    <div class="contactUs hidden">
      <div class="info">
        <div class="mail">
          <label for="emailComment">Enter your email</label><br />
          <input
            type="text"
            id="emailComment"
            placeholder="example@gmail.com"
          />
        </div>
        <div class="userName">
          <label for="userComment">Enter your username</label><br />
          <input type="text" id="userComment" placeholder="UserName" />
        </div>
      </div>
      <div class="textComment">
        <textarea
          name="comment"
          cols="30"
          rows="10"
          placeholder="Write Your Comment"
        ></textarea>
        <button>Send</button>
      </div>
    </div>
    <script src="./js/globalFunctions.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>