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

   if( x.length == "" || y.length == ""|| z.length == ""|| k.length == ""){
       alert("Make sure all input fields have been filled out.");
   }
}

function checkEmptyCat(){
    let x = document.forms["catForm"]["breed"].value;
    let y = document.forms["catForm"]["age"].value;
    let z = document.forms["catForm"]["sex"].value;
    let k = document.forms["catForm"]["gets-along"].value;

    if( x.length == "" || y.length == ""|| z.length =="" || k.length == ""){
        alert("Make sure all input fields have been filled out.")
    }

}

// to validate the pet-giveaway form
/*function validate(){
   let gender = document.querySelector('input[name = "sex"]:checked');
   let statement = "These are problems in your input:\n";
   let valid = true;

   if(gender ==null){
       statement += "\t- make sure a gender has been selected.\n"
       valid = false;
   }


   let kids = document.querySelector('input[name = "suitableKids"]:checked');
   if (kids == null){
       statement += "\t- tell us if your pet gets along with other kids and animals.\n";
       valid = false;
   }

   let pets = document.querySelector('input[name = "suitablePets"]:checked');
    if (pets == null){
        valid = false;
    }

    let first = document.getElementById('fname').value;
    let num = first.match(/\d+/g);

    let last = document.getElementById('lname').value;
    num += last.match(/\d+/g);

    if(num != ""){
        statement += "\t- Name fields should not have numbers in them."
        valid = false;
    }

    if(!valid){
        alert(statement);
    }

}*/

