<?php
// http://localhost/StringExercise.php
$city = "Kingston";
$cityTwo = "cornwall";

//empty function
if(empty($city))
    echo "IT WAS TRUE";
else
    echo"FALSE";
echo "<br>";

// substring exercise
$substring = substr($city/*Kingston*/, 3,5);
echo "substring is " . $substring . "<br>";

//strpos function
$positionFound = strpos($city,"x");
if($positionFound !== false)
    echo "POS found";
else
    echo "POS not found";
echo "<br>";

//str_replace function
$newString = str_replace("st", "pog",$city);
echo $newString;
echo "<br>";

//ltrim function
$leading = "     leader";
echo "length before ltrim is " .  strlen($leading) . "<br>";
$leading = ltrim($leading); 
echo "length after using ltrim is " . strlen($leading) . "<br>";

//rtrim function
$trailing = "trailer     ";
echo "length before using rtrim is " . strlen($trailing) . "<br>";
$trailing = rtrim($trailing);
echo "length after using rtrim is " . strlen($trailing) . "<br>";

//trim function
$trailandlead = "    Both   ";
echo "length before using trim is " . strlen($trailandlead) . "<br>";
$trailandlead = trim($trailandlead);
echo "length after using trim is " . strlen($trailandlead) . "<br>";

//lcfirst function
$lowerCaseCity = lcfirst($city);
echo "after using lcfirst Kingston is now " . $lowerCaseCity . "<br>";

//ucfirst function
$upperCaseCity = ucfirst($cityTwo);
echo "after using ucfirst cornwall is now " . $upperCaseCity . "<br>";

//ucwords function
$sentence = "cool boat drives nice";
$allUppercase = ucwords($sentence);
echo  $sentence . " becomes " . $allUppercase . " after using ucwords function <br>";

//strtolower
$town = "AmhErsTview";
$lowerTown = strtolower($town);
echo $town . "is now " . $lowerTown . " after using strtolower function <br>";

//strtoupper
$upperTown = strtoupper($town);
echo $town . "is now " . $upperTown . " after using strtoupper function <br>"; 

//strcmp function
$resultOne = strcmp("A", "B") . "<br>";
echo $resultOne;

$resultsTwo = strcmp("a", "A");
echo $resultsTwo;
?>