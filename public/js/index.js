

/* Particle Animation */
var canvas = document.getElementById('particle-canvas');
var ctx = canvas.getContext('2d');
var x;
var y;

function resizeCanvas(){
    var aux = $(canvas);
    var newheight =  $(".animation-container").outerHeight();
    var newwidth = $(".animation-container").outerWidth(); 
   // aux.css({ height: newheight, width: newwidth});
    ctx.canvas.height = newheight;
    ctx.canvas.width = newwidth;
    x= ctx.canvas.width;
    y= ctx.canvas.height;
}

$(window).on("resize", resizeCanvas);
resizeCanvas();

var raf;

var ballNumber = 60;
var balls = [];


for(var i = 0; i < ballNumber; i++) {
    var randomBallPositionX = Math.floor(Math.random() * x);
    var randomBallPositionY = Math.floor(Math.random() * y);
    var randomBallDirectionX = (Math.floor(Math.random() * 6) -3);
    var randomBallDirectionY = (Math.floor(Math.random() * 6) -3);
    var ball = {
        x: randomBallPositionX,
        y: randomBallPositionY,
        vx: randomBallDirectionX,
        vy: randomBallDirectionY,
        radius: 2,
        color: '#ffc107',
        draw: function() {
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.radius, 0, Math.PI*2.1, false);
            ctx.closePath();
            ctx.fillStyle = this.color;
            ctx.fill();
        }
    };
    balls.push(ball)    
}

(function update() {
    ctx.clearRect(0, 0, x, y)
    
    balls.forEach(function(ball) {
        ball.draw();
        ball.x += ball.vx;
        ball.y += ball.vy;

        for(var i = 0; i < balls.length; i++) {
            var otherBall = balls[i];
            
            var a = otherBall.x - ball.x;
            var b = otherBall.y - ball.y;
            var distance = Math.sqrt(a*a + b*b);

            if (distance < 200) {
                var opacity = (distance / 100)
                ctx.globalAlpha = 1-opacity.toFixed(2);
                
                ctx.beginPath();
                ctx.moveTo(ball.x, ball.y);
                ctx.lineTo(otherBall.x, otherBall.y);
                ctx.strokeStyle = 'rgba(255, 193, 7,0.1)' 
                ctx.closePath();
                ctx.stroke();
            }
            
        }

        if (ball.y + ball.vy > y || ball.y + ball.vy < 0) {
            ball.vy = -ball.vy;
        }
        if (ball.x + ball.vx > x || ball.x + ball.vx < 0) {
            ball.vx = -ball.vx
        }
    }, this);
    raf = window.requestAnimationFrame(update);
})();

//Swiper Slide
var swiper = new Swiper('.swiper-container', {
    slidesPerView: 5,
    spaceBetween: 30,
    observer: true,
    observeParents: true,
    autoplay: {
        delay: 2400,
    },
    breakpoints: {
        // when window width is <= 361px
        340: {
            slidesPerView: 1,
            spaceBetween: 10
        },
        // when window width is <= 480px
        768: {
            slidesPerView: 2,
            spaceBetween: 20
        },
        // when window width is <= 767px
        998: {
            slidesPerView: 4,
            spaceBetween: 30
        }
    }
});