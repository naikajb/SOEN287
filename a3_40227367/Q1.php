<!DOCTYPE html>
<html lang = en>
<head>
    <title>A3 - Question 1</title>
</head>

<body>
<?php
function findSummation($N){
    $sum = 0;
    for($i = 0; $i <= $N; $i++){
        $sum = $sum + $i;
    }
    return $sum;
}

echo "<b>Testing the function findSummation() with N = 10: </b>";
echo findSummation(10);

function uppercaseFirstandLast($str){
    return ucwords($str);
}

echo "</br><b>Testing function uppercaseFirstandLast with \"hello my name is naika\": </b>";
echo uppercaseFirstandLast("hello my name is naika");

function findAverage_and_Median($arr){
    $average = 0;
    $median = 0;
    sort($arr);

    for($i = 0; $i < count($arr); $i++){
        $average = $average + $arr[$i];

        if(count($arr) %2 != 0){
            $mid = count($arr)/2 - 0.5;
            $median = $arr[$mid];
        }else{
            $mid = count($arr)/2;
            $median = ($arr[$mid-1] + $arr[$mid+1])/2;
        }
    }
    $average = $average/count($arr);

    return "The average is $average and the median is $median";
}

echo "</br><b>Testing the function findAverage_and_Median with the array [1,2,3,4,5,6]:  </b>" ;
echo findAverage_and_Median([1,2,3,4,5,6]);


function find4Digits($str){

}
?>
</body>

<!--
D) Function: find4Digits
Parameter: A string of numbers separated by spaces. Return the first four-digit number in the string; false if none.
-->

</html>
