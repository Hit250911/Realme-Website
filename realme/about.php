
<?php include 'x.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="style3.css?v=<?=$version?>"/>
</head>
<body>
    <header style="background-color:rgba(0, 0, 0, 0.925);">
        <nav>
            <div class="logo">
                <img src="rw.png" height="" />
                <div class="product"><a href="registration.php">SignUp</a></div>
                <div class="product"><a href="login.php">Login</a></div>
                <div class="home"><a href="home2.php">Home</a></div>
                <!-- <div class="product"><a href="index.php">cart</a></div> -->
                <div class="product"><a href="productpage.php">Products</a></div>
              
                <div class="about"><a href="about.php">About</a></div>
                <div class="contact"><a href="contact.php">Contact</a></div>





            </div>
        </nav>
    </header>
    <main class="main">
        <center> <h1 id="h1">Realme Becomes the Fastest Smartphone Brand to Sell 100 million Handsets Globally</h1>
	   <p>-It took Realme three years to accomplish such an achievement since its inception in August 2018</p>
	   <p>-Realme also leads global smartphone growth board in Q2 with a YoY growth rate of 149% </p>
	   <p>-Realme also became the fastest brand to reach 50 million cumulative smartphone shipments in India as per Counterpoint </p>
	   <p>-Realme led the market in 5G smartphone shipments, capturing more than 22% share in Q2 2021 in India </p></center>
       <img id="i3" src="g1.jpeg"/>
       <img id="i4" src="g2.jpeg"/>
       <img id="i5" src="g3.jpeg"/>
       <h1>About Realme </h1>
       <p> Realme is a technology brand officially established on May 4, 2018 by Sky Li. The aspiration of realme is to provide products with a comprehensive superior experience for the young, and realme is committed to be a trendsetting technology brand.</p>
       <p>Due to the abilities in cutting-edge technologies of smartphones and IoT, realme brings consumers products with trendsetting technologies, features and trendsetting experiences that are first applied in the price segment.</p>
       <p>Realme has become the top 5G smartphone brand in India with a 23% share in Q2 2021 and is the fastest brand to reach 50 million cumulative smartphone shipments in India, according to Counterpoint Research.According to Counterpoint Hearables Report (Q2), realme emerged as the No.1 brand in the TWS market, driven by Buds Air Neo and Buds Q. TechARC has ranked realme as No. 1 Quality Smartphone Brand with the lowest repair rate as well as the highest in customer engagement. As the world's fastest-growing smartphone brand, realme stands firmly among the mainstream smartphone brands.</p>

    </main>
    <footer>
        <div class="footer-gray">
          <div class="footer-custom">
            <div class="footer-lists">
              <div class="footer-list-wrap">
                <h6 class="ftr-hdr">Order Toll Free</h6>
                <ul class="ftr-links-sub">
                  <li>800-952-5592</li>
                </ul>
                <h6 class="ftr-hdr">International</h6>
                <ul class="ftr-links-sub">
                  <li><a href="http://www.art.fr" rel="nofollow">France</a></li>
                  <li><a href="https://www.art.co.uk" rel="nofollow">United Kingdom</a></li>
                </ul>
              </div>
              <!--/.footer-list-wrap-->
              <div class="footer-list-wrap">
                <h6 class="ftr-hdr">Customer Service</h6>
                <ul class="ftr-links-sub">
                  <li><a href="/help/talktous.html" rel="nofollow">Contact Us</a></li>
                  <li><a href="/help/placingorders.html" rel="nofollow">Ordering</a></li>
                  <li><a href="/help/shipping.html" rel="nofollow">Shipping &amp; Delivery</a></li>
                  <li><a href="/help/shippingreturns.html" rel="nofollow">Returns</a></li>
                  <li><a href="/help/international-shipping.html" rel="nofollow">International Orders</a></li>
                  <li><a href="/~/egift-cards/" rel="nofollow">Gift Cards</a></li>
                  <li><a href="/help/faq.html" rel="nofollow">FAQs</a></li>
                </ul>
              </div>
              <div class="footer-list-wrap">
                <h6 class="ftr-hdr">About Art.com</h6>
                <ul class="ftr-links-sub">
                  <li><a href="/asp/aboutus/default-asp/_/posters.htm" rel="nofollow">Our Company</a></li>
                  <li><a href="http://corporate.art.com/careers" rel="nofollow">Careers</a></li>
                  <li><a href="/asp/landing/artistrising" rel="nofollow">Artist Rising</a></li>
                  <li><a href="/~/art-for-business" rel="nofollow">Business &amp; Trade Sales</a></li>
                  <li><a href="http://affiliates.art.com/index.aspx" rel="nofollow">Affiliate Program</a></li>
                  <li><a href="/catalog" rel="nofollow"><strong>Shop Our Catalog</strong></a></li>
                  <li><a href="http://blog.art.com" rel="nofollow">ART.COM BLOG</a></li>
                </ul>
              </div>
              <!--/.footer-list-wrap-->
              <div class="footer-list-wrap">
                <h6 class="ftr-hdr">My Account</h6>
                <ul class="ftr-links-sub">
                  <art:content rule="!loggedin">
                    <li class="ftr-Login"><span class="link login-trigger">Access My Account</span></li>
                    <li><span class="link" onclick="link('/asp/secure/your_account/track_orders-asp/_/posters.htm')">Track My Order</span></li>
                  </art:content>
                  <art:content rule="loggedin">
                    <li class="ftr-Login"><span class="link ftr-access-my-account">Access My Account</span></li>
                    <li><span class="link" onclick="window.location.href = getProfileKey() + '?pagetype=oh';">Track My Order</span></li>
                  </art:content>
                </ul>
              </div>
              <!--/.footer-list-wrap-->
            </div>
            <!--/.footer-lists-->
            <div class="footer-email">
              <h6 class="ftr-hdr">Sign up for exclusive offers and inspiration</h6>
              <div id="ftr-email" class="ftr-email-form">
                <form id="ftrEmailForm" method="post" action="http://em.art.com/pub/rf">
                  <div class="error">Please enter a valid email address</div>
                  <input type="text" name="email_address_" id="ftrEmailInput" class="input" placeholder="Enter email address" />
                  <!--
                      -->
                  <input type="submit" class="button" value="SUBMIT" />
                  <input type="hidden" name="country_iso2" value="">
                  <input type="hidden" name="language_iso2" value="en">
                  <input type="hidden" name="site_domain" value="art.com">
                  <input type="hidden" name="email_acq_source" value="01-000001">
                  <input type="hidden" name="email_acq_date" value="" id="ftr-email-date">
                  <input type="hidden" name="brand_id" value="ART">
                  <input type="hidden" name="_ri_" value="X0Gzc2X%3DWQpglLjHJlYQGnp51yrMf2qXdC9tjU8pzgMtwfYzaVwjpnpgHlpgneHmgJoXX0Gzc2X%3DWQpglLjHJlYQGnyLSq2fzdkuzdzglHMsUhgeNzaSgkk">
                </form>
              </div>
              <!--/.ftr-email-form-->
              <div class="ftr-email-privacy-policy"></div>
            </div>
            <!--/.footer-email-->
            <div class="footer-social">
              <h6 class="ftr-hdr">Follow Us</h6>
              <ul>
                <li>
                  <a href="https://www.facebook.com/art.com" title="Facebook" onclick="_gaq.push(['_trackSocial', 'Facebook', 'Follow', 'Footer', 'undefined', 'True']);">
                    <img width="24" height="24" alt="Like us on Facebook" src="http://cache1.artprintimages.com/images/jump_pages/rebrand/footer/fb.png">
                  </a>
                </li>
                <li>
                  <a href="https://plus.google.com/108089796661280870153" title="Google+" onclick="_gaq.push(['_trackSocial', 'GooglePlus', 'Follow', 'Footer', 'undefined', 'True']);">
                    <img width="24" height="24" alt="Follow us on Google+" src="http://cache1.artprintimages.com/images/jump_pages/rebrand/footer/gplus.png">
                  </a>
                </li>
                <li>
                  <a href="https://pinterest.com/artdotcom/" target="_blank">
                    <img width="24" height="24" alt="Follow us on Pinterest" src="http://cache1.artprintimages.com/images/jump_pages/rebrand/footer/pin-badge.png">
                  </a>
                </li>
                <li>
                  <a target="_blank" href="http://instagram.com/artdotcom/">
                    <img width="24" height="24" alt="Follow us on Instagram" src="http://cache1.artprintimages.com/images/jump_pages/rebrand/footer/instagram-badge.png">
                  </a>
                </li>
                <li>
                  <a href="https://www.twitter.com/artdotcom" title="Twitter" onclick="_gaq.push(['_trackSocial', 'Twitter', 'Follow', 'Footer', 'undefined', 'True']);">
                    <img width="67" alt="Follow us on Twitter" src="http://cache1.artprintimages.com/images/jump_pages/rebrand/footer/twitter.png">
                  </a>
                </li>
              </ul>
            </div>
            <!--/.footer-social-->
            <div class="footer-legal">
              <p>&copy; Art.com Inc. All Rights Reserved. | <a href="/help/privacy-policy.html" rel="nofollow">Privacy Policy</a> | <a href="/help/terms-of-use.html" rel="nofollow">Terms of Use</a> | <a href="/help/terms-of-sale.html" rel="nofollow">Terms of Sale</a></p>
              <p>Art.com, You+Art, and Photos [to] Art are trademarks or registered trademarks of Art.com Inc.</p>
              <p>Various aspects of this website are covered by issued US patent No. 7,973,796 and other pending patent applications.</p>
            </div>
            <!--/.footer-legal-->
            <div class="footer-payment">
              <ul>
                <li class="ftr-stella">
                  <span title="Stella Service" onclick="openLink('http://www.stellaservice.com/profile/Art.com/')"></span>
                </li>
                <li>
                  <span onclick="clickTrack(); return false;" onmouseover="this.style.cursor='pointer'"><img border="0" alt="HACKER SAFE certified sites prevent over 99.9% of hacker crime." src="https://images.scanalert.com/meter/www.art.com/31.gif"></span>
                </li>
                <li class="ftr-bbb">
                  <span title="BBB" onclick="openLink('http://www.bbb.org/raleigh-durham/business-reviews/art-suppliers/artcom-inc-in-raleigh-nc-5001914')"></span>
                </li>
              </ul>
            </div>
            <!--/.footer-payment-->
          </div>
          <!--/.footer-custom-->
        </div>
        <!--/.footer-gray-->
      </footer>
    
</body>
</html>