

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list of cars</title>
    <link rel="icon" href="images/logo1.png">


    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="links/store.css">
    <link rel="stylesheet" href="links/bootstrap.css">
    <link rel="stylesheet" href="links/all.css">
    <script src="links/bootstrap.bundle.min.js"></script>
</head>
<body>

    
    <?php
    
        include"header.php";
        include"DBMS/public/connaction.php";
    ?>



<?php

if(isset($_POST['btn'])){


    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $ms_name=$_POST['ms_name'];
    $pro=$_POST['province'];
    $dest=$_POST['destric'];
    $email=$_POST['email'];
    $add=$_POST['add'];
    $phone2=$_POST['phone2'];





    $qri="INSERT INTO `add_motar_store`( `name`, `phone`, `store_name`, `province`, `destrict`, `email`, `addrass`,
     `phon_next`) VALUES ('{$name}','{$phone}','{$ms_name}',
    '{$pro}','{$dest}','{$email}','{$add}','$phone2')";

    if( $res=mysqli_query($conn,$qri)){
        echo "";
    }
    else{
        echo "fail";
    }
}
?>



            <form class="conainer pt-5" method="POST" action="<?php $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
                <span class="title-me "> غوښتل شوی معلومات په صحیح ډول ولیکی</span>
                <div class="inputs">

                    
                    
                <div class="right-input">
                    <br>
                    <label for="">ستاسو نوم </label><br>
                    <input placeholder=" خپل نوم مو ولیکی "  name="name"type="text">
                    <br><br>
                    <label for=""> د مبایل اصلی شمیره</label><br>
                    <input   placeholder=" خپل مبایل شماره مو ولیکی"name="phone" type="text">
                    <br><br>
                    <label for=""> ولایت</label><br>
                    <input  placeholder=" خپل ولایت نوم مو ولیکی" name=" province"  type="text">
                    <br><br>
                    <label for=""> ایمیل</label><br>
                    <input  placeholder=" خپل بريښنالیک مو ولیکی"  name="email"  type="text">
                    <br>
                    <br>
                    <button class="btn btn-info" name="btn"> ثبت کول</button>
                    <br><br>
                </div>

                <div class="left-input">
                    <br>
                    <label for="">د پلورنی موټر نوم</label><br>
                    <input  placeholder=" د پلورنی موټر نوم ولیکی" name="ms_name"  type="text">
                    <br><br>
                    <label for="">دوهم مبایل نمبر</label><br>
                    <input placeholder=" خپله دوهمه شماره مو ولیکی" name="phone2"  type="text">
                    <br><br>
                    <label for=""> ولسوالی</label><br>
                    <input  placeholder=" خپله ولایت ولسوالی مو ولیکی" name="destric" type="text">
                    <br><br>
                    <label for="">ادرس</label><br>
                    <input  placeholder=" خپله پته مو ولیکی" name="add" type="text">
                  
                    <br><br>


                </div>


            </div>


</form>




</body>
</html>