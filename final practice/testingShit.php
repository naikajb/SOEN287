<?php
/*
 * this is a php document to write the functions that were in A3
 */

#function 1 takes a number as parameter and sums up all numbers from 1 to that given number
function summation($N){

    $sum = 0;
    for($i = 0; $i <= $N; $i++){
        $sum += $i;
    }
    return $sum;
}

function findAvg_and_Median($arr){
    sort($arr);
    $avg = 0;
    $median = 0;

    for($i = 0; $i <count($arr); $i++){
        $avg += $avg + $arr[$i];
        $middle = count($arr)/2;

        if(count($arr) % 2 == 0){
            $median = ($arr[$middle-1] +$arr[count($middle+1)])/2;
        }else{
            $median = $arr[count($middle)-0.5];
        }
    }

    $avg = $avg/count($arr);
    return "The average of this array is ".$avg." and the median is ".$median;
}
?>
<!DOCTYPE html>
<html lang = "en">
    <header>
        <title>Functions in PHP</title>
    </header>

    <body>
        <div class = "results">
            <p><b>function 1 takes a number as parameter and sums up all numbers from 1 to that given number
                </b></p>
            <?php
            echo("<p>Testing summation function with N = 10: ".summation(10)."</p");
            ?>
        </div>

        <div class = "results">
            <p><b>function 2 takes an array of numbers and returns the average and median
                </b></p>
            <?php
            echo("<p>Testing summation function with the array [2,3,4,5,35]: ".findAvg_and_Median([2,3,4,5,35])."</p");
            ?>
        </div>
    </body>
</html>
