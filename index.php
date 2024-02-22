







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MotarStar</title>
    <link rel="icon" href="images/logo1.png">


    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="links/custom.css">
    <link rel="stylesheet" href="links/bootstrap.css">
    <link rel="stylesheet" href="links/all.css">
    <script src="links/bootstrap.bundle.min.js"></script>
  
    
</head>
<body >


<?php
  include"header.php";
include"DBMS/public/connaction.php";
?>



    <div class="logo-some">

        <img  class="img-of-cover" src="png/newlogo.png" alt="">

    </div>
  
        <div class="read">

            <span class="read-title"> ولی باید موټر سټار دپلورنی او اخیستنی لپاره غوره کړی ?</span><br><br>
            <span  class="text-muted"><i class=" chack fa-solid fa-circle-check"></i> موټرسټار ویب سایت ساده امن او تیز </span><br>
            <span  class="text-muted"> <i class=" chack fa-solid fa-circle-check"></i> مبایل ته عیارشوی بغیر له کوم اپلیکشین نه</span><br>
            <span  class="text-muted"> <i class=" chack fa-solid fa-circle-check"></i> ایمیل اکونډ ته ضرورت نه لری</span><br>
            <span  class="text-muted"> <i class=" chack fa-solid fa-circle-check"></i> ځانګړی صفحه دموټر پلورنی لپاره </span><br>
            <span  class="text-muted"> <i class=" chack fa-solid fa-circle-check"></i> هر وخت هر ځای 24  ساعته په لاس رسی کی</span><br>
        </div>


      
    <div class="cantainer-fluid cover">




        

<!-- 
        <img  class="img-of-cover" src="images/bac.jpg" alt="">
      -->

        <div class="input">
            <i class="  search fa-solid fa-magnifying-glass"></i>
            <input class="fuc" placeholder=" خپل د خوښی موټر مو ولټوی  " type="text" ><br>

            

           
            <div class="type">
            <?php
                    $qri="SELECT * FROM addmotar ";
                    $reslut=mysqli_query($conn,$qri);

                while($rows=mysqli_fetch_assoc($reslut)){

                
                    
                    ?>
            <span class="type-cercal text-muted" ><?php echo $rows['name'] ?></span>
            <?php
                }
        ?>
             

        </div>
       
        
        </div>
        
        
          

</div>

<!-- 
    the end of cover -->

    <div class="cantainers">





        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="png/1.png" class="d-inline-block " alt="...">
              </div>
              <div class="carousel-item">
                <img src="png/2.png" class="d-inline-block " alt="...">
              </div>
              <div class="carousel-item">
                <img src="png/3.png" class="d-inline-block" alt="...">
              </div>

              <div class="carousel-item">
                <img src="png/4.png" class="d-inline-block" alt="...">
              </div>

              <div class="carousel-item">
                <img src="png/5.png" class="d-inline-block" alt="...">
              </div>

              <div class="carousel-item">
                <img src="png/6.png" class="d-inline-block" alt="...">
              </div>

              <div class="carousel-item">
                <img src="png/7.png" class="d-inline-block" alt="...">
              </div>

              <div class="carousel-item">
                <img src="png/jan8.png" class="d-inline-block" alt="...">
              </div>
             
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>



        </div>

<!-- 
            the auto slider is end -->



                    <div class="container cards">

                        <div class="row ">
                            <div class="col-sm-4  card-onli ">
                               
                                <span class=" list text-sm-right"> <a style="text-decoration: none; color:rgb(0, 0, 0);" href=""><i class=" ico fa-solid fa-list-check"></i>دټولو موټرو لیست </a></span>
                            
                            </div>
                        </div>
                    </div>



                    <!-- the end of cards -->








    <div class="cantainer main-row">

                



                   
        <div class="row">

            <div class="col-sm-11  title-brand">
                <span class="brand"><a class="sign" href="">دنړی محبوب ترین برنډونه</a></span>
                <span class=" sign"><a class="sign" href="list.php"> دټولو کتنه <span class="less">&rsaquo;</span></a></span>
            </div>


        </div>
   

                    


        <div class="row  p-4 ">

          <div class="col-sm-2  more-cards ">
         
            <img class="more-cards" src="images/1010.jpg" alt="">
          
    
        </div>

        <div class="col-sm-2  more-cards ">
          
            <img class="more-cards brand-color " src="images/44.jpg" alt="">
    
        </div>

        <div class="col-sm-2   more-cards ">
          
            <img class="more-cards" src="images/99.jpg" alt="">
    
        </div>

    
        <div class="col-sm-2 more-cards ">
            
            <img class="more-cards" src="images/11.jpg" alt="">
    
        </div>


        <div class="col-sm-2   more-cards ">
            
            <img class="more-cards" src="images/55.jpg" alt="">
    
        </div>

        <div class="col-sm-2  more-cards ">
           
            <img class="more-cards" src="images/88.jpg" alt="">
    
        </div>


            </div>

        </div>
    </div>
   
    




<!-- 

            the end of  of brands  -->






        <div class="cantainer main" id="new">




            


                   
        <div class="row">

            <div class="col-sm-12 ti-brand">
                <span class="brand"><a class="sign" href=""> نوی ثبت شوی موټر</a></span>
                <span class=" sign"><a class="sign" href="list.php"> دټولو کتنه <span class=" less">&rsaquo;</span></a></span>
            </div>


        </div>
   


                <div class="row">


                <?php

                
                    $qri="SELECT * FROM `addmotar`LIMIT 3";
                    $reslut=mysqli_query($conn,$qri);
                    
                 while($rows=mysqli_fetch_assoc($reslut)){
                
                
                    
                    ?>

                    <div class="col-sm-4">
                        

                        <div class="bacground-color">
                           
                            <img class="lastcards" src="DBMS/public/<?php echo $rows['photo']  ?>" alt="">
                            <div class="trun">
                         <span><?php echo $rows['madle']  ?></span><br>
                        <span> د ګیر نوعه : <?php echo $rows['type_gir']  ?></span> <br>

                        <span>  موټر اوسنی کیلومتر:  <?php echo $rows['km']  ?></span>
                        <br>
                           <br>
                    </span>
                    <span class="card-footer">
                        <span>  <i class="fa-regular fa-clock icon"></i>8 میاشتی مخکی </span>
                        <span><i class="fa-regular fa-thumbs-up icon"></i> لیدونکی :</span>
                        <span> <i class="fa-solid fa-location-dot icon"></i> بغلان /پلخمری : <?php echo $rows['province']  ?> <?php echo $rows['destrict']  ?></span>
                   </span>
                </div>
                </div>


                    </div>

<?php  } ?>
                  

                       

                </div>



        </div>



<!-- 
        the end of corunt motars -->







<script type="text/javascript">

function sends(){
if(window.XMLHttpRequest){
    var xml= new XMLHttpRequest();

}else{
    var xml=new ActiveXObject("Microsoft.XMLHTTP");
    
}
var cammand=document.getElementById('textaria').value;
var name=document.getElementById('name').value;
var email=document.getElementById('email').value;

xml.onreadystatechange=function() {

    if(xml.status==200 && xml.readyState==4){
            xml.responseText;
       
    }
}




xml.open( "GET","pr.php?command=" + cammand +"&name="+ name +"&email="+ email, true);
xml.send();


}


</script>

            <form class="cantainer commend" id="command" >


                <div class="row">

                <div class="col-sm-8  commend-col">
                    
                    <label for="">نظرمو شریک کړی</label>
                    <textarea name=" comm" id=" textaria" class="textariass" cols="128" rows="7"></textarea>
                    <label for=""> نوم</label>
                        <input type="text" class="form-control"  id="name"name="name">
                        <label for=""> بريښنالیک</label>
                        <input type="text" class="form-control" id="email" name="email"><br>

                        <button class=" " onclick="sends();" name="btn"> شریکول <i class="fa-solid fa-arrow-left"></i></button>

                       

                </div>


                <div class="col-sm-3">
                    <div class="tit">
                        <span>  خپل نظرونه انتقادونه او وراندیزونه مو شریک کړی </span><br>
                            <span> ټول حقوق مو خوندی دی</span><br>
                            <span>منندوی یو چی موټر سټار مو انتخاب کړی</span>
                       
                        </div>
                        <div class="img">
                            <img  style="width: 30%; height: 300px;" src="images/commend.png" alt="">
                    <img  style="width: 60%; height: 300px;"src="png/man-png-30099.png" alt="">
                </div>
                </div>



                </div>






</form>








        <!-- the command is end -->




    <section id="addrass">
        <div class="cantainer-fluid  addrass ">
            
        <?php
                $qri="SELECT * FROM about limit 1";
                $res=mysqli_query($conn,$qri);
                while($rew=mysqli_fetch_assoc($res)){
                
                ?>


            <div class="row">

            <div class="col-sm-4">

                <img class="" style="  width:80%;height:140px;" src="DBMS/public/<?php echo $rew['logo']  ?>" alt=""><br>
               
            </div>
                <div class="col-sm-3">

                    <span> لاندی پتوباندی مونږ سره اریکه ونیسی</span>  <br>

                    <i class="fa-brands fa-twitter"></i>
                    <?php echo $rew['email']  ?>
                   
                    <br>
                    <i class="fa-solid fa-phone"></i>
                    <?php echo $rew['whatsap']  ?>
                    <br>
                   <i class="fa-brands fa-facebook"></i>
                   <?php echo $rew['facebook']  ?>
                    <br>
                    <i class="fa-solid fa-location-dot"></i>

                    <span> پلخمری بغلان ولایت اففانستان</span>
                    <br>
                    <i class="fa-brands fa-tiktok"></i>
                    <span> barsharat-abas</span>
                    <br>
                    <i class="fa-brands fa-google"></i>
                    <span> <?php echo $rew['web_name']  ?></span>
                   
                    
                    

                </div>
                <div class="col-sm-5">

                    <span> زمونږ نورو پلورنځی یو ته مراجعه وکړی</span>
                 <br>
    
<br><br>
<i class="fa-solid fa-earth-americas"></i>
                    <span> بغلان کی زمونږ بل موټر پلورنڅی </span>

                    <i class="fa-solid fa-earth-americas"></i>

                    <span> بغلان کی زمونږ بل موټر پلورنڅی </span><br>

                    <i class="fa-solid fa-earth-americas"></i>

                    <span> بغلان کی زمونږ بل موټر پلورنڅی </span>

                    <i class="fa-solid fa-earth-americas"></i>

                    <span> بغلان کی زمونږ بل موټر پلورنڅی </span><br>
                    <br>
                    <br>


                </div>


            </div>


<?php
                }
?>

        </div>

    </section>

</body>
</html>