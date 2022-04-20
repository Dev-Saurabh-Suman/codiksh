<?php 

// $productFile = fopen("trucks.csv", "r") or die("Unable to open file!");
$headings = []; //store headings
$file = []; //store row data
foreach (file('example.csv') as $key => $line) {
	if ($key == 0) {
		$headings = explode(',', $line);
	}else{
		$file[] = explode(',', trim($line));
	}
}
$array= array_filter(array_map('array_filter',$file));
$file = [];
foreach($array as $key=>$val){
	foreach($val as $k=>$v){
		$file[$key][$headings[$k]] = $v;
	}
}
	
$file = json_encode($file,false);
echo $file;

// while(!feof($productFile)) {
//   	echo fgets($productFile) . "<br><br><br>";
// }

// fclose($productFile);

?>