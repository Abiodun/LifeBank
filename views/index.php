<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LifeBank</title>
        <link rel="stylesheet" href="css/gumby.css">
        <link rel="stylesheet" href="css/style_landing.css">
        <link rel="author" href="humans.txt">
    </head>
    <body>
    	<div class="wrapper">
        <div class="app-demo">
          <div class="container">
            <div class="row">
              <div class="pull_right image five columns phone">
              </div>
            </div>
          </div>
        </div>
    		<div class="main-content">
    			<section id="home">
          
            <div class="container top-bar">

              <div class="top-nav">
                <div class="row main-nav">
                    <nav class="columns pull_right navigation">
                        <li><a href="#">How it works</a></li>
                        <li><a href="about">About</a></li>
                        <li><a href="#">Blog</a></li>
                        <li class="link-icon"><a href="http://twitter.com/lifebankapp" target="_blank"><i class="icon-twitter"></i></a></li>
                        <li class="link-icon"><a href="http://facebook.com/lifebankapp" target="_blank"><i class="icon-facebook"></i></a></li>



                    </nav>
                </div>
              </div>
            </div>
    				<div class="container">
    					<div class="row">
    						<div class="six columns alpha content-wrapper">
    							<div class="logo image">
    								<img src="img/logo-cw.png" alt="">
    							</div>
    							<h2>In Nigeria, access to safe blood is limited.</h2>
    							<p>LifeBank makes it easy to give and receive blood. We need your help, signup and start saving lives.</p>

                  <?php
                  if (!is_logged()) {
                  ?>
                  <div class="newsletter">
                    <form method="post">
                    <input class="mail" name="email" type="text" placeholder="Enter your email">
                    <input class="mail" name="password" type="password" placeholder="Choose a password">

                    <input type="submit" name="signup" value="Sign Up">
                    </form>
                    <?php
                    if ($_POST['signup'])
                      echo get_error();
                    ?>
                  </div>

                  <div class="social-signup">
                    <a href="twitter" class="twitter-connect social-login"><i class="icon-twitter"></i> <span>Sign up with Twitter</span></a>
                    <a href="facebook" class="facebook-connect social-login"><i class="icon-facebook"></i><span>Sign up with Facebook</span></a>
                  </div>
                  
                  <div class="email-login" style="margin-bottom:20px">
                    <span>Already have an account? <a href="#login">Sign in here</a> </span>
                  </div>
                  <?php
                  }
                  ?>
    						</div>
    					</div>
    				</div>
            <div class="support">
              <ul class="four_up tiles sponsors">
                  <li><img src="img/cchub-m.png" alt=""></li>
                  <li><img src="img/hellofood-m.png" alt=""></li>
                  <li><img src="img/audax-m.png" alt=""></li>
                  <li><img src="img/one-m.png" alt=""></li>
              </ul>
            </div>
    			</section>

    			<section id="login">
    				<div class="container">
    					<div class="row">
    						<div class="five columns alpha content-wrapper">
                  <h2>Login to LifeBank</h2>
                  <?php
                  if (!is_logged()) {
                  ?>
                  <p>Sign with your username <or with Facebook & Twitter></p>
    							<div class="newsletter">
                    <form method="post">
                      <input class="mail" name="email" type="text" placeholder="Enter your email">
                      <input class="mail" name="password" type="password" placeholder="Password">
                      <input type="submit" name="signin" value="Sign In">
                      </form>
                    <?php
                    if ($_POST['signin'])
                      echo get_error();
                    ?>
                  </div>
                  <div class="social-signup">
                    <a href="twitter" class="twitter-connect social-login"><i class="icon-twitter"></i> <span>Sign in with Twitter</span></a>
                    <a href="facebook" class="facebook-connect social-login"><i class="icon-facebook"></i><span>Sign in with Facebook</span></a>
                  </div>
                  <?php
                  }
                  else {
                  ?>
                  <p>You are already logged in as <?php echo $_SESSION['user']['name']; ?>. <a href="logout">Logout</a></p>
                  <?php
                  }
                  ?>
    						</div>
    					</div>
    				</div>
    			</section>
<!--
    			<section>
    				<div class="container">
    					<div class="row">
    						<div class="five columns alpha content-wrapper">
    							<h3>Lorem ipsum.</h3>
    							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum nulla est quibusdam nisi repellat eligendi et id magni commodi eaque pariatur aspernatur similique hic maiores placeat laboriosam ullam reprehenderit qui.</p>
    						</div>
    					</div>
    				</div>
    			</section>

    			<section>
    				<div class="container">
    					<div class="row">
    						<div class="five columns alpha content-wrapper">
    							<h3>Lorem </h3>
    							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum nulla est quibusdam nisi repellat eligendi et id magni commodi eaque pariatur aspernatur similique hic maiores placeat laboriosam ullam reprehenderit qui.</p>
    						</div>
    					</div>
    				</div>
    			</section>

    			<section>
    				<div class="container">
    					<div class="row">
    						<div class="five columns alpha content-wrapper">
    							<h3>Lorem ipsu</h3>
    							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum nulla est quibusdam nisi repellat eligendi et id magni commodi eaque pariatur aspernatur similique hic maiores placeat laboriosam ullam reprehenderit qui.</p>
    						</div>
    					</div>
    				</div>
    			</section> -->

    			<!-- <section id="last">
    				<div class="container">
    					<div class="row">

    						<div class="eleven columns centered">
    							<h3>Lorem ipsum dolor sit amet, consectetur. </h3>
    							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum nulla est quibusdam nisi repellat eligendi et id magni commodi eaque pariatur aspernatur similique hic maiores placeat laboriosam ullam reprehenderit qui.</p>

                                <div class="newsletter">
                                    <input class="mail" name="mail" type="text" value="Want to save lives? Drop your email" onfocus="if (this.value == 'Want to save lives? Drop your email') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Want to save lives? Drop your email';}">

                                    <input type="button" value="Send">
                                </div>

    							<div class="social">
    								<ul>
    									<li><a href="#"><i class="icon-twitter"></i></a></li>
    									<li><a href="#"><i class="icon-facebook"></i></a></li>
    									<li><a href="#"><i class="icon-gplus"></i></a></li>
    								</ul>
    							</div>
    						</div>
    					</div>
    				</div>
    			</section> -->
    		</div>
    	</div>

    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> -->
    <script>window.jQuery || document.write('<script src="js/libs/jquery-1.9.1.min.js"><\/script>')</script>
    <script src="js/libs/gumby.js"></script>
    <script src="js/main.js"></script>
    </body>
</html>