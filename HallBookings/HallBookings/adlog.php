<?

?><!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Admin LogIn</title>
         <meta name="description" content="slick Login">
<meta name="author" content="Webdesigntuts+">
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="http://www.modernizr.com/downloads/modernizr-latest.js"></script>
<script type="text/javascript" src="placeholder.js"></script>
    </head>
    

<h1><center><font name="Arial" color="white">HINDUSTHAN COLLEGE OF ENGINEERING AND TECHNOLOGY </center></h1>
<br>
<br>
<h2><b><center><font name="Arial" color="white">WELCOME TO THE ADMINISTRATOR LOGIN</center> </b></h2>
<style>
   
    
    h1{
        font-size: xx-large
    }
    h2{
        font-size: x-large
    }
      body, html {background:brown; text-align:center; padding:50px 0;}
/*    body
{
background-image:url('admin.jpg');
background-attachment:fixed;
background-position:center; 
background-size:cover;
background-repeat:no-repeat;
}*/
/*    table.curvedEdges { border:10px solid RoyalBlue;-webkit-border-radius:13px;-moz-border-radius:13px;-ms-border-radius:13px;-o-border-radius:13px;border-radius:13px; }
table.curvedEdges td, table.curvedEdges th { border-bottom:1px dotted black;padding:5px; }   */
</style>
<!--<center> <table class="curvedEdges"> 
       </center>
<tr>
    
    <td>
        
    </td>-->
</tr>
<body>
        <?php
        $cnt=  mysql_connect("localhost","root","");
        $hnd=  mysql_select_db("clgloginn",$cnt);
        if(!$hnd):
            die(mysql_error());
        endif;
            if(isset($_POST['sb'])):
                $unme=$_POST['t1'];
            $pswd=$_POST['p1'];
            $rst=mysql_query("select username,password from admin where username='$unme' AND password='$pswd'");
            if($rst):
                 $final=  mysql_fetch_assoc($rst);
            if($unme==$final['username'] && $pswd==$final['password']):
                session_start();
            $_SESSION['userlogin']=$unme;
            if(isset($_SESSION['userlogin'])):
                 header('Location:signup.php');  
            endif;
           
                   
            else:
                echo "<script> alert('Password/Username Missmatch')</script>";
            endif;
            endif;
           
            endif;
        
       
      
        ?>
  
    <form method="POST" id="slick-login" >
<!--        <tr>
        <td>
             <img src="d.png">
        </td>
        </tr>-->
        <tr>
        <td>
            <input type="text" name="t1" class="placeholder"placeholder="username">
        </td>
        </tr>
        <tr>
        <td>
             <input type="password" name="p1"class="placeholder"placeholder="passsword">
        </td>
        </tr>
        <tr>
        <td>
              <input type="submit" name="sb" value="login">
        </td>
        </tr>
        <tr>
            <td>
                <br>
                <br>
                
                <a href ="admnfrgt.php"><font color="white"/><b>CLICK HERE TO CHANGE PASSWORD/PASSCODE</b></a>
            </td>
        </tr>
       
      
        
    </form>
           </body>
</html>
