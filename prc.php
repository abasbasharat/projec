






<script type="text/javascript">


    var xmlhttp; 
    if(window.XMLHttpRequest){
        xmlhttp=new XMLHttpRequest();
    }else{
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }

    function loginsend(){

        var name=document.getElementById('email').value;
        var password=document.getElementById('password').value;



        xmlhttp.onreadystatechange = function(){

            if(xmlhttp.status = 200 && xmlhttp.readyState==4){
            if(xmlhttp.resposeText=="cancel"){
                    window.location.assign("logform.php");
            }else{
        document.getElementById('show').innerTHML="you con not !!!";

            }
        }

        };
       

        xmlhttp.open("GET","pr.php?=email="+name+"&password="+password,true);
        // xmlhttp.setRequestHeader("Content-type","appliction/x-www-form-urlncoded");
        xmlhttp.send( );
        
    };





</script>


<p id="show"></p>
<input type="text" id="email" placeholder=" Inter your email"><br><br>
<input type="text" id="password" placeholder="Enter your passowrd"><br><br>
<input type="button" onclick="loginsend();" id="btn" value="button"><br>