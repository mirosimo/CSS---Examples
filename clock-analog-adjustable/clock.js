const secondHand = document.querySelectorAll('.second-hand');
const minsHand = document.querySelectorAll('.min-hand');
const hourHand = document.querySelectorAll('.hour-hand');

 function setDate() {
  const now = new Date();

  const seconds = now.getSeconds();
  const secondsDegrees = ((seconds / 60) * 360) + 90;
  secondHand.forEach(function(item, index) {
    item.style.transform = `rotate(${secondsDegrees}deg)`;
  });

  const mins = now.getMinutes();
  const minsDegrees = ((mins / 60) * 360) + ((seconds/60)*6) + 90;
  minsHand.forEach(function(item, index) {
    item.style.transform = `rotate(${minsDegrees}deg)`;
  });

  const hour = now.getHours();
  const hourDegrees = ((hour / 12) * 360) + ((mins/60)*30) + 90;
  hourHand.forEach(function(item, index) {
    item.style.transform = `rotate(${hourDegrees}deg)`;
  });
}

setInterval(setDate, 1000);

setDate();