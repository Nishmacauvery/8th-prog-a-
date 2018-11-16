<?php 
$array1 = Array( Array(1, 2) , Array(3, 4) );
$array2 = Array( Array(0, 1) , Array(5, 6) );
$array = Array();

foreach ($array2 as $idB => $columnsB) {
    for($i = 0; $i < count($columnsB); $i++) {
        $array[$i][] = $columnsB[$i];  
    }
}

$productArray = Array();

for ($i = 0; $i < count($array1); $i++) {
    for ($j = 0; $j < count($array); $j++) {
        $productArray[$i][$j] = $array1[$i][$j] * $array[$j][$i];
    }
}
echo "<h2> first of Matrix </h2>";
for ($row = 0; $row < 2; $row++) {
	echo "<br>";
  for ($col = 0; $col < 2; $col++) {
    echo " ".$array1[$row][$col];
  }
}
echo "<h2> second  of Matrix </h2>";
for ($row = 0; $row < 2; $row++) {
echo "<br>";  
  for ($col = 0; $col < 2; $col++) {
    echo " ".$array2[$row][$col];
  }
  
}
echo "<h2> resultant of Matrix </h2>";
for ($row = 0; $row < 2; $row++) {
echo "<br>";  
  for ($col = 0; $col < 2; $col++) {
    echo " ".$productArray[$row][$col];
  }
  
}
?>
