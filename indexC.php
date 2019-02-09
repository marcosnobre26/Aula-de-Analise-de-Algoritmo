<!DOCTYPE html>
<html>
<body>

<?php
echo "My first PHP script!";

//A

// Iniciamos o "contador"
list($usec, $sec) = explode(' ', microtime());
$script_start = (float) $sec + (float) $usec;

$file_handle = fopen("dataset-2-c.csv", "r");
$n=0;
while (!feof($file_handle)) {
   $line = fgets($file_handle);
   
   if($line>$n)
   {
	   $n=$line;
   }
}

echo "O maior numero é: ".$n." <br>";
fclose($file_handle);

 
// Terminamos o "contador" e exibimos
list($usec, $sec) = explode(' ', microtime());
$script_end = (float) $sec + (float) $usec;
$elapsed_time = round($script_end - $script_start, 5);

echo 'Elapsed time: ', $elapsed_time, ' secs. Memory usage: ', round(((memory_get_peak_usage(true) / 1024) / 1024), 2), 'Mb  <br> <br> <br>';

?> 

</body>
</html>