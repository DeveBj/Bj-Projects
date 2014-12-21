<?

?><!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Principal Log Inn</title>
    </head>
     <meta name="description" content="slick Login">
<meta name="author" content="Webdesigntuts+">
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="http://www.modernizr.com/downloads/modernizr-latest.js"></script>
<script type="text/javascript" src="placeholder.js"></script>
    

<h1><center><font name="Arial" color="white">HINDUSTHAN COLLEGE OF ENGINEERING AND TECHNOLOGY </center></h1>
<br>
<br>
<h2><b><center><font name="Arial" color="white">WELCOME TO THE PRINCIPAL LOGIN</center> </b></h2>
<style>
    h1{
        font-size: xx-large
    }
    h2{
        font-size: x-large
    }

   
 body, html {background:olive; text-align:center; padding:50px 0;}
 
</style>

  
<body>
       <?php
        
        $msg="";
        $err=0;
$cont=mysql_connect("localhost","root","");
$che=  mysql_select_db("clgloginn",$cont);

if(!$che):
    die(mysql_error());
endif;
if(isset($_POST['sb'])):
    $text=$_POST['t1'];
$pass=$_POST['p1'];

if($text==""):
  $err=1;
$msg="Oops!!!Fill the Username Field";
endif;
if($pass==""):
     $err=1;
$msg="Oops!!!Fill the Password Field";
endif;

if($err>0):
  
    echo "<script>alert('$msg')  </script>";
    else:
      $qry=  mysql_query("select username,password from pri where username='$text' and password='$pass'");
    
    $exe= mysql_fetch_assoc($qry);

if($text==$exe['username'] && $pass==$exe['password']):
 
   header ('Location:pmain.php');
else:
      echo "<script>alert('Username/Password Missmatch Try again!!!') </script>";
    
endif;

endif;




endif;      



        ?>
  
    <form method="POST" id="slick-login" >
        
        <td>
            <input type="text" name="t1" class="placeholder" placeholder="username">
        </td>
        </tr>
        <tr>
        <td>
            <input type="password" name="p1" class="placeholder"placeholder="password">
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
                <a href ="prfg.php"><font color="white"/>CLICK HERE TO CHANGE PASSWORD/PASSCODE</a>
            </td>
        </tr>
       
      
        
    </form>
           </body>
</html>
