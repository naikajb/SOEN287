setInterval(showDate, 1000);

function showDate() {
    const date = new Date();
    const days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    let dayName = days[date.getDay()];
    let day = date.getDate();
    let month = months[date.getMonth()];
    let year = date.getFullYear();
    let hour = date.getHours();
    let min = date.getMinutes();
    let sec = date.getSeconds();

    let textDate = dayName + ", " + month +" " +day + ", " + year + "\t"+hour +":"+min+":"+sec;
    document.getElementById('date').innerHTML = textDate;

}

function checkEmptyDog(){
   let x = document.forms["dogForm"]["breed"].value;
   let y = document.forms["dogForm"]["age"].value;
   let z = document.forms["dogForm"]["sex"].value;
   let k = document.forms["dogForm"]["gets-along"].value;

   if( x.length == 0 || y.length == 0|| z.length == 0|| k.length == 0){
       alert("Make sure all input fields have been filled out.");
   }
}

function checkEmptyCat(){
    let x = document.forms["catForm"]["breed"].value;
    let y = document.forms["catForm"]["age"].value;
    let z = document.forms["catForm"]["sex"].value;
    let k = document.forms["catForm"]["gets-along"].value;

    if( x.length == 0 || y.length == 0|| z.length == 0|| k.length == 0){
        alert("Make sure all input fields have been filled out.")
    }

}
function validate(){
    if(document.getElementById("breed").value == ""){
        alert('fill it out');
    }
}

