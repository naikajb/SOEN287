setInterval(myTime, 1000);
function myTime() {
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
    /*document.getElementById('date').innerHTML=day+'<sup>th</sup>';
    document.getElementById('dayName').innerHTML=dayName;
    document.getElementById('month').innerHTML=month;
    document.getElementById('year').innerHTML=year;
    document.getElementById('hour').innerHTML=hour+'h';
    document.getElementById('mins').innerHTML=mins+'m';
    document.getElementById('sec').innerHTML=sec+'s';*/
}

function validate(){
    if(document.getElementById("breed").value == ""){
        alert('fill it out');
    }
}
