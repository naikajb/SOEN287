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

    if(sec< 10) {
        sec = "0" + sec;
    }

    if ( min < 10){
        min = "0"+min;
    }

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

    if( x.length === 0 || y.length === 0|| z.length === 0|| k.length === 0){
        alert("Make sure all input fields have been filled out.")
    }

}

// to validate the pet-giveaway form
function validate(){
    let type = document.forms["animalInfo"]["type"].value;
    let breed = document.forms["animalInfo"]["breed"].value;
    let comments = document.forms["animalInfo"]["comments"].value;
    let age = document.forms["animalInfo"]["age"].value;
    let sex = document.forms["animalInfo"]["sex"].value;
    let anim = document.forms["animalInfo"]["suitableAnim"].value;
    let kids = document.forms["animalInfo"]["suitableKids"].value;
    let fname = document.forms["animalInfo"]["fname"].value;
    let lname = document.forms["animalInfo"]["lname"].value;
    let email = document.forms["animalInfo"]["email"].value;

    if(type.length === 0 || breed.length === 0 || comments.length === 0 || age.length === 0|| sex.length === 0 ||anim.length === 0 || kids.length === 0 || kids.length === 0 || fname.length === 0 || lname.length === 0 || email.length === 0){
        alert("Make sure all input fields have been filled out.");
    }


    if(fname.search(/\d/)===-1 || lname.search(/\d/)=== -1) {
        alert("No digits allowed in name fields. ");
    }




}

