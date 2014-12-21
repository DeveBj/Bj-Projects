<?

//error_reporting(E_ALL);
//if($_SESSION['userlogin']):
//    header("location: ../sgnup/mainpage.php");
////else:
//     //header('Loaction:../PhpProject1/login.php');
//endif;
//echo $_SESSION['userlogin'].'helloo';
?>
<!DOCTYPE html>

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>LogIn </title>



</head>
 <meta name="description" content="slick Login">
<meta name="author" content="Webdesigntuts+">
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="http://www.modernizr.com/downloads/modernizr-latest.js"></script>
<script type="text/javascript" src="placeholder.js"></script>
<body>

    


    <h1><center><font color="white"><b>HINDUSTHAN COLLEGE OF ENGINEERING AND TECHNOLOGY </b></center></h1>
    <br>
    <br>
<h2><center><font color="white"><b>CONFERENCE HALL BOOKING LOGIN</b></center></h2>

<form method="POST" action="login.php"id="slick-login" >
  
<style>
    h1{
        font-size:xx-large
    }
    h2{
        font-size: x-large
    }
    img{
        
        float: left;
    }
    body, html {background:lightslategrey; text-align:center; padding:50px 0;}

/* The CSS */
select {
    padding:8px;
    margin: 10;
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
    select {padding-right:20px}
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
    width:30px; height:20px;
    background:#f8f8f8;
    position:absolute;
    pointer-events:none;
    display:block;
}
</style>


<tr>

   

</tr>

<tr>

   
    
    <td> <select name='usr'style="width: 213px;" >
       


<?php


   
 function_combo();
function function_combo() {

$db_name = "clgloginn";

$check = mysql_connect("localhost", "root", "");

$found = mysql_select_db($db_name, $check);

//$id=rand(time());

if ($found) {

$sql = "select username from log order by username ";

// $sql1="select usernaem from pglog";

// $result1= mysql_query($sql1);

$result = mysql_query($sql);

// while($ok1= mysql_fetch_assoc($result1)){

// $dropdown .="<option value='{$ok1['username']}'>{$ok1['username']}</option>";

// }

//while($ok1=mysql_fetch_array(mysql_query("select UserId from log where username='$user'"))){
//
//$ok1['UserId'];
//
//}
//
//$id=$ok1;
//
//$id=rand(time());

while ($ok = mysql_fetch_assoc($result)) {

$dropdown .="<option value='{$ok['username']}' >{$ok['username']}</option>";

}

$dropdown .="</select>";

echo $dropdown;

}

else {

echo 'Opps not Connected';

}

if(isset($_POST['btn']))

{

$user=$_POST['usr'];

$passwd=$_POST['pwd'];
$ok=array();



if($passwd !=""){
$query=mysql_query("select * from log where username ='$user' and password='$passwd'");

if(mysql_num_rows($query)==1){
mysql_fetch_array($query);

echo "<script>
    alert('You are Logged Inn Sucessfully ');
    </script>";
session_start();
$_SESSION['userlogin'] = $user;
date_default_timezone_set('Asia/Calcutta');
$tday=  date("Y-M-D G:ia",time());
$qry=  mysql_query("insert into logd(username,logintime) values ('$user','$tday')");
if($qry):
    echo '<script>alert(Your Log In Time Is Recorded)</script>';
endif;
///echo  $data['UserId'];

header ("Location:mainpage.php");
}

else {

echo "<script> alert('Oops Try Again !!!Password/Username Is Missmatched')</script>";

}

}

else {

echo "<script> alert('Oops Try Again!!!Password Field Is Empty')</script>";

}

}

}





// put your code here

?>

</body>

</td></tr>

<tr>



    <td><input type="password" size="" name="pwd" class="placeholder" placeholder="password" ></td>

</tr>

<tr>

<td>
<input type="submit" name="btn"  value="signin" />
 </td>

</tr>

<tr>

<td>
    <br>
    <br>
    

    <a href="frgtpwd.php"><b><font color="white"> CLICK  HERE  TO  CHANGE  PASSWORD/PASSCODE  </b> </a>

</td>

</tr>

</table>
</div>
    </div>
        </div>
</form>

</html>