          <div class="sidebar">
          
            <div class="widget">
              <h2 class="title"><span><a href="./gallery.php">Gallery</a></span></h2>
              <!--<div class="recentpost">
                <ul class="galleryside">
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
              </div>-->
			  
			<div class="ptpgallery" id="maingallery">
			  <!--read the documentation to understand what's going on here -->
			  <ul id="list" class="liststgrid">
				<?php
					foreach($photos as $photo) {
						$id = $photo->getId();
						$title = $photo->getTitle();
						$image = $photo->getImage();
						$thumbnail = $photo->getThumbnail();
						$eventId = $photo->getEventId();
						echo "<li data-id='id-$id' class='event-$eventId'><a href='$image' rel='prettyPhoto[gallery1]''><img src='$thumbnail' alt='$title' /></a> </li>"; 
					}
				?>
			  </ul>
			</div>			  
              </div>          
		  
		  <!--<div class="widget">
              <h2 class="title"><span>Recent News</span></h2>
              <div class="recentpost">
                <ul>
                  <li><a href="#"> <img src="images/recentpost-img-01.jpg" alt="" />
                  <span>30 Examples of Smart Print XHTML Advertisement</span> </a></li>
                  <li><a href="#"> <img src="images/recentpost-img-02.jpg" alt="" />
                  <span>20 Examples of Smart Print html Advertisement</span> </a></li>
                  <li><a href="#"> <img src="images/recentpost-img-03.jpg" alt="" />
                  <span>30 Examples of Smart Print XHTML Advertisement</span> </a></li>
                </ul>
              </div>
            </div>
            
             <div class="widget">
              <h2 class="title"><span>BLOG CATEGORIES</span></h2>
              <div class="sidebar-categories">
                <ul>
            	<li><a href="#">City Bussiness Life (10)</a></li>
                <li><a href="#">Wallpaper HD (15)</a></li>
                <li><a href="#">Cinema / Movie / Video (22)</a></li>
                <li><a href="#">Job List Picture (35)</a></li>
                <li><a href="#">Bussiness Work Portfolio (115)</a></li>
                <li><a href="#">Web Development System (65)</a></li>
                <li><a href="#">Fresh Logo Design (80)</a></li>
                <li><a href="#">Marker Printer (26)</a></li>
           		</ul>
              </div>
              </div>
            
            <div class="widget">
            <h2 class="title"><span>Advertisements</span></h2>
              <div class="sidebar-ad125">
                <div class="ad-254"><a href="http://themeforest.net/item/icorporate-business-and-portfolio-html-theme/1307754"><img src="images/ad_244-122.png" alt="" /> </a></div>
                <div class="ad-125"><a href="#"><img src="images/sidebar_ad_125-2.png" alt="" /> </a></div>
                <div class="ad-125"><a href="#"><img src="images/sidebar_ad_125.png" alt="" /> </a></div>
              </div>
            </div>
             
            <div class="widget">
              <h2 class="title"><span>BLOG Archives</span></h2>
              <div class="sidebar-categories">
                <ul>
                <li><a href="#">JANUARY</a></li>
            	<li><a href="#">DECEMBER</a></li>
                <li><a href="#">NOVEMBER</a></li>
                <li><a href="#">OCTOBER</a></li>
                <li><a href="#">SEPTEMBER</a></li>
                <li><a href="#">AUGUST</a></li>                
           		</ul>
              </div>
              </div>
            
            <div class="widget">
              <h2 class="title"><span>Video</span></h2>
              <div class="recentpost">
                
                <iframe src="http://player.vimeo.com/video/34952048?title=0&amp;byline=0&amp;portrait=0&amp;color=000000" width="265" height="140" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                
              </div>
              </div>  
               
            <div class="widget">
              <h2 class="title"><span>Tags</span></h2>
              <div class="sidebar-tags">
                <ul>
            	<li><a href="#">City</a></li>
                <li><a href="#">Wallpaper</a></li>
                <li><a href="#">Cinema</a></li>
                <li><a href="#">Picture</a></li>
                <li><a href="#">Bussiness</a></li>
                <li><a href="#">Development</a></li>
                <li><a href="#">Design</a></li>
                <li><a href="#">Marker</a></li>
                <li><a href="#">Printer</a></li>
           		</ul>
              </div>
              </div>
              
            <div class="tabber">
              <ul class="tabs addcufon">
                <li><a href="#tab1">Popular</a></li>
                <li><a href="#tab2">Comments</a></li>
                <li><a href="#tab3">Twitter</a></li>
              </ul>
              <div class="tab_container">
                <div id="tab1" class="tab_content">
                <div class="recentpost">
                <ul>
                  <li><a href="#"> <img src="images/recentpost-img-01.jpg" alt="" />
                  <span>30 Examples of Smart Print XHTML Advertisement</span> </a></li>
                  <li><a href="#"> <img src="images/recentpost-img-02.jpg" alt="" />
                  <span>20 Examples of Smart Print html Advertisement</span> </a></li>
                  <li><a href="#"> <img src="images/recentpost-img-03.jpg" alt="" />
                  <span>30 Examples of Smart Print XHTML Advertisement</span> </a></li>
                </ul>
              </div>
                </div>
                <div id="tab2" class="tab_content"> 
                <div class="recentpost">
                <ul>
                  <li><a href="#"> <img src="images/icons/user-icon.jpg" alt="" />
                  <span class="mctext"><span class="user">Denny</span><span class="ctext">30 Examples of Smart Print XHTML Advertisement</span></span> </a></li>
                  <li><a href="#"> <img src="images/icons/user-icon.jpg" alt="" />
                  <span class="mctext"><span class="user">Denny</span><span class="ctext">30 Examples of Smart Print XHTML Advertisement</span></span> </a></li>
                  <li><a href="#"> <img src="images/icons/user-icon.jpg" alt="" />
                  <span class="mctext"><span class="user">Denny</span><span class="ctext">30 Examples of Smart Print XHTML Advertisement</span></span> </a></li>
                </ul>
              </div>
              
                </div>
                <div id="tab3" class="tab_content">
                
                <div id="twitter_update_list"></div>
                
                <script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
              <script type="text/javascript" src="http://twitter.com/statuses/user_timeline/twitter.json?callback=twitterCallback2&amp;count=4"></script>
                </div>
              </div>
            </div>
            <div class="accordian">
              <ul>
                <li>Quisque at erat vitae</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor, lorem et consectetur ultricies, nulla lacus iaculis odio, in laoreet lacus nisi vitae dolor. In commodo aliquet orci.</li>
                <li>Sed euismod massa</li>
                <li>Mauris bibendum justo sit amet lectus laoreet faucibus. Aliquam cursus, diam sed lacinia ultrices, urna ipsum auctor lacus, id vulputate ante ligula aliquam odio. Fusce feugiat risus at nisl.</li>
                <li>Proin et orci sit amet</li>
                <li>Sed vitae magna. Aliquam faucibus, felis ullamcorper feugiat semper, tortor leo tincidunt nibh, a faucibus lorem magna a nisi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</li>
              </ul>
            </div>
            
            <div class="widget">
              <h2 class="title"><span>Gallery</span></h2>
              <div class="recentpost">
                <ul class="galleryside">
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
              
            <div class="widget">
              <blockquote class="heffect">
                <div class="quoteb"> Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae. </div>
              </blockquote>
            </div>

            <div class="widget">
              <h2 class="title"><span>Latest Feed</span></h2>
              <div class="newsfeed">
                <ul>
                  <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit</li>
                  <li>Ut enim ad minim veniam, quis nostrud exercitation.</li>
                  <li>Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li>Excepteur sint occaecat cupidatat non proident.</li>
                </ul>
              </div>
            </div>-->
          </div>