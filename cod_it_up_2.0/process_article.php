<?php 
  $db=new mysqli("localhost","root","","event") or die(mysqli_error($db));
$update=false;
    $id=0;
    $nomee='';
    $nb='';
    $detaile='';
    $temp='';
    if(isset($_POST['save'])){
        $nom=$_POST['name'];
        $nb=$_POST['nbr'];
        $detaille=$_POST['detail'];
        $temps=$_POST['temps'];
        $db->query("INSERT INTO article VALUES ('$id','$nom','$nb','$detaille','$temps')") or die($db->error);
    }

    if(isset($_POST[''])){
        
    }






?>