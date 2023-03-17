
function addNumber(numbers){
    let sum = 0
    for(let i = 0; i < numbers.length; i++){
        sum += numbers[i];
    }
    document.getElementById('addButton').style.display = "none";
    document.getElementById('add').innerHTML = "The sum is " + sum;
}


function findMax(){
    let max = 0;
    const numbers = [1,4,6,34,234,6,9,20];
    for(let i = 0; i < numbers.length; i++){
        if(numbers[i] > max){
            max = numbers[i];
        }
    }

    document.getElementById('maxButton').style.display = "none";
    document.getElementById('max').innerHTML = "The largest number in the array is: " +max;
}

function addOnlyNumbers(arr){
    let sum = 0;
    for(let i = 0; i < arr.length; i++){
        if(!(isNaN(parseFloat(arr[i])))){
            sum += parseFloat(arr[i]);
        }

    }

    document.getElementById('onlyNumbers').style.display = "none";
    document.getElementById('onlyNums').innerHTML = "The sum of number in this array is: " + sum;
}

function getDigits(sentence){
    let digitString = sentence.match(/\d+/g);
    let digits = digitString.join('');

    document.getElementById('digitsButton').style.display = "none";
    document.getElementById('digits').innerHTML = "The digits in the string were: " + digits;
}

function reverseString(s){

    let stringArr = s.split("");

    document.getElementById('reverseButton').style.display = "none";
    document.getElementById('reverse').innerHTML = stringArr.reverse().join("");

}

function getCurrentDate(){
    const date = new Date();

    const days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    const months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

    let dateString = days[date.getDay()]+", " + months[date.getMonth()]+" " + date.getDay() +", " +date.getFullYear();

    document.getElementById('dateButton').style.display = "none";
    document.getElementById('date').innerHTML = dateString;
}
