<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mEvent</title>
    <link rel="stylesheet" href="./css/ style_user.css">
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
            <div id="event"><a href="afficher_user_event.php">Event</a> </div>
            <div id="article"> <a href="article_user.php">Article</a> </div>
            <div id="contact" onclick="showLinks('contact')">Contact</div>
        </div>
        <div class="formulaire">
            <div id="loginNav"><a href="log_out_utili.php"> log out</a></div>
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
                    <p>Talel Mejri</p>
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
    <script src="index.min.js"></script>
  <div class="popup">
            <h2>  Welcome User <?php echo $_SESSION['nom']; ?><br>
          Email :<?php echo $_SESSION['email']; ?> </h2>
            <b id="cl">X</b>
        </div>
        <canvas id="my-canvas"></canvas>
 <script>
    let close=document.getElementById('cl');
    let affiche=document.querySelector('.popup');
    let canva=document.querySelector('#my-canvas');
    close.addEventListener('click',function(){
            affiche.style.display='none';
            canva.style.display='none';
        })
   var confettiSettings = { target: 'my-canvas' };
  var confetti = new ConfettiGenerator(confettiSettings);
  confetti.render();
  </script>
    <script src="./js/globalFunctions.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>