<!doctype html>
<html class="no-js" lang="">
<?php
$hideFrames = ''; //empty or HIDE
$hideFinal = '';
include('../src/timing.php');
?>
<head>
  <script type="text/javascript">
  var clickTag = "https://www.placeholder.here";
  </script>
  <meta charset="utf-8">
  <title>Ucare</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
  <style><?php include('../src/round-3-set1.css'); ?></style>
	<script><?php include('../src/jquery-3.5.1.slim.min.js'); ?></script>
</head>

<body>

<div class="banner-container">

  <a href="javascript:window.open(window.clickTag)">
  	<div class="ucareb" id="b970x250" data-text-delay="<?php echo $set1textDelay; ?>" data-logo-delay="<?php echo $set1logoDelay; ?>">
  		<div class="inner">

  			<div class="frames <?php echo $hideFrames; ?>">
          <span data-timeline="<?php echo $set1frame1; ?>" class="network">
            <div>
              <img src="icon-network.svg">
            </div>
            <p>Better network</p>
          </span>
  				<span data-timeline="<?php echo $set1frame2; ?>" class="benefits">
            <div>
              <img src="icon-benefits.svg">
            </div>
            <p>Better benefits</p>
          </span>
  				<span data-timeline="<?php echo $set1frame3; ?>" class="savings">
            <div>
              <img src="icon-savings.svg">
            </div>
            <p>Better savings</p>
          </span>
  			</div>
        <div data-timeline="<?php echo $set1finalFrame; ?>" class="final-frame <?php echo $hideFinal; ?>" style="transition: all <?php echo $set1finalFrameSpeed; ?>ms !important">
            <div class="logo-text">
              <div class="logo-hide" data-logo-reveal="<?php echo $set1logoReveal; ?>"></div>
              <img src="logo-no-spark-white.svg" alt="ucare">
            </div>
            <div class="logo-spark inactive" style="transition: all <?php echo $set1sparkSpeed;?>ms !important">
              <img src="spark.svg" alt="ucare">
            </div>
            <p class="tagline inactive">Better health plans for you</p>
            <span class="button inactive">Learn more</span>
        </div>

  		</div>
  	</div>
  </a>

  <a href="javascript:window.open(window.clickTag)">
  	<div class="ucareb" id="b300x600" data-text-delay="<?php echo $set1textDelay; ?>" data-logo-delay="<?php echo $set1logoDelay; ?>">
  		<div class="inner">

  			<div class="frames <?php echo $hideFrames; ?>">
          <span data-timeline="<?php echo $set1frame1; ?>" class="network">
            <div>
              <img src="icon-network.svg">
            </div>
            <p>Better network</p>
          </span>
  				<span data-timeline="<?php echo $set1frame2; ?>" class="benefits">
            <div>
              <img src="icon-benefits.svg">
            </div>
            <p>Better benefits</p>
          </span>
  				<span data-timeline="<?php echo $set1frame3; ?>" class="savings">
            <div>
              <img src="icon-savings.svg">
            </div>
            <p>Better savings</p>
          </span>
  			</div>
        <div data-timeline="<?php echo $set1finalFrame; ?>" class="final-frame <?php echo $hideFinal; ?>" style="transition: all <?php echo $set1finalFrameSpeed; ?>ms !important">
          <div class="large-spark">
            <img src="spark.svg" alt="ucare">
          </div>
            <div class="logo-text">
              <div class="logo-hide" data-logo-reveal="<?php echo $set1logoReveal; ?>"></div>
              <img src="logo-no-spark-white.svg" alt="ucare">
            </div>
            <div class="logo-spark inactive" style="transition: all <?php echo $set1sparkSpeed;?>ms">
              <img src="spark.svg" alt="ucare">
            </div>
            <p class="tagline inactive">Better health plans for you</p>
            <span class="button inactive">Learn more</span>
        </div>

  		</div>
  	</div>
  </a>

  <a href="javascript:window.open(window.clickTag)">
  	<div class="ucareb" id="b160x600" data-text-delay="<?php echo $set1textDelay; ?>" data-logo-delay="<?php echo $set1logoDelay; ?>">
  		<div class="inner">

  			<div class="frames <?php echo $hideFrames; ?>">
          <span data-timeline="<?php echo $set1frame1; ?>" class="network">
            <div>
              <img src="icon-network.svg">
            </div>
            <p>Better network</p>
          </span>
  				<span data-timeline="<?php echo $set1frame2; ?>" class="benefits">
            <div>
              <img src="icon-benefits.svg">
            </div>
            <p>Better benefits</p>
          </span>
  				<span data-timeline="<?php echo $set1frame3; ?>" class="savings">
            <div>
              <img src="icon-savings.svg">
            </div>
            <p>Better savings</p>
          </span>
  			</div>
        <div data-timeline="<?php echo $set1finalFrame; ?>" class="final-frame <?php echo $hideFinal; ?>" style="transition: all <?php echo $set1finalFrameSpeed; ?>ms !important">
            <div class="large-spark">
              <img src="spark.svg" alt="ucare">
            </div>
            <div class="logo-text">
              <div class="logo-hide" data-logo-reveal="<?php echo $set1logoReveal; ?>"></div>
              <img src="logo-no-spark-white.svg" alt="ucare">
            </div>
            <div class="logo-spark inactive" style="transition: all <?php echo $set1sparkSpeed;?>ms">
              <img src="spark.svg" alt="ucare">
            </div>
            <p class="tagline inactive">Better health plans for you</p>
            <span class="button inactive">Learn more</span>
        </div>

  		</div>
  	</div>
  </a>

  <a href="javascript:window.open(window.clickTag)">
  	<div class="ucareb" id="b300x250" data-text-delay="<?php echo $set1textDelay; ?>" data-logo-delay="<?php echo $set1logoDelay; ?>">
  		<div class="inner">

  			<div class="frames <?php echo $hideFrames; ?>">
          <span data-timeline="<?php echo $set1frame1; ?>" class="network">
            <div>
              <img src="icon-network.svg">
            </div>
            <p>Better network</p>
          </span>
  				<span data-timeline="<?php echo $set1frame2; ?>" class="benefits">
            <div>
              <img src="icon-benefits.svg">
            </div>
            <p>Better benefits</p>
          </span>
  				<span data-timeline="<?php echo $set1frame3; ?>" class="savings">
            <div>
              <img src="icon-savings.svg">
            </div>
            <p>Better savings</p>
          </span>
  			</div>
        <div data-timeline="<?php echo $set1finalFrame; ?>" class="final-frame <?php echo $hideFinal; ?>" style="transition: all <?php echo $set1finalFrameSpeed; ?>ms !important">
            <div class="logo-text">
              <div class="logo-hide" data-logo-reveal="<?php echo $set1logoReveal; ?>"></div>
              <img src="logo-no-spark-white.svg" alt="ucare">
            </div>
            <div class="logo-spark inactive" style="transition: all <?php echo $set1sparkSpeed;?>ms">
              <img src="spark.svg" alt="ucare">
            </div>
            <p class="tagline inactive">Better health plans for you</p>
            <span class="button inactive">Learn more</span>
        </div>

  		</div>
  	</div>
  </a>


  <a href="javascript:window.open(window.clickTag)">
  	<div class="ucareb" id="b728x90" data-text-delay="<?php echo $set1textDelay; ?>" data-logo-delay="<?php echo $set1logoDelay; ?>">
  		<div class="inner">

  			<div class="frames <?php echo $hideFrames; ?>">
          <span data-timeline="<?php echo $set1frame1; ?>" class="network">
            <div>
              <img src="icon-network.svg">
            </div>
            <p>Better network</p>
          </span>
  				<span data-timeline="<?php echo $set1frame2; ?>" class="benefits">
            <div>
              <img src="icon-benefits.svg">
            </div>
            <p>Better benefits</p>
          </span>
  				<span data-timeline="<?php echo $set1frame3; ?>" class="savings">
            <div>
              <img src="icon-savings.svg">
            </div>
            <p>Better savings</p>
          </span>
  			</div>
        <div data-timeline="<?php echo $set1finalFrame; ?>" class="final-frame <?php echo $hideFinal; ?>" style="transition: all <?php echo $set1finalFrameSpeed; ?>ms !important">
            <div class="logo-text">
              <div class="logo-hide" data-logo-reveal="<?php echo $set1logoReveal; ?>"></div>
              <img src="logo-no-spark-white.svg" alt="ucare">
            </div>
            <div class="logo-spark inactive" style="transition: all <?php echo $set1sparkSpeed;?>ms">
              <img src="spark.svg" alt="ucare">
            </div>
            <p class="tagline inactive">Better health plans for you</p>
            <span class="button inactive">Learn more</span>
        </div>

  		</div>
  	</div>
  </a>

  <a href="javascript:window.open(window.clickTag)">
  	<div class="ucareb" id="b320x50" data-text-delay="<?php echo $set1textDelay; ?>" data-logo-delay="<?php echo $set1logoDelay; ?>">
  		<div class="inner">

  			<div class="frames <?php echo $hideFrames; ?>">
          <span data-timeline="<?php echo $set1frame1; ?>" class="network">
            <div>
              <img src="icon-network.svg">
            </div>
            <p>Better network</p>
          </span>
  				<span data-timeline="<?php echo $set1frame2; ?>" class="benefits">
            <div>
              <img src="icon-benefits.svg">
            </div>
            <p>Better benefits</p>
          </span>
  				<span data-timeline="<?php echo $set1frame3; ?>" class="savings">
            <div>
              <img src="icon-savings.svg">
            </div>
            <p>Better savings</p>
          </span>
  			</div>
        <div data-timeline="<?php echo $set1finalFrame; ?>" class="final-frame <?php echo $hideFinal; ?>" style="transition: all <?php echo $set1finalFrameSpeed; ?>ms !important">
            <div class="logo-text">
              <div class="logo-hide" data-logo-reveal="<?php echo $set1logoReveal; ?>"></div>
              <img src="logo-no-spark-white.svg" alt="ucare">
            </div>
            <div class="logo-spark inactive" style="transition: all <?php echo $set1sparkSpeed;?>ms">
              <img src="spark.svg" alt="ucare">
            </div>
            <p class="tagline inactive">Better health plans for you</p>
            <span class="button inactive">Learn more</span>
        </div>

  		</div>
  	</div>
  </a>

</div>

<script><?php include('../src/round-3-set1.js'); ?></script>
</body>

</html>
