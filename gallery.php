<!-- GALLERY -->
<div class="section section-gallery" style="background-image: url('assets/img/bg/blk1.jpg');">
 	<div class="row">
 		<!-- 1ST COLUMN -->
 		<div class="col-md-8">
 			<div class="container text-center">
	           	<h3 class="subtitle">get to know us more.</h3>
	            <h2 class="title">OUR GALLERY</h2><hr>
	            <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	            quis nostrud exercitation ullamco laboris nisi ut aliquip commodo
	            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	            cillum dolore.</h6>
	            [ Click on the Photos to see larger size ]
	            <br><br>
	        </div>
	       	<div class="row" id="gal1">
	       		<div id="rtl-container" dir="rtl"></div>
		    	<div class="column">
		    		<a id="1m" href="javascript:void(0)" value="/assets/img/gallery/10.jpg" onclick="popUpImage(this)"><img src="assets/img/gallery/10.jpg"></a>
					<a id="2m" href="javascript:void(0)" value="/assets/img/gallery/2.jpg" onclick="popUpImage(this)"><img src="assets/img/gallery/2.jpg"></a>
					<a id="3m" href="javascript:void(0)" value="/assets/img/gallery/3.jpg" onclick="popUpImage(this)"><img src="assets/img/gallery/3.jpg"></a>
		  		</div>  
		  		<div class="column">
		  			<a id="4m" href="javascript:void(0)" value="/assets/img/gallery/8.jpg" onclick="popUpImage(this)"><img src="assets/img/gallery/8.jpg"></a>
					<a id="5m" href="javascript:void(0)" value="/assets/img/gallery/4.jpg" onclick="popUpImage(this)"><img src="assets/img/gallery/4.jpg"></a>
					<a id="6m" href="javascript:void(0)" value="/assets/img/gallery/6.jpg" onclick="popUpImage(this)"><img src="assets/img/gallery/6.jpg"></a>
			  	</div>
				<div class="column">
					<a id="7m" href="javascript:void(0)" value="/assets/img/gallery/7.jpeg" onclick="popUpImage(this)"><img src="assets/img/gallery/7.jpeg"></a>
					<a id="8m" href="javascript:void(0)" value="/assets/img/gallery/1.jpg" onclick="popUpImage(this)"><img src="assets/img/gallery/1.jpg"></a>
					<a id="9m" href="javascript:void(0)" value="/assets/img/gallery/9.jpg" onclick="popUpImage(this)"><img src="assets/img/gallery/9.jpg"></a>
				</div>
				<div class="column">
			   		<a id="10m" href="javascript:void(0)" value="/assets/img/gallery/5.jpg" onclick="popUpImage(this)"><img src="assets/img/gallery/5.jpg"></a>
					<a id="11m" href="javascript:void(0)" value="/assets/img/gallery/11.jpg" onclick="popUpImage(this)"><img src="assets/img/gallery/11.jpg"></a>
					<a id="12m" href="javascript:void(0)" value="/assets/img/gallery/12.jpg" onclick="popUpImage(this)"><img src="assets/img/gallery/12.jpg"></a>
			  	</div>  
	        </div><br><br>
	    </div> <!-- END: 1ST COLUMN -->
	    <!-- 2ND COLUMN -->
        <div class="col-md-4 text-center" id="gal2">	                
	        <h2 class="brandname">featured.Blogs</h2><hr>
	    
	        <!-- VIDEOS FROM YOUTUBE -->
		    <iframe width="853" height="200" src="https://www.youtube.com/embed/8MTIf8BEDMs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width:100%"></iframe>	       
			<iframe width="500" height="200" src="https://www.youtube.com/embed/Rf-izi3w7KY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width:100%"></iframe><br>
			<iframe width="853" height="200" src="https://www.youtube.com/embed/28fZz-8jRqI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width:100%"></iframe>
		</div> <!-- END OF 2ND COLUMN -->
    </div>
</div>
<!-- END OF GALLERY -->
<script type="text/javascript">
	var tag = document.createElement('script');
	tag.src = "//www.youtube.com/player_api";
	var firstScriptTag = document.getElementsByTagName('script')[0];
	firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    function popUpImage(da){
    	var id = da.id;
    	var link=document.getElementById(id).getAttribute('value');
    	var image = 'http://192.168.43.165/KSA' + link;
    	Swal.fire({
		  imageUrl: image,
		  background: '#fff',
		  showConfirmButton: false,
		  showCloseButton: true,
		  target: document.getElementById('rtl-container')
		})
    }
</script>