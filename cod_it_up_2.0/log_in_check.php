<?php 
    session_start();
    $db=new mysqli("localhost","root","","event") or die(mysqli_error($db));
    if(isset($_POST['email']) && isset($_POST['pass'])){
            $email=$_POST['email'];
            $pass=$_POST['pass'];
            if(empty($email) && empty($pass)){
                header("location:log_in.php?error=You must fill in all the fields !"); 
            }
            else if(empty($email)){
                header("location:log_in.php?error=Email required !");
            }
            else if(filter_var($email,FILTER_VALIDATE_EMAIL)==FALSE){
                header("location:log_in.php?error=email not  valid !");
            }
            else if(empty($pass)){
                header("location:log_in.php?error=Password required !");
            }
            else{
                $req=$db->query("select * from admin where email='$email' AND password='$pass'") or die($db->error);
                if($req->num_rows){
                    $row=$req->fetch_array();
                    if($row['email']==$email && $row['password']==$pass ){
                        if($row['role']==0){
                            $_SESSION['nom']=$row['nom'];
                            $_SESSION['id']=$row['id'];
                            $_SESSION['email']=$row['email'];
                            $_SESSION['password']=$row['password'];
                            $_SESSION['verife']=$row['verife'];
                            if($_SESSION['verife']==1){
                            header("location:profil_utilisateur.php");
                            }
                            else{
                                header("location:log_in.php?error=you request is still under consideration !");
                            }
                        }
                        else{
                            $_SESSION['nom']=$row['nom'];
                            $_SESSION['id']=$row['id'];
                            $_SESSION['email']=$row['email'];
                            $_SESSION['password']=$row['password'];
                            $_SESSION['cod_pin']=$row['code_pin'];
                            header("location:profil_admin.php");
                        }
                    
                    }   
                }else{
                    header("location:log_in.php?error=Incorrect username or password!");
                }
            }
    }else{
        header("location:log_in.php");
    }
?>