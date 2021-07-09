<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php
 $ns = getenv("MY_POD_NAMESPACE") ;
 $podname = getenv("MY_POD_NAME") ;
 $ipaddress = getenv("REMOTE_ADDR") ; 
 Echo "Your IP Address is " . $ns;
 Echo "Your IP Address is " . $podname;
 Echo "Your IP Address is " . $ipaddress;
 echo 'The username is: ' .$_ENV["MY_POD_NAMESPACE"] . '!';
 ?>
 </body>
</html>
