
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Yinka Enoch Adedokun">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('css/login1.css') }}">

	<title>ログインへ</title>
</head>
<body>
	<!-- Main Content -->
	<div class="container-fluid terbang">
		<div class="row main-content bg-success text-center jatuh">
			<div class="col-md-6 text-center company__info turun">
				<span class="company__logo"><h2><img src="https://pbs.twimg.com/profile_images/989065701234225155/gv4BbneW_400x400.jpg" width="300px;" alt="tony"></span></h2></span>
			</div>
			<div class="col-md-6 mt-5 col-xs-12 col-sm-12 login_form ">
				<div class="container-fluid">
					<div class="row">
						<h2>ログインへようこそ</h2>
					</div>
					@if(session('status'))
                             <div class="alert alert-success" role="alert">
                          {{session('status')}}
                          </div>
                          @endif
					<div class="row">
          <form class="forum" method="post" action="/postlgn">
          {{csrf_field()}}
							<div class="row">
								<input type="text" name="email" id="Email" class="form__input" placeholder="Email">
							</div>
							<div class="row">
								<!-- <span class="fa fa-lock"></span> -->
								<input type="password" name="password" id="password" class="form__input" placeholder="Password">
							</div>
							<div class="row">
								<input type="checkbox" name="remember_me" id="remember_me" class="">
								<label for="remember_me">Remember Me!</label>
							</div>
							<div class="row">
								<input type="submit" name="submit" value="Submit" class="btn">
							</div>
						</form>
					</div>
					<div class="row">
						<p>Daftar as user ?<a href="/register"> register here !!!!</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer -->
	<div class="container-fluid text-center footer bawah">
		Login as Admin &hearts; ( email : mfwj21@gmail.com password : anakbaik)</p>
	</div>
</body>