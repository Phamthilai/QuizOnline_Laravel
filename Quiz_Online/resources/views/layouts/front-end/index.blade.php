<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
		<meta name="description" value="Using the build-in cover-, scroll- and uncover-effects, these three jQuery carousels placed on top of each other create a pretty cool effect." />
		<meta name="keywords" value="sequence, carousel, uncover, uncovering, jquery" />
		<title>Laravel</title>
		<link rel="stylesheet" type="text/css" href="css/Index.css">
		<link rel="stylesheet"  href="{{asset('css/app.css')}}">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script>
			$(document).ready(function() {
			  
			  	var $slider = $(".slider"),
			      	$slideBGs = $(".slide__bg"),
			      	diff = 0,
			      	curSlide = 0,
			      	numOfSlides = $(".slide").length-1,
			      	animating = false,
			      	animTime = 500,
			      	autoSlideTimeout,
			      	autoSlideDelay = 6000,
			      	$pagination = $(".slider-pagi");
			  
			  	function createBullets() {
			    	for (var i = 0; i < numOfSlides+1; i++) {
			      		var $li = $("<li class='slider-pagi__elem'></li>");
			      		$li.addClass("slider-pagi__elem-"+i).data("page", i);
			      		if (!i) $li.addClass("active");
			      		$pagination.append($li);
			    	}
			  	};
			  
				createBullets();
				  
				function manageControls() {
				   	$(".slider-control").removeClass("inactive");
				    if (!curSlide) $(".slider-control.left").addClass("inactive");
				    if (curSlide === numOfSlides) $(".slider-control.right").addClass("inactive");
				};
				  
				function autoSlide() {
				    autoSlideTimeout = setTimeout(function() {
					   curSlide++;
					   if (curSlide > numOfSlides) curSlide = 0;
					   changeSlides();
				    }, autoSlideDelay);
				};
				  
				autoSlide();
				  
				function changeSlides(instant) {
				    if (!instant) {
					    animating = true;
					    manageControls();
					    $slider.addClass("animating");
					    $slider.css("top");
					    $(".slide").removeClass("active");
					    $(".slide-"+curSlide).addClass("active");
					    setTimeout(function() {
					       $slider.removeClass("animating");
					       animating = false;
					    }, animTime);
				    }
				    window.clearTimeout(autoSlideTimeout);
				    $(".slider-pagi__elem").removeClass("active");
				    $(".slider-pagi__elem-"+curSlide).addClass("active");
				    $slider.css("transform", "translate3d("+ -curSlide*100 +"%,0,0)");
				    $slideBGs.css("transform", "translate3d("+ curSlide*50 +"%,0,0)");
				    diff = 0;
				    autoSlide();
				}

				function navigateLeft() {
				   if (animating) return;
				   if (curSlide > 0) curSlide--;
				   changeSlides();
				}

				function navigateRight() {
				   if (animating) return;
				   if (curSlide < numOfSlides) curSlide++;
				   changeSlides();
				}

				$(document).on("mousedown touchstart", ".slider", function(e) {
				    if (animating) return;
				    window.clearTimeout(autoSlideTimeout);
				    var startX = e.pageX || e.originalEvent.touches[0].pageX,
				        winW = $(window).width();
				    diff = 0;
				    
				    $(document).on("mousemove touchmove", function(e) {
				      var x = e.pageX || e.originalEvent.touches[0].pageX;
				      diff = (startX - x) / winW * 70;
				      if ((!curSlide && diff < 0) || (curSlide === numOfSlides && diff > 0)) diff /= 2;
				      $slider.css("transform", "translate3d("+ (-curSlide*100 - diff) +"%,0,0)");
				      $slideBGs.css("transform", "translate3d("+ (curSlide*50 + diff/2) +"%,0,0)");
				    });
				});
				  
				$(document).on("mouseup touchend", function(e) {
				    $(document).off("mousemove touchmove");
				    if (animating) return;
				    if (!diff) {
				      	changeSlides(true);
				      	return;
				    }
				    if (diff > -8 && diff < 8) {
				      	changeSlides();
				      	return;
				    }
				    if (diff <= -8) {
				      	navigateLeft();
				    }
				    if (diff >= 8) {
				      	navigateRight();
				    }
				});
				  
				$(document).on("click", ".slider-control", function() {
				    if ($(this).hasClass("left")) {
				      	navigateLeft();
				    } else {
				      	navigateRight();
				    }
				});
				  
				$(document).on("click", ".slider-pagi__elem", function() {
				    curSlide = $(this).data("page");
				    changeSlides();
				});
			  
			});
			
		</script>
	</head>
<body>
	<div id="index">
		<div class="slider-container">
			<div class="slider-control left inactive"></div>
			<div class="slider-control right"></div>
			<ul class="slider-pagi"></ul>
			<div class="slider">
			    <div class="slide slide-0 active">
			     	<div class="slide__bg"></div>
			      	<div class="slide__content">
				        <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
				          	<path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
				        </svg>
				        <div class="slide__text">
				          	<h2 class="slide__text-heading"><b>Passerellesnumeriques Vietnam</b></h2>
				          	<p class="slide__text-desc">Passerelles numériques is a non-profit organization under French law, operating in three Asian countries: Cambodia, the Philippines and Vietnam.
							Our mission is to enable young underprivileged people to build their employability through education in the digital industry, and leverage their potential and willpower; it allows them and their family to escape poverty in a sustainable way, and contribute to the social and economic development of their country.</p>
				        </div>
			    	</div>
				</div>
			    <div class="slide slide-1 ">
			      	<div class="slide__bg"></div>
			      	<div class="slide__content">
				        <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
				          	<path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
				        </svg>
				        <div class="slide__text">
				          	<h2 class="slide__text-heading"><b>Vietnam Attends Passerelles numériques Graduation Ceremony</b></h2>
				          	<p class="slide__text-desc">On October 14th, 2017, Bolloré Logistics Vietnam attended the graduation ceremony of Passerelles numériques (PN) Vietnam students.<br>
							The Passerelles numériques Vietnam NGO program was launched in 2010 in Da Nang, a city identified as a high potential area for Information Technology (IT) sector development. Bolloré Logistics Vietnam is supporting the organization through donations since early 2017.<br>
							Earlier this year in April, nine second-hand computers were provided to Passerelles numériques structure in Danang, after which it was decided to provide seven more prior to the graduation ceremony; as well as 10 keyboards and five computer mice.</p>
				        </div>
			      	</div>
			    </div>
			    <div class="slide slide-2">
			      	<div class="slide__bg"></div>
			     	<div class="slide__content">
			        	<svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
			          		<path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
			        	</svg>
			        	<div class="slide__text">
			          		<h2 class="slide__text-heading">Project name 3</h2>
			         		<p class="slide__text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veniam minus illo debitis nihil animi facere, doloremque voluptate tempore quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veniam minus illo debitis nihil animi facere, doloremque voluptate tempore quia.</p>
			        	</div>
			      	</div>
			    </div>
			    <div class="slide slide-3">
			      	<div class="slide__bg"></div>
			      	<div class="slide__content">
				        <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
				          	<path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
				        </svg>
				        <div class="slide__text">
				          	<h2 class="slide__text-heading">Project name 4</h2>
				          	<p class="slide__text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veniam minus illo debitis nihil animi facere, doloremque voluptate tempore quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veniam minus illo debitis nihil animi facere, doloremque voluptate tempore quia.</p>
			       		</div>
			      	</div>
			    </div>
			</div>
		</div>
		<div class="row">
			<div class="information">
				<div class="col-sm-4">
					<div class="content">
						<img src="../upload/images_index/logo_1.png">
						<p>I was immediately seduced by<br>
							PN’s different approach of<br> 
							development. Whereas many<br> 
							NGOs focus on primary or even<br>
							secondary Education, PN chose<br>
							to enable young students to<br> 
							pursue higher Education and<br>
							build up their employability<br> 
							within growing sector, the<br> 
							information and communication<br> 
							technologies. And instead of<br>
							providing superficial support<br> 
							to a large number of beneficiaries,<br>
							PN does a real deep and meaningful<br>
							work with a carefully selected<br>
							number of motivated students.
						</p>
						<p><b>Marie GHYSELINCK<br>
							PNV Education and Selection Manager</b></p>	
					</div>
				</div>
				<div class="col-sm-4">
					<div class="content">
						<img src="../upload/images_index/logo_2.png">
						<p>I am very happy to say<br> 
						that I am a student of PNV.<br>
						Here, I learned many useful<br>
						things. Three years are not too<br> 
						long or too short to develop<br> 
						yourself. I believe that I will<br> 
						do everything and I will actively<br> 
						study well so my dream will become<br> 
						a reality. There is saying that is:<br>
						"When the sun is shining I can do<br> 
						anything, no mountain is too high,<br> 
						no trouble is too difficult to overcome."
						</p>
						<p><b>Le Ba Hiep<br>
							PNV student, class 2019</b></p>	
					</div>
				</div>
				<div class="col-sm-4">
					<div class="content">
						<img src="../upload/images_index/logo_3.png">
						<p>Although it was only two<br>
						years of living and studying<br>
						at PNV, I learned a lot, from<br> 
						precious life values to specialized<br>
						skills which now play an important<br> 
						role in my current life and job.<br>
						For me, PNV is not only an<br> 
						unforgettable experience but<br>
						also a home to return.
						</p>
						<p><b>Luyen Do Thi<br>
							PNV alumni, class 2014,<br> 
							Software Developer,<br>
							TPP-FIT Co. Ltd Danang</b></p>	
					</div>
				</div>
			</div>
		</div>
		<div class="slogan">
			<h4 class="title"><b>YOU LOVE WHAT WE DO AND YOU'D LIKE TO SUPPORT OUR ACTIONS?</b></h4>
			<button type="submit" class="button">Donate!</button>
		</div>
	</div>
</body>
</html>