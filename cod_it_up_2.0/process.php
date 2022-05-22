<?php
    session_start();
    $db=new mysqli("localhost","root","","event") or die(mysqli_error($db));
    $update=false;
    $id=0;
    $r=0;
    if(isset($_GET['delete'])){
        $id=$_GET['delete'];
        $db->query("delete from utilisateur where id='$id'");
        header("location:profil_admin.php");
    }
    $name='';
    $password='';
    $email='';
    $verif=0;
    if(isset($_GET['edit'])){
        $id=$_GET['edit'];
        $update=true;
        $res=$db->query("select * from admin where id='$id'");
        if($res->num_rows){
            $row=$res->fetch_array();
            $name=$row['nom'];
            $email=$row['email'];
            $password=$row['password'];
            $verif=$row['verife'];
        }
    }
    if(isset($_POST['modif'])){
        $verif=$_POST['ve'];
        $id=$_POST['id'];
        $nom=$_POST['name'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $res=$db->query("UPDATE admin SET id='$id' nom='$nom',email='$email',password='$pass',verife='$verif'") or die($db->error);    
        echo "<script>alert('update success :) ');</script>";
        include "profil_admin.php"; 
    }

    if(isset($_GET['accept'])){
      $id=$_GET['accept'];
      $r=1;
      $req=$db->query("UPDATE admin SET verife='$r' where id='$id'");
      include "profil_admin.php"; 
    }
    
    if(isset($_GET['regete'])){
        $id=$_GET['regete'];
        $db->query("delete from admin where id='$id'");
        include "profil_admin.php"; 
    }

 if(isset($_POST['save'])){
        $nomee=$_POST['userName'];
        $emaile=$_POST['email'];
        $passe=$_POST['pass'];

        if(empty($nomee) && empty($emaile) && empty($passe)){
            header("location:sign_up.php?error=You must fill in all the fields !");
        }
        else if(empty($nomee)){
            header("location:sign_up.php?error=nom required");
        }
        else if(empty($emaile)){
            header("location:sign_up.php?error=email required");
        }
        else if(empty($passe)){
            header("location:sign_up.php?error=password required");
        }
        else if(empty(strlen($passe)<6)){
            header("location:sign_up.php?error=password at least 6");
        }
        else{
            $req=$db->query("select * from admin where nom='$nomee' AND email='$emaile' AND password='$passe' AND role=0");
            if($req->num_rows){
                header("location:sign_up.php?error=alredy exist !");
            }
            else{
                $db->query("INSERT INTO `admin` VALUES ('$id','$nomee','$emaile','$passe','0','0','0')") ;
                //alert("Your demande send to admin");
                include "index.php";
            }
      }   
    }
?>