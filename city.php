


<h3> If you like these teams maybe you should take a vacation to one of these cities:<h3>
    
<?php

//get array data to be able to execute loop
require __DIR__ . ("/data.php");


// Create a space to organize cities inside
$uniqueCity=array();



// search for citynames by looping
foreach ($teams as $team){

 //simplify value that is to be counted   
$city=$team['city'];    

// to filter out un-unique cities
if (in_array($city, $uniqueCity)){

}
// if the value already exists in the array, do nothing
 else {
array_push($uniqueCity, $city);
echo $city . "\n";
}
// if the value does not exist in the array,
// add it to the array and echo it.


}
