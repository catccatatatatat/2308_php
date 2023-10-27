var londonClock = document.getElementById('clock-london');
var usClock = document.getElementById('clock-us');
var londonInterval;
var usInterval;

function updateClocks() {
    var now = new Date();
    var londonTime = new Date(now.toLocaleString("en-US", {timeZone: "Europe/London"}));
    var usTime = new Date(now.toLocaleString("en-US", {timeZone: "America/New_York"}));

    document.getElementById('clock').textContent = '한국 : ' + now.toLocaleTimeString();
    londonClock.textContent = '런던 : ' + londonTime.toLocaleTimeString();
    usClock.textContent = '미국 : ' + usTime.toLocaleTimeString();
}

function stopClock() {
    clearInterval(londonInterval);
    clearInterval(usInterval);
}

function reStartClock() {
    updateClocks();
    londonInterval = setInterval(updateClocks, 1000);
    usInterval = setInterval(updateClocks, 1000);
}

reStartClock();
