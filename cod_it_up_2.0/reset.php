<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>reset password</title>
</head>
<body>
<div class="reset d-flex justify-content-center align-items-center">
<form  action="reset_password.php" class="mt-5 p-5 shadow rounded"  method="post">
<h1 class="text-center mb-5">Verification </h1>
<?php
    if(isset($_GET['errore'])){
   ?>
   <div class="alert alert-danger">
     <?php echo $_GET['errore'];?>
   </div>
    <?php }
    ?>
        <label for="exampleInputPassword1" class="form-label">enter your Code PIN :</label>
         <input   type="text" name="pin">
         <button class="btn btn-info">Confirm</button>
</form>

</div>
</body>
</html>