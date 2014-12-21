<?
session_start();
session_destroy();
session_unset('userlogin');

?>
<!--<script>
window.location.hash="no-back-button";
window.location.hash="Again-No-back-button";//again because google chrome don't insert first hash into history
window.onhashchange=function(){window.location.hash="no-back-button";} 

</script>-->
<script>
alert('You are Being Logged-out!..');
window.parent.location='login.php';

</script>
