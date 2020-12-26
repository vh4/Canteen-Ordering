<!DOCTYPE html>
<html lang="en">
    <head>
    <style> /* Font */ h1 { font-size: 24px; font-weight: 400; text-align: center; } .imag { height: 250px; vertical-align: middle; } .btnn { color: #ffffff; padding: 0.8rem; font-size: 14px; text-transform: uppercase; border-radius: 4px; font-weight: 400; display: block; width: 100%; cursor: pointer; border: 1px solid rgba(255, 255, 255, 0.2); background: transparent; } .btnn:hover { background-color: blue; } .cards { display: flex; flex-wrap: wrap; list-style: none; margin: 0; padding: 0; } .cards_item { display: flex; padding: 1rem; } .card { background-color: white; border-radius: 0.25rem; box-shadow: 0 20px 40px -14px rgba(0, 0, 0, 0.25); display: flex; flex-direction: column; overflow: hidden; } .card_content { padding: 2rem; background: linear-gradient(to bottom left, #EF8D9C 40%, #FFC39E 100%); } .card_title { color: #ffffff; font-size: 1.1rem; font-weight: 700; letter-spacing: 1px; text-transform: capitalize; margin: 0px; } .card_text { color: #ffffff; font-size: 0.875rem; line-height: 1.5; margin-bottom: 1.25rem; font-weight: 400; } @media (min-width: 56rem) { .cards_item { width: 95.3333%; } } .gambar{background-image:url(https://i.pinimg.com/originals/ab/77/63/ab7763729317fa28925c1145f5f408dc.png);background-repeat:no-repeat;background-size: cover;}.full { width: 100%; } .gap { height: 30px; width: 100%; clear: both; display: block; } .footer { bottom: 0; background-color: #FFFFFF ; height: auto; padding-bottom: 30px; position:static; width: 100%; border-bottom: 1px solid #CCCCCC; border-top: 1px solid #DDDDDD; } .footer p { margin: 0; } .footer img { max-width: 100%; } .footer h3 { border-bottom: 1px solid #BAC1C8; color: #54697E; font-size: 18px; font-weight: 600; line-height: 27px; padding: 40px 0 10px; text-transform: uppercase; } .footer ul { font-size: 13px; list-style-type: none; margin-left: 0; padding-left: 0; margin-top: 15px; color: #7F8C8D; } .footer ul li a { padding: 0 0 5px 0; display: block; } .footer a { color: #78828D } .supportLi h4 { font-size: 20px; font-weight: lighter; line-height: normal; margin-bottom: 0 !important; padding-bottom: 0; } .newsletter-box input#appendedInputButton { background: #FFFFFF; display: inline-block; float: left; height: 30px; clear: both; width: 100%; } .newsletter-box .btn { border: medium none; -webkit-border-radius: 3px; -moz-border-radius: 3px; -o-border-radius: 3px; -ms-border-radius: 3px; border-radius: 3px; display: inline-block; height: 40px; padding: 0; width: 100%; color: #fff; } .newsletter-box { overflow: hidden; } .bg-gray { background-image: -moz-linear-gradient(center bottom, #BBBBBB 0%, #F0F0F0 100%); box-shadow: 0 1px 0 #B4B3B3; } .social li { background: none repeat scroll 0 0 #B5B5B5; border: 2px solid #B5B5B5; -webkit-border-radius: 50%; -moz-border-radius: 50%; -o-border-radius: 50%; -ms-border-radius: 50%; border-radius: 50%; float: left; height: 36px; line-height: 36px; margin: 0 8px 0 0; padding: 0; text-align: center; width: 36px; transition: all 0.5s ease 0s; -moz-transition: all 0.5s ease 0s; -webkit-transition: all 0.5s ease 0s; -ms-transition: all 0.5s ease 0s; -o-transition: all 0.5s ease 0s; } .social li:hover { transform: scale(1.15) rotate(360deg); -webkit-transform: scale(1.1) rotate(360deg); -moz-transform: scale(1.1) rotate(360deg); -ms-transform: scale(1.1) rotate(360deg); -o-transform: scale(1.1) rotate(360deg); } .social li a { color: #EDEFF1; } .social li:hover { border: 2px solid #2c3e50; background: #2c3e50; } .social li a i { font-size: 16px; margin: 0 0 0 5px; color: #EDEFF1 !important; } .footer-bottom p.pull-left { padding-top: 6px; } .payments { font-size: 3em; position: absolute; right: 7%; } </style>
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
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand-lg navbar-light " style="background-color:#f1f1f1;"> 
        <img class="navbar-brand" src="{{asset('image/tony.png')}}" width="80px" height="100px;" alt="">
        <ul class="navbar-nav ml-auto ml-md-0">
            <a class="nav-link"> | 
                </a>
                </li>
            </ul>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-user"></i></button>
            <ul class="navbar-nav ml-auto ml-md-0">
            <a href="https://www.instagram.com/vha_1337/" class="nav-link"> About me
                </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto ml-md-0">
            <a class="nav-link"> | 
                </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto ml-md-0">
            <a href="https://web.whatsapp.com/" class="nav-link">
            <i class="fas fa-phone"></i>
                </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto ml-md-0">
            <a class="nav-link">(+62) 8985379396
                </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto ml-md-0">
            <a class="nav-link"> | 
                </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto ml-md-0">
            <a class="nav-link">
            <i class="fas fa-map"></i>
                </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto ml-md-0">
            <a class="nav-link">Dagen III Street Jaten, Karanganyar 
                </a>
                </li>
            </ul>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                </div>
            </form>
            <ul class="navbar-nav ml-auto ml-md-0">
                            <a class="nav-link dropdown-toggle" href="/home/cart">
                                <i class="fas fa-shopping-cart fa-fw"></i>
                                <!-- Counter - Alerts -->
                                @if(Cart::session(auth()->id())->getContent()->count() == 0)
                                @elseif(Cart::session(auth()->id())->getContent()->count() <= 3 && Cart::session(auth()->id())->getContent()->count() > 0)
                                <span style="width: 20px; height:15px;top:-1em;left:-1em;position:relative;" class="badge badge-danger badge-counter">{{Cart::session(auth()->id())->getContent()->count()}}</span>
                                @else
                                <span style="width: 20px; height:15px;top:-1em;left:-1em;position:relative;" class="badge badge-danger badge-counter">3+</span>

                                @endif
                            </a>
            </ul>
            <ul class="navbar-nav ml-auto ml-md-0">
            <a href="/home/notification" class="nav-link">Notification
                <i class="fas fa-bell"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto ml-md-0">
            <a href="" class="nav-link">Bantuan
                <i class="fas  fa-question-circle"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto ml-md-0">
            <a href="" class="nav-link">Menu
                </a>
                </li>
            </ul>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bars fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/logout">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark gambar" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav justify-content-center">
                          <div style="text-align: center; margin-top: 20px;">
                          <img src="
					                  	@if(auth()->user()->status == 'admin'|| auth()->user()->status == 'user')
					                   	{{auth()->user()->menu->fotolain()}}
					                     	@else
					                  	/image/black.jpeg
					                    	@endif
				                  		" width="120px" height="120px" class="rounded-circle mx-auto d-block">
                        </div>
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="/home">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>

                            @if(auth()->user()->status == 'admin')                                   
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            @endif
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Menu
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="/home/food">Input Food</a>

                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <a class="nav-link" href="/history">
                                <div class="sb-nav-link-icon"><i class="fas fa-clock"></i></div>
                                History
                            </a>
                            <a class="nav-link" href="/home/cart">
                                <div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                                Cart
                            </a>
                            <a class="nav-link" href="/payment">
                                <div class="sb-nav-link-icon"><i class="fas fa-truck"></i></div>
                                Payments
                            </a>
                            <a class="nav-link" href="/logout">
                                <div class="sb-nav-link-icon"><i class="fa  fa-sign-out-alt"></i></div>
                                Logout
                            </a>

                        </div>
                    </div>
                    <div class="sb-sidenav-footer"  style="background-color:#f1f1f1f1;color:black">
                      <div class="small">Logged in as:</div>
                      {{auth()->user()->name}}
                  </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4"> </h1>

                        <!--
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area mr-1"></i>
                                        Area Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar mr-1"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                      -->
                      <!-- Button trigger modal -->

                      <!-- Modal -->
                      @yield('content')


                
<footer >
    <div class="footer" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Category</h3>
                    <ul>
                        <li> <a href="/home?cari=Makanan"> Makanan </a> </li>
                        <li> <a href="/home?cari=Minuman"> Minuman </a> </li>
                        <li> <a href="/home?cari=Snack"> Snack Ringan </a> </li>
                        <li> <a href="/home?cari=Soda"> Soda Bir </a> </li>
                        <li> <a href="/home?cari=Lalapan"> Lalapan </a> </li>
                        <li> <a href="/home?cari=Sambal"> Sambal Food </a> </li>
                        <li> <a href="/home?cari=Buah"> Buah Buahan </a> </li>

                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Favorite </h3>
                    <ul>
                        <li> <a href="/home?cari=Ayam"> Ayam Bakar </a> </li>
                        <li> <a href="/home?cari=Mie"> Mie Goreng </a> </li>
                        <li> <a href="/home?cari=Omelette"> Omelette </a> </li>
                        <li> <a href="/home?cari=Thai"> Thai Tea </a> </li>
                        <li> <a href="/home?cari=Air"> Air Putih </a> </li>
                        <li> <a href="/home?cari=Soda"> Soda Gembira </a> </li>
                        <li> <a href="/home?cari=Nasi"> Nasi Goreng </a> </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Dashboard </h3>
                    <ul>
                        <li> <a href="#"> Menu </a> </li>
                        <li> <a href="#"> Cart </a> </li>
                        <li> <a href="#"> Payments </a> </li>
                        <li> <a href="#"> Order </a> </li>
                        <li> <a href="#"> Transaction </a> </li>
                        <li> <a href="#"> Tracking </a> </li>
                        <li> <a href="#"> Database </a> </li>

                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Links </h3>
                    <ul>
                        <li> <a href="#"> About Us </a> </li>
                        <li> <a href="#"> Contact Us </a> </li>
                        <li> <a href="#"> Contribute </a> </li>
                        <li> <a href="#"> Privacy </a> </li>
                        <li> <a href="#"> Policy </a> </li>
                        <li> <a href="#"> Sitemap </a> </li>
                        <li> <a href="#"> Donate Us </a> </li>
                    </ul>
                </div>
                <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                    <h3> Sosial Media </h3>
                    <ul>
                        <li>
                            <div class="input-append newsletter-box text-center">
                                <input type="text" class="full text-center" placeholder="Email ">
                                <button class="btn  bg-gray" type="button"> Kirim <i class="fas fas fa-arrow-right"> </i></button>
                            </div>
                        </li>
                    </ul>
                    <ul class="social">
                        <li> <a href="https://facebook.com/anonymouscybersurakarta"> <i class="fab fa-facebook"></i></a></li>
                        <li> <a href="https://twitter.com"> <i class="fab fa-twitter"></i></a></li>
                        <li> <a href="https://instagram.com/vha_1337"> <i class="fab fa-instagram"></i></a></li>
                        <li> <a href="https://pinterest.com"> <i class="fab fa-pinterest"></i></a></li>
                        <li> <a href="https://www.youtube.com/channel/UCWOe5lU7_E1p9x1jliz1xYQ"> <i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
            <!--/.row--> 
        </div>
        <!--/.container--> 
    </div>
    <!--/.footer-->

    <!--/.footer-bottom--> 
</footer>
<div class="footer-bottom" >
                    <div class="container-fluid">
                    <ul class="nav nav-pills payments">
                	<li><i class="fab fa-cc-visa"></i></li>
                    <li><i class="fab fa-cc-mastercard"></i></li>
                    <li><i class="fab fa-cc-amex"></i></li>
                    <li><i class="fab fa-cc-paypal"></i></li>
                </ul>                     
            </div>
        </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/script.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/chart-area-demo.js') }}"></script>
        <script src="{{ asset('js/chart-bar-demo.js') }}"></script>
        <script src="{{ asset('js/edit.js') }}"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/public/js/datatables-demo.js') }}"></script>
        @yield('footer')

    </body>
</html>
