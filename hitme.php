<?php
$file = fopen("log.txt", "a"); 
$currentTimeinSeconds = time();
$currentDate = date('Y-m-d H:i:s', $currentTimeinSeconds);
fwrite($file,"\n");
$data = "-----NEW HEADERS BEGIN-----";
fwrite($file,$currentDate);
fwrite($file,$data."\n\n");
fclose($file);

foreach (getallheaders() as $name => $value) {
        $file = fopen("log.txt", "a");
	fwrite($file,$name.": ");
	fwrite($file,$value."\n");
	fclose($file);
}
?>


