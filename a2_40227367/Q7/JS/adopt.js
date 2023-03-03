
function getDate(){
    const months = ["January", "February","March", "April", "May", "June", "July", "August", "September", "October","November", "December"];

    const days = ["Sunday",'Monday', "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];


    const d = new Date();

    let day = days[d.getDay()];
    let month = months[d.getMonth];
    let time = d.getHours() + ":" + d.getMinutes() +":"+ d.getSecond();

    let dateAndTime = time +" "+day+", "+month+" " + d.getDate()+"," + d.getFullYear();

    //return dateAndTime;
    document.getElementById("date").innerHTML = dateAndTime;
    setTimeout(getDate,1000);
}
getDate();

function validate(){
    if(document.getElementById("breed").value == ""){
        alert('fill it out');
    }
}
