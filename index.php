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
 Echo "POD IP Address is " . $ipaddress;
 echo "POD hostname " . gethostname(); 
 echo 'The username is: ' .$_ENV["OPENSHIFT_BUILD_COMMIT"] . '!';
 ?>
 </body>
</html>
