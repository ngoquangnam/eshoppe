<div id="page-wrapper" class="gray-bg dashbard-1">
	<div class="content-main">

		<!--banner-->	
		<div class="banner">

			<h2>
				<a href={{route('index')}}>Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Dashboard</span>
			</h2>
		</div>
		<!--//banner-->
		<!--content-->
		<div class="content-top">


			<div class="validation-form">
				<!---->
				<div class="panel-body">
					
				</div>
				<div class="clearfix"> </div>
			</div>
			<!---->


			<div class="content-mid">

				<div class="col-md-5">
					<div class="cal1 cal_2"><div class="clndr"><div class="clndr-controls"><div class="clndr-control-button"><p class="clndr-previous-button">previous</p></div><div class="month">July 2015</div><div class="clndr-control-button rightalign"><p class="clndr-next-button">next</p></div></div><table class="clndr-table" border="0" cellspacing="0" cellpadding="0"><thead><tr class="header-days"><td class="header-day">S</td><td class="header-day">M</td><td class="header-day">T</td><td class="header-day">W</td><td class="header-day">T</td><td class="header-day">F</td><td class="header-day">S</td></tr></thead><tbody><tr><td class="day adjacent-month last-month calendar-day-2015-06-28"><div class="day-contents">28</div></td><td class="day adjacent-month last-month calendar-day-2015-06-29"><div class="day-contents">29</div></td><td class="day adjacent-month last-month calendar-day-2015-06-30"><div class="day-contents">30</div></td><td class="day calendar-day-2015-07-01"><div class="day-contents">1</div></td><td class="day calendar-day-2015-07-02"><div class="day-contents">2</div></td><td class="day calendar-day-2015-07-03"><div class="day-contents">3</div></td><td class="day calendar-day-2015-07-04"><div class="day-contents">4</div></td></tr><tr><td class="day calendar-day-2015-07-05"><div class="day-contents">5</div></td><td class="day calendar-day-2015-07-06"><div class="day-contents">6</div></td><td class="day calendar-day-2015-07-07"><div class="day-contents">7</div></td><td class="day calendar-day-2015-07-08"><div class="day-contents">8</div></td><td class="day calendar-day-2015-07-09"><div class="day-contents">9</div></td><td class="day calendar-day-2015-07-10"><div class="day-contents">10</div></td><td class="day calendar-day-2015-07-11"><div class="day-contents">11</div></td></tr><tr><td class="day calendar-day-2015-07-12"><div class="day-contents">12</div></td><td class="day calendar-day-2015-07-13"><div class="day-contents">13</div></td><td class="day calendar-day-2015-07-14"><div class="day-contents">14</div></td><td class="day calendar-day-2015-07-15"><div class="day-contents">15</div></td><td class="day calendar-day-2015-07-16"><div class="day-contents">16</div></td><td class="day calendar-day-2015-07-17"><div class="day-contents">17</div></td><td class="day calendar-day-2015-07-18"><div class="day-contents">18</div></td></tr><tr><td class="day calendar-day-2015-07-19"><div class="day-contents">19</div></td><td class="day calendar-day-2015-07-20"><div class="day-contents">20</div></td><td class="day calendar-day-2015-07-21"><div class="day-contents">21</div></td><td class="day calendar-day-2015-07-22"><div class="day-contents">22</div></td><td class="day calendar-day-2015-07-23"><div class="day-contents">23</div></td><td class="day calendar-day-2015-07-24"><div class="day-contents">24</div></td><td class="day calendar-day-2015-07-25"><div class="day-contents">25</div></td></tr><tr><td class="day calendar-day-2015-07-26"><div class="day-contents">26</div></td><td class="day calendar-day-2015-07-27"><div class="day-contents">27</div></td><td class="day calendar-day-2015-07-28"><div class="day-contents">28</div></td><td class="day calendar-day-2015-07-29"><div class="day-contents">29</div></td><td class="day calendar-day-2015-07-30"><div class="day-contents">30</div></td><td class="day calendar-day-2015-07-31"><div class="day-contents">31</div></td><td class="day adjacent-month next-month calendar-day-2015-08-01"><div class="day-contents">1</div></td></tr></tbody></table></div></div>
					<!----Calender -------->
					<link rel="stylesheet" href="{{ asset('public/css/admin/clndr.css') }}" type="text/css" />
					<script src="{{ asset('public/js/admin/underscore-min.js') }}" type="text/javascript"></script>
					<script src= "{{ asset('public/js/admin/moment-2.2.1.js') }}" type="text/javascript"></script>
					<script src="{{ asset('public/js/admin/clndr.js') }}" type="text/javascript"></script>
					<script src="{{ asset('public/js/admin/site.js') }}" type="text/javascript"></script>
					<!----End Calender -------->
				</div>
				<div class="col-md-7 mid-content-top">
					<div class="middle-content">
						<h3>Latest Images</h3>
						<!-- start content_slider -->
						<div id="owl-demo" class="owl-carousel text-center">
							<div class="item">
								<img class="lazyOwl img-responsive" data-src="{{ asset('public/images/admin/na.jpg') }}" alt="name">
							</div>
							<div class="item">
								<img class="lazyOwl img-responsive" data-src="{{ asset('public/images/admin/na1.jpg') }}" alt="name">
							</div>
							<div class="item">
								<img class="lazyOwl img-responsive" data-src="{{ asset('public/images/admin/na2.jpg') }}" alt="name">
							</div>
							<div class="item">
								<img class="lazyOwl img-responsive" data-src="{{ asset('public/images/admin/na.jpg') }}" alt="name">
							</div>
							<div class="item">
								<img class="lazyOwl img-responsive" data-src="{{ asset('public/images/admin/na1.jpg') }}" alt="name">
							</div>
							<div class="item">
								<img class="lazyOwl img-responsive" data-src="{{ asset('public/images/admin/na2.jpg') }}" alt="name">
							</div>
							<div class="item">
								<img class="lazyOwl img-responsive" data-src="{{ asset('public/images/admin/na.jpg') }}" alt="name">
							</div>

						</div>
					</div>
					<!--//sreen-gallery-cursual---->
					<!-- requried-jsfiles-for owl -->
					<link href="{{ asset('public/css/admin/owl.carousel.css') }}" rel="stylesheet">
					<script src="{{ asset('public/js/owl.carousel.js') }}"></script>
					<script>
						$(document).ready(function() {
							$("#owl-demo").owlCarousel({
								items : 3,
								lazyLoad : true,
								autoPlay : true,
								pagination : true,
								nav:true,
							});
						});
					</script>
					<!-- //requried-jsfiles-for owl -->
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>