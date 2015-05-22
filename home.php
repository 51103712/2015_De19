<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Video Manager Online</title>
<meta name="keywords" content="" />
<meta name="description" content="" />

<link href="css/home.css" rel="stylesheet" type="text/css" />
<link href="youtube/my_uploads.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.lightbox-0.5.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen" />
<script type='text/javascript' src='js/jquery.min.js'></script>
<script type='text/javascript' src='js/jquery.scrollTo-min.js'></script>
<script type='text/javascript' src='js/jquery.localscroll-min.js'></script>
<script type="text/javascript" src="js/jquery.lightbox-0.5.js"></script>
<!--  youtube--> 
<script type="text/javascript" src="youtube/auth.js"></script>
<script type="text/javascript" src="youtube/my_uploads.js"></script>

<script type="text/javascript" src="auth.js"></script>
<script type="text/javascript" src="my_uploads.js"></script>
<script src="https://apis.google.com/js/client.js?onload=googleApiClientReady"></script>
<!--  -->

<script type="text/javascript">
$(function() {
	$.localScroll();
    $('#map a').lightBox();
});
</script>

</head>
<body>

<span id="top"></span>
<div id="tooplate_body_wrapper">
<div id="tooplate_wrapper">
	<div id="tooplate_header">
        <div id="site_title">
            <h1><a href="#">Video Manager Online</a></h1>
        </div>
        <div id="tooplate_menu">
            <ul>
                <li><a href="#youtube">Youtube</a></li>
                <li><a href="#vimeo">Vimeo</a></li>
                <li><a href="#viddler">Viddler</a></li>
                <li class="last"><a href="#contactus">Contact</a></li>
				<li><a href="logout.php">Logout</a></li>
            </ul>    	
        </div> <!-- end of tooplate_menu -->
	</div> <!-- end of header -->
    
  <div id="tooplate_main">
    
		<div id="youtube" class="content_top"></div>
    	<div class="content_box">
        	<div class="content_title content_ct">
			<h2 class="inline">Youtube</h2>
			<div class="image_wrapper image_fr" ><img src="images/youtube.png" alt="youtube" /><span></span></div>
			</div>
            <div class="content">
				<p class="pre-auth">Click <input type="button" class="auth_btn" value="HERE" id="login-link"></input> to authorize your Youtube Account</p>
                
				
            	<div class="col_w440 float_l">
					<h2 class="black">Your videos:</h2>
					<div id="video-container"></div>
						<div class="button-container">
						<button id="prev-button" class="paging-button" onclick="previousPage();">Previous Page</button>
						<button id="next-button" class="paging-button" onclick="nextPage();">Next Page</button>
					</div>
                </div>
    			<div class="col_w240 float_r">
						<a href="upload_youtube.php" target="_parent"><button class="auth_btn float_r">UPLOAD VIDEO</button></a>
						<div id="video-info"></div>
          		</div>
                
                <div class="cleaner"></div>
            </div>
            <div class="content_bottom content_cb"><a href="#top" class="gototop">Go To Top</a></div>
		</div> 
        
        <div id="vimeo" class="content_top"></div>
    	<div class="content_box">
        	<div class="content_title content_ct">
				<h2 class="inline">Vimeo</h2>
				<div class="image_wrapper image_fr"><img src="images/tooplate_image_02.jpg" alt="Image 01" /><span></span></div>
			</div>
            <div class="content">	
            <p class="pre-auth">Click <input type="button" class="auth_btn" value="HERE" id="login-link"> to authorize your Vimeo Account</p>
                <div class="col_w440 float_l">
					<h2 class="black">Your videos:</h2>
					<div id="video-container"></div>
						<div class="button-container">
						<button id="prev-button" class="paging-button" onclick="previousPage();">Previous Page</button>
						<button id="next-button" class="paging-button" onclick="nextPage();">Next Page</button>
					</div>
                </div>
    			<div class="col_w240 float_r">
						<a href="youtube/upload" target="_parent"><button class="auth_btn float_r">UPLOAD VIDEO</button></a>
						<div id="video-info"></div>
          		</div>
                
                <div class="cleaner"></div>
            </div>
            
            <div class="content_bottom content_cb"><a href="#top" class="gototop">Go To Top</a></div>
		</div> 
        
        <div id="viddler" class="content_top"></div>
    	<div class="content_box">
        	<div class="content_title content_ct">
				<h2 class="inline">Viddler</h2>
				<div class="image_wrapper image_fr"><img src="images/tooplate_image_03.jpg" alt="Image 01" /><span></span></div>
            </div>
            <div class="content">
            	<p class="pre-auth">Click <input type="button" class="auth_btn" value="HERE" id="login-link"> to authorize your Viddler Account</p>
                <div class="col_w440 float_l">
					<h2 class="black">Your videos:</h2>
					<div id="video-container"></div>
						<div class="button-container">
						<button id="prev-button" class="paging-button" onclick="previousPage();">Previous Page</button>
						<button id="next-button" class="paging-button" onclick="nextPage();">Next Page</button>
					</div>
                </div>
    			<div class="col_w240 float_r">
						<a href="youtube/upload" target="_parent"><button class="auth_btn float_r">UPLOAD VIDEO</button></a>
						<div id="video-info"></div>
          		</div>
                
                <div class="cleaner"></div>
            </div>
            
            <div class="content_bottom content_cb"><a href="#top" class="gototop">Go To Top</a></div>
		</div>
        
        
        
        <div id="contactus" class="content_top"></div>
    	<div class="content_box">
        	<div class="content_title content_ct"><h2>Contact Information</h2></div>
            <div class="content">
            	
                <p>If you have any trouble, please contact with us by send a report. Plese fill the below form. Thank you!</p>
                
                <div class="cleaner h30"></div>
                <div class="col_w340 float_l">
                <h4>Quick Contact Form</h4>
                <div id="contact_form">
                <form method="post" name="contact" action="#">

						<label for="author">Name:</label> <input type="text" id="author" name="author" class="required input_field" />
						<div class="cleaner h10"></div>
													
						<label for="email">Email:</label> <input type="text" class="validate-email required input_field" name="email" id="email" />
						<div class="cleaner h10"></div>
											
						<label for="subject">Subject:</label> <input type="text" class="validate-subject required input_field" name="subject" id="subject"/>				               
						<div class="cleaner h10"></div>
							
						<label for="text">Message:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
						<div class="cleaner h10"></div>				
												
						<input type="submit" value="Send" id="submit" name="submit" class="submit_btn float_l" />
						<input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_r" />
                
                </form>
                
                </div> 
                </div>
                
                <div class="col_w340 float_r">
                <h4>Our Location</h4>
                <div id="map" class="image_wrapper"><span></span><a href="images/map_big.jpg" title="Our Location"><img width="300" height="200" src="images/map_thumb.jpg" alt="Our Location" class="image_wrapper" /></a></div>                
                <div class="cleaner h20"></div>
                
                <h4>Mailing Address</h4>
                <h6>Company Name</h6>
                Ho Chi Minh City University of Technology <br />
                268 Ly Thuong Kiet Street, 10 Ward, HCM City<br />
				<b>Phone:</b> 123456789<br />
            	<b>Email:</b> <a href="mailto:info@info.com">info@videomanageronline.com</a> 
                </div>
                
                <div class="cleaner"></div>
            </div>
            
            <div class="content_bottom content_cbf"><a href="#top" class="gototop">Go To Top</a></div>
		</div> 
    </div>
    
    <div id="tooplate_footer">
    
        Copyright &copy 2015 <a href="#">Video Manager Online</a>
      	<div class="cleaner"></div>
        
    </div>
    
</div> <!-- end of warpper -->
</div> <!-- end of body wrapper -->

</body>
</html>