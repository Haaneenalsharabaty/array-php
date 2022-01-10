<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php



 echo "<h2>Q1</h2>";
 echo"<br>";
$color = array( 'green', 'white','red');
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[0] lawn, the $color[1] house, the leaden sky. The new president and his first lady. - Richard M. Nixon";





echo "<h2>Q2</h2>";
 echo"<br>";
    $color = array( 'green', 'white','red');
    echo "<ul>
    <li>$color[0]</li>
    <li>$color[1]</li>
    <li>$color[2]</li>
    <ul>
    ";






 echo "<h2>Q3</h2>";
 echo"<br>";

$cities=array("italy"=>"roma", "france"=>"paris","germany"=>"Barlin","greece"=>"athens");

foreach($cities as $country => $capital)
{
echo "The capital of $country is $capital" ;
echo"<br>";
}









echo "<h2>Q4</h2>";
echo"<br>";
    $color = array( 'green', 'white','red');
    echo $color[0];










    echo "<h2>Q5</h2>";
    echo"<br>";
    $array1 = array( '1','2','3','4','5' );

$x= '$';
array_splice( $array1, 3, 0, $x); 

foreach ($array1 as $arr) 
{echo "$arr ";}









echo "<h2>Q6</h2>";
echo"<br>";



$array=array("d"=>"lemon","a"=>"orange","b"=>"banana","c"=>"apple"); asort($array);
foreach($array as $letter=>$asc){
// {arsort($asc);
echo $letter." : ".$asc;
echo"<br>";
}







echo "<h2>Q7</h2>";
echo"<br>";
$temperatures = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";

$temp_array = explode(',', $temperatures);
$tot_temp = 0;
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 
echo "<br>";
sort($temp_array);
echo "<br>";
echo " lowest temperatures :";

for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";

}
echo "<br>";
echo " highest temperatures :";
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";

}







echo "<h2>Q8</h2>";
echo"<br>";
$array1 = array("color"=>"red",2,4);
$array2 = array("a", "b","color"=>"green","shape"=>"trapezoid",4);
$result = array_merge($array1, $array2);
print_r($result);







echo "<h2>Q9</h2>";
echo"<br>";
$color=array("red","blue","white","yellow");
$color = array_flip($color);
$color = array_change_key_case($color, CASE_UPPER);
$color = array_flip($color);

echo " array(
    $color[0]
    <br>
    $color[1]
    <br>
    $color[2]
    <br>
    $color[3]
)";




echo "<h2>Q10</h2>";
echo"<br>";
$color=array("RED","BLUE","WHITE","YELLOW");
$color = array_flip($color);
$color = array_change_key_case($color, CASE_LOWER);
$color = array_flip($color);

echo " array(
    $color[0]
    <br>
    $color[1]
    <br>
    $color[2]
    <br>
    $color[3]
)";



echo "<h2>Q11</h2>";
echo"<br>";
echo implode(",",range(200,250,4))."\n";





echo "<h2>Q12</h2>";
echo"<br>";
$array = array("abcd","abc","de","hjjj","g","wer");
$new_array = array_map('strlen', $array);

echo "The shortest array length is " . min($new_array) .
". The longest array length is " . max($new_array).'.';




echo "<h2>Q13</h2>";
echo"<br>";

$number=range(11,20);
shuffle($number);
for ($x=0; $x< 10; $x++)
{
echo $number[$x].' ';
}

echo "<h2>Q14</h2>";
echo"<br>";
$array1=array(2,0,10,12,6);
function min_values_not_zero(Array $values) 
{
return min(array_diff(array_map('intval', $values), array(0)));
}
print_r(min_values_not_zero(array(2,0,10,12,6)));

    ?>
    
</body>
</html>