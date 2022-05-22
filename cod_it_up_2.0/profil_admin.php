<?php
  $db=new mysqli("localhost","root","","event") or die(mysqli_error($db));
  $r=0;
  session_start();
?>   
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashbord</title>
  <link rel="stylesheet" href="./css/style1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
  <div class="container">
    <nav>
      <ul>
        <li><a href="#" class="logo">
          <img src="./pic/logo.jpg">
          <span class="nav-item"><?=$_SESSION['nom'];?></span>
        </a></li>
        <li><a href="profil_admin.php">
          <i class="fas fa-menorah"></i>
          <span class="nav-item">Dashboard</span>
        </a></li>
        <li><a href="create_event.php">
          <i class="fas fa-comment"></i>
          <span class="nav-item">create event</span>
        </a></li>
        <li><a href="afficher_event.php">
          <i class="fas fa-database"></i>
          <span class="nav-item">afficher event</span>
        </a></li>
        <li><a href="create_article.php">
          <i class="fas fa-chart-bar"></i>
          <span class="nav-item">creater article</span>
        </a></li>
        <li><a href="afficher article.php">
          <i class="fas fa-cog"></i>
          <span class="nav-item">afficher article</span>
        </a></li>
        <li><a href="log_out_admin.php" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span  class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>
    <section class="main">
      <div class="main-top">
      <i class="fas fa-user-cog"></i>
        <h1>Demande</h1>
      </div>
      <?php $req=$db->query("select * from admin where role='0'");
            while($row=$req->fetch_array()){
              $r=$row['role'];
            } ?>
            <?php if($r==0){?>
      <div class="users">
      <?php $req=$db->query("select * from admin where role='0' AND verife='0'");
                while($row=$req->fetch_array()){
                  $rd=$row['id']; ?>
        <div class="card">
          <h4><?php echo $row['nom']; ?></h4>
          <p>Name </p>
          <div class="per">
            <table>
              <tr>
                <td><span><?php echo $row['email']; ?></span></td>
                <td><span><?php echo $row['password'];?></span></td>
              </tr>
              <tr>
                <td>email</td>
                <td>password</td>
              </tr>
            </table>
          </div>
          <button><a onclick="return confirm('do you want accepter !');" href="process.php?accept=<?php echo $rd?>">accept</a> <a  onclick="return confirm('do you want regete !');" href="process.php?regete=<?php echo $rd?>">regete</a> </button>
        </div>
        <?php } ?> </div>
<?php }?>
      <section class="attendance">
        <div class="attendance-list">
          <h1>Clients :</h1>
          <table  class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>confirmed</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $res=$db->query("select * from admin where verife!=0");
              while($row=$res->fetch_array()){
                $r=$row['id'];?>
                  <tr>
                      <td><?php echo $row['id']; ?></td>
                      <td><?php echo $row['nom']; ?></td>
                      <td><?php echo $row['email']; ?></td>
                      <td><?php echo $row['password']; ?></td>
                      <td><?php echo $row['verife'] ; ?></td>
                      <td><a onclick=" return confirm('do you want update <?php echo $row['nom'] ?>');" href="sign_up.php?edit=<?php echo $r; ?>"  >Edit</a><a onclick=" return confirm('do you want delete <?php echo $row['nom'] ?>');" href="process.php?delete=<?php echo $r; ?>">Delete</a></td>
                  </tr>
            <?php }?>
            </tbody>
          </table>
        </div>
      </section>
    </section>
  </div>
</body>
</div>
  <script src="index.min.js"></script>
  <div class="popup">
            <h2>  Welcome Admin <?php echo $_SESSION['nom']; ?><br>
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
</html>