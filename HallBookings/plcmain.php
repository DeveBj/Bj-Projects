<? 
session_start();
$usern000=$_SESSION['userlogin'];
if(!$usern000):
    header ('Location:plog.php');
else:
    echo "Welcome .$usern000";
endif;
?>

<html>
    <head>
        
    </head>
    <ul class="bmenu">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
    <li><a href="plcmain.php">Home</a></li>
    <li><a href="pllogout.php">Logout</a></li>
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
    color: teal;
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
    
    </br>
</ul>
    <h1><center><font name="Arial" color="black">HINDUSTHAN COLLEGE OF ENGINEERING AND TECHNOLOGY </center></h1>
<h2><b><center><font name="Arial" color="black">WELCOME TO THE PRINCIPAL LOGIN</center> </b></h2>
    <style>
           body
{
background-image:url('plc.jpg');
background-attachment:fixed;
background-position:center; 
background-size:cover;
background-repeat:no-repeat;
}
        table.curvedEdges { border:10px solid RoyalBlue;-webkit-border-radius:13px;-moz-border-radius:13px;-ms-border-radius:13px;-o-border-radius:13px;border-radius:13px; }
table.curvedEdges td, table.curvedEdges th { border-bottom:1px dotted black;padding:5px; }
   select {
    padding:3px;
    margin: 0;
    -webkit-border-radius:4px;
    -moz-border-radius:4px;
    border-radius:4px;
    -webkit-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
    -moz-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
    box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
    background: #f8f8f8;
    color:#888;
    border:none;
    outline:none;
    display: inline-block;
    -webkit-appearance:none;
    -moz-appearance:none;
    appearance:none;
    cursor:pointer;
}

/* Targetting Webkit browsers only. FF will show the dropdown arrow with so much padding. */
@media screen and (-webkit-min-device-pixel-ratio:0) {
    select {padding-right:18px}
}

label {position:relative}
label:after {
    content:'<>';
    font:11px "Consolas", monospace;
    color:red;
    -webkit-transform:rotate(90deg);
    -moz-transform:rotate(90deg);
    -ms-transform:rotate(90deg);
    transform:rotate(90deg);
    right:8px; top:2px;
    padding:0 0 2px;
    border-bottom:1px solid #ddd;
    position:absolute;
    pointer-events:none;
}
label:before {
    content:'';
    right:6px; top:0px;
    width:20px; height:20px;
    background:#f8f8f8;
    position:absolute;
    pointer-events:none;
    display:block;
}
    </style>
    <center>
        <br>
        <br>
        <br>
        <table class="curvedEdges">
    </center>
    <body>
         <form method="POST">
             <tr>
                 <td>
                     <br>
                      <center> 
                     <b>
                       Uniqueid
                     </b>  <select name="unq"> </center>
               
      
        
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
                echo '<tr><td><b><font name=Arial color=black>HALL NAME</td><td><b><font name=Arial color=black>Booked Date</td><td><b><font name=Arial color=black>Uniqueid</td><td><b><font name=Arial color=black>Username</td><td><b><font name=Arial color=black>PrincipalStatus</td><td><b><font name=Arial color=black>PlacementStatus</td></tr>';
while($resltt=  mysql_fetch_array($reslt)){
echo "<tr><td><b><font name=Arial color=black>$resltt[HallName]</td><td><b><font name=Arial color=black>$resltt[BookingDate]</td><td><b><font name=Arial color=black>$resltt[Uniqueid]</td><td><b><font name=Arial color=black>$resltt[UserName]</td><td><b><font name=Arial color=black>$resltt[principalstatus]</td><td><b><font name=Arial color=black>$resltt[placementstatus]</td></tr>";
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
            $drp111='';
	$data="clgloginn"; 
	
	$check= mysql_connect('localhost','root',''); 
	$found= mysql_select_db($data,$check); 
	
	if(!$found){ 
	
	die("Oops!!!".mysql_error()); 
	
	} 
	
	else{ 
	
	$sql111="select status from stat"; 
	
	$result111= mysql_query($sql111); 
	
	while ($relt111= mysql_fetch_assoc($result111)){ 
	
	$drp111 .="<option value='{$relt111['status']}'>{$relt111['status']}</option>"; 
	
	} 
	
	$drp111 .="</select>"; 
	
	echo $drp111; 
	
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
                     $uqr=  mysql_query("update book set placementstatus='$c2' where Uniqueid=$c1");
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
                        </td>   
             </tr>
       
           
        </form>
        </table>
    </body>
</html>