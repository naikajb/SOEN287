function checkValid(id){
    //if the element is NULL we return false
    if(id.value == "" ){
        return false;
    }else{
        return true;
    }
}

function computeTotal(){
    let id1 = document.getElementById("webProg");
    let id2 = document.getElementById("php");
    let id3 = document.getElementById("jquery");

    //if any of the the quantities are left empty alert pops up
    if( !(checkValid(id1)) || !(checkValid(id2))|| !(checkValid(id3)) ) {
        alert("Check that all quantities were properly filled.");
    }else{

        //if all was filled, checks that its a number before manipulating 
        if(id1.value == NaN || id2.value  == NaN || id3.value == NaN){
            alert("make sure all values are numerical values");
        }else{

            let total1 = parseFloat(id1.value * 19.99);
            let total2 = parseFloat(id2.value * 86.00);
            let total3 = parseFloat(id3.value * 55.00);
            

            var text = "<b> Basic Web Programming "+"(Quantity="+id1.value+"):</b> $"+total1;
            
            text += "</br><b>Intro to PHP "+"(Quantity="+id2.value+"):</b> $"+total2;
            
            text += "</br><b>Advanced jQuery "+"(Quantity="+id3.value+"):</b> $"+total3 + "</br>";
  
            let total = total1 + total2 +total3;

            text += "</br><b> Final Total: </b>$" +total;
            

            document.getElementById("orderResults").innerHTML = text;

        }

        


    }


    
}