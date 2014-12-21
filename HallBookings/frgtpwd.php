<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    
    <center><img src="lg.gif"></center>
    <h1><b><center>HINDUSTHAN COLLEGE OF ENGINEERING AND TECHNOLOGY</center></b></h1>
    <h2><b><center>WELCOME TO CHANGE PASSWORD AND PASSCODE PAGE</center> </b></h2>
    <style>
        body
{
background-image:url('clg1.jpg');
background-attachment:fixed;
background-position:center; 
background-size:cover;
background-repeat:no-repeat;
}
        img{
            float:top;
        }
             .button
{
background-color: #color;
border-bottom:solid;
border-left: #FFEEEE;
border-right:inset;
border-top: #EEEEEE;
color: lightseagreen;
font-family: Verdana, Arial
}
 .container {width:900px;
      margin:0 auto 0 auto;
      padding:5px;
      border:5px outset #00ccff;
      background:#ffffff; }
 .container1 {width:900px;
      margin:0 auto 0 auto;
      padding:5px;
      border:5px inset #0000cc;
      background:#ffffff; }
  .container2 {width:900px;
      margin:0 auto 0 auto;
      padding:5px;
      border:5px inset  #ff3366;
      background:#ffffff; }
    table.curvedEdges { border:10px inset red;-webkit-border-radius:13px;-moz-border-radius:13px;-ms-border-radius:13px;-o-border-radius:13px;border-radius:13px; }
table.curvedEdges td, table.curvedEdges th { border-bottom:1px inset darkgreen;padding:5px; }
         </style>>
         <center> <table class="curvedEdges"> </center>
         
    <body>
       
        <?php
       function func_forget(){
           $check=  mysql_connect('localhost','root','');
           $dbnme="clgloginn";
           $found=  mysql_select_db($dbnme,$check);
           if(!$found){
               die(mysql_error());
           }
          if(isset($_POST['sbm'])){
$user=$_POST['namee'];

$npass=$_POST['paas'];

$pcde=$_POST['pcode'];

if(!$user){

echo  "<script> alert('Oops Try Again!!!Username is Empty')</script>";

}

elseif(!$npass){

echo  "<script> alert('Oops Try Again!!!Password is Empty')</script>";

}

elseif(!$pcde){

echo  "<script> alert('Oops Try Again!!!Passcode is Empty')</script>";

}

else{
$rslt= mysql_fetch_array(mysql_query("select username,passcode from log where username ='$user' and passcode='$pcde'"));

if($user==$rslt['username'] and $pcde==$rslt['passcode']){ //checking the user entered username with the database

$nrslt= mysql_query("update log set password='$npass' where username='$user' and passcode='$pcde'"); // update password

if($nrslt){ //If not updated

echo  "<script> alert('Successfully Updated')</script>";

}

else {

echo  "<script> alert('Oops try Again!!!!Successfully Not Updated')</script>";

}

}

else {

echo "<script> alert('Oops Try Again!!!Passcode/Username Missmatched')</script>";

}

}
}
}
       func_forget();
     
       function func_fpcode(){
            $check1=  mysql_connect('localhost','root','');
           $dbnme1="clgloginn";
           $found1=  mysql_select_db($dbnme1,$check1);
           if(!$found1){
               die(mysql_error());
           }
          
            if(isset($_POST['cpass'])){
                $ps=$_POST['pas'];
                $usr=$_POST['usrr'];
                
                if(!$usr){
                    echo  "<script> alert('Oops Try Again!!!Username is Empty')</script>";
                }
                elseif(!$ps){
                    echo  "<script> alert('Oops Try Again!!!Password Missmatched')</script>";
                }
                
 else {
     $relt=  mysql_fetch_array(mysql_query("select username,password from log where  username='$usr'and password='$ps'"));
     if($usr==$relt['username']and $ps==$relt['password']){
      
         $nrand=  rand(200,20000);
                      $nrelt=mysql_query("update log set passcode='$nrand' where username='$usr'and password='$ps'");

     
         

     if($nrelt){
         echo  "<script> alert('Passcode Updated Successfully Your New Passcode is:-'+$nrand)</script>";
     }
 else {
         echo  "<script> alert('Oops Try Again!!!Passcode Not Updated')</script>"; 
     }}
 else {
    echo  "<script> alert('Oops Try Again!!!Password/Username Missmatched ')</script>";
     }
 }
           
            }
       }
       func_fpcode();
    
        // put your code here
        ?>
         <form method="POST" action="">
                       </tr>
        <tr> 
            <td>
        <center><b>CHANGE PASSWORD..</b></center>
            </td>
        
              </tr>
             <tr> 
                 <td>
                     <b>   Username::<input type="text" name="namee">   
                 </td>
             </tr>
             
              <tr> 
                 <td>
                    <center><b>Passcode:<input type="numeric" name="pcode"></center>
                 </td>
             </tr>
             
       
        <tr> 
                 <td>
                      <center><b>NewPassword:<input type="password" name="paas"> </cneter>
                 </td>
             </tr>
        
        <tr> 
                 <td>
                           <center><center><input type="submit" name="sbm" value="ChangePassword"class="button"></center></center>
                 </td>
             </tr>
             </table>
             <center> <table class="curvedEdges"> </center>
<!--        <table <table style="margin: auto;border: 1px solid #000000;padding: 30px;margin-top: 30px">-->
                  </tr>
                            </tr>
        <tr> 
            <td>
        <center><b>CHANGE PASSCODE...</b></center>
            </td>
        
              </tr>
        <tr> 
            <td>
              <b>Username:<input type="text" name="usrr">  </b>
            </td>
        
              </tr>
        <tr> 
            <td>
             <b> Password:<input type="password" name="pas">  </b>
            </td>
        
              </tr>
        
       <!-- <tr> 
            <td>
                <b>    NewPassCode:<input type="numeric" name="nmer"></b>
            </td>
        
              </tr> -->
        
        <tr> 
            <td>
                      <center><center><input type="submit" value="ChangePasscode " name="cpass" class="button"></center></center>
            </td>
  </table>
                 
            
       
           
           
        </form>
    </body>
    </div>
            </div>
            </div>
</html>
