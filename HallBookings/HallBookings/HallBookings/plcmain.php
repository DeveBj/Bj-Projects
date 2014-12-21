<html>
    <head>
        
    </head>
    <body>
         <form method="POST">
        <select name="unq">
        
        <?php
        function funct_uq() 
	
	{ 
            $droop='';
	$data="clgloginn"; 
	
	$check= mysql_connect('localhost','root',''); 
	$found= mysql_select_db($data,$check); 
	
	if(!$found){ 
	
	die("Oops!!!".mysql_error()); 
	
	} 
	
	else{ 
	
	$sql="select Uniqueid from book"; 
	
	$result= mysql_query($sql); 
	
	while ($relt= mysql_fetch_assoc($result)){ 
	
	$droop .="<option value='{$relt['Uniqueid']}'>{$relt['Uniqueid']}</option>"; 
	
	} 
	
	$droop .="</select>"; 
	
	echo $droop; 
	
	} 
	
	} 
	
	funct_uq();
        function fun_dply(){  
            
           
                          
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
        fun_dply()
        ?>
            <select name="app">
                <?php
                
                function funct_st() 
	
	{ 
            $drp11='';
	$data="clgloginn"; 
	
	$check= mysql_connect('localhost','root',''); 
	$found= mysql_select_db($data,$check); 
	
	if(!$found){ 
	
	die("Oops!!!".mysql_error()); 
	
	} 
	
	else{ 
	
	$sql11="select status from stat"; 
	
	$result11= mysql_query($sql11); 
	
	while ($relt11= mysql_fetch_assoc($result11)){ 
	
	$drp11 .="<option value='{$relt11['status']}'>{$relt11['status']}</option>"; 
	
	} 
	
	$drp11 .="</select>"; 
	
	echo $drp11; 
	
	} 
	
	} 
	 funct_st();
         
         function fun_vali(){
             $cok=  mysql_connect("localhost","root","");
             $hok=  mysql_select_db("clgloginn",$cok);
             if(!$hok):
                 die(mysql_error());
             else:
                 if(isset($_POST['vld'])):
                     $c1=$_POST['unq'];
                 $c2=$_POST['app'];
                 $exsq=  mysql_query("select Uniqueid from book");
                 if($exsq):
                     $jex=  mysql_fetch_assoc($exsq);
                 if($c1==$jex['Uniqueid']):
                     $uqr=  mysql_query("update book set principalstatus='$c2' where Uniqueid=$c1");
                 if($uqr):
                     echo"<script>alert('Approoval/Disapproval Sent Sucessfully')</script>";
                 else:
                       echo"<script>alert('Approoval/Disapproval Not Sent')</script>";
                   
                 endif;
                 endif;
                     
                 endif;
                 else:
                     
                 endif;
             endif;
             
         }
         fun_vali();
	
                ?>
       
            <input type="submit" name="vld" value="Send"/>
        </form>
    </body>
</html>