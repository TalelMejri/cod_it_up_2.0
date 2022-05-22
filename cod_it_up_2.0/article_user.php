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
      <?php $req=$db->query("select * from article");
              while($row=$req->fetch_array()){ 
                  $rd=$row['id'];
                ?>
    <div style="margin-left:400px;" class="card">
        
          <h4><?php echo $row['nom']; ?></h4>
          <p>Name : </p>
          <div class="per">
            <table>
              <tr>
                <td><span><?php echo $row['nbr_participant']; ?></span></td>
                <td><span><?php echo $row['details'];?></span></td>
              </tr>
              <tr>
                <td>Date</td>
                <td>place</td>
              </tr>
              <tr>
                  <?php echo $row['temps_restant']; ?>
              </tr>
            </table>
          </div>
        </div>
        <?php }?>
 </section>
</body>
</html>