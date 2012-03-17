<!-- Footer - Start Here -->
  <div id="footer">
    <div class="footerbg2">
      <div class="midarea">
        <div class="sepdiv"><span></span></div>
        <div class="footer-inner">
        	<!--
          <div class="footer-widget01" id="flickr-photos">
            <h3> Flickr Photos </h3>
            <div class="footercontent flickr-photos">
              <ul class="thumb">
                <li><a href="#"><img src="images/flickr-img-01.jpg" alt="" /></a></li>
                <li><a href="#"><img src="images/flickr-img-02.jpg" alt="" /></a></li>
                <li><a href="#"><img src="images/flickr-img-03.jpg" alt="" /></a></li>
                <li><a href="#"><img src="images/flickr-img-04.jpg" alt="" /></a></li>
                <li><a href="#"><img src="images/flickr-img-05.jpg" alt="" /></a></li>
                <li><a href="#"><img src="images/flickr-img-06.jpg" alt="" /></a></li>
                <li><a href="#"><img src="images/flickr-img-03.jpg" alt="" /></a></li>
                <li><a href="#"><img src="images/flickr-img-02.jpg" alt="" /></a></li>
                <li><a href="#"><img src="images/flickr-img-05.jpg" alt="" /></a></li>
              </ul>
            </div>
          </div>
          -->
					<div class="footer-widget01">
            <h3> Latest Tweets </h3>
            <div class="footercontent blogfeed">
            	<?php $howmany_tweets = 5; ?>
            	<?php include "latest-tweets.php"; ?>
            </div>
          </div>
          <div class="footer-widget01">
            <h3> Blog feedfrom </h3>
            <div class="footercontent blogfeed">
              <ul>
                <li><a href="#"> Pellentesque habitant morbi </a></li>
                <li><a href="#"> Vestibulum tortor quam, feugiat vitae </a></li>
                <li><a href="#"> Morbi tristique senectus et netus </a></li>
                <li><a href="#"> Et malesuada fames ac turpis egestas </a></li>
                <li><a href="#"> Tortor quam, feugiat vitae </a></li>
              </ul>
            </div>
          </div>
          <div class="footer-widget01">
            <h3> Recent Post </h3>
            <div class="footercontent footer_rcpost">
              <ul>
                <li><a href="#"> <img src="images/recentpost-img-01.jpg" alt="" /><span>30 Examples of Smart Print Advertisement</span> </a></li>
                <li><a href="#"> <img src="images/recentpost-img-02.jpg" alt="" /><span>30 Examples of Smart Print Advertisement</span> </a></li>
                <li><a href="#"> <img src="images/recentpost-img-03.jpg" alt="" /><span>30 Examples of Smart Print Advertisement</span> </a></li>
              </ul>
            </div>
          </div>
          <div id="subscribe">
            <h3> Subscribe to Newsletter </h3>
            <div class="footercontent">
              <div class="subscribe_row">
                <div class="div_mbox_sub">
                  <form action="http://feedburner.google.com/fb/a/mailverify" method="post" 
target="popupwindow" 
onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=yourfeedname', 
'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
                    <div class="txtbox">
                      <input name="email"  class="typebox" id="t2" value="" type="text" onFocus="clearAndFocus(document.getElementById('t2') )" />
                    </div>
                    <input type="image" src="images/newsletter_submit.png" class="subscribe_btn"  alt="Submit" />
                    <input value="yourfeedname" name="uri" type="hidden"  />
                    <input name="loc" value="en_US" type="hidden"  />
                  </form>
                </div>
              </div>
            </div>
            <div class="address">
              <p><img src="images/footer-logo.png" alt="" /><br />
                PO Box 21177<br />
                Little Lonsdale St, Melbourne<br />
                Victoria 8011 Australia <br />
                <br />
                Phone: 91 172 563568 </p>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    <div class="footerbg3">
      <div class="midarea">
        <div class="footer-inner2">
          <div class="copyright-text"> © <!--#config timefmt="%Y" --> <!--#echo var="DATE_LOCAL" --> Copyright JEDI Entertainment. All Rights Reserved. </div>
          <div class="footer-clinks"> <a href="#"> Blog </a> |  About  |  Terms  |  Privacy  |  Contact us  |  Disclaimer </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer - End Here -->