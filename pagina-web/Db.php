<?php
    define('_HOST_NAME','localhost');
     define('_DATABASE_USER_NAME','id15486871_root');
     define('_DATABASE_PASSWORD','rvpO)aEVPe2QGcH17GH8');
     define('_DATABASE_NAME','id15486871_pasteleria');
      
     $MySQLiconn = new MySQLi(_HOST_NAME,_DATABASE_USER_NAME,_DATABASE_PASSWORD,_DATABASE_NAME);
  
     if($MySQLiconn->connect_errno)
     {
       die("ERROR : -> ".$MySQLiconn->connect_error);
     }
 ?>