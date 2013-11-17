<?php include('includes/header.php'); ?>

<!-- Rotating background images -->
<div id="image-slider">

	<div id="showcase" class="showcase">
		<!-- Begin single image slide -->
	    <div class="showcase-slide">
	        <div class="showcase-content">
	            <div class="showcase-content-wrapper">
	                <img src="/content_imgs/bg-content-1.jpg" alt="" />
	            </div>
	        </div>
	    </div>
	    <!-- End single image slide -->
	    <div class="showcase-slide">
	        <div class="showcase-content">
	            <div class="showcase-content-wrapper">
	                <img src="/content_imgs/bg-content-1.jpg" alt="" />
	            </div>
	        </div>
	    </div>
	    <div class="showcase-slide">
	        <div class="showcase-content">
	            <div class="showcase-content-wrapper">
	                <img src="/content_imgs/bg-content-2.jpg" alt="" />
	            </div>
	        </div>
	    </div>
	    <div class="showcase-slide">
	        <div class="showcase-content">
	            <div class="showcase-content-wrapper">
	                <img src="/content_imgs/bg-content-3.jpg" alt="" />
	            </div>
	        </div>
	    </div>
	    <div class="showcase-slide">
	        <div class="showcase-content">
	            <div class="showcase-content-wrapper">
	                <img src="/content_imgs/bg-content-4.jpg" alt="" />
	            </div>
	        </div>
	    </div>
	    <div class="showcase-slide">
	        <div class="showcase-content">
	            <div class="showcase-content-wrapper">
	                <img src="/content_imgs/bg-content-5.jpg" alt="" />
	            </div>
	        </div>
	    </div>
	</div>
	
</div>

<div class="container">

	<?php include('includes/nav.php'); ?>

	<ul class="breadcrumbs">
		<li class="first"><a href="">Newsletters</a></li>
	</ul>

	<div class="content-main clearfix" role="main">

		<div class="column">

			<div class="content-section">
				<div id="mcs_container">
				    <div class="customScrollBox">
				        <div class="container">
				            <div class="content">
				            	<h5>Reddam House Newsletters</h5>
				            	<form name="form" id="form">
				            	  <select name="jumpMenu" id="jumpMenu" onChange="MM_jumpMenu('parent',this,0)">
				            	    <option value="http://www.reddamhouse.com.au/PDF/News2013/Primary/Primaryvol13Issue1.pdf">News 1</option>
				            	    <option value="http://www.reddamhouse.com.au/PDF/News2013/Primary/Primaryvol13Issue2.pdf">News 2</option>
			            	      </select>
			            	  </form>
				            	<p>&nbsp;</p>
				            	<form name="form2" id="form2">
				            	  <select name="jumpMenu2" id="jumpMenu2" onChange="MM_jumpMenu('parent',this,0)">
				            	    <option value="http://www.facebook.com">Site 1</option>
				            	    <option value="http://www.yahoo.com.au">Site 2</option>
			            	      </select>
			            	  </form>
				            	<p>&nbsp;</p>
				            	<p><em>You will need to have Acrobat Reader to view the files. You can obtain a free copy from <a href="http://get.adobe.com/reader/" target="_blank">www.adobe.com</a></em></p>
				            </div>
				        </div>
				        <div class="dragger_container">
				            <div class="dragger"></div>
				        </div>
				    </div>
				    <!-- scroll buttons -->
				    <a class="scrollUpBtn" href="#"></a> <a class="scrollDownBtn" href="#"></a>
				</div>
				<noscript>
				    <style type="text/css">
				        #mcs_container .customScrollBox{overflow:auto;}
				        #mcs_container .dragger_container{display:none;}
				    </style>
				</noscript>
				
			</div>

		</div>

		<div class="column last">

			<div class="feature-img-contain">
				<img src="/img/hero-1.jpg" alt="" width="428" height="313" />
			</div>

			<div class="tile-contain first">
				<h3 class="tile-heading">Announcements</h3>
				<div class="tile-content">
					<h4>Scholarships</h4>
					<p>Lorum ipsum</p>
				</div>
			</div>

		</div>

	</div>

<?php include('includes/footer.php'); ?>