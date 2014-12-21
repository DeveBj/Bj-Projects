
<?php 
session_start();
//global $susr;
$usrr=trim($_SESSION['userlogin']);
if(!$usrr):
     header ('Loaction:login.php');
else:
    echo "<center><b><font name=Arial color=white>Welcome $usrr Department</b></center>";  
endif;

?>

<!DOCTYPE html> 
	
	<html> 
	
	<head> 
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
	
	<title></title> 
       
	
	</head> 
        
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
       
        </a>
     
        <h1><center><font name="Arial" color="white">HINDUSTHAN COLLEGE OF ENGINEERING AND TECHNOLOGY </center></h1>
    
        <h2><center><font name="Arial" color="white">HALL BOOKING</center></h2>
    
	<script src="jquery-1.10.2.min.js"></script> 
	
	<script> 
            window.history.forward();
	
	$(document).ready(function(e) { 
	
	$("#single").hide(); 

	$("input[name=book]").click(function(){ 
	
	var Radio = $("input[name=book]"); 
	
	var selectedRadio = Radio.filter(":checked"); 
	
	var value = selectedRadio.val(); 
	
	if(value == 'single'){ 
	
	$("#single").show(); 
	
	
	
	} 
	
	 
	
	}); 
	
	}); 

	</script> 
        
        <style>
                body
{
background-image:url('cin11.jpg');
background-attachment:fixed;
background-position:center; 
background-size:cover;
background-repeat:no-repeat;
}

        </style>
	<body> 
	 
	<br><center><form method="POST" > </br></center>
	<style type="text/css">
        table.curvedEdges { border:10px outset white;-webkit-border-radius:13px;-moz-border-radius:13px;-ms-border-radius:13px;-o-border-radius:13px;border-radius:13px; }
table.curvedEdges td, table.curvedEdges th { border-bottom:1px dotted black;padding:5px; }
        </style>
    <!-- Be sure to place the above styles (i.e. everything between the <style></style> tags) into the document 'head' (i.e. between the <head></head> tags. Everything below goes inside the <body></body> tags) -->
<center><table class="curvedEdges">
         </tr>
        
        <tr>
	<td><center> 
            <b><font name=Arial color=white>Hall</b> <select name='hall'></center> 
        
       
        
         
      
            <?php 
	

	
	function funct_hall() 
	
	{ 
            $drp='';
	$data="clgloginn"; 
	
	$check= mysql_connect('localhost','root',''); 
	$found= mysql_select_db($data,$check); 
	
	if(!$found){ 
	
	die("Oops!!!".mysql_error()); 
	
	} 
	
	else{ 
	
	$sql="select Hallname from clghall"; 
	
	$result= mysql_query($sql); 
	
	while ($relt= mysql_fetch_assoc($result)){ 
	
	$drp .="<option value='{$relt['Hallname']}'>{$relt['Hallname']}</option>"; 
	
	} 
	
	$drp .="</select>"; 
	
	echo $drp; 
	
	} 
	
	} 
	
	funct_hall(); 
        funct_book();
	function funct_book()
	{
            $data="clgloginn"; 
	
	$check= mysql_connect('localhost','root',''); 
	$found= mysql_select_db($data,$check);
        if(!$found){
            die(mysql_error()); 
        }
        if($check){
            if(isset($_POST['bkbtn'])){
                $option=$_POST['book'];
                $sngdte=$_POST['dte'];
                $bkhall=$_POST['hall'];
                $fnname=$_POST['funct'];
                $fnnname=$_POST['funct'];
                $dname=$_POST['depnme'];
                $ermsg="";
                $err='';
                if($option=='single'):
                    if(!$sngdte):
                        $ermsg="Select the date field";
                    $err=1;
                   elseif(mysql_num_rows(mysql_query("SELECT * FROM book WHERE HallName='$bkhall' and Bookingdate='$sngdte'"))):
                        
                       $ermsg="Oops!!!Hall is Booked on The Selected Date";
                    $err=1;
                    endif;
                
               
                       
                    
                endif;
                if($err):
                    
                    
                    echo "<script> alert ('$ermsg')</script>";
                
                else:
                    $unid=rand(100,10000);
                $pst="ApprovalPending";
                $plc="ApprovalPending";
                    if($option=='single'):
                       $insert=  mysql_query("insert into book (HallName,FunctionName,BookingDate,UserName,Uniqueid,principalstatus,placementstatus)values('$bkhall','$fnnname','$sngdte','$dname','$unid','$pst','$plc')"); 
                   
                    endif;
                     if($insert):
                         echo "<script> alert('Hey!!!Hall Is Booked')</script>";
                         else:
                         echo "<script> alert('Hey!!!Hall Is Not Booked')</script>";
                     endif;   
               endif;
            }
            }
            else{
                echo "<script>alert(Oops Log In To Book Hall..Try Again Latter!!!)</script>";
            }
                
        }
         
	
	?> 	
        <b><font name=Arial color=white>  Function</b><select name='funct'>
             <?php
       
        function funct_fun() 
	
	{ 
	$data="clgloginn"; 
	
	$check= mysql_connect('localhost','root',''); 
	$found= mysql_select_db($data,$check); 
	
	if(!$found){ 
	
	die("Oops!!!".mysql_error()); 
	
	} 
	
	else{ 
	
	$sql1="select * from fn "; 
	
	$result1= mysql_query($sql1); 
	
	while ($relt1= mysql_fetch_assoc($result1)){ 
	
	$drp1 .="<option value='{$relt1['function']}'>{$relt1['function']}</option>"; 
	
	} 
	
	$drp1 .="</select>"; 
	
	echo $drp1; 
	
	} 
	
	} 
	 funct_fun();
        ?>
	
	<br /> 
	<br /> 
	
    </td>
    
	</tr>
        <tr>    
        
            <td> <center><b><font name="Arial" color="white">Book:<input type="radio" name="book" value="single"> </b>
	
        <td><b><span id="single"><font name="Arial" color="white"><input type="hidden" name="depnme" value="<?php echo $_SESSION['userlogin'] ?>">Date<input type="date" name="dte" value="single" ><input type="submit" name="bkbtn" value="Book"></span> </b>
            
       
        </b>
       
        
</center> </table>
	
       
	</form> 
            
            
	</body> 
	
	</html>