<style>
    
            table.curvedEdges { border:10px solid RoyalBlue;-webkit-border-radius:13px;-moz-border-radius:13px;-ms-border-radius:13px;-o-border-radius:13px;border-radius:13px; }
table.curvedEdges td, table.curvedEdges th { border-bottom:1px dotted black;padding:5px; }
</style>
<center>
   <table class="curvedEdges">
       <form method="POST">   
<?php

//global $qrry;'stat'
$ch1=null;
$sql22=null;
$rr1=null;
$ck=  mysql_connect("localhost","root","");
$cn=  mysql_select_db("clgloginn",$ck);
if(!$cn):
    die(mysql_error());
endif;
$qr2=  mysql_query("select * from stat");

if(mysql_num_rows($qr2)):
    echo '<blockquote>';
  echo '<blockquote>';
    echo '<blockquote>';
      echo '<blockquote>';
        echo '<blockquote>';
          echo '<blockquote>';
            echo '<blockquote>';
              echo '<blockquote>';
                echo '<blockquote>';
                  echo '<blockquote>';
                
    echo'<b><u>STATUS=</u>';
    while($ft=  mysql_fetch_array($qr2)):
    echo"$ft[status]<input type='radio' name='stat' value='".$ft['status']."'>";
   
    endwhile;
endif;
$q=mysql_query("select * from book");
echo"<tr><td>HallName</td><td>FunctionName</td><td>BookingDate</td><td>UserName</td><td>Uniqueid</td><td>PrincipalStatus</td><td>PlacementStatus</td></tr>";
if(mysql_num_rows($q)):
    while($qrry=  mysql_fetch_array($q)):
    //echo "<tr><td>Uniqueid </td>";
    
    echo "<tr><td>$qrry[HallName]</td><td>$qrry[FunctionName]</td><td>$qrry[BookingDate]</td><td>$qrry[UserName]</td><td>$qrry[Uniqueid]<input type='checkbox' name='book' value='".$qrry['Uniqueid']."'></td><td>$qrry[principalstatus]</td><td>$qrry[placementstatus]</td></tr>";
//echo"$qrry[status]<input type='radio' name='stat' value='".$qrry['status']."'";
endwhile;
endif;


if(isset($_POST['ss'])):
    $ch1=  isset($_POST['book'])?$_POST['book']:'';
$rr1=isset($_POST['stat'])?$_POST['stat']:'';
if(mysql_num_rows(mysql_query("SELECT * FROM book WHERE Uniqueid='$ch1'"))):
    $sql22=  mysql_query("update book set principalstatus='$rr1' where Uniqueid='$ch1'");
endif;
if($sql22):
    echo "<script>alert('Approval/Dissapproval Sent')</script>";
else:
    echo mysql_error();
    echo"<script>alert('Oops!!! Some Thing Wrong')</script>";
endif;   
endif;
?>
           <blockquote>
               <blockquote>
                     <blockquote>
                           <blockquote>
  <blockquote>
        <blockquote> 
              <blockquote> 
                    <blockquote> 
                          <blockquote>   
                                <blockquote>
                                      <blockquote> 
                                            <blockquote> 
                                                  <blockquote>
                               <input type="submit" name="ss" value="send">
       

       </table>
    </center>
</form>
