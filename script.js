let prayerTimes = {};
const adan = new Audio('azan12.mp3');

function updateClock() {
    const clock = new Date();
    const hours = String(clock.getHours()).padStart(2,'0');
    const minutes = String(clock.getMinutes()).padStart(2,'0');
    const seconds = String(clock.getSeconds()).padStart(2,'0');
    document.getElementById('clock').innerHTML = `${hours}:${minutes}:${seconds}`;

    if (Object.keys(prayerTimes).length > 0) {

       const currentTime=`${hours}:${minutes}`;
        if (Object.values(prayerTimes).includes(currentTime)) {
            adan.play();
        }
    }
}

async function fetchPrayerTimes() {

const response = await fetch('prayer_times.php');
prayerTimes = await response.json();
document.getElementById('fajr-time').innerHTML =prayerTimes.fajr;
document.getElementById('dhuhr-time').innerHTML =prayerTimes.dhuhr;
document.getElementById('asr-time').innerHTML =prayerTimes.asr;
document.getElementById('maghrib-time').innerHTML =prayerTimes.maghrib;
document.getElementById('isha-time').innerHTML =prayerTimes.isha;


}


 setInterval(() => {
    updateClock()
 }, 1000);
 fetchPrayerTimes()