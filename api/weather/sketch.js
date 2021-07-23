var weather;

var api = 'http://api.openweathermap.org/data/2.5/weather?q=';
var apiKey = '&APPID=962e2171be48c7f334a6a9d5c8c35853';
var units = '&units=metric';

var input;

function setup() {
    createCanvas(600, 200);
    var button = select('#submit');
    button.mousePressed(weatherAsk);
    input = select('#city');
}

function weatherAsk() {
    var url = api + input.value() + apiKey + units;
    loadJSON(url, gotData);
}

function gotData(data) {
    weather = data;
}

function draw() {
    background(0);
    if (weather) {
     var temp = weather.main.temp;
     var humidity = weather.main.humidity;
     ellipse(100, 100, temp, temp);
     ellipse(300, 100, humidity, humidity);
    }
}

