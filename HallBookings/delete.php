<?php
$cnt=  mysql_connect("localhost","root","");
$vld=  mysql_select_db("clgloginn",$cnt);
if(!$vld):
    die(mysql_error());
endif;
$qur="select placementstatus,principalstatus from book ";

$exe1=  mysql_query($qur);

if(mysql_num_rows($exe1)):
    $exe=  mysql_fetch_assoc($exe1);
    if($exe['principalstatus']=="Cancelled"&&$exe['placementstatus']=="Cancelled"):
        $nq1="delete from book where principalstatus='Cancelled' and placementstatus='Cancelled'";
    $nq=  mysql_query($nq1);
    if($nq):
        echo"<script>alert('Deleted Sucessfully')</script>";
        else:
            echo"<script>alert('Oops No Records To Be Deleted ')</script>";
        
    endif;
    endif;
endif;

?>
