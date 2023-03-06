let index = 0;

let arrImages = ["pic1.webp", "pic2.webp"];

function next(){
    if ( n == arrImages.length - 1 ){
        n = 0;
    }else{
        n++;
    }

    document.getElementById("slideshow").src = arrImages[index];
}

function previous(){
    if(n == 0){
        n = 2;
    }else{
        --n;
    }
    document.getElementById("slideshow").src = arrImages[index];
}

