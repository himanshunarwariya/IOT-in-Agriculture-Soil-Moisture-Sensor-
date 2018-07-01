var meter = document.querySelector("#moisture-meter");
var moisture = meter.textContent; moisture = Number(moisture);
moisture = 100 - (moisture - 330)/7;

var m = parseInt(moisture);
meter.textContent = m;
width = "width: " + m + "%";
meter.setAttribute("style", width);
meter.setAttribute("aria-valuenow", m);
