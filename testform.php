<?php

   $digits = $_GET['number'];
   $sum = 0;
   for ($i=0; $i<strlen($digits); $i++) {
      $sum += $digits[$i]; 
   }
   echo "<br /> the sum of digits is :" . $sum . "<br />";
   
   echo "GLOBALS<br />";
   print_r($GLOBALS);
   echo "<br /><br />";
   
      echo "_SERVER<br />";
   print_r($_SERVER);
   echo "<br /><br />";
   
      echo "_GET<br />";
   print_r($_GET);
   echo "<br /><br />";
   
      echo "_POST<br />";
   print_r($_POST);
   echo "<br /><br />";
   
      echo "_FILES<br />";
   print_r($_FILES);
   echo "<br /><br />";
   
      echo "_COOKIE<br />";
   print_r($_COOKIE);
   echo "<br /><br />";
   
      echo "_SESSION<br />";
   print_r($_SESSION);
   echo "<br /><br />";
   
      echo "_REQUEST<br />";
   print_r($_REQUEST);
   echo "<br /><br />";
   
      echo "_ENV<br />";
   print_r($_ENV);
   echo "<br /><br />";

?>