<?php 
    require VIEW_ROOT . '/templates/header.php'; 
    
    $result = "";
    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $from = 'Sendhere.net Contact Form'; 
        $to = 'ketrixz@gmail.com'; 
        $subject = 'Message from Contact Demo ';
         
        $body = "From: $name\n E-Mail: $email\n Message:\n $message";
        
        if (mail ($to, $subject, $body, $from)) {
            $result='<h5 class="alert alert-success text-center">Thank You! I will be in touch.</h5>';
        } else {
            $result='<p class="alert alert-danger text-center">Sorry there was an error sending your message. Please try again later.</p>';
        }
    }
?>  
                        <div class="container-fluid" style="position: absolute; width: 100%;margin-top:10vh; z-index: 99;">
                            <div class="row">
                                <div class="col-sm-12">
                                    <?php echo $result; ?>  
                                </div>
                            </div>                            
                        </div>  
    <header class="masthead">
        <div class="header-content">
            <div class="header-content-inner">
                <h1 >sendhere.net - its where I sent you</h1>                
                <hr>
                <p class="text-faded Montserrat" id="fade">If you're here, you probably wanted to learn more about me or see my porfolio.<br> Cool, have a look!</p>
                <p class="text-faded Montserrat" id="temp">If you're here, you probably wanted to learn more about me or see my porfolio.<br> Cool, have a look!</p>
                <a href="#about"><div class="btn btn-primary btn-xl" id="go-btn">let's go</div></a>
                <a class="btn btn-primary btn-xl" id="temp-btn" href="#about">let's go</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <h2 class="section-heading text-white">First, a few things about me -</h2>
                    <hr class="light">
                    <p class="text-white open"><span class="lead">I'm Sammy Akharaz.</span> I love technology, theres some in that image up there. Its my desktop sitting atop the desk just above where my custom built computer lies. I love learning things, especially if I can create more with that knowledge. This part of my personality led to my passion for tech and web development.</p>
                    <!-- <a class="btn btn-default btn-xl sr-button" href="#services">Get Started!</a> -->
                </div>
            </div>
        </div>
    </section>

    <section id="languages">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading dark">Technical Expertise</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-code text-primary sr-icons"></i>
                        <h3 class="dark">Languages</h3>
                        <p class="text-muted">HTML, CSS, Javascript, ReactJS, ES6, Jquery, JSON, Bootstrap, PHP, SQL</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-desktop text-primary sr-icons"></i>
                        <h3 class="dark">Software</h3>
                        <p class="text-muted">Photoshop, GIMP, MAMP, XAMPP, phpMyAdmin, Sequel Pro, Google Drive, Google Analytics, Microsoft Office, Filezilla, Apache</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-rocket text-primary sr-icons"></i>
                        <h3 class="dark">UI/UX</h3>
                        <p class="text-muted">User-Experience oriented design. Wireframing mockups and responsive design. Familiarity with related tools such as Google Analytics.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-paint-brush text-primary sr-icons"></i>
                        <h3 class="dark">Design</h3>
                        <p class="text-muted">High proficiency in Photoshop, GIMP. <a href="https://www.youracclaim.com/users/sammy-akharaz" target="_blank">Adobe Certified Associate in Visual Communication using Adobe Photoshop</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Swiper -->
    <section id="portfolio">
        <div class="col-lg-12 text-center">
            <h2 class="section-heading text-white">Projects</h2>
            <hr class="primary">
        </div>
        <div class="swiper-container" id="swiper-projects">
            <div class="swiper-wrapper">
                <div class="swiper-slide project-slide" title="greenfig" style="background-image:url(http://i.imgur.com/cvUTROB.jpg)"></div>
                <div class="swiper-slide project-slide" title="dropoutrate" style="background-image:url(http://i.imgur.com/oRxUfhb.jpg)"></div>
                <div class="swiper-slide project-slide" title="tesla" style="background-image:url(http://i.imgur.com/Jl1hSTY.jpg)"></div>
                <div class="swiper-slide project-slide" title="extra" style="background-image:url(http://i.imgur.com/EEI8YbO.png)"></div>
                <div class="swiper-slide project-slide" title="#" style="background-image:url(http://i.imgur.com/awpQD4B.jpg)"></div><!-- 
                <div class="swiper-slide project-slide" title="6" style="background-image:url(http://i.imgur.com/awpQD4B.jpg)"></div>
                <div class="swiper-slide project-slide" title="7" style="background-image:url(http://i.imgur.com/awpQD4B.jpg)"></div>
                <div class="swiper-slide project-slide" title="8" style="background-image:url(http://i.imgur.com/awpQD4B.jpg)"></div>
                <div class="swiper-slide project-slide" title="9" style="background-image:url(http://i.imgur.com/awpQD4B.jpg)"></div>
                <div class="swiper-slide project-slide" title="10" style="background-image:url(http://i.imgur.com/awpQD4B.jpg)"></div> -->
            </div>
        </div>
    </section>
    <section id="contact">           
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">                        
                    <h2 class="form-title">Get in Touch</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <form id="contact-form" class="form" onsubmit="return validateForm()" method="post" role="form">
                        <div class="form-group">
                            <label class="form-label" id="nameLabel" for="name"></label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your name" tabindex="1">
                        </div>
                        <div class="form-group">
                            <label class="form-label" id="emailLabel" for="email"></label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" tabindex="2">
                        </div>

                        <div class="form-group">
                            <label class="form-label" id="messageLabel" for="message"></label>
                            <textarea rows="6" cols="60" name="message" class="form-control" id="message" placeholder="Your message" tabindex="4"></textarea>                                 
                        </div>
                        <div class="text-center margin-top-25">
                            <button type="submit" class="btn btn-mod btn-border btn-large" name="submit">Send Message</button>
                        </div>

                    </form><!-- /form -->
                </div><!-- /col -->
            </div><!-- /row -->
        </div> <!-- /container -->
    </section>

    <div class="call-to-action bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-xs-3 text-center">
                    <a href="https://www.facebook.com/sammy.akharaz" target="_blank"><i class="text-white fa fa-4x fa-facebook-square"></i></a>
                </div>
                <div class="col-xs-3 text-center">
                    <a href="https://www.linkedin.com/in/sammy-akharaz-7a0100126" target="_blank"><i class="text-white fa fa-4x fa-linkedin-square"></i></a>
                </div>
                <div class="col-xs-3 text-center">
                    <a href="https://github.com/RepIica" target="_blank"><i class="text-white fa fa-4x fa-github"></i></a>
                </div>
                <div class="col-xs-3 text-center">
                    <a href="https://stackoverflow.com/users/6866502/replica" target="_blank"><i class="text-white fa fa-4x fa-stack-overflow"></i></a>
                </div>
            </div>                
        </div> <!-- /container -->
    </div> <!-- /call-to-action -->

    <section class="bg-dark" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <h2 class="section-heading text-white">Thanks for visiting my site!</h2>
                    <hr class="light">
                    <p class="text-white">This site was a quick revamp of a bootstrap template. A new site design is coming soon!</p>
                    <p class="text-faded">Sammy Akharaz © 2017</p>
                </div>
            </div>
        </div>
    </section>
<?php require VIEW_ROOT . '/templates/footer.php'; ?>
