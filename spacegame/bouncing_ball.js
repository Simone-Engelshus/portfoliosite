let balls = [];

let cats = [];
// let ball1;
// let ball2;

function preload() {
    $bg = loadImage('space/spacebg.jpg');
    for (let i = 0; i < 4; i++) {
        cats[i] = loadImage('cats/cat' + i + '.png');
    }

}

function setup() {
    let cnv = createCanvas(600, 400);
    cnv.position(0, 0, 'static');

    // cnv.center();
    // for (let i = 0; i < 10; i++) {
    //     let x = 300 + i + i;
    //     let y = 200 + i + i;
    //     let xspeed = 0.5 + i;
    //     let yspeed = -1 + i;
    //     balls[i] = new Ball(x, y, xspeed, yspeed);
    // }
}

var ballSpeedX = 6;

function increaseSpeed() {
    ballSpeedX++;
    return ballSpeedX;
}
function decreaseSpeed() {
    if (ballSpeedX > 0) {
        ballSpeedX--;
        return ballSpeedX;
    }
    else {
        return ballSpeedX;
    }
}


function mousePressed() {
    let cat = random(cats);
    let b = new Ball(mouseX, mouseY, ballSpeedX, -3, cat);
    balls.push(b);
    for (let i = 0; i < balls.length; i++) {
        if (balls[i].contains(mouseX, mouseY)) {
            balls.splice(i, 1);
        }
    }
}

// ball1 = new Ball(300, 200, 6, -3);
// ball2 = new Ball(200, 100, 3, -2);

function draw() {
    background($bg);
    for (let i = 0; i < balls.length; i++) {
        balls[i].move();
        balls[i].bounce();
        balls[i].display();
    }
    // ball1.move();
    // ball1.bounce();
    // ball1.display();
    // ball2.move();
    // ball2.bounce();
    // ball2.display();
}


var ballWidth = 50;
var ballHeight = 50;

function increaseSize() {
    ballWidth++;
    ballHeight++;
    return ballWidth, ballHeight;
}
function decreaseSize() {
    ballWidth--;
    ballHeight--;
    return ballWidth, ballHeight;
}

class Ball {
    constructor(x, y, xspeed, yspeed, img) {
        this.x = x;
        this.y = y;
        this.xspeed = xspeed;
        this.yspeed = yspeed;
        this.cat = img;
    }

    move() {
        this.x = this.x + this.xspeed;
        this.y = this.y + this.yspeed;
    }

    bounce() {
        if (this.x > (width - 50) || this.x < 0) {
            this.xspeed = this.xspeed * -1;
        }
        if (this.y > (height - 50) || this.y < 0) {
            this.yspeed = this.yspeed * -1;
        }
    }

    display() {
        image(this.cat, this.x, this.y, ballWidth, ballHeight);
        // stroke(255);
        // strokeWeight(4);
        // ellipse(this.x, this.y, 24, 24);
        // if (this.x < 100) {
        //     fill(100, 20, 100);
        // }
        // else {
        //     fill(255, 0, 200);
        // }
    }
}
function clearArray() {
    return balls = [];
}


