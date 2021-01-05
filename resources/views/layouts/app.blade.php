<!DOCTYPE html>
<html lang="en">

<head>
	<style>
	#map {
		height: 100%;
		width: 70%;
		left: 11em;
	}
	
	html,
	body {
		height: 100%;
		margin: 0;
		padding: 0;
	}
	
	*
	/* Font */
	
	h1 {
		font-size: 24px;
		font-weight: 400;
		text-align: center;
	}
	
	.imag {
		height: 250px;
		vertical-align: middle;
	}
	
	.btnn {
		color: black;
		padding: 0.8rem;
		font-size: 14px;
		text-transform: uppercase;
		border-radius: 4px;
		font-weight: 400;
		width: 100%;
		cursor: pointer;
		border: 1px solid rgba(255, 255, 255, 0.2);
		background: #FFC39E;
	}
	
	.btnn:hover {
		background-color: orchid;
	}
	
	.cards {
		display: flex;
		flex-wrap: wrap;
		list-style: none;
		margin: 0;
		padding: 0;
	}
	
	.cards_item {
		display: flex;
		padding: 1rem;
	}
	
	.card {
		background-color: white;
		border-radius: 0.25rem;
		box-shadow: 0 20px 40px -14px rgba(0, 0, 0, 0.25);
		display: flex;
		flex-direction: column;
		overflow: hidden;
	}
	
	.card_content {
		padding: 2rem;
		background: linear-gradient(to bottom left, #FFFFFF 40%, #FFC39E 100%);
	}
	
	.card_title {
		color: black;
		font-size: 1.1rem;
		font-weight: 700;
		letter-spacing: 1px;
		text-transform: capitalize;
		margin: 0px;
	}
	
	.card_text {
		color: black;
		font-size: 0.875rem;
		line-height: 1.5;
		margin-bottom: 1.25rem;
		font-weight: 400;
	}
	
	@media (min-width: 56rem) {
		.cards_item {
			width: 95.3333%;
		}
	}
	
	.gambar {
		background-image: url(https://i.pinimg.com/originals/ce/cc/3e/cecc3e625a2f50c96ebae9da470b953c.png);
		background-repeat: no-repeat;
		background-size: cover;
	}
	
	.full {
		width: 100%;
	}
	
	.gap {
		height: 30px;
		width: 100%;
		clear: both;
		display: block;
	}
	
	.footer-bottom p.pull-left {
		padding-top: 6px;
	}
	
	.payments {
		font-size: 3em;
		position: absolute;
		right: 7%;
	}
	</style>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>ダッシュボード</title>
	<link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
	<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" href="{{ asset('assets/img/icon.ico')}}" type="image/x-icon" />
	<!-- Fonts and icons -->
	<script src="{{ asset('assets/js/plugin/webfont/webfont.min.js')}}"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['/assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/atlantis.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/demo.css')}}"> </head>

<body class="sb-nav-fixed">
	<nav class="sb-topnav navbar navbar-expand-lg navbar-light " style="background-color:#ffff;"> <img class="navbar-brand" src="{{asset('image/13377.png')}}" style="left: -1em; position:relative;" width="200px" height="105px;" alt="">
		<ul class="navbar-nav ml-auto ml-md-0"> <a class="nav-link"> | 
                </a> </li>
		</ul>
		<button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"> <i class="fab fa-instagram"></i> </button>
		<ul class="navbar-nav ml-auto ml-md-0"> <a href="https://www.instagram.com/vha_1337/" class="nav-link"> Instagram
                </a> </li>
		</ul>
		<ul class="navbar-nav ml-auto ml-md-0"> <a class="nav-link"> | 
                </a> </li>
		</ul>
		<button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"> <i class="flaticon-facebook"></i> </button>
		<ul class="navbar-nav ml-auto ml-md-0"> <a href="https://www.facebook.com/anonymouscybersurakarta/" class="nav-link"> Facebook
                </a> </li>
		</ul>
		<ul class="navbar-nav ml-auto ml-md-0"> <a class="nav-link"> | 
                </a> </li>
		</ul>
		<button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"> <i class="fab fa-twitter"></i> </button>
		<ul class="navbar-nav ml-auto ml-md-0"> <a href="https://www.twitter.com/vha_1337/" class="nav-link"> Twitter
                </a> </li>
		</ul>
		<ul class="navbar-nav ml-auto ml-md-0"> <a class="nav-link"> | 
                </a> </li>
		</ul>
		<!-- Navbar Search-->
		<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
			<div class="input-group"></div>
		</form>
		<ul class="navbar-nav ml-auto ml-md-0"> <a class="nav-link" href="/home/cart">Keranjang
                                
			<i class="fas fa-shopping-cart"></i>
			<!-- Counter - Alerts -->
                                @if(Cart::session(auth()->id())->getContent()->count() == 0)
                                @elseif(Cart::session(auth()->id())->getContent()->count() > 0)
                                
			<span style="width: 10px; height:20px;top:-1em;left:-1em;position:relative;border-radius:90px" class="badge badge-danger badge-counter">{{Cart::session(auth()->id())->getContent()->count()}}</span>

                                @endif
                            
		</a>
			<!-- Navbar-->
			<ul class="navbar-nav ml-auto ml-md-0">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-user fa-fw"></i> </a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown"> <a class="dropdown-item" href="#">Settings</a> <a class="dropdown-item" href="#">Activity Log</a>
						<div class="dropdown-divider"></div> <a class="dropdown-item" href="/logout">Logout</a> </div>
				</li>
			</ul>
	</nav>
	<div id="layoutSidenav">
		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2"> <img src="
							@if(auth()->user()->status == 'admin'|| auth()->user()->status == 'user')
					                   	{{auth()->user()->menu->fotolain()}}
					                     	@else
					                  	/image/black.jpeg
					                    	@endif
							
							" alt="..." class="avatar-img rounded-circle"> </div>
						<div class="info">
							<a data-toggle="collapse" href="/home" aria-expanded="true"> <span>
								{{auth()->user()->name}}
								@if(auth()->user()->status == 'admin')                                   
								
										<span class="user-level">Administrator</span> @elseif(auth()->user()->status == 'user') <span class="user-level">User</span> @endif </span>
							</a>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item active">
							<a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false"> <i class="fas fa-home"></i>
								<p>&nbsp; Dashboard</p> <span class="caret"></span> </a>
							<div class="collapse" id="dashboard">
								<ul class="nav nav-collapse">
									<li>
										<a href="/home"> <span class="sub-item">Home</span> </a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-section"> <span class="sidebar-mini-icon">
									<i class="fa fa-ellipsis-h"></i>
								</span>
							<h4 class="text-section">Components</h4> </li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#aw"> <i class="fas fa-user-circle"></i>
								<p>&nbsp; Profile</p> <span class="caret"></span> </a>
							<div class="collapse" id="aw">
								<ul class="nav nav-collapse">
									<li>
										<a href="/home/{{auth()->user()->id}}/edit/profile"> <span class="sub-item">Edite Profile</span> </a>
									</li>
									<li>
										<a href="/home/{{auth()->user()->id}}/profile"> <span class="sub-item">View Profile</span> </a>
									</li>
								</ul>
							</div>
						</li> @if(auth()->user()->status == 'user')
						<li class="nav-item">
							<a data-toggle="collapse" href="#sidebarLayouts"><i class="fas fa-shopping-cart"></i>
								<p>&nbsp; Cart</p><span class="caret"></span></a>
							<div class="collapse" id="sidebarLayouts">
								<ul class="nav nav-collapse">
									<li>
										<a href="/home/cart"> <span class="sub-item">View Cart</span></a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#payment"><i class="fa fa-plane"></i>
								<p>&nbsp; Payments</p><span class="caret"></span></a>
							<div class="collapse" id="payment">
								<ul class="nav nav-collapse">
									<li>
										<a href="/home/food/cart/payment"> <span class="sub-item">View Payments</span></a>
									</li>
								</ul>
							</div>
						</li> @endif @if(auth()->user()->status == 'admin')
						<li class="nav-item">
							<a data-toggle="collapse" href="#food"><i class="fas fa-pizza-slice"></i>
								<p>&nbsp; Food</p> <span class="caret"></span> </a>
							<div class="collapse" id="food">
								<ul class="nav nav-collapse">
									<li>
										<a href="/home/food/"><span class="sub-item">Input Food</span> </a>
									</li>
								</ul>
							</div>
						</li>
						 @endif

						<li class="nav-item">
							<a data-toggle="collapse" href="#base"><i class="fas fa-layer-group"></i>
								<p>&nbsp; Tracking Order</p><span class="caret"></span></a>
							<div class="collapse" id="base">
								<ul class="nav nav-collapse">
									<li>
										<a href="/home/order/history"> <span class="sub-item">View Orders</span></a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#asw"><i class="fas fa-chart-area"></i>
								<p>&nbsp; Regiter User</p><span class="caret"></span></a>
							<div class="collapse" id="asw">
								<ul class="nav nav-collapse">
									<li>
										<a href="/register"> <span class="sub-item">Register for user</span></a>
									</li>
								</ul>
							</div>
						</li>
						<li class="mx-4 mt-2">
							<a href="/logout" class="btn btn-primary btn-block"> <span class="btn-label mr-2">
										<i class="fa fa-sign-out-alt"></i>
									</span>Logout </a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div id="layoutSidenav_content">
			<div class="container-fluid">
				<h1 class="mt-6"></h1>
				<!--
                        <div class="row"><div class="col-xl-6"><div class="card mb-4"><div class="card-header"><i class="fas fa-chart-area mr-1"></i>
                                        Area Chart Example
                                    </div><div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div></div></div><div class="col-xl-6"><div class="card mb-4"><div class="card-header"><i class="fas fa-chart-bar mr-1"></i>
                                        Bar Chart Example
                                    </div><div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div></div></div></div>
                      -->
				<!-- Button trigger modal -->
				<!-- Modal -->
				<script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQ4Q-_nLQuIVEMk-fD_g4NQX6PB406i4U&callback=initMap"></script>
				<div class="footer-bottom"> @yield('content')
					<div class="container-fluid">
						<ul class="nav nav-pills payments">
							<li> <i class="fab fa-cc-visa"></i> </li>
							<li> <i class="fab fa-cc-mastercard"></i> </li>
							<li> <i class="fab fa-cc-amex"></i> </li>
							<li> <i class="fab fa-cc-paypal"></i> </li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		@yield('footer')
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
		<script src="{{ asset('js/script.js') }}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
		<script src="{{ asset('js/edit.js') }}"></script>
		<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
		<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
		<script src="{{ asset('assets/js/plugin/chart.js/chart.min.js') }}"></script>
		<!--   Core JS Files   -->
		<script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
		<script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
		<!-- jQuery UI -->
		<script src="{{ asset('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
		<script src="{{ asset('assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>
		<!-- jQuery Scrollbar -->
		<script src="{{ asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
		<!-- Atlantis DEMO methods, don't include it in your project! -->
		<script src="{{ asset('assets/js/setting-demo2.js') }}"></script>
		<!-- jQuery Sparkline -->
		<!-- Chart Circle -->
		<script src="{{ asset('assets/js/plugin/chart-circle/circles.min.js') }}"></script>
		<!-- Bootstrap Notify -->
		<script src="{{ asset('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
		<!-- jQuery Vector Maps -->
		<script src="{{ asset('assets/js/plugin/jqvmap/jquery.vmap.min.js') }}"></script>
		<script src="{{ asset('assets/js/plugin/jqvmap/maps/jquery.vmap.world.js') }}"></script>
		<!-- Sweet Alert -->
		<!-- Atlantis JS -->
		<script src="{{ asset('assets/js/atlantis.min.js') }}"></script>
		<!-- Atlantis DEMO methods, don't include it in your project! -->
		<script src="{{ asset('assets/js/setting-demo.js') }}"></script>
		<script src="{{ asset('js/public/js/datatables-demo.js') }}"></script>
		<script>
		var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');
		var mytotalIncomeChart = new Chart(totalIncomeChart, {
			type: 'bar',
			data: {
				labels: ["Jan", "Feb", "Mar", "Apr", "Mey", "Jun", "Jul", "Ags", "Sep", "Oct", "Nov", "Dec"],
				datasets: [{
					label: "Total Income",
					backgroundColor: '#ff9e27',
					borderColor: 'rgb(23, 125, 255)',
					data: [10000000, 7000000, 8000000, 5000000, 9000000, 10000000, 3000000, 5000000, 6000000, 8000000, 5000000, 4000000, 7000000, 9000000, 10000000],
				}],
			},
			options: {
				responsive: true,
				maintainAspectRatio: false,
				legend: {
					display: false,
				},
				scales: {
					yAxes: [{
						ticks: {
							display: false //this will remove only the label
						},
						gridLines: {
							drawBorder: false,
							display: false
						}
					}],
					xAxes: [{
						gridLines: {
							drawBorder: false,
							display: false
						}
					}]
				},
			}
		});

		
		</script></body>

</html>