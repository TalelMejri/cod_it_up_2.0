<?php 
    $id=0;
    $db=new mysqli("localhost","root","","event") or die(mysqli_error($db));   
    error_reporting(0);
      $msg = "";  
        $filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];   
        $folder = "image/".$filename;     
            $sql = "INSERT INTO evenement (image) VALUES ('$filename')";
            mysqli_query($db, $sql);
            if (move_uploaded_file($tempname, $folder))  {
                $msg = "Image uploaded successfully";
            }else{
                $msg = "Failed to upload image";
          }
        $nom=$_POST['name'];
        $desc=$_POST['desciption'];
        $place=$_POST['place'];
        $date=$_POST['date'];
        if(empty($nom)){
            header("location:create_event.php?erroe=nom required !");
        }
        else 
            if(empty($place)){
            header("location:create_event.php?erroe=place required !");
        }
        else 
        if(empty($desc)){
            header("location:create_event.php?erroe=description required !");
        }
        else
            if(empty($date)){
                header("location:create_event.php?erroe=date required !");
            }
            else {
                    $db->query("INSERT INTO evenement VALUES ('$id','$nom','$date','$filename','$place','$desc')");
                    echo "<script>alert('add event ');</script>";
            }
            if(isset($_POST['modif'])){
                $id=$_POST['id'];
                $nom=$_POST['name'];
                $desc=$_POST['desciption'];
                $place=$_POST['place'];
                $date=$_POST['date'];
                error_reporting(0);
      $msg = "";
        $filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];   
        $folder = "image/".$filename;     
            $sql = "INSERT INTO evenement (image) VALUES ('$filename')";
            mysqli_query($db, $sql);
            if (move_uploaded_file($tempname, $folder))  {
                $msg = "Image uploaded successfully";
            }else{
                $msg = "Failed to upload image";
          }
          $res=$db->query("UPDATE `evenement` SET `id`='$id',`nom`='$nom',`date`='$date',`image`='$image',`place`='  $place',`description`='$desc'");
            }
?>