
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

        <link rel="stylesheet" href="links/list.css">
    <link rel="stylesheet" href="links/bootstrap.css">
    <link rel="stylesheet" href="links/all.css">
    <script src="links/bootstrap.bundle.min.js"></script>
</head>
<body>

    
    <?php
    
        include"header.php";
        include"DBMS/public/connaction.php";
    
    ?>
    <div class="cantainer can">

            <div class="main-div">

              

            <div class="right-info  ">


<div class="col-sm-10 right-cols">



</div>

<div class="col-sm-10 right-cols">

  



</div>


</div>






                <div class="left">





            <?php
            $qri="SELECT * FROM addmotar";
            $result=mysqli_query($conn,$qri);
           while($rew=mysqli_fetch_assoc($result)){

           
            
            ?>
                        
                    <div class="row fist-row">

                        <div class="col-sm-5 card-first">
                           
                            <img class="card-imgs" src="DBMS/public/<?php echo $rew['photo'] ?>" alt="">
                        </div>
                        <div class="col-sm-7 card-secand">
                            
                            <span class="spans">
            
                                <span>   ماډل :   <?php echo $rew['company'] ?> <?php echo $rew['madle'] ?></span>
                                <span><i class="fa-regular fa-clock icon"></i> 
                            
                            
                            <?php
                            date_default_timezone_set("asia/kabul");
                            
                            $a=1707478161;
                            $b=time();
                            $c=$b-$a;
                            if($c<60){
                                echo $c."ثانیه مخکی";
                            }elseif ($c<3600){
                                echo  round($c/60,0)."دقیقی مخکی";

                            } elseif($c<3600*24){
                                echo "".round($c/60/24,0)."ساعت مخکی";
                            }elseif($c<3600*24*24){
                                echo "".round($c/60/24/30,0)."ورځي مخکی";
                            }
                            elseif($c<3600*24*24*30){
                                echo "".round($c/60/24/30/12,0)."میاشتی مخکی";
                            }
                            
                            ?>
                            
                            
                            
                            
                            </span>
                            </span>
                            <br><br>
                            <span>  کیلومتر : <?php echo $rew['km'] ?></span><br>
                            
                            <br>
                            <span>ګیرنوعه : <?php echo $rew['type_gir'] ?></span>
                            <br><br>
                            <span class="spans">
                                <span>  موقعیت : <i class="fa-solid fa-location-dot icon"></i><?php echo $rew['province'] ?>/<?php echo $rew['destrict'] ?> </span>
                                <span><i class="fa-regular fa-thumbs-up icon"></i>
                            
                                <?php
                                $f=fopen("samim.txt","r");
                                $v=fgets($f);
                                if($v==0){
                                    echo "your page has not vasible";
                                }else{
                                    echo "total visible.$v";
                                }
                                fclose($f);
                                $d=fopen("samim.txt","w");
                                $v++;
                                
                                fwrite($d,$v);
                                fclose($d);
                                ?>
                            
                            </span>
                                <span> قیمت : <?php echo $rew['cost'] ?></span>
                            </span>
                    </div>
                        </div>




                    <?php
                    
           }
                    ?>






    
    
    


               
            </div>

                
        </div>




    
</body>
</html>