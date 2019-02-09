<nav class="index-page sidebar-collapse" id="navigator">
    <nav class="navbar navbar-expand-lg bg-primary fixed-top" style="background-image: url('assets/img/bg/menu.jpg');">
        <div class="container">
            <div class="navbar-translate">
	        	    <a class="navbar-brand" rel="tooltip" title="kris project / KSA" data-placement="right"><h3 class="brandname"><img src="assets/img/logo/coffee1.png" width="20px"; height="20px">&nbspCoffee</h3><small>
                <h2 class="brandname">H O U S E</h2></small></a>
	          	  <a class="navbar-toggler" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" id="nav-toggle"><span class="nav-icon"></span>
            </div>
        	
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="./assets/img/bg/menu.jpg">
                <ul class="navbar-nav">
                    <?php 
                      if (strpos($_SERVER['SCRIPT_NAME'], 'index.php') == false) { ?>
                        <li class="nav-item">
                        <a class="nav-link" href="index.php" onclick="scrollToHome()">hoMe</i></a>
                      </li>
                      <?php } ?>
                     <?php 
                      if (strpos($_SERVER['SCRIPT_NAME'], 'index.php') !== false) { ?>
                      <li class="nav-item">
                        <a class="nav-link" href="index.php" onclick="scrollToHome()">hoMe</i></a>
                      </li>
                    	<li class="nav-item">
                        	<a class="nav-link" href="javascript:void(0)" onclick="scrollToAbout()">About</a>          
                   	  </li>

                   	  <li class="nav-item">
                        	<a class="nav-link" href="javascript:void(0)" onclick="scrollToGallery()">GAlleRy</a>
                   	  </li>

                    	<li class="nav-item">
                          <a class="nav-link" href="javascript:void(0)" onclick="scrollToMenu()">Menu</a>
                    	</li>
                    	<li class="nav-item">
                          <a class="nav-link" href="javascript:void(0)" onclick="scrollToBooknow()">bookinG</a>
                    	</li>
                    <?php } ?>

                    <?php
                    if (isset($_SESSION['user'])) { ?>
                      <li class="nav-item">
                        <a class="nav-link" name="logout" href="BookingAdmin.php" ><i class=""></i>AdMin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" name="logout" href="index.php?logout" ><i class=""></i>Logout</a>
                    </li>
                    <?php 
                      }else {
                     ?>
                     <li class="nav-item">
                        <a class="nav-link" href="adminLogin.php"><i class="fas fa-user-circle fa-lg" aria-hidden="true"></i></a>
                    </li>
                    <?php } ?>

                    <?php
                    if(isset($_GET["logout"])){
                       $_SESSION = array();
                      session_destroy();
                      echo "<script> location.href='adminLogin.php'; </script>";
                       exit();
                      }              
                    ?>
                </ul>
            </div>
        </div>
    </nav>
</nav>
</a>
</div>
</div>
</nav>
</nav>
<script>
    // FOR NAV BAR CLOSE BUTTON
    document.querySelector( "#nav-toggle" )
      .addEventListener( "click", function() {
        this.classList.toggle( "active" );
    });
</script>