<!DOCTYPE html>
<?php
session_start();
$usrr=$_SESSION['userlogin'];
if(!isset($usrr))
{
      header('Loaction:login.php');
            
    }
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    
        <style>
                body
{
background-image:url('images.jpg');
background-attachment:fixed;
background-position:center; 
background-size:cover;
background-repeat:no-repeat;
}

        </style>
 
    <body>
        <?php
        function  funct_cancel(){
            $con=  mysql_connect("localhost"," root"," ");
            $chk=  mysql_select_db("clglogin",$con);
            if($chk){
                
                $reslt=  mysql_query("select * from book where=$usrr");
                echo '<table>';
while($resltt=  mysql_fetch_array($reslt)){
echo "<tr><td>$resltt[HallName]</td><td>$resltt[BookingDate]</td><td>$resltt[FromDate]</td><td>$resltt[ToDate]</td></tr>";
}
echo '</table>';
                }

            
            }
            
        // put your code here
        ?>
    </body>
    <form method="POST">
        
    </form>
</html>
