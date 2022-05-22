<?php
  $db=new mysqli("localhost","root","","event") or die(mysqli_error($db));
  $r=0;
  session_start();
    require_once "process_event.php";
?>   
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>create event</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<style>
    body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}
form{
   display: grid;
   grid-row-gap: 20px;
   background-color: whitesmoke;
   padding: 70px 30px;
   box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
}
#btn{
    text-align: center;
    justify-content: space-around;
}
input{
    background:transparent;
    border: none;
    outline: none;
    border-bottom: 3px solid white;
    color: blue;
    padding-left: 5px;
    margin-left: 5px;
}
h1{
    font-size: 18px;
    animation: animate 8s infinite;
}
@keyframes animate {
    0%{color: red;}
    50%{color: blue;}
    100%{color: green;}
}
#btn input{
    box-shadow: 0 5px #999;
     transition-duration: 0.1s;
     cursor: pointer;
     font-size: 18px;
     padding: 10px 20px;
     background-color: green;
     color: black;
     font-weight: 600;
 }
 
 #btn input:active{
     background-color:#3e8e41;
     box-shadow: 0 0px #666;
     transform: translateY(4px);
 }
 p{
     background: red;
     padding: 15px 20px;
     text-align: center;
     font-weight: bold;
     display: none;
 }

</style>
<body>

<form method="post" action="inserer_event.php" enctype="multipart/form-data">
 <?php if($update==true):?>   
<h1 >Update evenent : </h1>
<?php else: ?>
        <h1>Create Event :</h1>
        <?php endif; ?>
        <input type="hidden" name="id"  value="<?php echo $id; ?>">
             <div class="image">
                <label for="img">Enter event image</label>
                <input type="file" name="uploadfile" value="<?php echo $fil; ?>"/>
             </div>
             <div class="nom">
                <label for="name">Enter event name</label>
                <input type="text" name="name" id="name" placeholder="Event Name"  value="<?php echo $nom; ?>">
            </div>
            <div class="date">
                <label for="date">Enter event date</label>
                <input type="date" name="date" id="date" value="<?php echo $date; ?>">
            </div>
            <div class="place">
                <label for="place">Enter event place</label>
                <input type="text" name="place" id="place" value="<?php echo $place; ?>">
            </div>
            <div class="description">
                <label for="descrip">Enter description</label>
                <textarea name="desciption"  value="<?php echo $desc; ?>" id="decrip" cols="30" rows="10"></textarea>
            </div>
            <?php if($update==false): ?>
            <button id="btn">Create</button>
            <?php else: ?>
            <button name="modif">Update</button>
            <?php endif; ?>
  </form>
</div>
</body>
</html>

