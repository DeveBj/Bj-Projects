<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
session_start();
session_destroy();
session_unset('userlogin');

?>
<script>
alert('You are Being Logged-out!..');
window.parent.location='adlog.php';
</script>
        
    </body>
</html>
