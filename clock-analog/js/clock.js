// Posun o jednu sekundu = posun raficky o 6 stupnu.
// 360 / 60 = 6 ...
const deg = 6;
const hourHand = document.querySelector('#hour');
const minHand = document.querySelector('#min');
const secHand = document.querySelector('#sec');
            
setInterval(() => {      
   // Spocitani uhlu o kolik se maji raficky natocit
    let day = new Date();        
    let hh = day.getHours() *30;
    let mm = day.getMinutes() * deg;
    let ss = day.getSeconds() * deg;    
    //console.log('ss: ' + ss );
    
    // Vlastni natoceni rafik
    hourHand.style.transform = `rotateZ(${(hh)+(mm/12)}deg)`;
    minHand.style.transform = `rotateZ(${mm}deg)`;
    secHand.style.transform = `rotateZ(${ss}deg)`;
    
    // 1000 = 1000 mili sekund - provede tuto funkci kazdou sekundu...
},1000);


