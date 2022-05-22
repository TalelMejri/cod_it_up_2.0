<?php session_start();
$id=0; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher event</title>
    <style>
        button:active{
            background-color:green;
        }
        </style>
</head>
<body>
<?php $db=new mysqli("localhost","root","","event") or die(mysqli_error($db));?>
 <section>
      <?php $req=$db->query("select * from evenement");
              while($row=$req->fetch_array()){ 
                  $rd=$row['id'];
                ?>
    <div style="margin-left:400px;" class="card">
          <img src="image/<?php echo $row['image'];?>">
          <h4><?php echo $row['nom']; ?></h4>
          <p>Name : </p>
          <div class="per">
            <table>
              <tr>
                <td><span><?php echo $row['date']; ?></span></td>
                <td><span><?php echo $row['place'];?></span></td>
              </tr>
              <tr>
                <td>Date</td>
                <td>place</td>
              </tr>
              <tr>
                  <?php echo $row['description']; ?>
              </tr>
            </table>
          </div>
          <form action="afficher_user_event.php" method="post">
          <button name="partc" style="background:gray;color:#fff;margin-left:60px;cursor:pointer;padding:10px 30px;">Participer</button>
          </form>
             <?php if(isset($_POST['partc'])){ 
                    $id_utilisateur= $_SESSION['id'];
                    $db->query("INSERT INTO participant VALUES ($id,$id_utilisateur,$rd)") or die($db->error);
                    echo "<script>alert('votre particpant success');</script>";            
      }?>
        </div>
        <?php }?>
 </section>
</body>
</html>