
@extends('frontend.layout.main')
@push('title')
<title></title>

@endpush
@push('meta')
<meta name="title" content="">
<meta name="keywords" content="">
        <meta name="description" content="">
@endpush
@section('main')




	<!--Main Slider-->
	<section class="main-slider">
		<div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
			<div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
				<ul>
					<!-- Slide 1 -->
					<li data-index="rs-1" data-transition="zoomout">
						<!-- MAIN IMAGE -->
						<img src="{{asset('frontend/images/main-slider/1.jpg')}}" alt="" class="rev-slidebg">

						<div class="tp-caption tp-shape tp-shapewrapper tp-resizeme big-ipad-hidden rs-parallaxlevel-1"
						data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[0,0,0,0]"
						data-paddingright="[0,0,0,0]"
						data-paddingtop="[0,0,0,0]"
						data-responsive_offset="on"
						data-type="shape"
						data-height="auto"
						data-whitespace="nowrap"
						data-width="none"
						data-hoffset="['-260','-100','-100','-100']"
						data-voffset="['-270','-190','-190','-190']"
						data-x="['left','left','left','left']"
						data-y="['middle','middle','middle','middle']"
						data-frames='[{"from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
							<figure><img src="{{asset('frontend/images/main-slider/icon/icon-book.png')}}" alt=""></figure>
						</div>

						<div class="tp-caption tp-shape tp-shapewrapper tp-resizeme big-ipad-hidden rs-parallaxlevel-1"
						data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[0,0,0,0]"
						data-paddingright="[0,0,0,0]"
						data-paddingtop="[0,0,0,0]"
						data-responsive_offset="on"
						data-type="shape"
						data-height="auto"
						data-whitespace="nowrap"
						data-width="none"
						data-hoffset="['-300','-100','-100','-100']"
						data-voffset="['280','-190','-190','-190']"
						data-x="['right','right','right','right']"
						data-y="['middle','middle','middle','middle']"
						data-frames='[{"from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
							<figure><img src="{{asset('frontend/images/main-slider/icon/icon-globe.png')}}" alt=""></figure>
						</div>

						<div class="tp-caption tp-resizeme rs-parallaxlevel-2 big-ipad-hidden"
						data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[0,0,0,0]"
						data-paddingright="[0,0,0,0]"
						data-paddingtop="[0,0,0,0]"
						data-responsive_offset="on"
						data-type="shape"
						data-height="none"
						data-whitespace="nowrap"
						data-width="none"
						data-hoffset="['-250','-120','-120','-120']"
						data-voffset="['190','100','100','100']"
						data-x="['left','left','left','left']"
						data-y="['middle','middle','middle','middle']"
						data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":3000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
							<figure><img src="{{asset('frontend/images/main-slider/icon/icon-dots.png')}}" alt=""></figure>
						</div>


						<div class="tp-caption tp-resizeme rs-parallaxlevel-3 big-ipad-hidden"
						data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[0,0,0,0]"
						data-paddingright="[0,0,0,0]"
						data-paddingtop="[0,0,0,0]"
						data-responsive_offset="on"
						data-type="shape"
						data-height="none"
						data-whitespace="nowrap"
						data-width="none"
						data-hoffset="['-170','120','120','120']"
						data-voffset="['220','180','180','180']"
						data-x="['center','center','center','center']"
						data-y="['middle','middle','middle','middle']"
						data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":3000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
							<figure><img src="{{asset('frontend/images/main-slider/icon/icon-star.png')}}" alt=""></figure>
						</div>

						<div class="tp-caption tp-resizeme rs-parallaxlevel-1 big-ipad-hidden"
						data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[0,0,0,0]"
						data-paddingright="[0,0,0,0]"
						data-paddingtop="[0,0,0,0]"
						data-responsive_offset="on"
						data-type="shape"
						data-height="none"
						data-whitespace="nowrap"
						data-width="none"
						data-hoffset="['-40','120','120','120']"
						data-voffset="['-160','100','100','100']"
						data-x="['center','center','center','center']"
						data-y="['middle','middle','middle','middle']"
						data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":3000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
							<figure><img src="{{asset('frontend/images/main-slider/icon/icon-arrow.png')}}" alt=""></figure>
						</div>

						<div class="tp-caption tp-resizeme rs-parallaxlevel-2 big-ipad-hidden"
						data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[0,0,0,0]"
						data-paddingright="[0,0,0,0]"
						data-paddingtop="[0,0,0,0]"
						data-responsive_offset="on"
						data-type="shape"
						data-height="none"
						data-whitespace="nowrap"
						data-width="none"
						data-hoffset="['-120','-30','-30','-30']"
						data-voffset="['-180','-180','-180','-180']"
						data-x="['right','right','right','right']"
						data-y="['middle','middle','middle','middle']"
						data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":3000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
							<figure><img src="{{asset('frontend/images/main-slider/icon/icon-dots-2.png')}}" alt=""></figure>
						</div>

						<div class="tp-caption tp-resizeme rs-parallaxlevel-1 big-ipad-hidden"
						data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[0,0,0,0]"
						data-paddingright="[0,0,0,0]"
						data-paddingtop="[0,0,0,0]"
						data-responsive_offset="on"
						data-type="shape"
						data-height="none"
						data-whitespace="nowrap"
						data-width="none"
						data-hoffset="['-160','-50','0','150']"
						data-voffset="['170','120','120','120']"
						data-x="['right','right','right','right']"
						data-y="['middle','middle','middle','middle']"
						data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":3000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
							<figure><img src="{{asset('frontend/images/main-slider/icon/icon-circle-1.png')}}" alt=""></figure>
						</div>

						<div class="tp-caption tp-resizeme rs-parallaxlevel-1 big-ipad-hidden"
						data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[0,0,0,0]"
						data-paddingright="[0,0,0,0]"
						data-paddingtop="[0,0,0,0]"
						data-responsive_offset="on"
						data-type="shape"
						data-height="none"
						data-whitespace="nowrap"
						data-width="none"
						data-hoffset="['30','-50','0','150']"
						data-voffset="['300','120','120','120']"
						data-x="['center','center','center','center']"
						data-y="['middle','middle','middle','middle']"
						data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":3000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
							<figure><img src="{{asset('frontend/images/main-slider/icon/icon-circle-2.png')}}" alt=""></figure>
						</div>

						<div class="tp-caption tp-resizeme rs-parallaxlevel-1 big-ipad-hidden"
						data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[0,0,0,0]"
						data-paddingright="[0,0,0,0]"
						data-paddingtop="[0,0,0,0]"
						data-responsive_offset="on"
						data-type="shape"
						data-height="none"
						data-whitespace="nowrap"
						data-width="none"
						data-hoffset="['250','-50','0','150']"
						data-voffset="['-190','120','120','120']"
						data-x="['center','center','center','center']"
						data-y="['middle','middle','middle','middle']"
						data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":3000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
							<figure><img src="{{asset('frontend/images/main-slider/icon/icon-circle-3.png')}}" alt=""></figure>
						</div>


						<div class="tp-caption tp-resizeme rs-parallaxlevel-2 big-ipad-hidden"
						data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[0,0,0,0]"
						data-paddingright="[0,0,0,0]"
						data-paddingtop="[0,0,0,0]"
						data-responsive_offset="on"
						data-type="shape"
						data-height="none"
						data-whitespace="nowrap"
						data-width="none"
						data-hoffset="['-220','-30','-30','-30']"
						data-voffset="['-80','-180','-180','-180']"
						data-x="['right','right','right','right']"
						data-y="['middle','middle','middle','middle']"
						data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":3000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
							<figure><img src="{{asset('frontend/images/main-slider/icon/icon-bulb.png')}}" alt=""></figure>
						</div>

						<div class="tp-caption tp-resizeme"
						data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[0,0,0,0]"
						data-paddingright="[0,0,0,0]"
						data-paddingtop="[0,0,0,0]"
						data-responsive_offset="on"
						data-type="shape"
						data-height="none"
						data-whitespace="nowrap"
						data-width="none"
						data-hoffset="['-100','-100','-200','-320']"
						data-voffset="['0','0','-30','-30']"
						data-x="['right','right','right','right']"
						data-y="['bottom','bottom','bottom','bottom']"
						data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":3000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
							<figure class="main-image"><img src="{{asset('frontend/images/main-slider/image-1.png')}}" alt=""></figure>
						</div>

						<div class="tp-caption"
						data-paddingbottom="[15,15,15,15]"
						data-paddingleft="[15,15,15,15]"
						data-paddingright="[0,0,0,0]"
						data-paddingtop="[0,0,0,0]"
						data-responsive_offset="on"
						data-type="text" data-height="none"
						data-width="['750','750','750','750']"
						data-whitespace="normal"
						data-hoffset="['0','0','0','0']"
						data-voffset="['-205','-190','-210','-220']"
						data-x="['left','left','left','left']"
						data-y="['middle','middle','middle','middle']"
						data-textalign="['top','top','top','top']"
						data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
							<span class="title">START TO NEW JOURNEY</span>
						</div>

						<div class="tp-caption"
						data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[15,15,15,15]"
						data-paddingright="[15,15,15,15]"
						data-paddingtop="[0,0,0,0]"
						data-responsive_offset="on"
						data-type="text" data-height="none"
						data-width="['750','750','750','450']"
						data-whitespace="normal"
						data-hoffset="['0','0','0','0']"
						data-voffset="['-55','-50','-50','-90']"
						data-x="['left','left','left','left']"
						data-y="['middle','middle','middle','middle']"
						data-textalign="['top','top','top','top']"
						data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
							<h1>Best <span class="style-font">courses</span> <br> from STLabs</h1>
						</div>

						<div class="tp-caption"
						data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[15,15,15,15]"
						data-paddingright="[0,0,0,0]"
						data-paddingtop="[0,0,0,0]"
						data-responsive_offset="on"
						data-type="text" data-height="none"
						data-width="['750','750','750','450']"
						data-whitespace="normal"
						data-hoffset="['0','0','0','0']"
						data-voffset="['110','90','100','65']"
						data-x="['left','left','left','left']"
						data-y="['middle','middle','middle','middle']"
						data-textalign="['top','top','top','top']"
						data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
							<div class="text">WA premier Training & Development center for cutting edge technologies <br>where you can excel your learning with live projects under expert mentor.</div>
						</div>


						<div class="tp-caption" data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[15,15,15,15]"
						data-paddingright="[15,15,15,15]"
						data-paddingtop="[0,0,0,0]"
						data-responsive_offset="on"
						data-type="text" data-height="none"
						data-width="['700','750','700','450']"
						data-whitespace="normal"
						data-hoffset="['0','0','0','0']"
						data-voffset="['200','185','200','185']"
						data-x="['left','left','left','left']"
						data-y="['middle','middle','middle','middle']"
						data-textalign="['top','top','top','top']"
						data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
							<a href="page-courses.html" class="theme-btn btn-style-one">Find Course</a>
						</div>
					</li>

				</ul>
			</div>
		</div>
	</section>
	<!-- End Main Slider-->

	<!-- About Section -->
	<section class="about-section">
		<div class="anim-icons">
			<span class="icon icon-dotted-map"></span>
		</div>
		<div class="auto-container">
			<div class="row">
				<div class="content-column col-lg-6 col-md-12 order-2 wow fadeInRight" data-wow-delay="600ms">
					<div class="inner-column">
						<div class="sec-title">
							<span class="sub-title">Get to know us</span>
							<h2>Grow your skills learn with us from anywhere</h2>
							<div class="text">Lorem ipsum dolor sit amet consectur adipiscing elit sed eiusmod tempor incididunt labore dolore magna aliquaenim ad minim. Sed risus augue, commodo ornare felis non, eleifend molestie metus pharetra eleifend.</div>
						</div>

						<ul class="list-style-one two-column">
							<li><i class="icon fa fa-check"></i> Expert trainers</li>
							<li><i class="icon fa fa-check"></i> Online learning</li>
							<li><i class="icon fa fa-check"></i> Lifetime access</li>
							<li><i class="icon fa fa-check"></i> Great results</li>
						</ul>

						<div class="btn-box">
							<a href="page-about.html" class="theme-btn btn-style-one"><span class="btn-title">Discover more</span></a>
						</div>
					</div>
				</div>

				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12">
					<div class="anim-icons">
						<span class="icon icon-dotted-map-2"></span>
						<span class="icon icon-paper-plan"></span>
						<span class="icon icon-dotted-line"></span>
					</div>
					<div class="inner-column wow fadeInLeft">
						<figure class="image-1 overlay-anim wow fadeInUp"><img src="{{asset('frontend/images/resource/about-1.png')}}" alt=""></figure>
						<figure class="image-2 overlay-anim wow fadeInRight"><img src="{{asset('frontend/images/resource/about-2.jpg')}}" alt=""></figure>
						<div class="experience bounce-y"><span class="count">16</span> Years of Experience</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Emd About Section -->

	<!-- Courses Section -->
	<section class="courses-section">
		<div class="auto-container">
			<div class="anim-icons">
				<span class="icon icon-e wow zoomIn"></span>
			</div>

			<div class="sec-title">
				{{-- <span class="sub-title">popular courses</span> --}}
				<h2>Recent Placement</h2>
			</div>

			<div class="carousel-outer">
				<!-- Courses Carousel -->
				<div class="courses-carousel owl-carousel owl-theme default-nav">
					<!-- Course Block -->
					<div class="course-block">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="page-course-details.html"><img src="{{asset('frontend/images/resource/course-1.jpg')}}" alt=""></a></figure>
								
							</div>
							<div class="content-box">
								
								<h5 class="title"><a href="page-course-details.html">Starting seo as your home based business</a></h5>
								
							</div>
						</div>
					</div>

					<!-- Course Block -->
					<div class="course-block">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="page-course-details.html"><img src="{{asset('frontend/images/resource/course-2.jpg')}}" alt=""></a></figure>
								
							</div>
							<div class="content-box">
								
								<h5 class="title"><a href="page-course-details.html">Starting seo as your home based business</a></h5>
								
							</div>
						</div>
					</div>

					<!-- Course Block -->
					<div class="course-block">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="page-course-details.html"><img src="{{asset('frontend/images/resource/course-3.jpg')}}" alt=""></a></figure>
								
							</div>
							<div class="content-box">
								
								<h5 class="title"><a href="page-course-details.html">Starting seo as your home based business</a></h5>
								
							</div>
						</div>
					</div>

					<!-- Course Block -->
					<div class="course-block">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="page-course-details.html"><img src="{{asset('frontend/images/resource/course-4.jpg')}}" alt=""></a></figure>
								
							</div>
							<div class="content-box">
								
								<h5 class="title"><a href="page-course-details.html">Starting seo as your home based business</a></h5>
								
							</div>
						</div>
					</div>

					<!-- Course Block -->
					<div class="course-block">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="page-course-details.html"><img src="{{asset('frontend/images/resource/course-1.jpg')}}" alt=""></a></figure>
								
							</div>
							<div class="content-box">
								
								<h5 class="title"><a href="page-course-details.html">Starting seo as your home based business</a></h5>
								
							</div>
						</div>
					</div>

					<!-- Course Block -->
					<div class="course-block">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="page-course-details.html"><img src="{{asset('frontend/images/resource/course-2.jpg')}}" alt=""></a></figure>
								
							</div>
							<div class="content-box">
								
								<h5 class="title"><a href="page-course-details.html">Starting seo as your home based business</a></h5>
								
							</div>
						</div>
					</div>

					<!-- Course Block -->
					<div class="course-block">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="page-course-details.html"><img src="{{asset('frontend/images/resource/course-3.jpg')}}" alt=""></a></figure>
								
							</div>
							<div class="content-box">
								
								<h5 class="title"><a href="page-course-details.html">Starting seo as your home based business</a></h5>
								
							</div>
						</div>
					</div>

					<!-- Course Block -->
					<div class="course-block">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="page-course-details.html"><img src="{{asset('frontend/images/resource/course-4.jpg')}}" alt=""></a></figure>
								
							</div>
							<div class="content-box">
								
								<h5 class="title"><a href="page-course-details.html">Starting seo as your home based business</a></h5>
								
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="bottom-text">
				<div class="content">
					<strong>23,000+</strong> more skillful courses you can explore
				</div>
			</div>
		</div>
	</section>
	<!-- End Courses Section-->

	<!-- Features Section -->
	<section class="features-section">
		<div class="auto-container">
			<div class="row">
				<!-- Feature Block -->
				<div class="feature-block col-lg-3 col-md-6 col-sm-6 wow fadeInUp">
					<div class="inner-box ">
						<i class="icon flaticon-online-learning"></i>
						<h5 class="title">Online<br> Certifications</h5>
					</div>
				</div>

				<!-- Feature Block -->
				<div class="feature-block col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="400ms">
					<div class="inner-box ">
						<i class="icon flaticon-elearning"></i>
						<h5 class="title">Top<br> Instructors</h5>
					</div>
				</div>

				<!-- Feature Block -->
				<div class="feature-block col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="800ms">
					<div class="inner-box ">
						<i class="icon flaticon-web-2"></i>
						<h5 class="title">Unlimited <br>Online Courses</h5>
					</div>
				</div>

				<!-- Feature Block -->
				<div class="feature-block col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="1200ms">
					<div class="inner-box ">
						<i class="icon flaticon-users"></i>
						<h5 class="title">Experienced <br>Members</h5>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Features Section-->

	<!-- Categories Section -->
	<section class="categories-section-current">
		<div class="auto-container">
			<div class="anim-icons">
				<span class="icon icon-group-1 bounce-y"></span>
				<span class="icon icon-group-2 bounce-y"></span>
			</div>

			<div class="sec-title text-center">
				<span class="sub-title">Checkout our categories</span>
				<h2>Top categories for popular <br>courses to show</h2>
			</div>

			<div class="row justify-content-center">
				<!-- Category Block -->
				<div class="category-block-current col-xl-2 col-lg-3 col-md-4 col-sm-6">
					<div class="inner-box">
						<div class="icon-box">
							<i class="icon flaticon-student-2"></i>
						</div>
						<h6 class="title"><a href="page-course-details.html">Business <br>Management</a></h6>
					</div>
				</div>

				<!-- Category Block -->
				<div class="category-block-current col-xl-2 col-lg-3 col-md-4 col-sm-6">
					<div class="inner-box">
						<div class="icon-box">
							<i class="icon flaticon-stationary"></i>
						</div>
						<h6 class="title"><a href="page-course-details.html">Arts and <br>Design</a></h6>
					</div>
				</div>

				<!-- Category Block -->
				<div class="category-block-current col-xl-2 col-lg-3 col-md-4 col-sm-6">
					<div class="inner-box">
						<div class="icon-box">
							<i class="icon flaticon-online-learning"></i>
						</div>
						<h6 class="title"><a href="page-course-details.html">Computer <br>Science</a></h6>
					</div>
				</div>

				<!-- Category Block -->
				<div class="category-block-current col-xl-2 col-lg-3 col-md-4 col-sm-6">
					<div class="inner-box">
						<div class="icon-box">
							<i class="icon flaticon-study"></i>
						</div>
						<h6 class="title"><a href="page-course-details.html">Personal <br>Development</a></h6>
					</div>
				</div>

				<!-- Category Block -->
				<div class="category-block-current col-xl-2 col-lg-3 col-md-4 col-sm-6">
					<div class="inner-box">
						<div class="icon-box">
							<i class="icon flaticon-pie-chart"></i>
						</div>
						<h6 class="title"><a href="page-course-details.html">Business and <br>Finance</a></h6>
					</div>
				</div>

				<!-- Category Block -->
				<div class="category-block-current col-xl-2 col-lg-3 col-md-4 col-sm-6">
					<div class="inner-box">
						<div class="icon-box">
							<i class="icon flaticon-web-2"></i>
						</div>
						<h6 class="title"><a href="page-course-details.html">Video and <br>Photography</a></h6>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Product Categories -->

	<!-- Signup Section -->
	<section class="signup-section">
		<div class="auto-container">
			<div class="anim-icons">
				<span class="icon icon-paper-clip bounce-x"></span>
			</div>
			<div class="outer-box" style="background-image: url({{asset('frontend/images/background/3.jpg')}})">
				<span class="float-icon icon-pencil-line wow fadeInUp"></span>
				<div class="row align-items-center">
					<!-- Title Column -->
					<div class="title-column col-lg-6 col-md-12 col-sm-12">
						<div class="sec-title light mb-0">
							<h2>Sign up for a<br> free download <br>course brochure</h2>
						</div>
					</div>

					<!-- Form Column -->
					<div class="form-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<!-- Sign Form -->
							<div class="signup-form wow fadeInLeft">
								<!--Contact Form-->
								
										<button class="theme-btn btn-style-one w-100" type="submit" name="submit-form">Sign Up</button>
								
								</form>
							</div>
							<!--End Contact Form -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!--End FAQ Section -->
	<section class="about-section-two">
		<div class="anim-icons">
			<span class="icon icon-e wow zoomIn"></span>
			<span class="icon icon-dots-2 bounce-x"></span>

		</div>
		<div class="auto-container">
			<div class="row">
				<div class="content-column col-lg-12 col-md-12 order-2 wow fadeInRight" data-wow-delay="600ms">
					<div class="inner-column">
						<div class="sec-title text-center">
							<h2>Our Placement Process</h2>
							<div class="text">You might find it tricky to find job opportunities that cater to your need and can help you push your career forward. That’s where placement assistance services come to aid. Our professional Placement Service ensures that you get consistent job leads that cater to your career demands and that are highly compatible with your work profile. Our team of expert HRs will also provide you with complete job assistance in the process.
							STLab India is the No. 1 training institute providing 100% Placement assistance to students. We places more than 200 student in best MNC’s in a year. We also provide job oriented training to all students so that post completion of training program our student get job as soon as possible. Our training program is designed in such a way that student can achieve their goal easily. We have a dedicated team of placement which helps students to get job in top MNC’s. STLabs India provides real time experience to student and make them ready for the current job market. Each and every training module of our training program is designed according to current industry demand so that student can be professionally and technically strong.</div>
						</div>

						
					</div>
				</div>

			</div>
			<div class="row justify-content-center">
				

				<!-- Image Column -->
				<div class="image-column col-lg-10 col-md-12">
					<div class="inner-column wow fadeInLeft">
						<div class="icons-box">
							<span class="icon icon-dotted-map"></span>
							<span class="icon icon-dotted-line"></span>
							<span class="icon icon-papper-plan"></span>
						</div>
						<figure class="image overlay-anim wow fadeInUp"><img src="{{asset('frontend/images/stlabs-placement-process.jpg')}}" alt="">
						</figure>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="features-section-two pt-0">
		<div class="anim-icons">
			<span class="icon icon-shape-1 zoom-one"></span>
			<span class="icon icon-shape-2 zoom-one"></span>
			<span class="icon icon-e zoom-one"></span>
		</div>
		<div class="auto-container">
			<div class="sec-title text-center">
				<h2>Why Gradual Move to Job <br>Oriented Program</h2>
			</div>
			<div class="row">
				<!-- Feature Block -->
				<div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
					<div class="inner-box ">
						<figure class="image"><img src="{{asset('frontend/images/resource/feature-1.png')}}" alt=""></figure>
						<h4 class="title"><a href="page-about.html">Education & Industry Gap</a></h4>
						<div class="text">Many Indian university curriculums often lag behind industry demands due to outdated materials and a lack of practical focus. The gap exists in areas like emerging technologies and soft skills. The ultimate challenge is aligning educational content with current industry practices bettering prepare students for the workforce.</div>
					</div>
				</div>

				<!-- Feature Block -->
				<div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="400ms" style="visibility: visible; animation-delay: 400ms; animation-name: fadeInUp;">
					<div class="inner-box ">
						<figure class="image"><img src="{{asset('frontend/images/resource/feature-2.png')}}" alt=""></figure>
						<h4 class="title"><a href="page-about.html">Lack Of Practical Knowledge</a></h4>
						<div class="text">User Interface language and framework knowledge if good, but it’s often not enough on its own. Employers typically look for practical experience, problem-solving skills, and familiarity with tools and frameworks relevant to the job. Building a portfolio of projects, contributing to open-source, and gaining real-world experience can significantly enhance your chances of securing a job.</div>
					</div>
				</div>

				<!-- Feature Block -->
				<div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="800ms" style="visibility: visible; animation-delay: 800ms; animation-name: fadeInUp;">
					<div class="inner-box ">
						<figure class="image"><img src="{{asset('frontend/images/resource/feature-3.png')}}" alt=""></figure>
						<h4 class="title"><a href="page-about.html">Lack of Mentorship & Placements</a></h4>
						<div class="text">The lack of mentorship for college students can significantly impact their academic performance, career development, and overall personal growth. Students may lack direction regarding career paths and job market expectations, leading to uncertainty about their professional future. Without mentors, students often miss out on valuable networking opportunities that could lead to internships, job placements, and professional connections.</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="about-section-three pt-5">
		<div class="auto-container">
			<div class="row">
				<div class="content-column col-lg-6 col-md-12 order-2 wow fadeInRight animated" data-wow-delay="600ms" style="visibility: visible; animation-delay: 600ms; animation-name: fadeInRight;">
					<div class="inner-column">
						<div class="anim-icons">
							<span class="icon icon-dots-5 bounce-x"></span>
							<span class="icon icon-dots-3 bounce-y"></span>
							<span class="icon icon-star-2 spin-one"></span>
						</div>

						<div class="sec-title">
							<h2>Our Tech Talk show</h2>
							<div class="text">We are Innovative technology training providers specialize in teaching cutting-edge skills and knowledge related to emerging technologies. We offer training programs, certifications, and courses that focus on below Popular Technologies</div>
						</div>

						<ul class="list-style-two">
							<li>
								<i class="icon fa fa-book"></i> 
								<div>
									<span>Artificial Intelligence (AI) and Machine Learning (ML) and Data Science:</span>
									<p>Ethical hacking, penetration testing, network security, threat hunting, and risk management. Black Duck, Veracode, Checkmarx and others tools</p>
								</div> 
							
							</li>
							<li>
								<i class="icon fa fa-book"></i> 
								<div>
									<span>Cyber Security:</span>
									<p>Ethical hacking, penetration testing, network security, threat hunting, and risk management. Black Duck, Veracode, Checkmarx and others tools</p>
								</div> 
							</li>
							<li>
								<i class="icon fa fa-book"></i> 
								<div>
									<span>IoT and Embedded System:</span>
									<p>Sensors, connectivity, data processing, and IoT protocol like MQTT, Microcontroler, Arduino,RaspberryPI,ST32.</p>
								</div> 
							</li>
							<li><i class="icon fa fa-book"></i>
								<div>

									<div>
										<span>IoT and Embedded System:</span>
										<p>Training in virtual and augmented reality development, using tools like Unity or Unreal Engine.</p>
									</div>
								</div>
							</li>

						</ul>

						
					</div>
				</div>

				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12">
					<div class="inner-column wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
						<div class="anim-icons">
							<span class="icon icon-percent bounce-y"></span>
							<span class="icon icon-star-1 spin-one"></span>
							<span class="icon icon-dots-4 bounce-x"></span>
							<span class="icon icon-wave"></span>
							<span class="icon icon-idea bounce-y"></span>
						</div>
						<figure class="image overlay-anim wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"><img src="{{asset('frontend/images/resource/about-4.png')}}" alt=""></figure>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="about-section-four">
		<div class="auto-container">
			<div class="row">
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12">
					<div class="inner-column">
						<div class="sec-title">
							<h2>Enhancing Student Learning through Tech Talk</h2>
						</div>

						<ul class="list-style-one two-column">
							<li><i class="icon fa fa-check"></i> Get Recorded Session</li>
							<li><i class="icon fa fa-check"></i>Cross Talk with Other students</li>
							<li><i class="icon fa fa-check"></i>  Idea Generation</li>
							<li><i class="icon fa fa-check"></i> Get Webinar Content</li>
							<li><i class="icon fa fa-check"></i> Online Quiz</li>

						</ul>
					</div>
				</div>

				<!-- Content Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image-box">
							<figure class="image"><img src="{{asset('frontend/images/resource/about-5.jpg')}}" alt=""></figure>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Team Section -->
	<section class="team-section">
		<div class="auto-container">
			<div class="sec-title text-center">
				<span class="sub-title">qualified teachers</span>
				<h2>Meet the teacher who <br>teaches you online</h2>
			</div>

			<div class="row">
				<!-- Team block -->
				<div class="team-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="page-team-details.html"><img src="{{asset('frontend/images/resource/team-1.jpg')}}" alt=""></a></figure>
							<span class="share-icon fa fa-share-alt"></span>
							<div class="social-links">
								<a href="#"><i class="fab fa-twitter"></i></a>
								<a href="#"><i class="fab fa-facebook-f"></i></a>
								<a href="#"><i class="fab fa-pinterest-p"></i></a>
								<a href="#"><i class="fab fa-instagram"></i></a>
							</div>
						</div>
						<div class="info-box">
							<h4 class="name"><a href="page-team-details.html">Edward norton</a></h4>
							<span class="designation">Musian</span>
						</div>
					</div>
				</div>

				<!-- Team block -->
				<div class="team-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="page-team-details.html"><img src="{{asset('frontend/images/resource/team-2.jpg')}}" alt=""></a></figure>
							<span class="share-icon fa fa-share-alt"></span>
							<div class="social-links">
								<a href="#"><i class="fab fa-twitter"></i></a>
								<a href="#"><i class="fab fa-facebook-f"></i></a>
								<a href="#"><i class="fab fa-pinterest-p"></i></a>
								<a href="#"><i class="fab fa-instagram"></i></a>
							</div>
						</div>
						<div class="info-box">
							<h4 class="name"><a href="page-team-details.html">Jane seymour</a></h4>
							<span class="designation">Designer</span>
						</div>
					</div>
				</div>

				<!-- Team block -->
				<div class="team-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="page-team-details.html"><img src="{{asset('frontend/images/resource/team-3.jpg')}}" alt=""></a></figure>
							<span class="share-icon fa fa-share-alt"></span>
							<div class="social-links">
								<a href="#"><i class="fab fa-twitter"></i></a>
								<a href="#"><i class="fab fa-facebook-f"></i></a>
								<a href="#"><i class="fab fa-pinterest-p"></i></a>
								<a href="#"><i class="fab fa-instagram"></i></a>
							</div>
						</div>
						<div class="info-box">
							<h4 class="name"><a href="page-team-details.html">Mike hardson</a></h4>
							<span class="designation">Developer</span>
						</div>
					</div>
				</div>

				<!-- Team block -->
				<div class="team-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="page-team-details.html"><img src="{{asset('frontend/images/resource/team-4.jpg')}}" alt=""></a></figure>
							<span class="share-icon fa fa-share-alt"></span>
							<div class="social-links">
								<a href="#"><i class="fab fa-twitter"></i></a>
								<a href="#"><i class="fab fa-facebook-f"></i></a>
								<a href="#"><i class="fab fa-pinterest-p"></i></a>
								<a href="#"><i class="fab fa-instagram"></i></a>
							</div>
						</div>
						<div class="info-box">
							<h4 class="name"><a href="page-team-details.html">Christine eve</a></h4>
							<span class="designation">Artisit</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Team Section -->

	<!-- Call To Action Two -->
	<section class="call-to-action" style="background-image: url({{asset('frontend/images/background/1.jpg')}})">
		<div class="anim-icons">
			<span class="icon icon-calculator zoom-one"></span>
			<span class="icon icon-pin-clip zoom-one"></span>
			<span class="icon icon-dots"></span>
		</div>

		<div class="auto-container">
			<div class="row">
				<div class="title-column col-lg-8 col-md-12">
					<div class="inner-column">
						<div class="sec-title light">
							<span class="style-font">Get your quality</span>
							<h1>Skills certificate <br>from the STLabs</h1>
							<a href="page-course-details.html" class="theme-btn btn-style-one"><span class="btn-title">Get started now</span></a>
						</div>
					</div>
				</div>

				<div class="image-column col-lg-4 col-md-12">
					<figure class="image"><img src="{{asset('frontend/images/resource/cta.png')}}" alt=""></figure>
				</div>
			</div>
		</div>
	</section>
	<!--End Call To Action Two -->

	<!-- Testimonial Section Three -->
	<section class="testimonial-section">
		<div class="anim-icons">
			<span class="icon icon-dotted-map-2"></span>
		</div>
		<div class="auto-container">
			<div class="row">
				<!-- Title Column -->
				<div class="title-column col-xl-4 col-lg-5 col-md-12">
					<div class="inner-column">
						<div class="sec-title">
							<span class="sub-title">Our testimonials</span>
							<h2>What they’re <br>saying about our <br>courses</h2>
							<div class="text">Quisque commodo, magna nec accu man euismod tellus mi ornare enim.</div>
						</div>
					</div>
				</div>

				<!-- Testimonial Column -->
				<div class="testimonial-column col-xl-8 col-lg-7 col-md-12">
					<div class="carousel-outer">
						<div class="testimonial-carousel owl-carousel owl-theme">
							<!-- Testimonial Block -->
							<div class="testimonial-block">
								<div class="inner-box">
									<div class="content-box">
										<figure class="thumb"><img src="{{asset('frontend/images/resource/testi-thumb-1.jpg')}}" alt=""></figure>
										<div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
										<div class="text">Lorem ipsum is simply free text dolor sit amet, consectetur adipisicing elit, sed do incididunt ut labore et dolore magna aliqua.</div>
										<div class="info-box">
											<span class="icon-quote"></span>
											<h4 class="name">Jame sickres</h4>
											<span class="designation">Market Manager</span>
										</div>
									</div>
								</div>
							</div>

							<!-- Testimonial Block -->
							<div class="testimonial-block">
								<div class="inner-box">
									<div class="content-box">
										<figure class="thumb"><img src="{{asset('frontend/images/resource/testi-thumb-2.jpg')}}" alt=""></figure>
										<div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
										<div class="text">Lorem ipsum is simply free text dolor sit amet, consectetur adipisicing elit, sed do incididunt ut labore et dolore magna aliqua.</div>
										<div class="info-box">
											<span class="icon-quote"></span>
											<h4 class="name">Aleesha brown</h4>
											<span class="designation">Market Manager</span>
										</div>
									</div>
								</div>
							</div>

							<!-- Testimonial Block -->
							<div class="testimonial-block">
								<div class="inner-box">
									<div class="content-box">
										<figure class="thumb"><img src="{{asset('frontend/images/resource/testi-thumb-1.jpg')}}" alt=""></figure>
										<div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
										<div class="text">Lorem ipsum is simply free text dolor sit amet, consectetur adipisicing elit, sed do incididunt ut labore et dolore magna aliqua.</div>
										<div class="info-box">
											<span class="icon-quote"></span>
											<h4 class="name">Jame sickres</h4>
											<span class="designation">Market Manager</span>
										</div>
									</div>
								</div>
							</div>

							<!-- Testimonial Block -->
							<div class="testimonial-block">
								<div class="inner-box">
									<div class="content-box">
										<figure class="thumb"><img src="{{asset('frontend/images/resource/testi-thumb-2.jpg')}}" alt=""></figure>
										<div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
										<div class="text">Lorem ipsum is simply free text dolor sit amet, consectetur adipisicing elit, sed do incididunt ut labore et dolore magna aliqua.</div>
										<div class="info-box">
											<span class="icon-quote"></span>
											<h4 class="name">Aleesha brown</h4>
											<span class="designation">Market Manager</span>
										</div>
									</div>
								</div>
							</div>

							<!-- Testimonial Block -->
							<div class="testimonial-block">
								<div class="inner-box">
									<div class="content-box">
										<figure class="thumb"><img src="{{asset('frontend/images/resource/testi-thumb-1.jpg')}}" alt=""></figure>
										<div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
										<div class="text">Lorem ipsum is simply free text dolor sit amet, consectetur adipisicing elit, sed do incididunt ut labore et dolore magna aliqua.</div>
										<div class="info-box">
											<span class="icon-quote"></span>
											<h4 class="name">Jame sickres</h4>
											<span class="designation">Market Manager</span>
										</div>
									</div>
								</div>
							</div>

							<!-- Testimonial Block -->
							<div class="testimonial-block">
								<div class="inner-box">
									<div class="content-box">
										<figure class="thumb"><img src="{{asset('frontend/images/resource/testi-thumb-2.jpg')}}" alt=""></figure>
										<div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
										<div class="text">Lorem ipsum is simply free text dolor sit amet, consectetur adipisicing elit, sed do incididunt ut labore et dolore magna aliqua.</div>
										<div class="info-box">
											<span class="icon-quote"></span>
											<h4 class="name">Aleesha brown</h4>
											<span class="designation">Market Manager</span>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Testimonial Section Three -->

	<!-- About Section Two-->
	<section class="about-section-two">
		<div class="anim-icons">
			<span class="icon icon-e wow zoomIn"></span>
			<span class="icon icon-dots-2 bounce-x"></span>
		</div>
		<div class="auto-container">
			<div class="row">
				<div class="content-column col-lg-6 col-md-12 order-2 wow fadeInRight" data-wow-delay="600ms">
					<div class="inner-column">
						<div class="sec-title">
							<h2>Over 36 years in distant learning for skills</h2>
							<div class="text">Lorem ipsum dolor sit amet consectur adipiscing elit sed eiusmod tempor incididunt labore dolore magna aliquaenim ad minim. Sed risus augue, commodo ornare felis non, eleifend molestie metus pharetra eleifend.</div>
						</div>

						<div class="row">
							<div class="about-block col-lg-6 col-md-6 col-sm-6 wow fadeInUp">
								<div class="inner-box">
									<span class="info-text">Best off canvas program</span>
									<div class="info-box">
										<div class="thumb"><img src="{{asset('frontend/images/resource/avatar-1.jpg')}}" alt=""></div>
										<h5 class="name">John Doe</h5>
										<span class="designation">Student</span>
									</div>
								</div>
							</div>

							<div class="about-block style-two col-lg-6 col-md-6 col-sm-6 wow fadeInRight">
								<div class="inner-box">
									<span class="info-text">Best degree program</span>
									<div class="info-box">
										<div class="thumb"><img src="{{asset('frontend/images/resource/avatar-2.jpg')}}" alt=""></div>
										<h5 class="name">Albart Brown</h5>
										<span class="designation">TEACHER</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12">
					<div class="inner-column wow fadeInLeft">
						<div class="icons-box">
							<span class="icon icon-dotted-map"></span>
							<span class="icon icon-dotted-line"></span>
							<span class="icon icon-papper-plan"></span>
						</div>
						<figure class="image overlay-anim wow fadeInUp"><img src="{{asset('frontend/images/resource/about-3.jpg')}}" alt="">
						</figure>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Emd About Section Two-->

	<!-- Countdown Section -->
	<section class="countdown-section">
		<div class="bg-image zoom-two" style="background-image: url({{asset('frontend/images/background/2.jpg')}})"></div>
		<div class="auto-container">
			<div class="content-box">
				<div class="sec-title light text-center">
					<span class="sub-title">Book your seat now</span>
					<h2>Upcoming study trip</h2>
				</div>
				<div class="time-counter wow fadeInUp">
					<div class="time-countdown" data-countdown="2/2/2026"></div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Deal Section -->

	<!-- News Section -->
	<section class="news-section">

		<div class="auto-container">
			<div class="sec-title text-center">
				<span class="sub-title">directly from blog</span>
				<h2>Our latest news &<br> upcoming blog posts</h2>
			</div>

			<div class="row">
				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="news-details.html"><img src="{{asset('frontend/images/resource/news-1.jpg')}}" alt=""></a></figure>
							<span class="date"><b>20</b> SEP</span>
						</div>
						<div class="content-box">
							<div class="content">
								<ul class="post-info">
									<li><i class="fa fa-user"></i> by Admin</li>
									<li><i class="fa fa-comments"></i> 2 Comments</li>
								</ul>
								<h4 class="title"><a href="news-details.html">The quality role of the elementary teacher in education</a></h4>
								<a href="news-details.html" class="read-more">Read More <i class="fa fa-long-arrow-alt-right"></i></a>
							</div>
						</div>
					</div>
				</div>

				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="news-details.html"><img src="{{asset('frontend/images/resource/news-2.jpg')}}" alt=""></a></figure>
							<span class="date"><b>20</b> SEP</span>
						</div>
						<div class="content-box">
							<div class="content">
								<ul class="post-info">
									<li><i class="fa fa-user"></i> by Admin</li>
									<li><i class="fa fa-comments"></i> 2 Comments</li>
								</ul>
								<h4 class="title"><a href="news-details.html">The quality role of the elementary teacher in education</a></h4>
								<a href="news-details.html" class="read-more">Read More <i class="fa fa-long-arrow-alt-right"></i></a>
							</div>
						</div>
					</div>
				</div>

				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="news-details.html"><img src="{{asset('frontend/images/resource/news-3.jpg')}}" alt=""></a></figure>
							<span class="date"><b>20</b> SEP</span>
						</div>
						<div class="content-box">
							<div class="content">
								<ul class="post-info">
									<li><i class="fa fa-user"></i> by Admin</li>
									<li><i class="fa fa-comments"></i> 2 Comments</li>
								</ul>
								<h4 class="title"><a href="news-details.html">The quality role of the elementary teacher in education</a></h4>
								<a href="news-details.html" class="read-more">Read More <i class="fa fa-long-arrow-alt-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End News Section -->

	<!-- Clients Section   -->
	<section class="clients-section">
		<div class="auto-container">
			<!-- Sponsors Outer -->
			<div class="sponsors-outer">
				<!--clients carousel-->
				<ul class="clients-carousel owl-carousel owl-theme">
					<li class="slide-item"> <a href="#"><img src="{{asset('frontend/images/resource/client.png')}}" alt=""></a> </li>
					<li class="slide-item"> <a href="#"><img src="{{asset('frontend/images/resource/client.png')}}" alt=""></a> </li>
					<li class="slide-item"> <a href="#"><img src="{{asset('frontend/images/resource/client.png')}}" alt=""></a> </li>
					<li class="slide-item"> <a href="#"><img src="{{asset('frontend/images/resource/client.png')}}" alt=""></a> </li>
					<li class="slide-item"> <a href="#"><img src="{{asset('frontend/images/resource/client.png')}}" alt=""></a> </li>
				</ul>
			</div>
		</div>
	</section>
	<!--End Clients Section -->

	 @endsection