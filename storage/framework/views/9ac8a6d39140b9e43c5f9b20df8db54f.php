<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="portfolio" />
    <meta name="author" content="geraldnael" />

    <title>This Is My Story</title>

    <link rel="icon" href="<?php echo e(asset('assets/images/t.png')); ?>" type="image/x-icon" />

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" />

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/font-awesome.css')); ?>" />

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/fullpage.min.css')); ?>" />

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/owl.carousel.css')); ?>" />

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/animate.css')); ?>" />

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/full.css')); ?>" />

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/responsive.css')); ?>" />
</head>
<body>
    <div id="video">
        <div class="preloader">
            <div class="preloader-bounce">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <header id="header">
            <div class="container-fluid">
                <div class="navbar">
                    <a href="#slide01" id="logo"> GeraldNael. </a>
                    <div class="navigation-row">
                        <nav id="navigation">
                            <button type="button" class="navbar-toggle">
                                <i class="fa fa-bars"></i>
                            </button>
                            <div class="nav-box navbar-collapse">
                                <ul class="navigation-menu nav navbar-nav navbars" id="nav">
                                    <li data-menuanchor="slide01" class="active">
                                        <a href="#slide01">Home</a>
                                    </li>
                                    <li data-menuanchor="slide02">
                                        <a href="#slide02">About</a>
                                    </li>
                                    <li data-menuanchor="slide03">
                                        <a href="#slide03">Skills</a>
                                    </li>
                                    <li data-menuanchor="slide04">
                                        <a href="#slide04">Resume</a>
                                    </li>
                                    <li data-menuanchor="slide05">
                                        <a href="#slide05">Portfolio</a>
                                    </li>
                                    <li data-menuanchor="slide06">
                                        <a href="#slide06">Certifications</a>
                                    </li>
                                    <li data-menuanchor="slide07">
                                        <a href="#slide07">Contact Me</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <video autoplay muted loop id="myVideo">
            <source src="<?php echo e(asset('assets/images/bg.mp4')); ?>" type="video/mp4" />
        </video>

        <div id="fullpage" class="fullpage-default">
            <div class="section animated-row" data-section="slide01">
                <div class="section-inner">
                    <div class="welcome-box">
                        <span class="welcome-first animate" data-animate="fadeInUp">Hello, My Name is</span>
                        <h1 class="welcome-title animate" data-animate="fadeInUp">Gerald Nathanael</h1>
                        <p class="animate" data-animate="fadeInUp">and I'm a Web Development Enthusiast</p>
                        <div class="scroll-down next-section animate" data-animate="fadeInUp">
                            <img src="<?php echo e(asset('assets/images/mouse-scroll.png')); ?>" alt="" /><span>Scroll Down</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section animated-row" data-section="slide02">
                <div class="section-inner">
                    <div class="about-section">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 wide-col-laptop">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="about-contentbox">
                                            <div class="animate" data-animate="fadeInUp">
                                                <span>About Me</span>
                                                <h2>Who am I?</h2>
                                                <p>
                                                    Hi, my name is Gerald Nathanael. I am a student at the Del Institute of Technology. This is my first portfolio. This portfolio was created for my course project. And before this portfolio, I also created a blog. I was in 3rd grade of junior high school when I created my first blog. My computer teacher used to teach me how to blog. Of course, it's not a coincidence. The first purpose of this blog is just for school projects and other random things I posted there before. This is the domain of my blog <a href="https://geraldnathan.blogspot.co.id" class="highlight-link" target="_blank">geraldnathan.blogspot.co.id</a>. It lay dormant for several years after I graduated from junior high school. Hit me up if you want to know me more.
                                                </p>
                                                <a href="#slide07" class="btn hire-me-btn">Hire Me</a>
                                                <a href="assets//CV/CV.pdf" class="btn download-cv-btn" download>Download CV</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <figure class="about-img animate" data-animate="fadeInUp">
                                            <img src="<?php echo e(asset('assets/images/profile.jpg')); ?>" class="rounded" alt="" />
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section animated-row" data-section="slide03">
                <div class="section-inner">
                    <div class="row justify-content-center">
                        <div class="col-md-7 wide-col-laptop">
                            <div class="title-block animate" data-animate="fadeInUp">
                                <span>My Skills</span>
                                <h2>What I'm good at?</h2>
                            </div>
                            <div class="skills-row animate" data-animate="fadeInDown">
                                <div class="row">
                                    <div class="col-md-8 offset-md-2">
                                        <div class="skill-item">
                                            <h6>HTML CSS</h6>
                                            <div class="skill-bar">
                                                <span>70%</span>
                                                <div class="filled-bar"></div>
                                            </div>
                                        </div>
                                        <div class="skill-item">
                                            <h6>PSD Design</h6>
                                            <div class="skill-bar">
                                                <span>75%</span>
                                                <div class="filled-bar-2"></div>
                                            </div>
                                        </div>
                                        <div class="skill-item">
                                            <h6>Blog</h6>
                                            <div class="skill-bar">
                                                <span>90%</span>
                                                <div class="filled-bar-3"></div>
                                            </div>
                                        </div>
                                        <div class="skill-item last-skill">
                                            <h6>Leadership</h6>
                                            <div class="skill-bar">
                                                <span>80%</span>
                                                <div class="filled-bar-4"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section animated-row" data-section="slide04">
                <div class="section-inner">
                    <div class="row justify-content-center">
                        <div class="col-md-7 wide-col-laptop">
                            <div class="title-block animate" data-animate="fadeInUp">
                                <span>My Resume</span>
                                <h2>What I've been involved in?</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="title-block animate" data-animate="fadeInUp">
                                        <h3 class="resume-title">Education</h3>
                                        <div class="resume-item">
                                            <h4>Del Institute of Technology</h4>
                                            <h5>2021 - Present</h5>
                                            <p>
                                                <em></em>
                                            </p>
                                            <p></p>
                                        </div>
                                        <br>
                                        <div class="resume-item">
                                            <h4>58 Jakarta Senior High School</h4>
                                            <h5>2018 - 2021</h5>
                                            <p>
                                                <em></em>
                                            </p>
                                            <p></p>
                                        </div>
                                        <br>
                                        <div class="resume-item">
                                            <h4>230 Jakarta Junior High School</h4>
                                            <h5>2015 - 2018</h5>
                                            <p>
                                                <em></em>
                                            </p>
                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <br>
                                <div class="col-lg-6">
                                    <div class="title-block animate" data-animate="fadeInUp">
                                    <h3 class="resume-title">Experience</h3>
                                    <div class="resume-item">
                                        <h4>Head of the Informatics Study Program Class</h4>
                                        <h5>2022 - Present</h5>
                                        <p>
                                            <em>
                                                Del Institute of Technology
                                            </em>
                                        </p>
                                        <p>
                                            Become a liaison between students and lecturers
                                        </p>
                                    </div>
                                    <div class="resume-item">
                                        <h4>Head of Design and Edit Division</h4>
                                        <h5>2021 - Present</h5>
                                        <p>
                                            <em>
                                                Del Cyber Security Club (DCSC)
                                            </em>
                                        </p>
                                        <p>
                                            Coordinating members to work on all matters related to design for the benefit of the club
                                        </p>
                                    </div>
                                    <div class="resume-item">
                                        <h4>Head of Public Relations and Publications Division</h4>
                                        <h5>2023 - 2024</h5>
                                        <p>
                                            <em>
                                                Intitute of Technology Electoral Commision Del
                                            </em>
                                        </p>
                                        <p>
                                            Coordinating members to convey all information regarding the general election commission via social media and directly
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section animated-row" data-section="slide05">
                <div class="section-inner">
                    <div class="row justify-content-center">
                        <div class="col-md-8 wide-col-laptop">
                            <div class="title-block animate" data-animate="fadeInUp">
                                <span>Portfolios</span>
                                <h2>What I've created?</h2>
                            </div>
                            <div class="portfolios-section">
                                <div class="portfolios-list owl-carousel">
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-box">
                                            <div class="thumb">
                                                <img src="<?php echo e(asset('assets/images/proyek-1.jpg')); ?>" alt="" />
                                            </div>
                                            <span class="portfolio-icon">
                                                <i aria-hidden="true"></i>
                                            </span>
                                            <h3><a href="https://geraldnael.github.io/jarkom/" class="highlight-link" target="_blank">IP Address Scanner</a></h3>
                                            <p>
                          This project was created with my team. This project
                          was created to complete our final project in a
                          computer networking course. We used python to make
                          this. The function of this program is to find the IP
                          address of a website.
                        </p>
                      </div>
                    </div>
                    <div class="item animate" data-animate="fadeInUp">
                      <div class="portfolio-box">
                        <div class="thumb">
                          <img src="assets/images/proyek-2.jpg" alt="" />
                        </div>
                        <span class="portfolio-icon">
                          <i aria-hidden="true"></i>
                        </span>
                        <h3><a href ="https://www.figma.com/file/ZGtjqYsduanjm8SUWIEZRq/Redesign-Website-Institut-Teknologi-Del?type=design&node-id=0%3A1&mode=design&t=96CtLcNOelRFXDaT-1" class="highlight-link" target="_blank">Redesign IT Del Website</a></h3>
                        <p>This design was created to fulfill IMK course assignments about IT Del Website. This was individual project.</p>
                      </div>
                    </div>
                    <div class="item animate" data-animate="fadeInUp">
                      <div class="portfolio-box">
                        <div class="thumb">
                          <img src="assets/images/proyek-3.jpg" alt="" />
                        </div>
                        <span class="portfolio-icon">
                          <i aria-hidden="true"></i>
                        </span>
                        <h3><a href ="https://geraldnathan.blogspot.co.id" class="highlight-link" target="_blank">Blogspot</a></h3>
                        <p>This is my first blog project using xml. 
                          I've started making this blog when i sat in grade 9th junior high school. 
                          The purpose of this blog is my school project for computer subject in school.</p>
                      </div>
                    </div>
                    <div class="item animate" data-animate="fadeInUp">
                      <div class="portfolio-box">
                        <div class="thumb">
                          <img src="assets/images/proyek-4.jpg" alt="" />
                        </div>
                        <span class="portfolio-icon">
                          <i aria-hidden="true"></i>
                        </span>
                        <h3><a href="https://www.figma.com/file/QUzGITXd09vG4KHRrCWwlm/MOCKUP-PERPUS-IT-DEL?type=design&mode=design&t=Zc4SVBQMzf9zADrI-1" class="highlight-link" target="_blank">Redesign IT Del Online Library Information System</a></h3>
                        <p>This design was created to fulfill IMK course assignments about IT Del Online Library Information System. This was individual project.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="section animated-row" data-section="slide06">
          <div class="section-inner">
            <div class="row justify-content-center">
              <div class="col-md-8 wide-col-laptop">
                <div class="title-block animate" data-animate="fadeInUp">
                  <span>My Certificates</span>
                  <h2>What i've joined</h2>
                </div>
                <div class="gallery-section">
                  <div class="gallery-list owl-carousel">
                    <div class="item animate" data-animate="fadeInUp">
                      <div class="certification-item">
                        <div class="thumb">
                          <img src="assets/images/item-1.jpg" alt="" />
                        </div>
                        <div class="thumb-inner animate"data-animate="fadeInUp">
                          <h4>Certificate of Expertise</h4>
                          <p>
                            DSF - 16 Front End Developer Certificate of
                            Completion held by Dibimbing (2023)
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="item animate" data-animate="fadeInUp">
                      <div class="certification-item">
                        <div class="thumb">
                          <img src="assets/images/item-2.jpg" alt="" />
                        </div>
                        <div class="thumb-inner animate"data-animate="fadeInUp">
                          <h4>Certificate of Expertise</h4>
                          <p>
                            Certificate of appreciation on the topic of AI held
                            by KOPI PENA (2023)
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="item animate" data-animate="fadeInUp">
                      <div class="certification-item">
                        <div class="thumb">
                          <img src="assets/images/item-3.jpg" alt="" />
                        </div>
                        <div class="thumb-inner animate"data-animate="fadeInUp">
                          <h4>Certificate of Expertise</h4>
                          <p>
                            Certificate of completion on the topic of practical
                            ways to build user authentication with vue.js, node
                            and stytch held by Inixindo (2023)
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="item animate" data-animate="fadeInUp">
                      <div class="certification-item">
                        <div class="thumb">
                          <img src="assets/images/item-4.jpg" alt="" />
                        </div>
                        <div
                          class="thumb-inner animate"
                          data-animate="fadeInUp"
                        >
                          <h4>Certificate of Participant</h4>
                          <p>
                            Certificate of workshop on the of Web Development
                            Basic Programming (2021)
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="item animate" data-animate="fadeInUp">
                      <div class="certification-item">
                        <div class="thumb">
                          <img src="assets/images/item-5.jpg" alt="" />
                        </div>
                        <div
                          class="thumb-inner animate"
                          data-animate="fadeInUp"
                        >
                          <h4>Certificate of Expertise</h4>
                          <p>
                            DSF - 17 UI/UX Design Certificate of Completion held
                            by Dibimbing (2023)
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="item animate" data-animate="fadeInUp">
                      <div class="certification-item">
                        <div class="thumb">
                          <img src="assets/images/item-6.jpg" alt="" />
                        </div>
                        <div
                          class="thumb-inner animate"
                          data-animate="fadeInUp"
                        >
                          <h4>Certificate of Expertise</h4>
                          <p>
                            Certificate of appreciation on the topic of AI held
                            by KOPI PENA (2023)
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="item animate" data-animate="fadeInUp">
                      <div class="certification-item">
                        <div class="thumb">
                          <img src="assets/images/item-7.jpg" alt="" />
                        </div>
                        <div
                          class="thumb-inner animate"
                          data-animate="fadeInUp"
                        >
                          <h4>Certificate of Achievement</h4>
                          <p>
                            Certificate of completion on the Frontrunner level
                            Book 6 at EF English First Center (2018)
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="item animate" data-animate="fadeInUp">
                      <div class="certification-item">
                        <div class="thumb">
                          <img src="assets/images/item-8.jpg" alt="" />
                        </div>
                        <div
                          class="thumb-inner animate"
                          data-animate="fadeInUp"
                        >
                          <h4>Certificate of Achievement</h4>
                          <p>
                            Certificate of completion on the Frontrunner level
                            Book 9 at EF English First Center (2019)
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="item animate" data-animate="fadeInUp">
                      <div class="certification-item">
                        <div class="thumb">
                          <img src="assets/images/item-9.jpg" alt="" />
                        </div>
                        <div
                          class="thumb-inner animate"
                          data-animate="fadeInUp"
                        >
                          <h4>Certificate of Achievement</h4>
                          <p>
                            Certificate of TOEFL Prediction Test held by Daily
                            Bahasa Inggris (2023)
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="item animate" data-animate="fadeInUp">
                      <div class="certification-item">
                        <div class="thumb">
                          <img src="assets/images/item-10.jpg" alt="" />
                        </div>
                        <div
                          class="thumb-inner animate"
                          data-animate="fadeInUp"
                        >
                          <h4>Certificate of Achievement</h4>
                          <p>
                            Certificate of course completion in Elementary
                            Levels at LBPP LIA
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="item animate" data-animate="fadeInUp">
                      <div class="certification-item">
                        <div class="thumb">
                          <img src="assets/images/item-11.jpg" alt="" />
                        </div>
                        <div
                          class="thumb-inner animate"
                          data-animate="fadeInUp"
                        >
                          <h4>Certificate of Award</h4>
                          <p>
                            Certificate of Classic Concert held by Purwa Caraka
                            Music Studio (2015)
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="item animate" data-animate="fadeInUp">
                      <div class="certification-item">
                        <div class="thumb">
                          <img src="assets/images/item-12.jpg" alt="" />
                        </div>
                        <div
                          class="thumb-inner animate"
                          data-animate="fadeInUp"
                        >
                          <h4>Certificate of Award</h4>
                          <p>
                            Certificate of Classic Concert held by Purwa Caraka
                            Music Studio (2017)
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="section animated-row" data-section="slide07">
          <div class="section-inner">
            <div class="row justify-content-center">
              <div class="col-md-7 wide-col-laptop">
                <div class="title-block animate" data-animate="fadeInUp">
                  <span>Contact</span>
                  <h2>Get In Touch!</h2>
                </div>
                <div class="contact-section">
                  <div class="row">
                    <div class="col-md-6 animate" data-animate="fadeInUp">
                      <div class="contact-box">
                        <div class="contact-row">
                          <i class="fa fa-map-marker"></i> Bekasi, West Java,
                          17434
                        </div>
                        <div class="contact-row">
                          <i class="fa fa-phone"></i> +6287782777168
                        </div>
                        <div class="contact-row">
                          <i class="fa fa-envelope"></i> geraldnael@gmail.com
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 animate" data-animate="fadeInUp">
                      <form id="contact-form">
                        <div class="input-field">
                          <input type="text" class="form-control" name="name" id="name" required placeholder="Name">
                        </div>
                        <div class="input-field">
                          <input type="email" class="form-control" name="email" id="email" required placeholder="Email">
                        </div>
                        <div class="input-field">
                          <textarea class="form-control" name="message" id="message" required placeholder="Message"></textarea>
                        </div>
                        <div id="form-messages" class="bg-danger"></div>
                        <button class="btn" type="submit" id="submitBtn">Submit</button>
                      </form>
                      <div id="form-messages" class="bg-danger"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="social-icons">
        <div class="text-right">
            <ul class="social-icons">
                <li>
                    <a href="https://web.facebook.com/profile.php?id=100009593295688" title="Facebook"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                    <a href="https://twitter.com/geraldnael" title="Twitter"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/in/gerald-nathanael-9777aa274/" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                </li>
                <li>
                    <a href="https://www.instagram.com/gerald.nael/" title="Instagram"><i class="fa fa-instagram"></i></a>
                </li>
            </ul>
        </div>
    </div>

    <script src="<?php echo e(asset('assets/js/jquery.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/fullpage.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/scrolloverflow.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jquery.inview.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/form.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>
</body>
</html><?php /**PATH C:\Users\Asus\portfolio\resources\views/welcome.blade.php ENDPATH**/ ?>