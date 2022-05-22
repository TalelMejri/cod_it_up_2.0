<?php 

    $update=false;
    $id=0;
    $fil='';
    $place='';
    $desc='';
    $nom='';
    $date='';
    
    $db=new mysqli("localhost","root","","event");
    if(isset($_GET['delete'])){
        $id=$_GET['delete'];
        $db->query("delete from evenement where id='$id'");
        echo "<script>alert('delte success');</script>";
        header("location:afficher_event.php");
    }

    if (isset($_GET['edit'])){
        $update=true;
        $id=$_GET['edit'];
        $req=$db->query("select * from evenement where id='$id'") or die($db->error);
        if($req->num_rows){
            $row=$req->fetch_array();
            $fil=$row['image'];
            $place=$row['place'];
            $desc=$row['description'];
            $nom=$row['nom'];
            $date=$row['date'];
        }
    }


?>