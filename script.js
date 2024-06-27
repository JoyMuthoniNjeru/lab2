function DynamicTimer(){
    var today=new Date();
    var h=today.getHours();
    var m=today.getMinutes();
    var s=today.getSeconds();

    document.getElementById('dtmer').innerHTML = h + ":" + m + ";" + s;
    t=setTimeout('DynamicTimer()', 500);
}

function addZero(z){
    if(z<10){
        z="0" + z;
    }
    return z;
}