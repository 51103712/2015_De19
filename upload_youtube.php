<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<link rel="stylesheet" href="upload_video.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//apis.google.com/js/client:plusone.js"></script>
<script src="cors_upload.js"></script>
<script src="upload_video.js"></script>
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
                <li><a href="home.php#youtube">Youtube</a></li>
                <li><a href="home.php#vimeo">Vimeo</a></li>
                <li><a href="home.php#viddler">Viddler</a></li>
                <li class="last"><a href="home.php#contactus">Contact</a></li>
            </ul>    	
        </div> <!-- end of tooplate_menu -->
	</div> <!-- end of header -->
    
  <div id="tooplate_main">
 
    	<div class="content_box">
        	<div class="content_title content_ct">
			<h2 class="inline">Youtube Upload</h2>
			<div class="image_wrapper image_fr" ><img src="images/youtube.png" alt="youtube" /><span></span></div>
			</div>
            <div class="content">
			
			<span id="signinButton" class="pre-sign-in">
      <!-- IMPORTANT: Replace the value of the <code>data-clientid</code>
           attribute in the following tag with your project's client ID. -->
      <span
        class="g-signin"
        data-callback="signinCallback"
        data-clientid="1034451067661-h7v9fipq91k83log7c47f49l1o257rl4.apps.googleusercontent.com"
        data-cookiepolicy="single_host_origin"
        data-scope="https://www.googleapis.com/auth/youtube.upload https://www.googleapis.com/auth/youtube">
      </span>
    </span>

    <div class="post-sign-in">
      <div>
        <img id="channel-thumbnail">
        <span id="channel-name"></span>
      </div>

      <div>
        <label for="title">Title:</label>
        <input id="title" type="text" value="Default Title">
      </div>
      <div>
        <label for="description">Description:</label>
        <textarea id="description">Default description</textarea>
      </div>
      <div class="inline">
        <label for="privacy-status" class="inline">Privacy Status:</label>
        <select id="privacy-status">
          <option>public</option>
          <option>unlisted</option>
          <option>private</option>
        </select>
      </div>

      <div>
        <input input type="file" id="file" class="button" accept="video/*">
        <button id="button">Upload Video</button>
      <div class="during-upload">
        <p><span id="percent-transferred"></span>% done (<span id="bytes-transferred"></span>/<span id="total-bytes"></span> bytes)</p>
        <progress id="upload-progress" max="1" value="0"></progress>
      </div>

      <div class="post-upload">
        <p>Uploaded video with id <span id="video-id"></span>. Polling for status...</p>
        <ul id="post-upload-status"></ul>
        <div id="player"></div>
		<div class="cuong"></div>
      </div>
      <p id="disclaimer">By uploading a video, you certify that you own all rights to the content or that you are authorized by the owner to make the content publicly available on YouTube, and that it otherwise complies with the YouTube Terms of Service located at <a href="http://www.youtube.com/t/terms" target="_blank">http://www.youtube.com/t/terms</a></p>
    </div>
	</div>
                
				
            	
                
                <div class="cleaner"></div>
            </div>
            <div class="content_bottom content_cb"><a href="#top" class="gototop">Go To Top</a></div>
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