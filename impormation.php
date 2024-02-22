


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

        <link rel="stylesheet" href="links/impormation.css">
    <link rel="stylesheet" href="links/bootstrap.css">
    <link rel="stylesheet" href="links/all.css">
    <script src="links/bootstrap.bundle.min.js"></script>
  
    




</head>
<body>

<?php

    include"header.php";
    include"DBMS/public/connaction.php";
?>


        <div class="cantainer con-impo">


        
        <?php
                
                $qri="SELECT * FROM extra_info";
                $res=mysqli_query($conn,$qri);
                while($rew=mysqli_fetch_assoc($res)){

               
                
                
                ?>




            <div class="row row-impo">

                    
                    
                <div class="col-sm-5 col-one pb-3 mb-5">



                <h3 class="pt-3 pb-2 text-center"> <?php  echo $rew['title']  ?></h3>
                        <span>  <?php  echo $rew['descraption']  ?></span>
                        
                

                </div>
                <div class="col-sm-7">
                <img style="width: 100%; height: 249px;" src="DBMS/public/<?php  echo $rew['photo']  ?>" alt="" srcset="">

                </div>

               


            </div>

            <?php
                }
                ?>







            




        </div>






    
</body>
</html>