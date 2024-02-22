
<?php
session_start();


if(isset($_SESSION['password'])){
    echo header("location:http://localhost/Motarstar/DBMS/index.php");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>impomation</title>

    <link rel="icon" href="images/logo1.png">


    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="links/login.css">
    <link rel="stylesheet" href="links/bootstrap.css">
    <link rel="stylesheet" href="links/all.css">
    <script src="links/bootstrap.bundle.min.js"></script>
  
    




</head>
<body>

<?php

    include"DBMS/public/connaction.php";
?>


        <section id="log"> 
               <div class="container-fluid form-div">
                <img  style="width: 100%; height: 750px;"src="images/44.jpg" alt="">

        <?php
   if(isset($_POST['btn'])){
  
       
       $email=$_POST['email'];
   
   $password=$_POST['password'];
   
    $qri="SELECT * FROM `users` where email='{$email}' and passwords='{$password}'";
   
    $result=mysqli_query($conn,$qri);
   
   $cont=mysqli_num_rows($result);
   $rew=mysqli_fetch_assoc($result);
   
   
   if($cont==1){
    
        if($rew['st']==0){
               header("location:http://localhost/Motarstar/dBMS/index.php");
            $_SESSION['id']=$rew['id'];
            $_SESSION['name']=$rew['name'];
            $_SESSION['email']=$rew['email'];
            $_SESSION['password']=$rew['passwords'];
            $_SESSION['pic']=$rew['photo'];
   
        }else{
           echo "desible";
   
        }
   
    }else{
       $msg="<div class='alert alert-success text-success my-2'><h4>Sorry it's wrong try agine !!</h4></div>";
    }
   
   }
   ?>
   
                        
        <form class="row form-row" action="<?php $_SERVER['PHP_SELF']  ?>" method="POST" enctype="multipart/form-data">
               

            <div class="col-4 login">

                       

                <span class="img-span">
                    <img class="img" src="images/logo1.png" alt="">
                </span><br><br>
                <label for="" class="color">بريښنالیک</label>
                <input type="text" class="fuc" name="email" autofocus  placeholder="خپل بريښنالیک مو ولیکی"><br><br>

                <label for="" class="color">پټ نوم</label>
                <input type="password"  name="password" class="fuc"  placeholder="خپل <>پټ نوم مو ولیکی">
                <br>
                <br>
                
                <button name="btn" class=" login-btn btn btn-success"> <i class="fa-solid fa-arrow-left"></i></button>
                <br>
                <br>
    <?php
    if(isset($msg)){
        echo $msg;
    }
    ?>

            </div>





                    </form>
            


</div>
</section>

</body>
</html>



