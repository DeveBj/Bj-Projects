<? 
session_start();
$usern=$_SESSION['userlogin'];
if(!$usern):
    header ('Location:adlog.php');
else:
    echo "Welcome .$usern ";
endif;
?><!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
        <title>signup</title>
    <font name="Times New Roman" color="darkred">
  
    <h1><center>  HINDUSTHAN COLLEGE OF ENGINEERING AND TECHNOLOGY</center></h1>
    <h2><center>   WELCOME ADMINISTRATOR </center></h2>
    <h3><center>   You Can Control EveryThing From Here </center></h3>
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
    color:tomato;
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
.container {width:900px;
      margin:0 auto 0 auto;
      padding:5px;
      border:5px outset darkolivegreen;
      background:#ffffff; }
 .container1 {width:900px;
      margin:0 auto 0 auto;
      padding:5px;
      border:5px inset #99ff00;
      background:#ffffff; }
  .container2 {width:900px;
      margin:0 auto 0 auto;
      padding:5px;
      border:5px solid  #993300;
      background:#ffffff; }
                body
{
background-image:url('s.jpg');
background-attachment:fixed;
background-position:center; 
background-size:cover;
background-repeat:no-repeat;
}

.container {width:900px;
      margin:0 auto 0 auto;
      padding:5px;
      border:5px outset #ff6633;
      background:#ffffff; }
 .container1 {width:900px;
      margin:0 auto 0 auto;
      padding:5px;
      border:5px dotted  #ffffff;
      background:#ffffff; }
  .container2 {width:900px;
      margin:0 auto 0 auto;
      padding:5px;
      border:5px inset  #00cc00;
      background:#ffffff; }
  </style>
   
           
             
<body>
<!--    <div class="container">
       <div class="container1">
            <div class="container2">-->
 
    <?php
    if (isset($_POST['btn'])) {

        $check = mysql_connect("localhost", "root", "");

        if (!$check) {

            die("Connect Error" . mysql_error());
        }

        if (!get_magic_quotes_gpc()) {

            $username = addslashes($_POST['userr']);

            $password = addslashes($_POST['pswdd']);

            $passcode = addslashes($_POST['code']);
            
           
        } else {

            $username = $_POST['userr'];

            $password = $_POST['pswdd'];

            $passcode = $_POST['code'];
             
        }
        $err='';
        $msg = '';
        if (!$username):
            $msg .= 'Enter your username';
            $err = 1;
        endif;

        if (!$password):
            $msg .= 'Enter your password';
            $err = 1;
        endif;

//        if (!$passcode):
//            $msg .= 'Enter your passcode';
//            $err = 1;
//        endif;
        

        if ($err):
            echo "<script>alert('$msg')</script>";
        else:
            $passcode=rand(100,100000);
            $sql = "insert into log (username,password,passcode) values ('$username','$password','$passcode')";

            $dbname = "clgloginn";

            mysql_select_db($dbname);

            $inval = mysql_query($sql, $check);

            if (!$inval) {

                die('Error In Entering Data' . mysql_error());
            }

            echo "<script>alert('Username,Password,Passcode Updated Sucessfully')</script>";

            mysql_close($check);
        endif;
    }

    function func_delete() {
        $check = mysql_connect("localhost", "root", "");
        $fnd = mysql_select_db("clgloginn", $check);

        if (!$fnd) {
            die("Connect Error" . mysql_error());
        }
        if (isset($_POST['dbtn'])) {
            $delu = $_POST['dusr'];

            if (!$delu) {
                echo "<script>alert('Oops!!!Enter the Username Field')</script>";
            }
            $fetch = mysql_fetch_array(mysql_query("select username from log where username='$delu'"));
            if ($delu == $fetch['username']) {
                $sqld = mysql_query("delete from log where username='$delu'");
                if ($sqld) {
                    echo "<script>alert('Sucessfully $delu Deleted')</script>";
                } else {
                    echo "<script>alert('Opps The Entered Username Not Deleted ')</script>";
                }
            } else {
               echo "<script>alert('Opps Entered Username Does Not Match !!!Try Again')</script>";
            }
        }
    }

    func_delete();

    function funct_show() {
        $db_name = "clgloginn";
        $check = mysql_connect("localhost", "root", "");
        $found = mysql_select_db($db_name, $check);


        if ($found) {
            //$dropdown =  "<right><select name='listbox' size='12'></right>";
            $sql = "select * from log order by username ";
            $result = mysql_query($sql);
         echo '<table style="margin: auto;border: 1px solid #000000;padding: 30px;margin-bottom:   10px"';
         echo '<tr><td><b><u>USERNAMES</td><td><b><u>PASSCODES</td></u></b></tr>'; 
         while ($ok = mysql_fetch_assoc($result)) {
                echo  " <tr><td><b>$ok[username]</td><td><b>$ok[passcode]<td></tr>";        
                }
                echo '</table>';
            //$dropdown .="</select>";


            //echo $dropdown;
        }
//        $drop1 = "<select name='list1' size='10'>";
//        $db_name1 = "clgloginn";
//        $chec1 = mysql_connect("localhost", "root", "");
//        $fnd1 = mysql_select_db($db_name1, $chec1);
//        if ($fnd1) {
//            $sqll = "select passcode from log order by username";
//            $resultt = mysql_query($sqll);
//            while ($okk1 = mysql_fetch_assoc($resultt)) {
//                $drop1 .="<option value='{$okk1['passcode']}'>{$okk1['passcode']}</option>";
//            }
//            $drop1 .="</select>";
//            echo $drop1;
//        }
    }

    funct_show();
    ?>

    <table style="margin: auto;border: 1px solid #000000;padding: 30px;margin-top:    10px">
        <form method="POST" > 
            <tr>
                <td><b><center><u> ADD USER's  </u></center> </b> </td>
                </tr>
            <tr>

                <td><b>Username:</td>
            </tr>
            <tr>

                <td><input type="text" value="" name="userr"></td>
            </tr>

            <tr>
                <td><br><b>Password:</td>
            </tr>  
            <tr>
                <td><input type="password" value="" name="pswdd"> </td>
            </tr>
            <tr>
              <!--  <td><br><b>Passcode:</td> -->
            </tr>

            <tr>
                <td><input type="hidden" value=" " name="code"></td>
            </tr>
            <tr>
                
    </tr>
            <tr>
                <td>
                    <input type="submit" value="Add User" name="btn"> 
                </td>
            </tr>


    </table>
    <style type="text/css">
        table.curvedEdges { border:1px solid RoyalBlue;-webkit-border-radius:13px;-moz-border-radius:13px;-ms-border-radius:13px;-o-border-radius:13px;border-radius:13px;margin-top: 30px }
        table.curvedEdges td, table.curvedEdges th { border-bottom:7px;padding:30px; }
    </style>
    <!-- Be sure to place the above styles (i.e. everything between the <style></style> tags) into the document 'head' (i.e. between the <head></head> tags. Everything below goes inside the <body></body> tags) -->
<center><table class="curvedEdges">
        <tr>    
            <td> <center><b>Username:<input type="text" name="dusr"></center> </td>
        <td> <input type="submit" value="Delete User" name="dbtn"></td>
        </tr>
</center> </table>
</form>
</body>
</div>
           </div>
        </div>
</html>
