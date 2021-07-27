var myDate=new Date("Aug 1, 2021 10:00:00").getTime();


var x = setInterval(function () {
    var now=new Date().getTime();
    var diff=myDate - now;
    var Days=Math.floor(diff /(1000*60*60*24));
    var Hours=Math.floor((diff % (1000 * 60 *60 *24)) / (1000*60*60));
    var Mins=Math.floor((diff % (1000 * 60 *60)) / (1000*60));
    var Secs=Math.floor((diff % (1000 * 60)) / 1000);
    console.log(Secs);

    document.querySelector('#days').textContent=Days;
    document.querySelector('#hours').textContent=Hours;
    document.querySelector('#mins').textContent=Mins;
    document.getElementById('secs').innerHTML=Secs;
}, 1000 );