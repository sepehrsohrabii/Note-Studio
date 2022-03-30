<?php

    // Check if User Coming From A Request
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        // Assign Variables
        $user = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        $mail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        
        $msg  = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
        
        // Creating Array of Errors
        $formErrors = array();
        if (strlen($user) <= 3) {
            $formErrors[] = 'Username Must Be Larger Than <strong>3</strong> Characters';
        }
        if (strlen($msg) < 10) {
            $formErrors[] = 'Message Can\'t Be Less Than <strong>10</strong> Characters'; 
        }
        
        // If No Errors Send The Email [ mail(To, Subject, Message, Headers, Parameters) ]
        
        $headers = 'From: ' . $mail . '\r\n';
        $myEmail = 'info@creative.studio';
        $subject = 'Contact Form';
        
        if (empty($formErrors)) {
            
            mail($myEmail, $subject, $msg, $headers);
            
            $user = '';
            $mail = '';
            
            $msg = '';
            
            $success = '<div class="alert alert-success">We Have Recieved Your Message</div>';
            
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="Note Creative Studio">
    <meta name="robots" content="max-image-preview:large">
    <meta itemprop="name" content="Note Creative Studio">
    <meta itemprop="url" content="https://notecreative.studio/">
    <title>Note Creative Studio</title>
    <link rel="icon" type="image/x-icon" href="img/Asset 1-svg.svg">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Work Sans:wght@200..700&display=swap">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    
</head>
<body>
  <canvas id="canvas"></canvas>
    <div id="wrap">
        <header>
            <div class="container pt-3 pt-lg-4 d-flex align-items-stretch" id="Top">
                <div class="col align-self-center">
                  <img src="/img/Asset 1.svg" alt="" height="56px">
                </div>
                <div class="col align-self-center text-end">
                    <button class="navbar-toggle" id="toggle" type="button">
                      <svg viewBox="0 0 100 100" width="80">
                        <path class="line top" d="m 30,33 h 40 c 0,0 9.044436,-0.654587 9.044436,-8.508902 0,-7.854315 -8.024349,-11.958003 -14.89975,-10.85914 -6.875401,1.098863 -13.637059,4.171617 -13.637059,16.368042 v 40" />
                        <path class="line middle"d="m 30,50 h 40" />
                        <path class="line bottom" d="m 30,67 h 40 c 12.796276,0 15.357889,-11.717785 15.357889,-26.851538 0,-15.133752 -4.786586,-27.274118 -16.667516,-27.274118 -11.88093,0 -18.499247,6.994427 -18.435284,17.125656 l 0.252538,40" />
                      </svg>
                    </button>
                    <div class="navbar">
                      <ul id="navlinks">
                        <li><a data-text="1" href="#">Home</a></li>
                        <li><a data-text="2" href="#">Our Team</a></li>
                        <li><a data-text="3"href="#">Projects</a></li>
                        <li><a data-text="4" href="#contact">Contact</a></li>
                      </ul>
                    </div>
                    <div id="bg-circle"></div>
                </div>
            </div>
        </header>
        
        
        <main>
            <svg class="bg-1" width="593" height="1161" viewBox="0 0 593 1161" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="580.5" cy="580.5" r="580.5" fill="url(#paint0_radial_1528_3186)"/>
              <defs>
              <radialGradient id="paint0_radial_1528_3186" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(580.5 580.5) rotate(90) scale(580.5)">
              <stop stop-color="#FFF7AA"/>
              <stop offset="1" stop-color="white" stop-opacity="0"/>
              </radialGradient>
              </defs>
            </svg>
            <svg class="bg-2" width="643" height="1506" viewBox="0 0 643 1506" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="-110" cy="753" r="753" fill="url(#paint0_radial_1528_3189)" fill-opacity="0.25"/>
              <defs>
              <radialGradient id="paint0_radial_1528_3189" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(-110 753) rotate(90) scale(753)">
              <stop stop-color="#223F98"/>
              <stop offset="1" stop-color="white" stop-opacity="0"/>
              </radialGradient>
              </defs>
            </svg>
            <div class="progress-wrap">
              <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
              </svg>
            </div>
              
            
            <div class="section-1 container slider-top">
              <div class="row justify-self-center justify-content-between">
                  <div class="col-lg-5 align-self-center">
                      <h5>CREATIVE SOLUTIONS FOR EVERYONE</h5>
                      <h1>
                          Digital age</br>Adventure in</br>
                          <div>
                            <span class="writing-text"></span>
                          </div>
                      </h1>
                      <p class="">Passionate about solving problems through creative and digital products.</p>
                      <button type="button" class="btn-new btn btn-primary px-4 py-2 mt-3">Contact us</button>
                  </div>
                  <div class="col-lg-6 align-self-center text-center">
                      <div class="container-slider">
                        <div class="moving_shape"></div>
                      </div>
                  </div>
              </div>
            </div>
            
            
            <div class="section-2 container mb-6">
                <div class="row g-4 row-cols-1 row-cols-lg-3 justify-content-between">
                    <div class="col-md-3 col-sm-12 row">
                        <div class="col-3 align-self-center">
                            <img src="/img/Design.svg" alt="" height="64px">
                        </div>
                        <div class="col-9">
                            <h5>Design</h5>
                            <span class="fs-12">Creating brand identities, digital experiences, and prints.</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 row">
                        <div class="col-3 align-self-center">
                            <img src="/img/Development.svg" alt="" height="64px">
                        </div>
                        <div class="col-9">
                            <h5>Development</h5>
                            <span class="fs-12">Creating brand identities, digital experiences, and prints.</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 row">
                        <div class="col-3 align-self-center">
                            <img src="/img/Marketing.svg" alt="" height="64px">
                        </div>
                        <div class="col-9">
                            <h5>Strategy</h5>
                            <span class="fs-12">Creating brand identities, digital experiences, and prints.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-3 container mb-7">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 py-5">
                    <div class="col">
                      <div class="d-flex align-items-end justify-content-center card-pic1">
                        <p class="card-text mx-5 mb-5">
                        <span>Web Development</span></br>
                        <span class="fs-12-w">Passionate about solving problems through creative and
                          digital products.</span>
                        </p>
                      </div>
                        
                    </div>
                    <div class="col">
                      <div class="d-flex align-items-end justify-content-center card-pic2">
                        <p class="card-text mx-5 mb-5">
                          <span>App Development</span></br>
                          <span class="fs-12-w">Passionate about solving problems through creative and
                            digital products.</span>
                        </p>
                      </div>
                        
                    </div>
                    <div class="col">
                      <div class="d-flex align-items-end justify-content-center card-pic3">
                        <p class="card-text mx-5 mb-5">
                          <span>Product Design</span></br>
                          <span class="fs-12-w">Passionate about solving problems through creative and
                            digital products.</span>
                        </p>
                      </div>
                        
                    </div>
                    <div class="col">
                      <div class="d-flex align-items-end justify-content-center card-pic4">
                        <p class="card-text mx-5 mb-5">
                          <span>eCommerce</span></br>
                          <span class="fs-12-w">Passionate about solving problems through creative and
                            digital products.</span>
                        </p>
                      </div>
                        
                    </div>
                </div>
            </div>
            <svg class="bg-4" width="1421" height="1506" viewBox="0 0 1421 1506" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="668" cy="753" r="753" fill="url(#paint0_radial_1588_3118)" fill-opacity="0.15"/>
              <defs>
              <radialGradient id="paint0_radial_1588_3118" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(668 753) rotate(90) scale(753)">
              <stop stop-color="#223F98"/>
              <stop offset="1" stop-color="white" stop-opacity="0"/>
              </radialGradient>
              </defs>
            </svg>
              
            <div class="section-4 container mt-5 p-0 mb-7">
              <div class="row align-items-center">
                <div class="col-md-6 col-ms-12">
                  <div class="me-5">
                    <h2>How does our Creative studio transform an idea into a real product?</h2>
                    <p class="gray">
                      Digital product design is an iterative design process used to solve a functional problem with a formal solution. A digital product designer identifies an existing problem, offers the best possible solution, and launches it to a market that demonstrates demand for the particular solution.
                    </p>
                  </div>
                </div>
                <div class="col-md-6 col-ms-12">
                  <div class="stack">
                    <div class="paper" id="p-1"></div>
                    <div class="paper" id="p-2"> </div>
                    <div class="paper" id="p-3"> </div>
                  </div>
                </div>
                
              </div>
            </div>
            <div class="section-5 banner">
              <div class="d-flex justify-content-center">
                <span class="banner-text">
                  <span class="fw-normal">Moving</span>
                  <span style="font-weight: 600;"> your project </br></span>
                  <span class="fst-italic glitch" data-text="forward.">forward.</span>
                </span>
              </div>
            </div>
            <div class="section-6 container mt-5">
              <div class="row">
                <div class="col">
                  <h3>Projects</h3>
                </div>
                <div class="col text-end align-self-center">
                  <a class="btn-txt" href="#">
                    <h5 class="gray">Show More Projects</h5>
                  </a>
                </div>
              </div>
              
            </div>
            <div class="section-7 container p-0 mb-6">
              <div class="nonloop owl-carousel owl-loaded owl-drag">
                <div class="owl-stage-outer">
                  <div class="owl-stage" style="transition: all 0.25s ease 0s; width: 2940px; transform: translate3d(192px, 0px, 0px);"><div class="owl-item active" style="width: 235px; margin-right: 10px;"><div class="item">
                    <img src="/img/Rectangle1.png" class="w-100 br-5" alt="">
                    <h5 class="mt-4">Nexa Mobile</h5>
                    <span class="fs-12">Creating and identities, digital</br>
                      experience, and prints.</span>
                  </div></div><div class="owl-item active center" style="width: 235px; margin-right: 10px;"><div class="item">
                    <img src="/img/Rectangle2.png" class="w-100 br-5" alt="">
                    <h5 class="mt-4">Nexa Mobile2</h5>
                    <span class="fs-12">Creating and identities, digital</br>
                      experience, and prints.</span>
                  </div></div><div class="owl-item active center" style="width: 235px; margin-right: 10px;"><div class="item">
                    <img src="/img/Rectangle3.png" class="w-100 br-5" alt="">
                    <h5 class="mt-4">Nexa Mobile</h5>
                    <span class="fs-12">Creating and identities, digital</br>
                      experience, and prints.</span>
                  </div></div><div class="owl-item active" style="width: 235px; margin-right: 10px;"><div class="item">
                    <img src="/img/Rectangle4.png" class="w-100 br-5" alt="">
                    <h5 class="mt-4">Nexa Mobile</h5>
                    <span class="fs-12">Creating and identities, digital</br>
                      experience, and prints.</span>
                  </div></div><div class="owl-item" style="width: 235px; margin-right: 10px;"><div class="item">
                    <img src="/img/Rectangle1.png" class="w-100 br-5" alt="">
                    <h5 class="mt-4">Nexa Mobile</h5>
                    <span class="fs-12">Creating and identities, digital</br>
                      experience, and prints.</span>
                  </div></div><div class="owl-item" style="width: 235px; margin-right: 10px;"><div class="item">
                    <img src="/img/Rectangle2.png" class="w-100 br-5" alt="">
                    <h5 class="mt-4">Nexa Mobile</h5>
                    <span class="fs-12">Creating and identities, digital</br>
                      experience, and prints.</span>
                  </div></div><div class="owl-item" style="width: 235px; margin-right: 10px;"><div class="item">
                    <img src="/img/Rectangle3.png" class="w-100 br-5" alt="">
                    <h5 class="mt-4">Nexa Mobile</h5>
                    <span class="fs-12">Creating and identities, digital</br>
                      experience, and prints.</span>
                  </div></div><div class="owl-item" style="width: 235px; margin-right: 10px;"><div class="item">
                    <img src="/img/Rectangle4.png" class="w-100 br-5" alt="">
                    <h5 class="mt-4">Nexa Mobile</h5>
                    <span class="fs-12">Creating and identities, digital</br>
                      experience, and prints.</span>
                  </div></div><div class="owl-item" style="width: 235px; margin-right: 10px;"><div class="item">
                    <img src="/img/Rectangle1.png" class="w-100 br-5" alt="">
                    <h5 class="mt-4">Nexa Mobile</h5>
                    <span class="fs-12">Creating and identities, digital</br>
                      experience, and prints.</span>
                  </div></div><div class="owl-item" style="width: 235px; margin-right: 10px;"><div class="item">
                    <img src="/img/Rectangle2.png" class="w-100 br-5" alt="">
                    <h5 class="mt-4">Nexa Mobile</h5>
                    <span class="fs-12">Creating and identities, digital</br>
                      experience, and prints.</span>
                  </div></div><div class="owl-item" style="width: 235px; margin-right: 10px;"><div class="item">
                    <img src="/img/Rectangle3.png" class="w-100 br-5" alt="">
                    <h5 class="mt-4">Nexa Mobile</h5>
                    <span class="fs-12">Creating and identities, digital</br>
                      experience, and prints.</span>
                  </div></div><div class="owl-item" style="width: 235px; margin-right: 10px;"><div class="item">
                    <img src="/img/Rectangle4.png" class="w-100 br-5" alt="">
                    <h5 class="mt-4">Nexa Mobile</h5>
                    <span class="fs-12">Creating and identities, digital</br>
                      experience, and prints.</span>
                  </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots"><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button></div>
                </div>
                
            </div>
            <div class="section-14 bg-5">
              <div class="container mt-5 p-0">
                <div class="row justify-content-center">
                  <div class="col-md-4 col-ms-12 align-self-center text-center">
                    <img src="/img/mobile2.png" alt="" width="55%">
                  </div>
                  <div class="col-md-3 col-ms-12 align-self-center">
                    <h4>Product Design</h4>
                    <span class="fs-12 gray mb-5">Digital product design is an iterative design process used to solve a functional problem with a formal solution. A digital product designer identifies an existing problem, offers the best possible solution.</span>
                    <h4>Product Design</h4>
                    <span class="fs-12 gray">Digital product design is an iterative design process used to solve a functional problem with a formal solution. A digital product designer identifies an existing problem, offers the best possible solution.</span>
                  </div>
                  <div class="col-md-3 col-ms-12 align-self-center">
                    <h4>Product Design</h4>
                    <span class="fs-12 gray mb-5">Digital product design is an iterative design process used to solve a functional problem with a formal solution. A digital product designer identifies an existing problem, offers the best possible solution.</span>
                    <h4>Product Design</h4>
                    <span class="fs-12 gray">Digital product design is an iterative design process used to solve a functional problem with a formal solution. A digital product designer identifies an existing problem, offers the best possible solution.</span>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="section-8 banner3">
              <div class="d-flex justify-content-center">
                <span class="banner-text3">
                  <span class="fw-normal">Moving</span>
                  <span style="font-weight: 600;"> your project </br></span>
                  <span class="fst-italic glitch glitch-bg3" data-text="forward.">forward.</span>
                </span>
              </div>
            </div>
            <div class="section-9 container mt-5 d-none">
              <div class="row">
                <div class="col">
                  <h5>Our team</h5>
                </div>
                <div class="col text-end align-self-center">
                  <a class="btn-txt" href="#">
                    SEE MORE WORKS >
                  </a>
                </div>
              </div>
              <div class="row mt-4 justify-content-between">
                <div class="col-auto">
                  <div class="profile-card-2"><img src="/img/profile-2.jpg" class="img img-responsive">
                    <div class="profile-name">JOHN DOE</div>
                    <div class="profile-username">@johndoesurname</div>
                    <div class="profile-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
                  </div>
                </div>
                <div class="col-auto">
                  <div class="profile-card-2"><img src="/img/profile-2.jpg" class="img img-responsive">
                    <div class="profile-name">JOHN DOE</div>
                    <div class="profile-username">@johndoesurname</div>
                    <div class="profile-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
                  </div>
                </div>
                <div class="col-auto">
                  <div class="profile-card-2"><img src="/img/profile-2.jpg" class="img img-responsive">
                    <div class="profile-name">JOHN DOE</div>
                    <div class="profile-username">@johndoesurname</div>
                    <div class="profile-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="section-10 container my-5 d-none">
              <div class="row">
                <div class="col text-center">
                  <p>Global clients around the world</p>
                </div>
              </div>
              <div class="row">
                <div class="col-6 col-md-3 text-center">
                  <h2>1342</h2>
                  <span class="txt-underline"></span>
                  <h6>AVARAGE GROWTH</h6>
                </div>
                <div class="col-6 col-md-3 text-center">
                  <h2>52</h2>
                  <span class="txt-underline"></span>
                  <h6>CUSTOMER SATISFACTION</h6>
                </div>
                <div class="col-6 col-md-3 text-center">
                  <h2>87</h2>
                  <span class="txt-underline"></span>
                  <h6>DAILY DATA INPUT</h6>
                </div>
                <div class="col-6 col-md-3 text-center">
                  <h2>145</h2>
                  <span class="txt-underline"></span>
                  <h6>HUB IT EMPLOYEES</h6>
                </div>
              </div>
            </div>
            <div class="section-11 container mt-5 d-none">
              <div class="row justify-content-end">
                <div class="col-4">
                  <div class="card card-noshadow" id="card5" onpointerover="homeCard('card5')">
                    <img src="/img/agency-1@2x.png" alt="">
                  </div>
                </div>
                <div class="col-7">
                  <div class="ms-5">
                    <h6 class="txt-bg circle w-fit">REAL STORIES</h6>
                    <h3>About Us</h3>
                    <p>
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid nemo amet perferendis impedit temporibus labore voluptatem non accusantium architecto enim ducimus molestiae voluptas quasi, tempore maiores in reprehenderit quam eius.
                    </p>
                    <button type="button" class="btn btn-outline-primary">Primary</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="section-12 mt-5 border-top border-bottom d-none">
              <div class="container">
                <div class="row py-5">
                  <div class="col">
                    <img src="/img/dropcam.svg" alt="">
                  </div>
                  <div class="col">
                    <img src="/img/dropcam.svg" alt="">
                  </div>
                  <div class="col">
                    <img src="/img/dropcam.svg" alt="">
                  </div>
                  <div class="col">
                    <img src="/img/dropcam.svg" alt="">
                  </div>
                  <div class="col">
                    <img src="/img/dropcam.svg" alt="">
                  </div>
                  <div class="col">
                    <img src="/img/dropcam.svg" alt="">
                  </div>
                </div>
              </div>
            </div>
            
            
        </main>
        
        <footer class="section-13 pb-5" id="contact">
          <svg class="bg-3" width="858" height="858" viewBox="0 0 858 858" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="277.5" cy="580.5" r="580.5" fill="url(#paint0_radial_1588_3115)" fill-opacity="0.5"/>
            <defs>
            <radialGradient id="paint0_radial_1588_3115" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(277.5 580.5) rotate(90) scale(580.5)">
            <stop stop-color="#FFF7AA"/>
            <stop offset="1" stop-color="white" stop-opacity="0"/>
            </radialGradient>
            </defs>
          </svg>
          <div class="banner2"></div>
          <div class="container mt-6">
            <div class="row">
              <div class="col-md-6 col-ms-12 pe-5">
                <h5>Shall we chat?</h5>
                <h1 class="lts-talk">
                  <span>L</span>
                  <span>e</span>
                  <span>t</span>
                  <span>'</span>
                  <span>s</span>
                  &nbsp
                  <span>T</span>
                  <span>a</span>
                  <span>l</span>
                  <span>k</span>
                </h1>
                <h5 class="mt-5 mb-3">Services</h5>
                <div class="footer-lb">
                  <a class="footer-link py-2 px-3" href="">Product Design</a>
                  <a class="footer-link py-2 px-3" href="">Web Design</a>
                  <a class="footer-link py-2 px-3" href="">Mobile App</a>
                  <a class="footer-link py-2 px-3" href="">eCommerce</a>
                  <a class="footer-link py-2 px-3" href="">Development</a>
                  <a class="footer-link py-2 px-3" href="">User Reserach</a>
                </div>
                <h5 class="mt-5 mb-3">Budget USD</h5>
                <div class="footer-lb">
                  <a class="footer-link py-2 px-3" href="">1K-5K</a>
                  <a class="footer-link py-2 px-3" href="">5K-20K</a>
                  <a class="footer-link py-2 px-3" href="">More than 20K</a>
                </div>
              </div>
              <div class="col-md-6 col-ms-12 ps-5">
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

                  <?php if (! empty($formErrors)) { ?>
                  <div class="alert alert-danger alert-dismissible" role="start">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                      <?php
                          foreach($formErrors as $error) {
                              echo $error . '<br/>';
                          }
                      ?>
                  </div>
                  <?php } ?>
                  <?php if (isset($success)) { echo $success; } ?>

                  <input class="form-input" type="name" id="name" name="name" placeholder="Your Full Name" 
                          value="<?php if (isset($user)) { echo $user; } ?>" />
                  
                  <input class="form-input" type="email" id="email" name="email" placeholder="example@domain.com" 
                          value="<?php if (isset($mail)) { echo $mail; } ?>">
                  
                  <textarea class="form-input" name="message" rows="3" placeholder="Tell Us About Project">
                    <?php if (isset($msg)) { echo $msg; } ?>
                  </textarea>
                  
                  <button class="form-button" id="submit" name="submit" type="submit" value="Send">Send Your Request</button>
                  
                </form>
              </div>
            </div>
          </div>
          
          <div class="container pb-5 mt-5">
            <div class="row">
              <div class="col-md-3 col-ms-12 pe-2">
                <p>CONTACTS</p>
                <h5 class="mb-0 mt-4">hello@notecreative.studio</h5>
              </div>
              <div class="col-md-3 col-ms-12 pe-3">
                <p>FOLLOW US</p>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11.999 7.37695C10.7726 7.37695 9.59651 7.86412 8.72934 8.73129C7.86217 9.59846 7.375 10.7746 7.375 12.001C7.375 13.2273 7.86217 14.4034 8.72934 15.2706C9.59651 16.1378 10.7726 16.625 11.999 16.625C13.2254 16.625 14.4015 16.1378 15.2687 15.2706C16.1358 14.4034 16.623 13.2273 16.623 12.001C16.623 10.7746 16.1358 9.59846 15.2687 8.73129C14.4015 7.86412 13.2254 7.37695 11.999 7.37695ZM11.999 15.004C11.2023 15.004 10.4382 14.6875 9.87485 14.1241C9.31149 13.5607 8.995 12.7967 8.995 12C8.995 11.2032 9.31149 10.4392 9.87485 9.8758C10.4382 9.31245 11.2023 8.99595 11.999 8.99595C12.7957 8.99595 13.5598 9.31245 14.1231 9.8758C14.6865 10.4392 15.003 11.2032 15.003 12C15.003 12.7967 14.6865 13.5607 14.1231 14.1241C13.5598 14.6875 12.7957 15.004 11.999 15.004Z" fill="#223F98"/>
                  <path d="M16.806 8.28491C17.4014 8.28491 17.884 7.80227 17.884 7.20691C17.884 6.61154 17.4014 6.12891 16.806 6.12891C16.2107 6.12891 15.728 6.61154 15.728 7.20691C15.728 7.80227 16.2107 8.28491 16.806 8.28491Z" fill="#223F98"/>
                  <path d="M20.533 6.11088C20.3015 5.51306 19.9477 4.97017 19.4943 4.51694C19.0409 4.06372 18.4979 3.71015 17.9 3.47888C17.2003 3.21624 16.4611 3.07422 15.714 3.05888C14.751 3.01688 14.446 3.00488 12.004 3.00488C9.56195 3.00488 9.24895 3.00488 8.29395 3.05888C7.54734 3.07344 6.80871 3.21548 6.10995 3.47888C5.51189 3.70988 4.96872 4.06335 4.51529 4.51661C4.06186 4.96987 3.70818 5.51291 3.47695 6.11088C3.21426 6.8105 3.07257 7.54972 3.05795 8.29688C3.01495 9.25888 3.00195 9.56388 3.00195 12.0069C3.00195 14.4489 3.00195 14.7599 3.05795 15.7169C3.07295 16.4649 3.21395 17.2029 3.47695 17.9039C3.70883 18.5016 4.06285 19.0445 4.51639 19.4977C4.96993 19.9509 5.51302 20.3045 6.11095 20.5359C6.80839 20.8091 7.54732 20.9613 8.29595 20.9859C9.25895 21.0279 9.56395 21.0409 12.006 21.0409C14.448 21.0409 14.761 21.0409 15.716 20.9859C16.4631 20.9707 17.2022 20.829 17.902 20.5669C18.4997 20.3351 19.0426 19.9812 19.4959 19.5279C19.9493 19.0745 20.3031 18.5316 20.535 17.9339C20.798 17.2339 20.939 16.4959 20.954 15.7479C20.997 14.7859 21.01 14.4809 21.01 12.0379C21.01 9.59488 21.01 9.28488 20.954 8.32788C20.9423 7.57016 20.7999 6.82013 20.533 6.11088ZM19.315 15.6429C19.3085 16.2192 19.2033 16.7901 19.004 17.3309C18.8538 17.7198 18.6239 18.0729 18.329 18.3676C18.0342 18.6622 17.6809 18.8919 17.292 19.0419C16.7572 19.2403 16.1923 19.3455 15.622 19.3529C14.672 19.3969 14.404 19.4079 11.968 19.4079C9.52995 19.4079 9.28095 19.4079 8.31295 19.3529C7.74288 19.3459 7.17828 19.2407 6.64395 19.0419C6.25364 18.8929 5.89895 18.6636 5.60284 18.3688C5.30673 18.0741 5.07579 17.7205 4.92495 17.3309C4.7284 16.7959 4.62326 16.2317 4.61395 15.6619C4.57095 14.7119 4.56095 14.4439 4.56095 12.0079C4.56095 9.57088 4.56095 9.32188 4.61395 8.35288C4.62042 7.77691 4.72561 7.2063 4.92495 6.66588C5.22995 5.87688 5.85495 5.25588 6.64395 4.95388C7.17854 4.75602 7.74298 4.65085 8.31295 4.64288C9.26395 4.59988 9.53095 4.58788 11.968 4.58788C14.405 4.58788 14.655 4.58788 15.622 4.64288C16.1924 4.64974 16.7573 4.75495 17.292 4.95388C17.6809 5.10416 18.0341 5.33408 18.3289 5.62891C18.6238 5.92374 18.8537 6.27695 19.004 6.66588C19.2005 7.20083 19.3056 7.76504 19.315 8.33488C19.358 9.28588 19.369 9.55288 19.369 11.9899C19.369 14.4259 19.369 14.6879 19.326 15.6439H19.315V15.6429Z" fill="#223F98"/>
                </svg>
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5.52733 2C3.58757 2 2 3.58754 2 5.52733V16.4732C2 18.413 3.58754 20 5.52733 20H16.4732C18.413 20 20 18.413 20 16.4732V5.52733C20 3.58757 18.413 2 16.4732 2H5.52733ZM6.4145 4.97036C7.34457 4.97036 7.91746 5.58094 7.93514 6.38353C7.93514 7.1684 7.34454 7.79614 6.39651 7.79614H6.37906C5.46669 7.79614 4.87699 7.16844 4.87699 6.38353C4.87699 5.58096 5.48456 4.97036 6.4145 4.97036ZM14.4294 8.72158C16.2181 8.72158 17.559 9.89069 17.559 12.403V17.0932H14.8407V12.7175C14.8407 11.6179 14.4473 10.8678 13.4635 10.8678C12.7125 10.8678 12.2649 11.3734 12.0683 11.8618C11.9965 12.0366 11.9789 12.2806 11.9789 12.5251V17.0932H9.26056C9.26056 17.0932 9.29623 9.6809 9.26056 8.9134H11.9795V10.0717C12.3407 9.5144 12.9869 8.72158 14.4294 8.72158ZM5.03733 8.914H7.75567V17.0932H5.03733V8.914Z" fill="#223F98"/>
                </svg>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M13.728 10.2006C13.8987 10.5521 14.0603 10.908 14.2127 11.2678L13.728 10.2006ZM13.728 10.2006C16.378 9.10968 17.6679 7.57986 17.9454 7.2285C19.0085 8.54512 19.6018 10.1789 19.6314 11.8709C19.1673 11.7811 16.7796 11.3367 14.3635 11.6338C14.3349 11.5698 14.3091 11.505 14.2824 11.4382C14.2604 11.383 14.2379 11.3265 14.2128 11.268L13.728 10.2006ZM11.9998 4.37825H12C13.9233 4.37825 15.6847 5.0926 17.0284 6.26785C16.8093 6.56567 15.6499 7.99903 13.0873 8.97012C11.8995 6.79646 10.5987 4.99943 10.2794 4.56404C10.844 4.43806 11.4211 4.37616 11.9998 4.37825ZM12.1802 10.742C12.3876 11.1418 12.5784 11.5495 12.7606 11.9584C12.7291 11.9676 12.697 11.9768 12.6646 11.986L12.6643 11.9862C12.6133 12.0007 12.5619 12.0154 12.5129 12.0301L12.5129 12.0301L12.5119 12.0304C8.70775 13.2579 6.60564 16.5155 6.27199 17.0605C5.03917 15.6677 4.35785 13.8713 4.358 12.0098V11.8269C4.91781 11.8375 8.49317 11.8413 12.1802 10.742ZM12 19.642H11.9999C10.3162 19.6447 8.67983 19.087 7.34842 18.0576C7.56922 17.6212 9.15939 14.7733 13.3342 13.3162L13.3344 13.3166L13.3381 13.3147C14.387 16.0393 14.8243 18.3308 14.9507 19.0466C14.039 19.4344 13.0436 19.642 12 19.642ZM12 2.95C7.00364 2.95 2.95 7.00364 2.95 12C2.95 16.9964 7.00364 21.05 12 21.05C16.9866 21.05 21.05 16.9964 21.05 12C21.05 7.0036 16.9866 2.95 12 2.95ZM8.71435 5.11258C8.98297 5.47707 10.2793 7.29809 11.5046 9.45951C8.10328 10.3561 5.09244 10.3786 4.53554 10.3788C5.04166 8.053 6.61748 6.11809 8.71435 5.11258ZM19.5189 13.2645C19.1836 15.3433 17.9929 17.1404 16.3217 18.2891C16.2178 17.6899 15.8049 15.5503 14.8593 12.9379C17.1377 12.5936 19.1326 13.1434 19.5189 13.2645Z" fill="#223F98" stroke="#223F98" stroke-width="0.1"/>
                </svg>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M8.25016 18.6667H3.66683C3.44582 18.6667 3.23385 18.5789 3.07757 18.4227C2.92129 18.2664 2.8335 18.0544 2.8335 17.8334V12.0001C2.8335 11.7791 2.92129 11.5671 3.07757 11.4108C3.23385 11.2545 3.44582 11.1667 3.66683 11.1667H8.25016C9.24472 11.1667 10.1986 11.5618 10.9018 12.2651C11.6051 12.9684 12.0002 13.9222 12.0002 14.9167C12.0002 15.9113 11.6051 16.8651 10.9018 17.5684C10.1986 18.2717 9.24472 18.6667 8.25016 18.6667ZM4.50016 17.0001H8.25016C8.8027 17.0001 9.3326 16.7806 9.7233 16.3899C10.114 15.9992 10.3335 15.4693 10.3335 14.9167C10.3335 14.3642 10.114 13.8343 9.7233 13.4436C9.3326 13.0529 8.8027 12.8334 8.25016 12.8334H4.50016V17.0001Z" fill="#223F98"/>
                  <path d="M7.8335 12.8334H3.66683C3.44582 12.8334 3.23385 12.7456 3.07757 12.5893C2.92129 12.4331 2.8335 12.2211 2.8335 12.0001V7.00008C2.8335 6.77907 2.92129 6.56711 3.07757 6.41083C3.23385 6.25455 3.44582 6.16675 3.66683 6.16675H7.8335C8.71755 6.16675 9.5654 6.51794 10.1905 7.14306C10.8156 7.76818 11.1668 8.61603 11.1668 9.50008C11.1668 10.3841 10.8156 11.232 10.1905 11.8571C9.5654 12.4822 8.71755 12.8334 7.8335 12.8334ZM4.50016 11.1667H7.8335C8.27552 11.1667 8.69945 10.9912 9.01201 10.6786C9.32457 10.366 9.50016 9.94211 9.50016 9.50008C9.50016 9.05805 9.32457 8.63413 9.01201 8.32157C8.69945 8.00901 8.27552 7.83341 7.8335 7.83341H4.50016V11.1667ZM18.6668 7.83341H15.3335C15.1125 7.83341 14.9005 7.74562 14.7442 7.58934C14.588 7.43306 14.5002 7.2211 14.5002 7.00008C14.5002 6.77907 14.588 6.56711 14.7442 6.41083C14.9005 6.25455 15.1125 6.16675 15.3335 6.16675H18.6668C18.8878 6.16675 19.0998 6.25455 19.2561 6.41083C19.4124 6.56711 19.5002 6.77907 19.5002 7.00008C19.5002 7.2211 19.4124 7.43306 19.2561 7.58934C19.0998 7.74562 18.8878 7.83341 18.6668 7.83341ZM20.3335 13.6667H13.6668C13.4458 13.6667 13.2339 13.5789 13.0776 13.4227C12.9213 13.2664 12.8335 13.0544 12.8335 12.8334C12.8335 12.6124 12.9213 12.4004 13.0776 12.2442C13.2339 12.0879 13.4458 12.0001 13.6668 12.0001H20.3335C20.5545 12.0001 20.7665 12.0879 20.9228 12.2442C21.079 12.4004 21.1668 12.6124 21.1668 12.8334C21.1668 13.0544 21.079 13.2664 20.9228 13.4227C20.7665 13.5789 20.5545 13.6667 20.3335 13.6667Z" fill="#223F98"/>
                  <path d="M17.0002 18.6667C15.8955 18.6654 14.8365 18.226 14.0553 17.4449C13.2742 16.6638 12.8348 15.6047 12.8335 14.5001V12.8334C12.8335 11.7283 13.2725 10.6685 14.0539 9.88714C14.8353 9.10573 15.8951 8.66675 17.0002 8.66675C18.1052 8.66675 19.165 9.10573 19.9464 9.88714C20.7278 10.6685 21.1668 11.7283 21.1668 12.8334C21.1668 13.0544 21.079 13.2664 20.9227 13.4227C20.7665 13.579 20.5545 13.6667 20.3335 13.6667C20.1125 13.6667 19.9005 13.579 19.7442 13.4227C19.588 13.2664 19.5002 13.0544 19.5002 12.8334C19.5002 12.1704 19.2368 11.5345 18.7679 11.0656C18.2991 10.5968 17.6632 10.3334 17.0002 10.3334C16.3371 10.3334 15.7012 10.5968 15.2324 11.0656C14.7636 11.5345 14.5002 12.1704 14.5002 12.8334V14.5001C14.4999 15.108 14.7213 15.6952 15.1229 16.1516C15.5245 16.6081 16.0787 16.9024 16.6818 16.9794C17.2848 17.0565 17.8953 16.911 18.3988 16.5703C18.9023 16.2295 19.2642 15.7169 19.4168 15.1284C19.4712 14.914 19.6085 14.73 19.7985 14.6169C19.9886 14.5037 20.2158 14.4707 20.4302 14.5251C20.6445 14.5795 20.8285 14.7168 20.9417 14.9068C21.0548 15.0968 21.0879 15.324 21.0335 15.5384C20.8052 16.4343 20.2845 17.2285 19.554 17.7951C18.8234 18.3618 17.9247 18.6685 17.0002 18.6667Z" fill="#223F98"/>
                </svg>
                  
              </div>
              <div class="col-md-6 col-ms-12 ps-5">
                <p class="fs-12">The text and graphic content of the website belongs to Note Studio and connot be used by other resources without our permission and without the link to the source.</p>
                <div class="row">
                  <div class="col-md-6 col-ms-12">
                    <svg width="127" height="13" viewBox="0 0 127 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M8.875 0.625V12H6.66406L3.09375 4.88281V12H0.921875V0.625H3.10156L6.70312 7.82031V0.625H8.875ZM10.3594 8.0625V7.49219C10.3594 6.83073 10.4375 6.24479 10.5938 5.73438C10.7552 5.22396 10.9844 4.79688 11.2812 4.45312C11.5781 4.10417 11.9349 3.84115 12.3516 3.66406C12.7734 3.48177 13.2448 3.39062 13.7656 3.39062C14.2917 3.39062 14.763 3.48177 15.1797 3.66406C15.6016 3.84115 15.9609 4.10417 16.2578 4.45312C16.5599 4.79688 16.7917 5.22396 16.9531 5.73438C17.1146 6.24479 17.1953 6.83073 17.1953 7.49219V8.0625C17.1953 8.71875 17.1146 9.30208 16.9531 9.8125C16.7917 10.3229 16.5599 10.7526 16.2578 11.1016C15.9609 11.4505 15.6042 11.7135 15.1875 11.8906C14.7708 12.0677 14.3021 12.1562 13.7812 12.1562C13.2604 12.1562 12.7891 12.0677 12.3672 11.8906C11.9505 11.7135 11.5911 11.4505 11.2891 11.1016C10.987 10.7526 10.7552 10.3229 10.5938 9.8125C10.4375 9.30208 10.3594 8.71875 10.3594 8.0625ZM12.5469 7.49219V8.0625C12.5469 8.45312 12.5729 8.79167 12.625 9.07812C12.6823 9.36458 12.763 9.60156 12.8672 9.78906C12.9766 9.97656 13.1068 10.1146 13.2578 10.2031C13.4089 10.2917 13.5833 10.3359 13.7812 10.3359C13.9792 10.3359 14.1562 10.2917 14.3125 10.2031C14.4688 10.1146 14.5964 9.97656 14.6953 9.78906C14.7995 9.60156 14.875 9.36458 14.9219 9.07812C14.974 8.79167 15 8.45312 15 8.0625V7.49219C15 7.11198 14.9714 6.77865 14.9141 6.49219C14.8568 6.20052 14.776 5.96354 14.6719 5.78125C14.5677 5.59375 14.4375 5.45312 14.2812 5.35938C14.1302 5.26042 13.9583 5.21094 13.7656 5.21094C13.5729 5.21094 13.401 5.26042 13.25 5.35938C13.1042 5.45312 12.9766 5.59375 12.8672 5.78125C12.763 5.96354 12.6823 6.20052 12.625 6.49219C12.5729 6.77865 12.5469 7.11198 12.5469 7.49219ZM22.2656 3.54688V5.19531H17.9531V3.54688H22.2656ZM18.9453 1.46094H21.125V9.42188C21.125 9.65625 21.1484 9.83594 21.1953 9.96094C21.2422 10.0859 21.3125 10.1745 21.4062 10.2266C21.5052 10.2734 21.6328 10.2969 21.7891 10.2969C21.9036 10.2969 22.0078 10.2917 22.1016 10.2812C22.1953 10.2656 22.2656 10.25 22.3125 10.2344V11.9453C22.1406 12.013 21.9583 12.0651 21.7656 12.1016C21.5781 12.138 21.3542 12.1562 21.0938 12.1562C20.6615 12.1562 20.2839 12.0729 19.9609 11.9062C19.638 11.7396 19.388 11.474 19.2109 11.1094C19.0339 10.7396 18.9453 10.2552 18.9453 9.65625V1.46094ZM26.8906 12.1562C26.3125 12.1562 25.7995 12.0677 25.3516 11.8906C24.9089 11.7135 24.5339 11.4583 24.2266 11.125C23.9193 10.7865 23.6849 10.3776 23.5234 9.89844C23.362 9.41927 23.2812 8.8724 23.2812 8.25781V7.5625C23.2812 6.875 23.3594 6.27344 23.5156 5.75781C23.6719 5.23698 23.8932 4.79948 24.1797 4.44531C24.4661 4.09115 24.8177 3.82812 25.2344 3.65625C25.6562 3.47917 26.1328 3.39062 26.6641 3.39062C27.1953 3.39062 27.6615 3.47917 28.0625 3.65625C28.4688 3.82812 28.8047 4.08854 29.0703 4.4375C29.3359 4.78125 29.5365 5.20833 29.6719 5.71875C29.8073 6.22917 29.875 6.82292 29.875 7.5V8.5H24.2109V6.96094H27.7266V6.76562C27.7266 6.42188 27.6901 6.13542 27.6172 5.90625C27.5443 5.67188 27.4297 5.4974 27.2734 5.38281C27.1172 5.26823 26.9089 5.21094 26.6484 5.21094C26.4297 5.21094 26.2448 5.25521 26.0938 5.34375C25.9427 5.43229 25.8229 5.57031 25.7344 5.75781C25.6458 5.94531 25.5807 6.1901 25.5391 6.49219C25.4974 6.78906 25.4766 7.14583 25.4766 7.5625V8.25781C25.4766 8.64844 25.5104 8.97656 25.5781 9.24219C25.6458 9.5026 25.7448 9.71615 25.875 9.88281C26.0104 10.0443 26.1745 10.1615 26.3672 10.2344C26.5599 10.3021 26.7839 10.3359 27.0391 10.3359C27.4245 10.3359 27.7708 10.2682 28.0781 10.1328C28.3906 9.99219 28.6562 9.80208 28.875 9.5625L29.75 10.8906C29.599 11.0885 29.3906 11.2865 29.125 11.4844C28.8594 11.6823 28.5417 11.8438 28.1719 11.9688C27.8021 12.0938 27.375 12.1562 26.8906 12.1562ZM41.1875 8.45312H42.0859C42.0339 9.30208 41.862 10 41.5703 10.5469C41.2839 11.0938 40.8854 11.5 40.375 11.7656C39.8698 12.0312 39.2604 12.1641 38.5469 12.1641C38 12.1641 37.5078 12.0573 37.0703 11.8438C36.6328 11.6302 36.2578 11.3229 35.9453 10.9219C35.638 10.5156 35.401 10.0234 35.2344 9.44531C35.0729 8.86719 34.9922 8.21615 34.9922 7.49219V5.05469C34.9922 4.34115 35.0729 3.70312 35.2344 3.14062C35.401 2.57292 35.6406 2.09115 35.9531 1.69531C36.2708 1.29427 36.651 0.989583 37.0938 0.78125C37.5417 0.572917 38.0469 0.46875 38.6094 0.46875C39.2969 0.46875 39.8906 0.598958 40.3906 0.859375C40.8906 1.11458 41.2839 1.51823 41.5703 2.07031C41.862 2.61719 42.0339 3.32292 42.0859 4.1875H41.1875C41.1406 3.48958 41.0156 2.92969 40.8125 2.50781C40.6146 2.08594 40.3333 1.78125 39.9688 1.59375C39.6094 1.40104 39.1562 1.30469 38.6094 1.30469C38.1719 1.30469 37.7839 1.39062 37.4453 1.5625C37.112 1.72917 36.8281 1.97396 36.5938 2.29688C36.3594 2.61458 36.1823 3.00521 36.0625 3.46875C35.9479 3.92708 35.8906 4.45052 35.8906 5.03906V7.49219C35.8906 8.07552 35.9453 8.60156 36.0547 9.07031C36.1693 9.53906 36.3385 9.94271 36.5625 10.2812C36.7865 10.6198 37.0625 10.8802 37.3906 11.0625C37.7188 11.2396 38.1042 11.3281 38.5469 11.3281C39.1094 11.3281 39.5755 11.2422 39.9453 11.0703C40.3151 10.8932 40.6016 10.5938 40.8047 10.1719C41.0078 9.75 41.1354 9.17708 41.1875 8.45312ZM45 4.94531V12H44.1328V3.54688H44.9766L45 4.94531ZM47.4609 3.48438L47.4297 4.35938C47.3411 4.33854 47.2552 4.32552 47.1719 4.32031C47.0938 4.3099 47.0026 4.30469 46.8984 4.30469C46.5703 4.30469 46.2812 4.3776 46.0312 4.52344C45.7865 4.66927 45.5781 4.875 45.4062 5.14062C45.2396 5.40104 45.1094 5.70573 45.0156 6.05469C44.9271 6.39844 44.875 6.77083 44.8594 7.17188L44.5625 7.30469C44.5625 6.75781 44.6094 6.2474 44.7031 5.77344C44.7969 5.29948 44.9401 4.88542 45.1328 4.53125C45.3307 4.17188 45.5781 3.89323 45.875 3.69531C46.1719 3.49219 46.526 3.39062 46.9375 3.39062C47.0312 3.39062 47.1276 3.40104 47.2266 3.42188C47.3307 3.4375 47.4089 3.45833 47.4609 3.48438ZM51.6016 12.1641C51.1328 12.1641 50.7031 12.0885 50.3125 11.9375C49.9219 11.7812 49.5833 11.5469 49.2969 11.2344C49.0156 10.9167 48.7969 10.5182 48.6406 10.0391C48.4844 9.55469 48.4062 8.98438 48.4062 8.32812V7.35156C48.4062 6.65365 48.487 6.05469 48.6484 5.55469C48.8151 5.04948 49.0417 4.63802 49.3281 4.32031C49.6146 4.0026 49.9401 3.76823 50.3047 3.61719C50.6693 3.46615 51.0521 3.39062 51.4531 3.39062C51.9167 3.39062 52.3255 3.46615 52.6797 3.61719C53.0339 3.76823 53.3281 3.9974 53.5625 4.30469C53.8021 4.60677 53.9818 4.99219 54.1016 5.46094C54.2266 5.92969 54.2891 6.48177 54.2891 7.11719V7.84375H48.9297V7.03125H53.4219V6.8125C53.4115 6.26042 53.3333 5.79167 53.1875 5.40625C53.0469 5.01562 52.8333 4.71875 52.5469 4.51562C52.2604 4.30729 51.8984 4.20312 51.4609 4.20312C51.138 4.20312 50.8411 4.26302 50.5703 4.38281C50.3047 4.4974 50.0729 4.67969 49.875 4.92969C49.6823 5.17969 49.5339 5.50521 49.4297 5.90625C49.3255 6.30729 49.2734 6.78906 49.2734 7.35156V8.32812C49.2734 8.84896 49.3281 9.29948 49.4375 9.67969C49.5521 10.0547 49.7135 10.3672 49.9219 10.6172C50.1354 10.862 50.388 11.0469 50.6797 11.1719C50.9714 11.2917 51.2943 11.3516 51.6484 11.3516C52.0807 11.3516 52.4609 11.276 52.7891 11.125C53.1172 10.974 53.4089 10.7474 53.6641 10.4453L54.125 11.0234C53.974 11.2318 53.7839 11.4219 53.5547 11.5938C53.3255 11.7656 53.0521 11.9036 52.7344 12.0078C52.4167 12.112 52.0391 12.1641 51.6016 12.1641ZM60.4453 10.4844V5.88281C60.4453 5.48698 60.3776 5.16667 60.2422 4.92188C60.1068 4.67188 59.9089 4.48958 59.6484 4.375C59.388 4.26042 59.0651 4.20312 58.6797 4.20312C58.3203 4.20312 58.0026 4.27604 57.7266 4.42188C57.4505 4.5625 57.2344 4.76042 57.0781 5.01562C56.9219 5.26562 56.8438 5.55469 56.8438 5.88281L55.9766 5.875C55.9766 5.55208 56.0417 5.23958 56.1719 4.9375C56.3073 4.63542 56.4948 4.36979 56.7344 4.14062C56.974 3.90625 57.2604 3.72396 57.5938 3.59375C57.9323 3.45833 58.3073 3.39062 58.7188 3.39062C59.2188 3.39062 59.6641 3.47135 60.0547 3.63281C60.4453 3.79427 60.75 4.0599 60.9688 4.42969C61.1927 4.79948 61.3047 5.28906 61.3047 5.89844V10.2266C61.3047 10.5182 61.3229 10.8203 61.3594 11.1328C61.401 11.4453 61.4583 11.7031 61.5312 11.9062V12H60.6172C60.5599 11.8125 60.5156 11.5781 60.4844 11.2969C60.4583 11.0156 60.4453 10.7448 60.4453 10.4844ZM60.6328 7.07031L60.6484 7.80469H59.1484C58.737 7.80469 58.3776 7.84896 58.0703 7.9375C57.763 8.02604 57.5052 8.15365 57.2969 8.32031C57.0938 8.48698 56.9401 8.6875 56.8359 8.92188C56.7318 9.15104 56.6797 9.40885 56.6797 9.69531C56.6797 10.0703 56.7396 10.3776 56.8594 10.6172C56.9844 10.8568 57.1615 11.0339 57.3906 11.1484C57.6198 11.2578 57.8984 11.3125 58.2266 11.3125C58.6484 11.3125 59.0234 11.2266 59.3516 11.0547C59.6797 10.8828 59.9479 10.6562 60.1562 10.375C60.3646 10.0938 60.5 9.79427 60.5625 9.47656L60.7969 10C60.7448 10.2396 60.6484 10.4844 60.5078 10.7344C60.3672 10.9844 60.1849 11.2188 59.9609 11.4375C59.737 11.651 59.4714 11.8255 59.1641 11.9609C58.8568 12.0964 58.5078 12.1641 58.1172 12.1641C57.6589 12.1641 57.2552 12.0755 56.9062 11.8984C56.5573 11.7214 56.2865 11.4557 56.0938 11.1016C55.9062 10.7422 55.8125 10.2995 55.8125 9.77344C55.8125 9.38281 55.8802 9.02344 56.0156 8.69531C56.151 8.36719 56.3516 8.08073 56.6172 7.83594C56.8828 7.59115 57.2161 7.40365 57.6172 7.27344C58.0182 7.13802 58.4844 7.07031 59.0156 7.07031H60.6328ZM66.4219 3.54688V4.32812H62.8125V3.54688H66.4219ZM64.1094 1.38281H64.9844V9.9375C64.9844 10.3281 65.026 10.6224 65.1094 10.8203C65.1927 11.0182 65.3021 11.151 65.4375 11.2188C65.5729 11.2812 65.7161 11.3125 65.8672 11.3125C65.987 11.3125 66.099 11.3047 66.2031 11.2891C66.3125 11.2734 66.4115 11.2552 66.5 11.2344L66.5234 12.0312C66.4297 12.0677 66.3047 12.0964 66.1484 12.1172C65.9922 12.1432 65.8333 12.1562 65.6719 12.1562C65.375 12.1562 65.1094 12.0885 64.875 11.9531C64.6406 11.8177 64.4531 11.5885 64.3125 11.2656C64.1771 10.9375 64.1094 10.4922 64.1094 9.92969V1.38281ZM69.2812 3.54688V12H68.4141V3.54688H69.2812ZM68.2812 1.10938C68.2812 0.927083 68.3307 0.776042 68.4297 0.65625C68.5339 0.53125 68.6745 0.46875 68.8516 0.46875C69.0339 0.46875 69.1745 0.53125 69.2734 0.65625C69.3776 0.776042 69.4297 0.927083 69.4297 1.10938C69.4297 1.28646 69.3776 1.4349 69.2734 1.55469C69.1745 1.67448 69.0339 1.73438 68.8516 1.73438C68.6745 1.73438 68.5339 1.67448 68.4297 1.55469C68.3307 1.4349 68.2812 1.28646 68.2812 1.10938ZM73.8047 11.0859L76.0156 3.54688H76.9062L74.2734 12H73.6484L73.8047 11.0859ZM71.8281 3.54688L74.0703 11.1094L74.1953 12H73.5781L70.9375 3.54688H71.8281ZM81.1641 12.1641C80.6953 12.1641 80.2656 12.0885 79.875 11.9375C79.4844 11.7812 79.1458 11.5469 78.8594 11.2344C78.5781 10.9167 78.3594 10.5182 78.2031 10.0391C78.0469 9.55469 77.9688 8.98438 77.9688 8.32812V7.35156C77.9688 6.65365 78.0495 6.05469 78.2109 5.55469C78.3776 5.04948 78.6042 4.63802 78.8906 4.32031C79.1771 4.0026 79.5026 3.76823 79.8672 3.61719C80.2318 3.46615 80.6146 3.39062 81.0156 3.39062C81.4792 3.39062 81.888 3.46615 82.2422 3.61719C82.5964 3.76823 82.8906 3.9974 83.125 4.30469C83.3646 4.60677 83.5443 4.99219 83.6641 5.46094C83.7891 5.92969 83.8516 6.48177 83.8516 7.11719V7.84375H78.4922V7.03125H82.9844V6.8125C82.974 6.26042 82.8958 5.79167 82.75 5.40625C82.6094 5.01562 82.3958 4.71875 82.1094 4.51562C81.8229 4.30729 81.4609 4.20312 81.0234 4.20312C80.7005 4.20312 80.4036 4.26302 80.1328 4.38281C79.8672 4.4974 79.6354 4.67969 79.4375 4.92969C79.2448 5.17969 79.0964 5.50521 78.9922 5.90625C78.888 6.30729 78.8359 6.78906 78.8359 7.35156V8.32812C78.8359 8.84896 78.8906 9.29948 79 9.67969C79.1146 10.0547 79.276 10.3672 79.4844 10.6172C79.6979 10.862 79.9505 11.0469 80.2422 11.1719C80.5339 11.2917 80.8568 11.3516 81.2109 11.3516C81.6432 11.3516 82.0234 11.276 82.3516 11.125C82.6797 10.974 82.9714 10.7474 83.2266 10.4453L83.6875 11.0234C83.5365 11.2318 83.3464 11.4219 83.1172 11.5938C82.888 11.7656 82.6146 11.9036 82.2969 12.0078C81.9792 12.112 81.6016 12.1641 81.1641 12.1641ZM94.8359 9.19531C94.8359 8.88802 94.7943 8.61198 94.7109 8.36719C94.6276 8.1224 94.4896 7.90365 94.2969 7.71094C94.1042 7.51302 93.8411 7.33073 93.5078 7.16406C93.1797 6.9974 92.7734 6.83073 92.2891 6.66406C91.8099 6.5026 91.3776 6.32552 90.9922 6.13281C90.612 5.9401 90.2839 5.71875 90.0078 5.46875C89.737 5.21875 89.5286 4.92708 89.3828 4.59375C89.2422 4.26042 89.1719 3.86979 89.1719 3.42188C89.1719 2.97917 89.25 2.57812 89.4062 2.21875C89.5677 1.85417 89.7917 1.54167 90.0781 1.28125C90.3646 1.02083 90.7031 0.820312 91.0938 0.679688C91.4844 0.539062 91.9167 0.46875 92.3906 0.46875C93.0677 0.46875 93.651 0.622396 94.1406 0.929688C94.6354 1.23177 95.013 1.64062 95.2734 2.15625C95.5391 2.66667 95.6719 3.23698 95.6719 3.86719H94.7891C94.7891 3.3724 94.6953 2.93229 94.5078 2.54688C94.3255 2.16146 94.0547 1.85938 93.6953 1.64062C93.3411 1.41667 92.9089 1.30469 92.3984 1.30469C91.8828 1.30469 91.4505 1.40104 91.1016 1.59375C90.7578 1.78125 90.5 2.03385 90.3281 2.35156C90.1562 2.66406 90.0703 3.01042 90.0703 3.39062C90.0703 3.66146 90.112 3.91146 90.1953 4.14062C90.2839 4.36979 90.4245 4.58073 90.6172 4.77344C90.8151 4.96615 91.0729 5.14844 91.3906 5.32031C91.7135 5.48698 92.1068 5.64583 92.5703 5.79688C93.0859 5.95833 93.5391 6.14062 93.9297 6.34375C94.3255 6.54688 94.6562 6.78125 94.9219 7.04688C95.1927 7.3125 95.3958 7.61979 95.5312 7.96875C95.6719 8.31771 95.7422 8.72135 95.7422 9.17969C95.7422 9.64323 95.6615 10.0599 95.5 10.4297C95.3385 10.7943 95.1094 11.1068 94.8125 11.3672C94.5156 11.6224 94.1667 11.8177 93.7656 11.9531C93.3646 12.0885 92.9219 12.1562 92.4375 12.1562C92.0156 12.1562 91.5938 12.0938 91.1719 11.9688C90.75 11.8385 90.3646 11.6354 90.0156 11.3594C89.6667 11.0781 89.388 10.7214 89.1797 10.2891C88.9714 9.85677 88.8672 9.34115 88.8672 8.74219H89.7656C89.7656 9.21615 89.8438 9.61979 90 9.95312C90.1562 10.2812 90.362 10.5469 90.6172 10.75C90.8776 10.9479 91.1667 11.0938 91.4844 11.1875C91.8021 11.276 92.1224 11.3203 92.4453 11.3203C92.9349 11.3203 93.3594 11.2318 93.7188 11.0547C94.0781 10.8776 94.3542 10.6302 94.5469 10.3125C94.7396 9.98958 94.8359 9.61719 94.8359 9.19531ZM100.328 3.54688V4.32812H96.7188V3.54688H100.328ZM98.0156 1.38281H98.8906V9.9375C98.8906 10.3281 98.9323 10.6224 99.0156 10.8203C99.099 11.0182 99.2083 11.151 99.3438 11.2188C99.4792 11.2812 99.6224 11.3125 99.7734 11.3125C99.8932 11.3125 100.005 11.3047 100.109 11.2891C100.219 11.2734 100.318 11.2552 100.406 11.2344L100.43 12.0312C100.336 12.0677 100.211 12.0964 100.055 12.1172C99.8984 12.1432 99.7396 12.1562 99.5781 12.1562C99.2812 12.1562 99.0156 12.0885 98.7812 11.9531C98.5469 11.8177 98.3594 11.5885 98.2188 11.2656C98.0833 10.9375 98.0156 10.4922 98.0156 9.92969V1.38281ZM106.742 10.0469V3.54688H107.602V12H106.773L106.742 10.0469ZM106.898 8.47656L107.32 8.46094C107.32 8.99219 107.268 9.48438 107.164 9.9375C107.06 10.3854 106.896 10.776 106.672 11.1094C106.453 11.4427 106.167 11.7005 105.812 11.8828C105.458 12.0651 105.031 12.1562 104.531 12.1562C104.182 12.1562 103.865 12.099 103.578 11.9844C103.292 11.8646 103.044 11.6771 102.836 11.4219C102.633 11.1667 102.474 10.8385 102.359 10.4375C102.25 10.0312 102.195 9.53906 102.195 8.96094V3.54688H103.062V8.97656C103.062 9.42448 103.104 9.79948 103.188 10.1016C103.271 10.4036 103.385 10.6432 103.531 10.8203C103.677 10.9974 103.844 11.125 104.031 11.2031C104.224 11.2812 104.427 11.3203 104.641 11.3203C105.208 11.3203 105.656 11.1875 105.984 10.9219C106.312 10.6562 106.547 10.3099 106.688 9.88281C106.828 9.45052 106.898 8.98177 106.898 8.47656ZM114.523 10.3594V0H115.383V12H114.578L114.523 10.3594ZM109.617 8.17188V7.38281C109.617 6.67448 109.68 6.06771 109.805 5.5625C109.935 5.05208 110.12 4.63802 110.359 4.32031C110.604 3.9974 110.896 3.76302 111.234 3.61719C111.573 3.46615 111.953 3.39062 112.375 3.39062C112.786 3.39062 113.146 3.46875 113.453 3.625C113.766 3.77604 114.031 3.99219 114.25 4.27344C114.469 4.55469 114.646 4.89062 114.781 5.28125C114.917 5.66667 115.016 6.09896 115.078 6.57812V9.10938C115.026 9.55729 114.932 9.96875 114.797 10.3438C114.667 10.7135 114.49 11.0339 114.266 11.3047C114.047 11.5755 113.779 11.7865 113.461 11.9375C113.143 12.0885 112.776 12.1641 112.359 12.1641C111.938 12.1641 111.557 12.0833 111.219 11.9219C110.885 11.7604 110.599 11.5156 110.359 11.1875C110.12 10.8594 109.935 10.4453 109.805 9.94531C109.68 9.44531 109.617 8.85417 109.617 8.17188ZM110.492 7.38281V8.17188C110.492 8.71875 110.531 9.1901 110.609 9.58594C110.688 9.98177 110.81 10.3099 110.977 10.5703C111.148 10.8255 111.362 11.0156 111.617 11.1406C111.878 11.2656 112.182 11.3281 112.531 11.3281C112.974 11.3281 113.344 11.237 113.641 11.0547C113.938 10.8672 114.174 10.6224 114.352 10.3203C114.534 10.013 114.667 9.67708 114.75 9.3125V6.41406C114.698 6.16406 114.62 5.91146 114.516 5.65625C114.417 5.40104 114.284 5.16406 114.117 4.94531C113.951 4.72656 113.74 4.55208 113.484 4.42188C113.229 4.28646 112.917 4.21875 112.547 4.21875C112.193 4.21875 111.885 4.28385 111.625 4.41406C111.365 4.53906 111.151 4.73177 110.984 4.99219C110.818 5.2474 110.693 5.57292 110.609 5.96875C110.531 6.36458 110.492 6.83594 110.492 7.38281ZM118.688 3.54688V12H117.82V3.54688H118.688ZM117.688 1.10938C117.688 0.927083 117.737 0.776042 117.836 0.65625C117.94 0.53125 118.081 0.46875 118.258 0.46875C118.44 0.46875 118.581 0.53125 118.68 0.65625C118.784 0.776042 118.836 0.927083 118.836 1.10938C118.836 1.28646 118.784 1.4349 118.68 1.55469C118.581 1.67448 118.44 1.73438 118.258 1.73438C118.081 1.73438 117.94 1.67448 117.836 1.55469C117.737 1.4349 117.688 1.28646 117.688 1.10938ZM120.773 8.21875V7.33594C120.773 6.69531 120.846 6.13281 120.992 5.64844C121.143 5.15885 121.354 4.7474 121.625 4.41406C121.901 4.07552 122.227 3.82031 122.602 3.64844C122.982 3.47656 123.398 3.39062 123.852 3.39062C124.32 3.39062 124.742 3.47656 125.117 3.64844C125.497 3.82031 125.823 4.07552 126.094 4.41406C126.37 4.7474 126.581 5.15885 126.727 5.64844C126.878 6.13281 126.953 6.69531 126.953 7.33594V8.21875C126.953 8.85417 126.878 9.41927 126.727 9.91406C126.581 10.4036 126.37 10.8151 126.094 11.1484C125.823 11.4818 125.497 11.7344 125.117 11.9062C124.742 12.0781 124.323 12.1641 123.859 12.1641C123.406 12.1641 122.99 12.0781 122.609 11.9062C122.229 11.7292 121.901 11.474 121.625 11.1406C121.354 10.8073 121.143 10.3958 120.992 9.90625C120.846 9.41667 120.773 8.85417 120.773 8.21875ZM121.641 7.33594V8.21875C121.641 8.69792 121.69 9.13021 121.789 9.51562C121.888 9.90104 122.034 10.2318 122.227 10.5078C122.419 10.7786 122.651 10.987 122.922 11.1328C123.198 11.2786 123.51 11.3516 123.859 11.3516C124.24 11.3516 124.568 11.2786 124.844 11.1328C125.125 10.987 125.357 10.7786 125.539 10.5078C125.727 10.2318 125.865 9.90104 125.953 9.51562C126.047 9.13021 126.094 8.69792 126.094 8.21875V7.33594C126.094 6.85677 126.044 6.42708 125.945 6.04688C125.846 5.66146 125.698 5.33333 125.5 5.0625C125.307 4.78646 125.073 4.57552 124.797 4.42969C124.521 4.27865 124.208 4.20312 123.859 4.20312C123.51 4.20312 123.198 4.27865 122.922 4.42969C122.646 4.57552 122.411 4.78646 122.219 5.0625C122.031 5.33333 121.888 5.66146 121.789 6.04688C121.69 6.42708 121.641 6.85677 121.641 7.33594Z" fill="black"/>
                    </svg>
                  </div>
                  <div class="col-md-6 col-ms-12 text-end">
                    <span class="fs-12">Ⓒ 2022 Note Studio.</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </footer>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/gsap.min.js"></script>
    <script src="/js/ScrollTrigger.min.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>