<?php

session_name("fancyform");
session_start();


$_SESSION['n1'] = rand(1,20);
$_SESSION['n2'] = rand(1,20);
$_SESSION['expect'] = $_SESSION['n1']+$_SESSION['n2'];


$str='';
if($_SESSION['errStr'])
{
	$str='<div class="error">'.$_SESSION['errStr'].'</div>';
	unset($_SESSION['errStr']);
}

$success='';
if($_SESSION['sent'])
{
	$success='<h1>Thank you!</h1>';
	
	$css='<style type="text/css">#contact-form{display:none;}</style>';
	
	unset($_SESSION['sent']);
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Corporate Studio - A Complate Website Template</title>
<!-- Main Style Sheets - Change Theme -->
<link href="css/main.css" rel="stylesheet" type="text/css" />

<!--[if IE]>
        <link rel="stylesheet" type="text/css" href="css/style_ie.css" />
<![endif]-->
<!-- Js Files -->
<script src="library/js/jquery.min.js" type="text/javascript"></script>
<script src="library/js/custom.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="library/jqtransformplugin/jqtransform.css" />
<link rel="stylesheet" type="text/css" href="library/formValidator/validationEngine.jquery.css" />
<link rel="stylesheet" type="text/css" href="demo.css" />
<?=$css?>
<script type="text/javascript" src="library/jqtransformplugin/jquery.jqtransform.js"></script>
<script type="text/javascript" src="library/formValidator/jquery.validationEngine.js"></script>
<script type="text/javascript" src="script.js"></script>
</head>
<body>

<div id="top-menu2main">
<div id="top-menu2">
<div id="logo">
<a href="index.html" class="logoswitch"> <img title="Corporate Studio" src="images/logo_scroll.png" alt="Corporate Studio" /> </a>

</div>
        
<div id="navigation">
            <div id="navigation-main">
              <ul>
                <li class="last"><a href="contactus.php"><strong>Contact Us</strong></a></li>
                <li><a href="gallery.html"><strong>Gallery</strong></a>
                  <ul>
                    <li><a href="gallery.html">Gallery Archive</a></li>
                    <li class="last"><a href="gallery-single.html">Gallery Single</a></li>
                  </ul>
                </li>
                <li><a href="#Features"><strong>Features</strong></a>
                  <ul style="overflow:visible;">
                    <li><a href="column-styles.html">Columns Style</a></li>
                    <li class="dropdown"><a href="#">Slider Options</a>
                      <ul>
                        <li><a href="index-full-slider.html">Full Page Slider</a> </li>
                        <li><a href="index.html">Nivo Slider</a></li>
                        <li><a href="index_accordian_slider.html">Accordian</a></li>
                        <li class="last"><a href="index_cu3er_slider.html">CU3ER</a> </li>
                      </ul>
                    </li>
                    <li class="dropdown"><a href="#">Custom Pages</a>
                      <ul>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="archive.html">Archive</a></li>
                        <li><a href="single.html">Single</a></li>
                        <li><a href="full-width.html">Full Width</a></li>
                        <li><a href="sitemap.html">Sitemap</a></li>
                        <li class="last"><a href="404.html">404 Error</a></li>
                      </ul>
                    </li>
                    <li><a href="headings-titles.html">Headings &amp; Titles with List Styles</a></li>
                    <li class="last"><a href="elements.html">Elements</a></li>
                  </ul>
                </li>
                <li><a href="portfolio.html"><strong>Portfolio</strong></a>
                  <ul style="overflow:visible;">
                    <li><a href="portfolio2.html">Portfolio Style II</a></li>
                    <li><a href="portfolio3.html">Portfolio Style III</a></li>
                    <li><a href="portfolio4.html">Portfolio Style IIII</a></li>
                    <li class="last"><a href="portfolio-single.html">Portfolio Single</a></li>
                  </ul>
                </li>
                <li><a href="about-us.html"><strong>About Us</strong></a></li>
                <li><a href="services.html"><strong>Services</strong></a></li>
                <li><a href="blog.html"><strong>Blog</strong></a>
                  <ul>
                    <li><a href="blog.html">Blog</a></li>
                    <li class="last"><a href="archive.html">Archive</a></li>
                  </ul>
                </li>
                <li class="first"><a href="index.html"><strong>Styles</strong></a>
                  <ul style="overflow:visible;">
                    <li><a href="index-full-slider.html">Full Page Slider</a> </li>
                    <li><a href="index.html">Nivo Slider</a></li>
                    <li><a href="index_accordian_slider.html">Accordian</a></li>
                    <li class="last"><a href="index_cu3er_slider.html">CU3ER</a> </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
</div>
</div>
          
<!-- Page Full Container -->
<div id="page">
  <!-- Page Middle Container -->
  <div class="headerfull">
    <div class="midarea inheaderbg">
      <!-- Header - Start Here -->
      <div class="header-inner">
        <div id="logo">
        <a href="index.html" class="logoswitch"> <img title="Corporate Studio" src="images/logo.png" alt="Corporate Studio" /> </a>
       
        </div>
        <div class="header-in-right">
          <!-- Navigation - Start Here -->
          <div id="navigation">
            <div id="navigation-main">
              <ul>
                <li class="last"><a href="contactus.php"><strong>Contact Us</strong></a></li>
                <li><a href="gallery.html"><strong>Gallery</strong></a>
                  <ul>
                    <li><a href="gallery.html">Gallery Archive</a></li>
                    <li class="last"><a href="gallery-single.html">Gallery Single</a></li>
                  </ul>
                </li>
                <li><a href="#Features"><strong>Features</strong></a>
                  <ul style="overflow:visible;">
                    <li><a href="column-styles.html">Columns Style</a></li>
                    <li class="dropdown"><a href="#">Slider Options</a>
                      <ul>
                        <li><a href="index-full-slider.html">Full Page Slider</a> </li>
                        <li><a href="index.html">Nivo Slider</a></li>
                        <li><a href="index_accordian_slider.html">Accordian</a></li>
                        <li class="last"><a href="index_cu3er_slider.html">CU3ER</a> </li>
                      </ul>
                    </li>
                    <li class="dropdown"><a href="#">Custom Pages</a>
                      <ul>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="archive.html">Archive</a></li>
                        <li><a href="single.html">Single</a></li>
                        <li><a href="full-width.html">Full Width</a></li>
                        <li><a href="sitemap.html">Sitemap</a></li>
                        <li class="last"><a href="404.html">404 Error</a></li>
                      </ul>
                    </li>
                    <li><a href="headings-titles.html">Headings &amp; Titles with List Styles</a></li>
                    <li class="last"><a href="elements.html">Elements</a></li>
                  </ul>
                </li>
                <li><a href="portfolio.html"><strong>Portfolio</strong></a>
                  <ul style="overflow:visible;">
                    <li><a href="portfolio2.html">Portfolio Style II</a></li>
                    <li><a href="portfolio3.html">Portfolio Style III</a></li>
                    <li><a href="portfolio4.html">Portfolio Style IIII</a></li>
                    <li class="last"><a href="portfolio-single.html">Portfolio Single</a></li>
                  </ul>
                </li>
                <li><a href="about-us.html"><strong>About Us</strong></a></li>
                <li><a href="services.html"><strong>Services</strong></a></li>
                <li><a href="blog.html"><strong>Blog</strong></a>
                  <ul>
                    <li><a href="blog.html">Blog</a></li>
                    <li class="last"><a href="archive.html">Archive</a></li>
                  </ul>
                </li>
                <li class="first"><a href="index.html"><strong>Styles</strong></a>
                  <ul style="overflow:visible;">
                    <li><a href="index-full-slider.html">Full Page Slider</a> </li>
                    <li><a href="index.html">Nivo Slider</a></li>
                    <li><a href="index_accordian_slider.html">Accordian</a></li>
                    <li class="last"><a href="index_cu3er_slider.html">CU3ER</a> </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <!-- Navigation - End Here -->
        </div>
      </div>
    </div>
  </div>
  <!-- Header - End Here -->
  <div class="cont_round_center">
    <!-- Content Area - Start Here -->
    <div class="content">
      <div class="midarea">
        <h2 class="intitle"> <span class="title">Contact Us</span> <span class="title_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</span> </h2>
        <div class="middle-inner" id="content">
          <div class="main_container">
            <div id="form">
              <div id="form-container">
                <form id="contact-form" name="contact-form" method="post" action="submit.php">
                  <table width="100%" border="0" cellspacing="0" cellpadding="5" class="normal bdrnone left contact">
                    <tr>
                      <td colspan="3" class="formspacer"><h2 class="mzr_02"> Fill the FORM to provide information </h2></td>
                    </tr>
                    <tr>
                      <td width="15%" class="formspacer"><label for="name">Name</label></td>
                      <td width="47%" class="formspacer"><input type="text" class="validate[required,custom[onlyLetter]]" name="name" id="name" value="<?=$_SESSION['post']['name']?>" /></td>
                      <td width="38%" class="formspacer" id="errOffset">&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="formspacer"><label for="email">Email</label></td>
                      <td class="formspacer"><input type="text" class="validate[required,custom[email]]" name="email" id="email" value="<?=$_SESSION['post']['email']?>" /></td>
                      <td class="formspacer">&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="formspacer"><label for="telephone">Phone</label></td>
                      <td class="formspacer"><input type="text" class="validate[required,custom[telephone]]" name="telephone" id="telephone" value="<?=$_SESSION['post']['telephone']?>" /></td>
                      <td class="formspacer">&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="formspacer"><label for="subject">Subject</label></td>
                      <td class="formspacer"><select name="subject" id="subject">
                          <option value="" selected="selected"> - Choose -</option>
                          <option value="Question">Question</option>
                          <option value="Business proposal">Business proposal</option>
                          <option value="Advertisement">Advertising</option>
                          <option value="Complaint">Complaint</option>
                        </select></td>
                      <td class="formspacer">&nbsp;</td>
                    </tr>
                    <tr>
                      <td valign="top" class="formspacer"><label for="message">Message</label></td>
                      <td class="formspacer"><textarea name="message" id="message" class="validate[required]" cols="35" rows="5"><?=$_SESSION['post']['message']?>
</textarea></td>
                      <td valign="top" class="formspacer">&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="formspacer"><label for="captcha">
                          <?=$_SESSION['n1']?>
                          +
                          <?=$_SESSION['n2']?>
                          =</label></td>
                      <td class="formspacer"><input type="text" class="validate[required,custom[onlyNumber]]" name="captcha" id="captcha" /></td>
                      <td valign="top" class="formspacer">&nbsp;</td>
                    </tr>
                    <tr>
                      <td valign="top" class="formspacer">&nbsp;</td>
                      <td colspan="2" class="formspacer"><input type="submit" name="button" id="button" value="Submit" />
                        <input type="reset" name="button2" id="button2" value="Reset" />
                        <?=$str?>
                        <img id="loading" src="images/ajax-load.gif" width="16" height="16" alt="loading" /></td>
                    </tr>
                  </table>
                </form>
                <?=$success?>
              </div>
            </div>
            <div class="separator"></div>
            <div class="contactbox2">
              <div class="contact_address"> <strong>General</strong>: whatsup@yourdomain.com<br />
                <strong>Say hello</strong>: sayhello@yourdomain.com<br />
                <strong>Work</strong>: newbiz@yourdomain.com<br />
                <br />
                <strong>Give us a Ring</strong><br />
                (123) 456-7890 phone<br />
                (123) 456-7890 fax <br />
                <br />
                <strong>Come on By</strong> <br />
                Some Street 214-115 <br />
                1234 BOX Tallinn Europe </div>
              <div class="contact_map">
                <iframe width="380" height="220" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;q=Evatt+Australian+Capital+Territory+2617,+Australia&amp;sll=37.0625,-95.677068&amp;sspn=29.496064,84.462891&amp;ie=UTF8&amp;oi=geospell&amp;cd=1&amp;geocode=FbbA5v0dxKziCA&amp;split=0&amp;hq=&amp;hnear=Evatt+Australian+Capital+Territory,+Australia&amp;z=14&amp;ll=-35.209034,149.073092&amp;output=embed"></iframe>
                <br />
                <small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;q=Evatt+Australian+Capital+Territory+2617,+Australia&amp;sll=37.0625,-95.677068&amp;sspn=29.496064,84.462891&amp;ie=UTF8&amp;oi=geospell&amp;cd=1&amp;geocode=FbbA5v0dxKziCA&amp;split=0&amp;hq=&amp;hnear=Evatt+Australian+Capital+Territory,+Australia&amp;z=14&amp;ll=-35.209034,149.073092" style="color:#0000FF;text-align:left">View Larger Map</a></small> </div>
            </div>
          </div>
          <div class="sidebar">
            <div class="widget">
              <h2 class="title"><span>Recent News</span></h2>
              <div class="recentpost">
                <ul>
                  <li><a href="#"> <img src="images/recentpost-img-01.jpg" alt="" /><span>30 Examples of Smart Print XHTML Advertisement</span> </a></li>
                  <li><a href="#"> <img src="images/recentpost-img-02.jpg" alt="" /><span>20 Examples of Smart Print html Advertisement</span> </a></li>
                  <li><a href="#"> <img src="images/recentpost-img-03.jpg" alt="" /><span>30 Examples of Smart Print XHTML Advertisement</span> </a></li>
                </ul>
              </div>
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
            
          </div>
        </div>
        <div class="clear"></div>
        <div class="clear"></div>
      </div>
      <!-- End Here - .center-->
    </div>
    <!-- Content Area - End Here -->
  </div>
  <!-- Footer - Start Here -->
  <div id="footer">
    <div class="footerbg2">
      <div class="midarea">
        <div class="sepdiv"><span></span></div>
        <div class="footer-inner">
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
          <div class="copyright-text"> © 2011 Copyright Corporate Studio. All Rights Reserved. Valid (x)HTML and CSS </div>
          <div class="footer-clinks"> <a href="#"> Blog </a> |  About  |  Terms  |  Privacy  |  Contact us  |  Disclaimer </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer - End Here -->
  <div class="clear"></div>
</div>
</body>
</html>
