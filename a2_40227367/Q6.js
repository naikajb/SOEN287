let index = 0;

let arrImages = ["pic1.webp","pic2.webp", "pic3.webp","pic4.webp"];

function next(){
    if ( index == arrImages.length - 1 ){
        index = 0;
    }else{
        index++;
    }
    document.getElementById("slideshow").src = arrImages[index];
}

function previous(){
    if(index == 0){
        index = 2;
    }else{
        --index;
    }
    document.getElementById("slideshow").src = arrImages[index];
}

