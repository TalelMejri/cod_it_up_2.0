<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher event</title>
   <style>
       .oppo{
           margin: auto;
       }
       body{
           margin-top:15px;
           background:whitesmoke;
       }
   </style>
</head>
<body>
<?php $db=new mysqli("localhost","root","","event") or die(mysqli_error($db));?>
 <section style="text-align:center">
      <?php $req=$db->query("select * from evenement");
              while($row=$req->fetch_array()){ 
                  $rd=$row['id'];
                ?>
    <div >
          <img  width="400px" height="400px" src="image/<?php echo $row['image'];?>">
          <h4><?php echo $row['nom']; ?></h4>
          <p>Name : </p>
          <div class="per">
            <table class="oppo">
              <tr >
                <td><span><?php echo $row['date']; ?></span></td>
                <td><span><?php echo $row['place'];?></span></td>
              </tr>
              <tr >
                <td >Date</td>
                <td>place</td>
              </tr>
              <tr>
                  <?php echo $row['description']; ?>
              </tr>
            </table>
          </div>
          <button ><a class="btn btn-info" onclick="return confirm('do you want update event !');" href="create_event.php?edit=<?php echo $rd?>">update</a> <a class="btn btn-danger" onclick="return confirm('do you want delete event!');" href="process_event.php?delete=<?php echo $rd?>">delete</a> </button>
        </div>
        <?php }?>
 </section>
</body>
</html>