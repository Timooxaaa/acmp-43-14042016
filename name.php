<?php
$gnr = file_get_contents('input.txt');
$k = 0;
$max = 0;
for($i=0;$i < strlen($gnr);$i++)
{
    if ($gnr[$i]=="0")
     $k = $k + 1;
    else
     if ($max<$k)
      $max = $k;
}
echo "$max";
?>