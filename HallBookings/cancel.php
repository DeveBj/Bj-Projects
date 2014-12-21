<?php
session_start();
$usrr=trim($_SESSION['userlogin']);
if(!isset($usrr))
{
      header('Loaction:login.php');
            
    }
    else{
        echo "<center><font name=Arial color=white> <b>  WELCOME "   .$usrr.  " DEPARTMENT</center> </b>";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
   
    <h1><center><font name="Arial" color="white">HINDUSTHAN COLLEGE OF ENGINEERING AND TECHNOLOGY</center></h1>
    <h2><center><font name="Arial" color="white">Manage You Bookings Here</center></h2>

        <ul class="bmenu">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
    <li><a href="mainpage.php">Home</a></li>
    <li><a href="cancel.php">Canel Bookings</a></li>
    <li><a href="bkhs.php">View Bookings</a></li>
    <li><a href="logout.php">Logout</a></li>
    <li><a href="cnt.html">Contact</a></li>
    </br>
</ul>
        <style>
body
{
background-image:url('cin11.jpg');
background-attachment:fixed;
background-position:center; 
background-size:cover;
background-repeat:no-repeat;
}
            
            .bmenu{
    padding: 0px;
    margin: 0;
    position:absolute;
    
    
}
.bmenu li{
    font-size: 50px;
    width: 50px;
    display: block;
     
    padding: 0px;
    white-space: normal;
   
}


.bmenu li a{
    white-space: nowrap;
    color:transparent;
    display: block;
    text-transform: uppercase;
    text-align: left;
    text-shadow: 0px 0px 6px #fff;
    letter-spacing: 1px;
    -moz-transform: scale(0.5); 
    -ms-transform: scale(0.5); 
    -o-transform: scale(0.5); 
    -webkit-transform: scale(0.5); 
    transform: scale(0.5); 
    -webkit-transition: all 0.6s linear;
    -moz-transition: all 0.6s linear;
    -o-transition: all 0.6s linear;
    -ms-transition: all 0.6s linear;
    transition: all 0.6s linear;
   
}


.bmenu:hover li a{
    text-shadow: 0px 0px 15px #fff;
    
}
.bmenu li a:hover{
    text-shadow: 0px 0px 1px #fff;
    -moz-transform: scale(1); 
    -ms-transform: scale(1); 
    -o-transform: scale(1); 
    -webkit-transform: scale(1); 
    transform: scale(1); 
}
           
        </style>

    
    <body>
  
       
        
          
       
                                
        <?php
          function  funct_cancel(){
			  global $usrr,$delk;
                          
            $con=  mysql_connect("localhost","root","");
                    $chk=  mysql_select_db("clgloginn",$con);
            if($chk){
                
                $reslt=  mysql_query("select * from book where UserName='$usrr'");
				if(mysql_num_rows($reslt)):
                echo "<br><br><br><center><table border= bgcolor=transparent </br></br></br>";
                echo '<tr><td><b><font name=Arial color=white>HALL NAME</td><td><b><font name=Arial color=white>Booking Date</td><td><b><font name=Arial color=white>Uniqueid</td></tr>';
while($resltt=  mysql_fetch_array($reslt)){
echo "<tr><td><b><font name=Arial color=white>$resltt[HallName]</td><td><b><font name=Arial color=white>$resltt[BookingDate]</td><td><b><font name=Arial color=white>$resltt[Uniqueid]</td></tr>";
}
//echo '</table</center>';
else:
echo "<script> alert('Oops Try Aagain!!!No Hall Is Booked ')</script> ";
    endif;

                }
 else {
                    die(mysql_error());
 }
   if(isset($_POST['sbm'])):
              $id=$_POST['tt'];
          if(!$id):
              echo "<script>alert('Just Fill The Uniqueid Field and Try Again !!!')</script>";
          endif;
          $okk= mysql_fetch_assoc(mysql_query("select Uniqueid from book where Uniqueid='$id'"));
          if($okk):
              if($id==$okk['Uniqueid']):
                  $rtt=  mysql_query("delete from book where Uniqueid='$id'");
              if($rtt):
                  echo'<script>alert(Hooray!!! You Have Deleted The Hall Sucessfully)</script>';
              else:
                  echo '<script>alert(Oops!!!Try Again Please...)</script>';
              endif;
              endif;
          endif;
          endif;
            
            }
            funct_cancel();

        ?>
              <style>
                  
              </style>
        <form method="POST">
           
             <table style="margin: auto;border: 1px  #000000;padding: 30px;margin-top: 30px; " class='table1'>
                 <tr>
                     <td>
                         <font name="Times New Roman" color="white"> <b>Please Type/Copy Paste The Unique Code From The Booking Table To Cancel Your Hall Bookings</b>
                        
                     </td>
                     
                 </tr>
                     

                 <tr> <td><center><b>    <font name="Times New Roman" color="white">Uniqueid:</b> <input type="text" name="tt"></center>
                    </td></tr>
            
              <tr> <td>
                     <center>  <input type="submit" name="sbm" value="Delete"> </center>
                    </td></tr>
           
            </table>
        </form>
          
    </body>
     </div>
             </div>
             </div>
</html>