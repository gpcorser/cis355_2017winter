Zippy Dee<br/>
<?php
   echo "<strong>hello world <br/>hows it \"going\" \\world</strong>";
   //echo '<strong>hello world <br/>hows it \"going\" \\world</strong>';
   
   $a = 1; 
   $b = 1.5;
   $c = "hello";
   $d = false;
   $e = array(1, 2, 3, 4, 5);
   // $f = {hello: "hi", world: "globe"};
   $g = null;
   
   echo "<br />a + b equals " . ($a + $b); 
   
   echo "<br />" . $c[0];
   
   $digits = "1111111";
   $sum = 0;
   for ($i=0; $i<strlen($digits); $i++) {
      $sum += $digits[$i]; 
   }
   echo "<br /> the sum of digits is :" . $sum . " <br /> <br /> ";
   
   print_r($e); 
   
   echo " <br /> <br /> ";
   
   $e = array('fred' => 1, 'wilma' => 2, 'dino' => 3, 'bambam' => 4, 'pebbles' => 5, 0 => 'barney');
   
   print_r($e);    
   
   echo $e[0]; 
   
   foreach ($e as $key => $value) {
	   echo $key . " " . $value . "<br />";
   }
   
   
   
?>