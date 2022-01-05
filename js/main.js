$(document).ready(function() {
  






  $('.nonloop').owlCarousel({
    center: true,
    items:2,
    loop:false,
    nav:true,
    margin:10,
    responsive:{
        600:{
            items:4
        }
    }
  });

});

function homeCard(card) {

  if(card == 'card1'){
    var card = $('#card1');
  } 
  else if (card == 'card2'){
    var card = $('#card2');
  }
  else if (card == 'card3') {
    var card = $('#card3');
  }
  else if (card == 'card4'){
    var card = $('#card4');
  }
  else if (card == 'card5'){
    var card = $('#card5');
  }
  else {
    var card = $('.card');
  }
    // Set sticker height + hover animation
    var setCardStyle = function(){
      
      //var card = $('.card');
      var cardWidth = card.width();
      var cardHeight = card.height();
      
      // Set scale 
      var cardContentScale = 1;
      card.css('transform','translate3d(0,0,0) matrix3d(1,0,0.00,0.00,0.00,1,0.00,0,0,0,1,0,0,0,0,1) scale('+cardContentScale+')');
      $('.card h1').css('font-size', cardContentScale*40+'px');
      $('.card span').css('font-size', cardContentScale*16+'px');
      $('.card li a').css('font-size', cardContentScale*16+'px');
      
      // Set height
      card.height(cardHeight);
      
      // Generate hover effect
      card
        .mouseover(function(){
          card.mousemove(function(e){
            // Find mouse X position in card
            mouseScreenPositionX = e.pageX;
            cardLeftPosition = card.offset().left;
            mousePosX = ((mouseScreenPositionX - cardLeftPosition)/cardWidth);
            // Calculate maxtrix3d X value
            matrix3dX = ((mousePosX/10000)*1.5)-0.0001;
            
            // Find mouse Y position in card
            mouseScreenPositionY = e.pageY;
            cardTopPosition = card.offset().top;
            mousePosY = ((mouseScreenPositionY-cardTopPosition)/cardHeight);
            // Calculate maxtrix3d Y value
            matrix3dY = ((mousePosY/10000)*1.65)-0.0001;
            
            // Set CSS
            card.css('transform', 'translate3d(0,-5px,0) matrix3d(1,0,0.00,'+matrix3dX+',0.00,1,0.00,'+matrix3dY+',0,0,1,0,0,0,0,1) scale('+cardContentScale*1.04+')');
          });
        })
        .mouseout(function(){
          // Unset CSS on mouseleave
          card.css('transform','translate3d(0,0,0) matrix3d(1,0,0.00,0.00,0.00,1,0.00,0,0,0,1,0,0,0,0,1) scale('+cardContentScale+')');
        });
    }
    
    // Execute function
    setCardStyle();
    $(window).on('resize', function(){
        setCardStyle();
    });

};


function random(low, high) {
  return Math.random() * (high - low) + low;
}

class Visual {
  constructor() {
    this.canvas = document.querySelector("#canvas");
    this.context = this.canvas.getContext("2d");
    this.canvasWidth = 0;
    this.canvasHeight = 0;
    this.particleLength = 150;
    this.particles = [];
    this.particleMaxRadius = 8;

    this.handleMouseMoveBind = this.handleMouseMove.bind(this);
    this.handleClickBind = this.handleClick.bind(this);
    this.handleResizeBind = this.handleResize.bind(this);

    this.initialize();
    this.render();
  }

  initialize() {
    this.resizeCanvas();
    for (let i = 0; i < this.particleLength; i++) {
      this.particles.push(this.createParticle(i));
    }
    this.bind();
  }

  bind() {
    document.body.addEventListener(
      "mousemove",
      this.handleMouseMoveBind,
      false
    );
    document.body.addEventListener("click", this.handleClickBind, false);
    window.addEventListener("resize", this.handleResizeBind, false);
  }

  unbind() {
    document.body.removeEventListener(
      "mousemove",
      this.handleMouseMoveBind,
      false
    );
    document.body.removeEventListener("click", this.handleClickBind, false);
    window.removeEventListener("resize", this.handleResizeBind, false);
  }

  handleMouseMove(e) {
    this.enlargeParticle(e.clientX, e.clientY);
  }

  handleClick(e) {
    this.burstParticle(e.clientX, e.clientY);
  }

  handleResize() {
    this.resizeCanvas();
  }

  resizeCanvas() {
    this.canvasWidth = document.body.offsetWidth;
    this.canvasHeight = document.body.offsetHeight;
    this.canvas.width = this.canvasWidth * window.devicePixelRatio;
    this.canvas.height = this.canvasHeight * window.devicePixelRatio;
    this.context = this.canvas.getContext("2d");
    this.context.scale(window.devicePixelRatio, window.devicePixelRatio);
  }

  createParticle(id, isRecreate) {
    const radius = random(1, this.particleMaxRadius);
    const x = isRecreate
      ? -radius - random(0, this.canvasWidth)
      : random(0, this.canvasWidth);
    let y = random(this.canvasHeight / 2 - 150, this.canvasHeight / 2 + 150);
    y += random(-100, 100);
    const alpha = random(0.05, 1);

    return {
      id: id,
      x: x,
      y: y,
      startY: y,
      radius: radius,
      defaultRadius: radius,
      startAngle: 0,
      endAngle: Math.PI * 2,
      alpha: alpha,
      color: { r: random(0, 100), g: random(0, 100), b: 255 },
      speed: alpha + 1,
      amplitude: random(50, 200),
      isBurst: false
    };
  }

  drawParticles() {
    this.particles.forEach((particle) => {
      // 位置情報更新
      this.moveParticle(particle);

      // particle描画
      this.context.beginPath();
      this.context.fillStyle = `rgba(${particle.color.r}, ${particle.color.g}, ${particle.color.b}, ${particle.alpha})`;
      this.context.arc(
        particle.x,
        particle.y,
        particle.radius,
        particle.startAngle,
        particle.endAngle
      );
      this.context.fill();
    });
  }

  moveParticle(particle) {
    particle.x += particle.speed;
    particle.y =
      particle.startY +
      particle.amplitude * Math.sin(((particle.x / 5) * Math.PI) / 180);
  }

  enlargeParticle(clientX, clientY) {
    this.particles.forEach((particle) => {
      if (particle.isBurst) return;

      const distance = Math.hypot(particle.x - clientX, particle.y - clientY);

      if (distance <= 100) {
        const scaling = (100 - distance) / 1.5;
        TweenMax.to(particle, 0.5, {
          radius: particle.defaultRadius + scaling,
          ease: Power2.easeOut
        });
      } else {
        TweenMax.to(particle, 0.5, {
          radius: particle.defaultRadius,
          ease: Power2.easeOut
        });
      }
    });
  }

  burstParticle(clientX, clientY) {
    this.particles.forEach((particle) => {
      const distance = Math.hypot(particle.x - clientX, particle.y - clientY);

      if (distance <= 100) {
        particle.isBurst = true;
        TweenMax.to(particle, 0.5, {
          radius: particle.defaultRadius + 200,
          alpha: 0,
          ease: Power2.easeOut,
          onComplete: () => {
            this.particles[particle.id] = this.createParticle(
              particle.id,
              true
            );
          }
        });
      }
    });
  }

  render() {
    // canvas初期化
    this.context.clearRect(
      0,
      0,
      this.canvasWidth + this.particleMaxRadius * 2,
      this.canvasHeight
    );

    // particleを描画
    this.drawParticles();

    // 画面から消えたら新しいparticleに差し替え
    this.particles.forEach((particle) => {
      if (particle.x - particle.radius >= this.canvasWidth) {
        this.particles[particle.id] = this.createParticle(particle.id, true);
      }
    });

    requestAnimationFrame(this.render.bind(this));
  }
}

new Visual();
