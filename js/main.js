$(document).ready(function() {

 /* Vertical Scroll Indicator - START */
  var bar = document.getElementById("bar");

  window.onscroll = function() {
    scrollIndicator()
  };

  function scrollIndicator() {
    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = 100;
    
    if (height > 0) {
      scrolled = (winScroll / height) * 100;
    } 
    
    if (scrolled > 1) {
      bar.classList.add("showBorder")
    } else {
      bar.classList.remove("showBorder");    
    }
      
      
    bar.style.height = scrolled + "%";
  }
  /* Vertical Scroll Indicator - END */
  /* Case studies slider - START */
  $('.nonloop').owlCarousel({
    
    items:4,
    loop:false,
    nav:false,
    margin:50,
    
    responsive:{
        600:{
            items:4
        }
    }
  });
  /* Case studies slider - END */
});

/* Slider Background Canvas - START */
function random(low, high) {
  return Math.random() * (high - low) + low;
}

class Visual {
  constructor() {
    this.canvas = document.querySelector("#canvas");
    this.context = this.canvas.getContext("2d");
    this.canvasWidth = 0;
    this.canvasHeight = 0;
    this.particleLength = 10;
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
      color: { r: random(0, 100), g: random(0, 100), b: 208 },
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
/* Slider Background Canvas - END */

/* Writing text for slider - START */
const workWith = ['Design.', 'Development.'];
document.addEventListener("DOMContentLoaded", function() {
  start();
});

const start = async _ => {
  const _el = document.querySelector('.writing-text');
    for (let index = 0; index < workWith.length; index++) {
      const word = workWith[index]
      const chars = word.split('');
      await writeText(_el, chars);
      
      if(index == workWith.length - 1) index = -1;
    }
}

function writeText(_el, chars) {
  return new Promise(resolve => {
    let write_interval = setInterval(() => {
      const c = chars.shift();
      _el.innerText += c;
      if(chars.length == 0) {
        clearInterval(write_interval);
        setTimeout(() => {
        let remove_interval = setInterval(() => {
            const text = _el.innerText;
            _el.innerText = text.substr(0, text.length - 1);
            if(_el.innerText.length == 0) {
              clearInterval(remove_interval);
                setTimeout(() => resolve(), 200)
            }
          }, 150);
        }, 1000)
      }
    }, 150);
    
  })
}

function removeText(_el) {
  let write_interval = setInterval(() => {
    const text = _el.innerText;
    _el.innerText = text.substr(0, text.length - 1);
    if(_el.innerText.length == 0) clearInterval(write_interval);
  }, 150);
}
/* Writing text for slider - END */
/* circular scroll to top - start */
(function($) { "use strict";
$(document).ready(function(){"use strict";

  //Scroll back to top
  
  var progressPath = document.querySelector('.progress-wrap path');
  var pathLength = progressPath.getTotalLength();
  progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
  progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
  progressPath.style.strokeDashoffset = pathLength;
  progressPath.getBoundingClientRect();
  progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';		
  var updateProgress = function () {
    var scroll = $(window).scrollTop();
    var height = $(document).height() - $(window).height();
    var progress = pathLength - (scroll * pathLength / height);
    progressPath.style.strokeDashoffset = progress;
  }
  updateProgress();
  $(window).scroll(updateProgress);	
  var offset = 50;
  var duration = 550;
  jQuery(window).on('scroll', function() {
    if (jQuery(this).scrollTop() > offset) {
      jQuery('.progress-wrap').addClass('active-progress');
    } else {
      jQuery('.progress-wrap').removeClass('active-progress');
    }
  });				
  jQuery('.progress-wrap').on('click', function(event) {
    event.preventDefault();
    jQuery('html, body').animate({scrollTop: 0}, duration);
    return false;
  })
  
  
});

})(jQuery);
/* circular scroll to top - end */