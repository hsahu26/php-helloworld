<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php
 $ipaddress = getenv("REMOTE_ADDR") ;
 Echo "Your IP Address is " . $ipaddress;
?>
 </body>
</html>
