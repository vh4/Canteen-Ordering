@extends('layouts.app') @section('content')
<div class="container-fluid">
<div class="col-md-12">
	<div class="card card-profile">
		<div class="card-header" style="background-image: url({{asset('image/cherry.jpg')}})">
			<div class="profile-picture">
				<div class="avatar avatar-xl"> <img src="
                                            
                                            @if(auth()->user()->status == 'admin'|| auth()->user()->status == 'user')
                                            {{auth()->user()->menu->fotolain()}}
                                            @else
					                  	/image/black.jpeg
                                            @endif
                                            " alt="..." class="avatar-img rounded-circle"> </div>
			</div>
		</div>
		<div class="card-body">
			<div class="user-profile text-center">
				<div class="name">{{auth()->user()->name}}</div>
				<div class="job">Logged in as :</div>
				<div class="desc">{{auth()->user()->status}}</div>
				<div class="social-media">
					<a class="btn btn-info btn-twitter btn-sm btn-link" href="#"> <span class="btn-label just-icon"><i class="flaticon-twitter"></i> </span> </a>
					<a class="btn btn-danger btn-sm btn-link" rel="publisher" href="#"> <span class="btn-label just-icon"><i class="flaticon-google-plus"></i> </span> </a>
					<a class="btn btn-primary btn-sm btn-link" rel="publisher" href="https://facebook.com/anonymouscybersurakarta"> <span class="btn-label just-icon"><i class="flaticon-facebook"></i> </span> </a>
					<a class="btn btn-danger btn-sm btn-link" rel="publisher" href="#"> <span class="btn-label just-icon"><i class="flaticon-dribbble"></i> </span> </a>
				</div>
				<div class="view-profile"> <a href="#" class="btn btn-secondary btn-block">Welcome to my Profile</a> </div>
			</div>
		</div>
		<div class="card-footer">
			<div class="row user-stats text-center">
				<div class="col">
					<div class="number">{{auth()->user()->menu->alamat}}</div>
					<div class="title">Alamat</div>
				</div>
				<div class="col">
					<div class="number">{{auth()->user()->menu->no_pelajar}}</div>
					<div class="title">No Canteen</div>
				</div>
				<div class="col">
					<div class="number">{{auth()->user()->menu->email}}</div>
					<div class="title">Email</div>
				</div>
			</div>
		</div>
    </div>
    </div>

</div>
<div class="container-fluid">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<div class="card-title">Line Chart</div>
			</div>
			<div class="card-body">
				<div class="chart-container">
					<figure class="highcharts-figure">
						<div id="hacker"></div>
					</figure>
				</div>
			</div>
		</div>
	</div>
</div>

</main>


<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script>
Highcharts.chart('hacker', {
	title: {
		text: 'Grafik harga penjualan yang sudah di update terkini'
	},
	subtitle: {
		text: 'by fathoniwasesojati'
	},
	yAxis: {
		title: {
			text: 'price'
		}
    },
    xAxis: {
        categories:{!!json_encode($dta)!!}
    },

	legend: {
		layout: 'vertical',
		align: 'right',
		verticalAlign: 'middle'
	},
    plotOptions: {
        series: {
            label: {
                connectorAllowed: false
            },
        }
    },
	series: [{
		name: 'Price',
		data: {!!json_encode($val)!!}
	}],
	responsive: {
		rules: [{
			condition: {
				maxWidth: 500
			},
			chartOptions: {
				legend: {
					layout: 'horizontal',
					align: 'center',
					verticalAlign: 'bottom'
				}
			}
		}]
	}
});
</script> @endsection