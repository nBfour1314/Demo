<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GROUP 2 VPN</title>
    <link
    rel="stylesheet"
    type="text/css"
    href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./css/app.css" />
  </head>
<?php
    session_start();
    include_once("Connection.php");
?>
  <body>
    
    <div class="wrapper">
      <header class="header">
        <div class="container">
          <div class="header-container">
            <img srcset="./images/logo.png 2x" alt="" class="header-logo" />
            <ul class="menu">
              <li class="menu-item">
                <a href="#" class="menu-link">About</a>
              </li>
              <li class="menu-item">
                <a href="#" class="menu-link">Features</a>
              </li>
              <li class="menu-item">
                <a href="#" class="menu-link">Pricing</a>
              </li>
              <li class="menu-item">
                <a href="#" class="menu-link">Testimonials</a>
              </li>
              <li class="menu-item">
                <a href="#" class="menu-link">Help</a>
              </li>
              <li class="menu-item menu-item--auth">
                <a href="#" class="header-signin">Sign In</a>
                <a href="#" class="button button--outline">Sign Up</a>
              </li>
            </ul>
            <div class="menu-toggle">
              <span></span><span></span><span></span>
            </div>
            <div class="header-auth">
              <a href="#" class="header-signin">Sign In</a>
              <a href="#" class="button button--outline">Sign Up</a>
            </div>
          </div>
        </div>
      </header>
      <main>
        <section class="hero">
          <div class="container">
            <div class="hero-container">
              <div class="hero-content">
                <h1 class="hero-heading">
                  Want anything to be easy with <strong>GROUP 2</strong>
                </h1>
                <p class="text hero-desc">
                  Provide a network for all your needs with ease and fun using
                  <span class="text-medium">GROUP 2VPN</span> discover interesting features from
                  us.
                </p>
                <a href="#" class="button button--primary button--rounded"
                  >Get Started</a
                >
              </div>
              <div class="hero-image">
                <img srcset="./images/hero-image.png 2x" alt="" />
              </div>
            </div>
          </div>
        </section>
        <section class="intro">
          <div class="container">
            <div class="intro-container">
              <div class="intro-item">
                <div class="intro-icon">
                  <img srcset="./images/user.png 2x" alt="" />
                </div>
                <div class="intro-info">
                  <h3 class="intro-title">90+</h3>
                  <span class="intro-text">Users</span>
                </div>
              </div>
              <div class="intro-item">
                <div class="intro-icon">
                  <img srcset="./images/location.png 2x" alt="" />
                </div>
                <div class="intro-info">
                  <h3 class="intro-title">30+</h3>
                  <span class="intro-text">Locations</span>
                </div>
              </div>
              <div class="intro-item">
                <div class="intro-icon">
                  <img srcset="./images/server.png 2x" alt="" />
                </div>
                <div class="intro-info">
                  <h3 class="intro-title">50+</h3>
                  <span class="intro-text">Servers</span>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="feature">
          <div class="container">
            <div class="feature-container">
            <?php
                include_once("Connection.php");
                $result = pg_query($conn, "SELECT * FROM product");
                if (!$result)
                {
                    die('Invalid query: ' . pg_error($conn));
                }

                while ($row = pg_fetch_array($result, NULL, PGSQL_ASSOC))
                {
            ?>
                <div class="feature-image">
                    <img src="./images/feature-image.png" alt="" />
                </div>
                
                <div class="feature-content">                 
                                    <h3 class="card-title"><?php echo  $row['Pro_name']?></h3>
                                    <p class="card-text"></p>
                                </div>

                                <div class="single-product">
                                    <div class="product-f-image">
                                        <div class="product-hover">
                                            <a href="?page=cart" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="?page=single-product" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>
                                </div>
                                

                <div class="feature-content">
                <h2 class="heading">Information</h2>

                <ul class="feature-list">
                  <li class="feature-item">
                    <img src="./images/icon-check.svg" alt="" class="feature-icon"/>
                    <span><?php echo "Full name:" . " " . $row['fullname']?></span>
                  </li>

                  <li class="feature-item">
                    <img src="./images/icon-check.svg" alt="" class="feature-icon"/>
                    <span><?php echo "Date of Birth:" . " " . $row['dateofbirth']?></span>
                  </li>

                  <li class="feature-item">
                    <img src="./images/icon-check.svg" alt="" class="feature-icon"/>
                    <span><?php echo "Gender:" . " " . $row['gender']?></span>
                  </li>

                  <li class="feature-item">
                    <img src="./images/icon-check.svg" alt="" class="feature-icon"/>
                    <span><?php echo "Major:" . " " . $row['major']?></span>
                  </li>

                  <li class="feature-item">
                    <img src="./images/icon-check.svg" alt="" class="feature-icon"/>
                    <span><?php echo "Location address:" . " " . $row['address']?></span>
                  </li>

                  <li class="feature-item">
                    <img src="./images/icon-check.svg" alt="" class="feature-icon"/>
                    <span><?php echo "Phone Number:" . " " . $row['telephone']?></span>
                  </li>

                  <li class="feature-item">
                    <img src="./images/icon-check.svg" alt="" class="feature-icon"/>
                    <span><?php echo "Email:" . " " . $row['email']?></span>
                  </li>
                </ul>
              </div>

            <?php
                }
            ?>
            </div>
          </div>
        </section>

        <section class="plan">
          <div class="container">
 
            <div class="boxed">
              <h2 class="heading network-heading">Huge Global Network of Fast VPN</h2>
              <p class="text">
                See <span class="text-medium">GROUP 2 VPN</span> everywhere to
                make it easier for you when you move locations.
              </p>
            </div>
            <div class="network-image">
              <img srcset="./images/network-image.png 2x" alt="" />
            </div>
          </div>

          </div>
        </section>
        <section class="partner">
          <div class="container">
            <div class="partner-container">
              <div class="partner-item"><img srcset="./images/logo-netflix.png 2x" alt=""></div>
              <div class="partner-item"><img srcset="./images/logo-reddit.png 2x" alt=""></div>
              <div class="partner-item"><img srcset="./images/logo-amazon.png 2x" alt=""></div>
              <div class="partner-item"><img srcset="./images/logo-discord.png 2x" alt=""></div>
              <div class="partner-item"><img srcset="./images/logo-spotify.png 2x" alt=""></div>
            </div>
          </div>
        </section>
        <section class="customer">
          <div class="container">
            <div class="boxed">
              <h2 class="heading">Trusted by Thousands of Happy Customer</h2>
              <p class="text">These are the stories of our customers who have joined us with great pleasure when using this crazy feature.</p>
            </div>
          </div>

          
        </section>
        <section class="subscribe">
          <div class="container">
            <div class="subscribe-container">
              <div class="subscribe-content">
                <h2 class="heading">Subscribe Now for Get Special Features!</h2>
                <p class="text">Let's subscribe with us and find the fun.</p>
              </div>
              <a href="#" class="button button--primary button--rounded button--shadow">Subscribe Now</a>
            </div>
          </div>
        </section>
      </main>

      <!--Footer-->
      <footer class="footer">
        <div class="container">
          <div class="footer-container">
            <div class="footer-column">
              <a href="index.html" class="footer-logo">
                <img srcset="./images/logo.png 2x" alt="">
              </a>
              <p class="footer-desc text"><span class="text-medium">GROUP 2</span> is a private virtual network that has unique features and has high security.</p>
              <div class="social">
                <a href="#" class="social-item">
                  <img srcset="./images/Facebook.png 2x" alt="">
                </a>
                <a href="#" class="social-item">
                  <img srcset="./images/Twitter.png 2x" alt="">
                </a>
                <a href="#" class="social-item">
                  <img srcset="./images/Instagram.png 2x" alt="">
                </a>
              </div>
              <p class="copyright">©2020GROUP 2<span class="text-medium">VPN</span></p>
            </div>
            <div class="footer-column">
              <h3 class="footer-heading heading-small">Product</h3>
              <ul class="footer-links">
                <li class="footer-item">
                  <a href="#" class="footer-link">Download</a>
                </li>
                <li class="footer-item">
                  <a href="#" class="footer-link">Download</a>
                </li>
                <li class="footer-item">
                  <a href="#" class="footer-link">Download</a>
                </li>
                <li class="footer-item">
                  <a href="#" class="footer-link">Download</a>
                </li>
                <li class="footer-item">
                  <a href="#" class="footer-link">Download</a>
                </li>
              </ul>
            </div>
            <div class="footer-column">
              <h3 class="footer-heading heading-small">Engage</h3>
              <ul class="footer-links">
                <li class="footer-item">
                  <a href="#" class="footer-link">Download</a>
                </li>
                <li class="footer-item">
                  <a href="#" class="footer-link">Download</a>
                </li>
                <li class="footer-item">
                  <a href="#" class="footer-link">Download</a>
                </li>
                <li class="footer-item">
                  <a href="#" class="footer-link">Download</a>
                </li>
                <li class="footer-item">
                  <a href="#" class="footer-link">Download</a>
                </li>
              </ul>
            </div>
            <div class="footer-column">
              <h3 class="footer-heading heading-small">Earn Money</h3>
              <ul class="footer-links">
                <li class="footer-item">
                  <a href="#" class="footer-link">Download</a>
                </li>
                <li class="footer-item">
                  <a href="#" class="footer-link">Download</a>
                </li>
                <li class="footer-item">
                  <a href="#" class="footer-link">Download</a>
                </li>
                <li class="footer-item">
                  <a href="#" class="footer-link">Download</a>
                </li>
                <li class="footer-item">
                  <a href="#" class="footer-link">Download</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>

    <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-1.11.0.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    ></script>
    <script src="./scripts/app.js"></script>
    <!-- sass ./sass/app.scss ./css/app.css --watch -->
  </body>
</html>
