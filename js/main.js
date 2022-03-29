$(document).ready(function() {
  /* LazyLoad - START */
  gsap.registerPlugin(ScrollTrigger);
  gsap.from(".section-1", {
    scrollTrigger: {
      trigger: ".section-1",
      toggleActions: "play reverse play reverse",
    },
    opacity: 0,
    duration: 0.5
  });
  gsap.from(".section-2", {
    scrollTrigger: {
      trigger: ".section-2",
      toggleActions: "play reverse play reverse",
    },
    opacity: 0,
    duration: 2
  });
  gsap.from(".section-3", {
    scrollTrigger: {
      trigger: ".section-3",
      toggleActions: "play reverse play reverse",
    },
    opacity: 0,
    duration: 2
  });
  gsap.from(".section-4", {
    scrollTrigger: {
      trigger: ".section-4",
      toggleActions: "play reverse play reverse",
    },
    opacity: 0,
    duration: 2
  });
  gsap.from(".section-5", {
    scrollTrigger: {
      trigger: ".section-5",
      toggleActions: "play reverse play reverse",
    },
    opacity: 0,
    duration: 2
  });
  gsap.from(".section-6", {
    scrollTrigger: {
      trigger: ".section-6",
      toggleActions: "play reverse play reverse",
    },
    opacity: 0,
    duration: 2
  });
  gsap.from(".section-7", {
    scrollTrigger: {
      trigger: ".section-7",
      toggleActions: "play reverse play reverse",
    },
    opacity: 0,
    duration: 2
  });
  gsap.from(".section-8", {
    scrollTrigger: {
      trigger: ".section-8",
      toggleActions: "play reverse play reverse",
    },
    opacity: 0,
    duration: 2
  });
  gsap.from(".section-9", {
    scrollTrigger: {
      trigger: ".section-9",
      toggleActions: "play reverse play reverse",
    },
    opacity: 0,
    duration: 2
  });
  gsap.from(".section-10", {
    scrollTrigger: {
      trigger: ".section-10",
      toggleActions: "play reverse play reverse",
    },
    opacity: 0,
    duration: 2
  });
  gsap.from(".section-11", {
    scrollTrigger: {
      trigger: ".section-11",
      toggleActions: "play reverse play reverse",
    },
    opacity: 0,
    duration: 2
  });
  gsap.from(".section-12", {
    scrollTrigger: {
      trigger: ".section-12",
      toggleActions: "play reverse play reverse",
    },
    opacity: 0,
    duration: 2
  });
  gsap.from(".section-13", {
    scrollTrigger: {
      trigger: ".section-13",
      toggleActions: "play reverse play reverse",
    },
    opacity: 0,
    duration: 2
  });
  gsap.from(".section-14", {
    scrollTrigger: {
      trigger: ".section-14",
      toggleActions: "play reverse play reverse",
    },
    opacity: 0,
    duration: 2
  });
  /* LazyLoad - END */
  /* Navbar - START */
  const html = document.documentElement;
  const toggle = document.getElementById("toggle");
  const circle = document.getElementById("bg-circle");
  const navlinks = document.getElementById("navlinks")
  const circleWidth = circle.clientWidth;

  // Math calcul to get Height, Width, Diagonal and Circle Radius

  const getVpdr = () => {
    const vph = Math.pow(html.offsetHeight, 2); // Height
    const vpw = Math.pow(html.offsetWidth, 2); // Width
    const vpd = Math.sqrt(vph + vpw); // Diagonal
    return vpd * 2 / circleWidth; // Circle radius
  };

  const openNavbar = () => {
    const openTimeline = new TimelineMax();
    openTimeline.to(".navbar", 0, { display: "flex" });
    openTimeline.to("#bg-circle", 1.5, { scale: getVpdr(), ease: Expo.easeInOut });
    openTimeline.staggerFromTo(".navbar ul li", 0.5, { y: 25, opacity: 0 }, { y: 0, opacity: 1 }, 0.1, 1);
  };

  const closeNavbar = () => {
    const closeTimeline = new TimelineMax();
    closeTimeline.staggerFromTo(".navbar ul li", 0.5, { y: 0, opacity: 1, delay: 0.5 }, { y: 25, opacity: 0 }, -0.1);
    closeTimeline.to("#bg-circle", 1, { scale: 0, ease: Expo.easeInOut, delay: -0.5 });
    closeTimeline.to(".navbar", 0, { display: "none" });
  };

  let isOpen = false;

  toggle.onclick = function () {
    if (isOpen) {
      this.classList.remove("active");
      closeNavbar();
    } else {
      this.classList.add("active");
      openNavbar();
    }
    isOpen = !isOpen;
  };
  circle.onclick = function () {
    if (isOpen) {
      toggle.classList.remove("active");
      closeNavbar();
    } else {
      toggle.classList.add("active");
      closeNavbar();
    }
    isOpen = !isOpen;
  };
  navlinks.onclick = function () {
    if (isOpen) {
      toggle.classList.remove("active");
      closeNavbar();
    } else {
      toggle.classList.add("active");
      closeNavbar();
    }
    isOpen = !isOpen;
  }


  // On windows resize, recalcule circle radius and update

  window.onresize = () => {
    if (isOpen) {
      gsap.to("#bg-circle", 1, { scale: getVpdr(), ease: Expo.easeInOut });
    }
  };
  /* Navabr - END */
  /* load papers when it comes in screen - START */
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      const p1 = entry.target.querySelector('#p-1');
      const p2 = entry.target.querySelector('#p-2');
      const p3 = entry.target.querySelector('#p-3');
  
      if (entry.isIntersecting) {
        p1.classList.add('p1-animation');
        p2.classList.add('p2-animation');
        p3.classList.add('p3-animation');
      return; // if we added the class, exit the function
      }
    });
  });
  
  observer.observe(document.querySelector('.stack'));
  /* load papers when it comes in screen - END */

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


