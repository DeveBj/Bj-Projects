                          
<h1><center><font name="Arial" color="white">HINDUSTHAN COLLEGE OF ENGINEERING AND TECHNOLOGY</center></h1>
    <h2><center><font name="Arial" color="white">Booked History</center></h2> 
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
    color: transparent;
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
            img {
            float: top;
            
            }
        </style>
       
             
<?php
          function  funct_cancel(){
			  global $usrr,$delk;
                          
            $con=  mysql_connect("localhost","root","");
                    $chk=  mysql_select_db("clgloginn",$con);
            if($chk){
                
                $reslt=  mysql_query("select * from book ");
				if(mysql_num_rows($reslt)):
                echo "<br><br><br><center><table border= bgcolor=black</br></br></br>";
                echo '<tr><td><b><font name=Arial color=white>HALL NAME</td><td><b><font name=Arial color=white>Booked Date</td><td><b><font name=Arial color=white>Uniqueid</td><td><b><font name=Arial color=white>Username</td><td><b><font name=Arial color=white>PrincipalStatus</td><td><b><font name=Arial color=white>PlacementStatus</td></tr>';
while($resltt=  mysql_fetch_array($reslt)){
echo "<tr><td><b><font name=Arial color=white>$resltt[HallName]</td><td><b><font name=Arial color=white>$resltt[BookingDate]</td><td><b><font name=Arial color=white>$resltt[Uniqueid]</td><td><b><font name=Arial color=white>$resltt[UserName]</td><td><b><font name=Arial color=white>$resltt[principalstatus]</td><td><b><font name=Arial color=white>$resltt[placementstatus]</td></tr>";
}
//echo '</table</center>';
else:
echo "<script> alert('Oops Try Aagain!!!No Hall Is Booked ')</script> ";
    endif;

                }
 else {
                    die(mysql_error());
 }
   
            
            }
            funct_cancel();

        ?>