
<?php require VIEW_ROOT . '/templates/header.php'; ?>   
  <header class="short-mast" id="tesla-bg">
      <div class="header-content">
          <div class="header-content-inner">
              <h1 class="section-heading text-white">Tesla Remake</h1>
              <a href="http://htmlpreview.github.io/?https://github.com/RepIica/tesla-remake/blob/master/index.html" target="_blank">
              <div class="btn btn-primary btn-xl" id="fade">view full site</div></a>
              <a href="#"><div class="btn btn-primary" id="temp">view full site</div></a>
          </div>
      </div>
  </header>

  <section>
    <div class="container">
      <div class="row">
        <div class="col-sm-9">
          <h3 class="dark">I developed this site during <a href="#">Innovation Lab's </a>web development and fundamentals program.</h3>
          <br>
          <p class="text-muted">This was a 1 week assignment in which I had to redesign and build a website's homepage of another company and make it mobile responsive. Elon Musk is one of my biggest role-models, so I decided to look at tesla's website and thought it would be cool to remake.</p>
          <p class="text-muted">Tesla's homepage was already very well made, so I attempted to do a more minimal take of the site, while rebuilding some of the same elements they already kept on the page. This was one the projects I worked on right after learning the basics of web development and bootstrap, so it was challenging to implement some of the more advanced features like the cycling slideshow of two tesla vehicles and the buttons that appear on hover of the slideshow, which I had to use jquery for. These and other elements also necessitated css media queries to ensure proper mobile responsiveness and a better user experience.</p>
          <br>
          <br>
          <div class="row double-img">            
            <div class="col-md-5">
	            <video
		          	class="img-fluid"
			          id="gif-mp4"
			          poster="https://media.giphy.com/media/3ohrymWYz41wWcYte8/200_s.gif"
			          autoplay
			          loop>
			          <source src="https://media.giphy.com/media/3ohrymWYz41wWcYte8/giphy.mp4" type="video/mp4">
			        </video>
			      </div>  
			      <div class="col-md-7"><img class="full-screenshot" src="http://i.imgur.com/W2e5ZrQ.jpg"/></div>          
          </div><br>
          
          <div class="row">
          	<h5 class="dark"></h5>
            <div class="col-md-12 screenshot-wrap"><img class="img-fluid" src="http://i.imgur.com/MzJfNzZ.png"/></div>
          </div>
          <p class="text-muted">Thanks for reading!</p>   
          <h5 class="dark">Visit full <a href="http://htmlpreview.github.io/?https://github.com/RepIica/tesla-remake/blob/master/index.html" target="_blank">site</a></h5>
        </div> <!-- /col-sm-9 -->

        <div class="col-sm-2 offset-sm-1 text-dark tech">
          <h4 class="text-dark">Technologies Used</h4>
          <ul>
            <li>HTML5</li>
            <li>CSS3</li>
            <li>Javascript</li>
            <li>Jquery</li>
            <li>Bootstrap</li>
          </ul>
        </div> <!-- col-sm-2 -->

      </div> <!-- /row -->
    </div> <!-- /container -->    
  </section>
<?php require VIEW_ROOT . '/templates/footer.php'; ?>