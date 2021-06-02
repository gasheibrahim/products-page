<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">


<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

<!--owl-carousel-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">

	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<style>
* {
  box-sizing: border-box;
}
.row{
  float: left;
  width:100%;
  height:25rem;
	background: white;
	margin:80px auto;
	box-shadow: 1px 3px 10px rgba(0,0,0,0.2);
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>
<div class="row">
  <div class="column" style="margin-top:2rem;">
  <a class="" target="_blank"  href="">
  <div class="product-front-image">
         <div class="front-image">
            <img alt="" class="img-fluid" src="img/7.jpeg">
         </div>
  <div class="owl-slider">
             <div id="carousel3" class="owl-carousel product-slider">
                 <div class="product-image">
                    <img  alt=""src="img/5.jpeg">
                 </div>
                 <div class="product-image">
                    <img  alt="" src="img/6.jpeg">
          </div>
                 <div class="product-image">
                    <img  alt="" src="img/8.jpeg">
           </div>
                 <div class="product-image">
                    <img  alt=""src="img/7.jpeg">
          </div>
            </div>
     </div>
  <div class="product-like">
  <svg xmlns="http://www.w3.org/2000/svg" class="_2oLiqr" width="28" height="28" viewBox="0 0 20 16">
  <path d="M8.695 16.682C4.06 12.382 1 9.536 1 6.065 1 3.219 3.178 1 5.95 1c1.566 0 3.069.746 4.05 1.915C10.981 1.745 12.484 1 14.05 1 16.822 1 19 3.22 19 6.065c0 3.471-3.06 6.316-7.695 10.617L10 17.897l-1.305-1.215z"  class="_35Y7Yo" stroke="#FFF" fill-rule="evenodd" opacity=".9"></path>
  </svg>
  </div>
  </div>
  </a>
  </div>
  <div class="column" style="margin-top:2rem;">
    <h5>Fizz Sch Bag 32.5 L  Backpack  (Grey)</h5>
    <span class="brand-name" style="background-color:#388e3c;color:#fff;padding:3px;font-size:13px;border-radius:10px;">4.4<i class="fas fa-star"></i></span><span class="brand-name"> 13,242 Ratings & 2,372</span>
    <ul class="brand-name">
      <li>Fizz Sch Bag 32.5</li>
      <li>Backpack  (Grey)</li>
      <li>Fizz Sch Bag 32.5</li>
      <li>Backpack  (Grey)</li>
      <li>Fizz Sch Bag 32.5</li>
      <li>Backpack  (Grey)</li>
    </ul>
  </div>
  <div class="column brand-name" style="margin-top:2rem;">
    <div class="price">808RFW
    <img height="18" src="img/flipkart-assured.png" style="margin-left:5rem;"/>
    </div>
    <div class="price-info-sec">
        <div class="cut-off">2,699RFW</div>
        <div class="discount-percent"><span>70% off</span></div>
    </div>
    <span>Or pay</span><span style="margin-left:5px;">808RFW</span>
    <div class="price-info-sec">
        <div class="discount-percent"><span>Bank Offer</span></div>
    </div>
    <div class="span">
      upto 2,699RFW Off On Exchange
    </div>
  </div>
</div>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
   
   
 <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
   
<script type="text/javascript">
  var owl = $(".product-slider");
  owl.owlCarousel({
    loop: true,
    smartspeed: 500,
    dots: true,
    navs: false,
    lazyLoad: true,
    mouseDrag: false,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    responsiveClass: true,
    items:1,
  });


  $('.product-slider').on('mouseover',function(e){
    owl.trigger('play.owl.autoplay',[1400])
  });
  $('.product-slider').on('mouseleave',function(e){
    owl.trigger('stop.owl.autoplay',[1400])
  });
</script>
  
</body>
</html>
