<?
session_start();
$usern=$_SESSION['userlogin'];
if(!isset($usern)){
    header ('Location:adlog.php');
}
else{
    echo "Welcome $usern ";
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <h1><center>HINDUSTHAN COLLEGE OF ENGINEERING AND TECHNOLOGY </center></h1>
        <h2><center>Welcome to Booking/Hall Manage Page</center></h2>
    </head>
     <ul class="bmenu">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
    <li><a href="signup.php">Home</a></li>
    <li><a href="adcn.php">Bookings/Hall Manage</a></li>
    <li><a href="admnlogout.php">Logout</a></li>
    </br>
</ul>
        <style>
            
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
    color:saddlebrown;
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
     <style>
                
   body
{
background-image:url('adcn.jpg');
background-attachment:fixed;
background-position:center; 
background-size:cover;
background-repeat:no-repeat;
}

able.curvedEdges { border:10px solid RoyalBlue;-webkit-border-radius:13px;-moz-border-radius:13px;-ms-border-radius:13px;-o-border-radius:13px;border-radius:13px; }
table.curvedEdges td, table.curvedEdges th { border-bottom:1px dotted black;padding:5px; }   

        </style>
        <center> <table class="curvedEdges"> 
       </center>
        
           
                       
    <body>
        
        <form method="POST">
            <tr>
                <td>
           <center> <b> Paste/Type The Unique Code To Delete The Bookings..!!</b></center>
             Unique Id:-<input type="text" name="tt" >
            <input type="submit" name="sbm" value="Delete">
            <br>
            Hall Name<input type="text" name="t1">
            <input type="submit" name="sbt" value="Add Hall">
            <br>
            
            Delete Hall<input type="text" name="dt">
            <input type="submit" name="smt" value="Delete Hall">
            </td>
            </tr>
        <?php
     function funct_display(){
         $chk=  mysql_connect("localhost","root","");
         $ok=mysql_select_db("clgloginn",$chk);
         if(!$ok):
             die("Connect Error ".mysql_error());
         endif;
          $reslt=  mysql_query("select * from book ");
         if(mysql_num_rows($reslt)):
             
        
        
          echo "<br><br><br><center><table border= bgcolor=black</br></br></br>";
                echo '<tr><td><b>HALL NAME</td><td><b>Department Names</td><td><b>Booked Date</td><td><b>Uniqueid</td><td><b>Principal Status</td><td><b>Placement Status</td></tr>';
       while($resltt= mysql_fetch_array($reslt)):
         echo "<tr><td><b>$resltt[HallName]</td><td><b>$resltt[UserName]</td><td><b>$resltt[BookingDate]</td><td><b>$resltt[Uniqueid]</td><td><b>$resltt[principalstatus]</td><td><b>$resltt[placementstatus]</td></tr>";
       endwhile; 
       
       else:
           echo "<script>alert('Oops!!! No Hall Is Booked')</script>";
          endif;
             
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
     funct_display();
     function fun_hall(){
         $cnn= mysql_connect("localhost","root","");
         
       
         
         //$err="";
          if(isset($_POST['sbt'])){
             
              if (!get_magic_quotes_gpc()) {

            $tt11= addslashes($_POST['t1']);

            
            
           
        } else {

            $tt11=$_POST['t1'];
             
        }
          $msg='';
          $err='';
          if(!$tt11):
             $msg.='Oops!!!The Hall Field Is Empty Try Again';
          $err=1;
          endif;
          if($err):
              echo "<script>alert('$msg')</script>";
          else:
              $sqqr="insert into clghall (HallName) values('$tt11')";
           mysql_select_db("clgloginn",$cnn);
          $exe=  mysql_query($sqqr);
           
          if(!$exe)
              {
               echo "<script>alert('Hall Name Not!!!! Sucessfully Added')</script>";    
          }  else {
             echo "<script>alert('Hall Name Sucessfully Added')</script>";      
          
          }
          
               
          
          endif;
          
      
         
          
          }
         
     }
     
            function funct_ok(){
                $cont=  mysql_connect('localhost','root','');
                $db1=  mysql_select_db("clgloginn",$cont);
                if(!$db1):
                    die(mysql_error());
                   else:
                       $sqq=mysql_query("select * from logd ");
               if($sqq):
                       echo "<table border='1'>";
                       echo "<tr><td><b>Username</td> <td><b>Logintime</td></tr>";
                while($rt=  mysql_fetch_assoc($sqq)):
                    echo "<tr><td><b>$rt[username]</td> <td><b>$rt[logintime]</td></tr>";
                endwhile;
                        echo "</table>";
//                      else:
//                            echo"<script>alert('Oops No Records Found')</script>";
                      endif;
                endif;
            }
            fun_hall();
  
            funct_ok();
            
            
            function funct_hdel(){
                if(isset($_POST['smt'])){
                $ct=  mysql_connect('localhost','root','');
                
                
                    
                        $dhl=$_POST['dt'];
                    $msgg='';
                    $err='';
                    $exqr='';
                    if(!$dhl):
                        $msgg.='Oops!!! Fill the Delete/Hall Field And Try Again';
                    $err=1;
                    endif;
                    if($err):
                       
                     echo "<script>alert('$msgg')</script>";
                       else:
                          mysql_select_db("clgloginn",$ct); 
                        $ft= mysql_fetch_array(mysql_query("select HallName from clghall where HallName='$dhl'"));
                         if($dhl==$ft['HallName']){
                        $exqr=  mysql_query("delete from clghall where HallName='$dhl'");
                         }
                         if(!$exqr):
                         echo "<script>alert('oops!!! Hall Is Not Deleted')</script>";
                        
                    else:
                         echo "<script>alert('Sucessfully Hall Is Deleted')</script>";
                    endif;
                    
                    endif;
                  
                   
                    
            }
                
            }
           
      funct_hdel();
      function dun_logtdel(){
          
          $ect=  mysql_connect("localhost","root","");
          $tec=  mysql_select_db("clgloginn",$ect);
          if(!$tec):
              die (mysql_error());
          endif;
          if(isset($_POST['ldel'])):
              $qry=  mysql_query("select* from logd");
          if($qry):
              $fiqr=  mysql_query("delete from logd ");
          if($fiqr):
              echo"<script>alert('All The Logged In Time Valus Are Deleted Sucessfully')</script>";
          else:
              echo"<script>alert('All The Logged In Time Valus Are Not Deleted Sucessfully')</script>";
          endif;
          endif;
          endif;
      }
      dun_logtdel();
        // put your code here
        ?>
        
            <input type="submit" name="ldel" value="Delete All UserMonitoring Values"/>
           
            
        </form>
    </body>
    </div>
        </div>
        </div>
</html>
