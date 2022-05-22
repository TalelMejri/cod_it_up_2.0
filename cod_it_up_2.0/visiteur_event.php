<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Afficher event</title>
    <style>
        body{
        background:#E8B7D4;
        }
    </style>
</head>
<body>
<?php $db=new mysqli("localhost","root","","event") or die(mysqli_error($db));?>

      <?php $req=$db->query("select * from evenement");
              while($row=$req->fetch_array()){ 
                  $rd=$row['id'];
                ?>
    <div style="margin-left:200px;margin-top:50px; background:#fff;width:fit-content;padding:20px;border-radius: 7px">
          <img width="200px"   src="image/<?php echo $row['image'];?>">
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
                  <?PHP echo $row['description']; ?>
              </tr>
            </table>
          </div>
        </div>
        <?php }?>
</body>
</html>