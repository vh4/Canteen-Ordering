 <?php $__env->startSection('content'); ?>
<style>
a {
	text-decoration: none;
}

.form-control:focus {
	box-shadow: none;
}

.form-control-underlined {
	border-width: 0;
	border-bottom-width: 1px;
	border-radius: 0;
	padding-left: 0;
}

.form-control::placeholder {
	font-size: 0.95rem;
	color: #aaa;
	font-style: italic;
}
</style>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Tambah Data</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
			</div>
			<div class="modal-body">
				<form action="/input" method="post" enctype="multipart/form-data"> <?php echo e(csrf_field()); ?>

					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" name="nama" class="form-control" id="nama" aria-describedby="no_pelajar" placeholder="nama"> </div>
					<div class="form-group">
						<label for="no_pelajar">no_pelajar</label>
						<input type="text" name="no_pelajar" class="form-control" id="no_pelajar" aria-describedby="no_pelajar" placeholder="no_pelajar"> </div>
					<div class="form-group">
						<label for="imail">Email</label>
						<input type="text" name="imail" class="form-control" id="imail" aria-describedby="imail" placeholder="imail"> </div>
					<div class="form-group">
						<label for="alamat">Alamat</label>
						<input type="text" name="alamat" class="form-control" id="alamat" aria-describedby="alamat" placeholder="alamat"> </div>
					<div class="form-group">
						<input type="file" class="form-control-file" id="foto" name="foto"> </div>
					<div class="modal-footer">
						<button type="submit" name="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div> <?php if(session('status')): ?>
<div class="container-fluid">
<div class="alert alert-success" role="alert"> <?php echo e(session('status')); ?> </div></div> <?php endif; ?> <?php if(auth()->user()->status == 'admin'): ?>
<!--
                                 <i class='fas fa-plus-circle bentarcuy' style='font-size:30px;float:right;' data-toggle="modal" data-target="#exampleModalCenter"></i>
--><?php if(auth()->user()->status == 'admin'): ?>
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<div class="card-head-row">
					<div class="card-title">Graphic System</div>
				</div>
			</div>
			<div class="card-body">
				<div class="chart-container" style="min-height: 375px">
				<div id="grafik_keren"></div>
				</div>
			</div>
		</div>
	</div>
</div> <?php endif; ?>
<div class="card-body">
	<div class="table-responsive">
		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			<thead>
				<tr>
					<th style="display:none;">#</th>
					<th>#</th>
					<th>NAMA</th>
					<th>EMAIL</th>
					<th>no_pelajar</th>
					<th>ALAMAT</th>
					<th>TANGGAL</th>
					<th>STATUS</th>
				</tr>
			</thead>
			<tbody> <?php $__currentLoopData = $pag; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stdn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td style="display:none;"><?php echo e($stdn->user_detail_id); ?></td>
					<td><img class="rounded-circle" width="50px;" height="50px;" src="<?php echo e($stdn->fotolain()); ?>"></img>
					</td>
					<td><?php echo e($stdn->nama); ?></td>
					<td><?php echo e($stdn->email); ?></td>
					<td><?php echo e($stdn->no_pelajar); ?></td>
					<td><?php echo e($stdn->alamat); ?></td>
					<td><?php echo e(date('F j, Y', strtotime($stdn->created_at))); ?></td>
					<td>
						<button type="button" class="btn btn-outline-warning editTable" data-toggle="modal" data-target="#editdata">Edit</button>
						<div class="modal fade" id="editdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title editdata" id="exampleModalLongTitle">Edit Data</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
									</div>
									<div class="modal-body">
										<form id="editForm" action="/home/<?php echo e($stdn->user_id); ?>/edit" method="post" enctype="multipart/form-data"> <?php echo e(csrf_field()); ?>

											<div class="form-group">
												<label for="nama">Nama</label>
												<input type="text" name="nama" class="form-control" id="fnama" aria-describedby="no_pelajar" placeholder="nama"> </div>
											<div class="form-group">
												<label for="no_pelajar">no_pelajar</label>
												<input type="text" name="no_pelajar" class="form-control" id="fno_pelajar" aria-describedby="no_pelajar" placeholder="no_pelajar"> </div>
											<div class="form-group">
												<label for="email">Email</label>
												<input type="text" name="email" class="form-control" id="femail" aria-describedby="email" placeholder="email"> </div>
											<div class="form-group">
												<label for="alamat">Alamat</label>
												<input type="text" name="alamat" class="form-control" id="falamat" aria-describedby="alamat" placeholder="alamat"> </div>
											<div class="form-group">
												<input type="file" class="form-control-file" id="efoto" name="foto"> </div>
											<div class="modal-footer">
												<button type="submit" name="submit" class="btn btn-primary">Submit</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<a href="/home/<?php echo e($stdn->user_detail_id); ?>/delete">
							<button id="alert_demo_8" type="button" class="btn btn-outline-danger">Delete</button>
						</a>
						<a href="/home/<?php echo e($stdn->user_id); ?>/view">
							<button type="button" class="btn btn-outline-primary">View</button>
						</a>
					</td>
				</tr> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> </tbody>
		</table>
		<div class="d-flex justify-content-center"> <?php echo e($pag->links("pagination::bootstrap-4")); ?> </div>
	</div> <?php endif; ?> </div> <?php if(auth()->user()->status == 'admin'): ?>
<div class="row mt--2">
	<div class="col-md-6">
		<div class="card full-height">
			<div class="card-body">
				<div class="card-title">Total in System</div>
				<div class="card-category">informasi terbaru tentang sistem</div>
				<div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
					<div class="px-2 pb-2 pb-md-0 text-center">
						<div id="circles-1">
							<div class="circles-wrp" style="position: relative; display: inline-block;">
								<svg xmlns="http://www.w3.org/2000/svg" width="90" height="90">
									<path fill="transparent" stroke="#f1f1f1" stroke-width="7" d="M 44.99154756204665 3.500000860767564 A 41.5 41.5 0 1 1 44.942357332570026 3.500040032273624 Z" class="circles-maxValueStroke"></path>
									<path fill="transparent" stroke="#FF9E27" stroke-width="7" d="M 44.99154756204665 3.500000860767564 A 41.5 41.5 0 1 1 20.644357636259837 78.60137921350231 " class="circles-valueStroke"></path>
								</svg>
								<div class="circles-text" style="position: absolute; top: 0px; left: 0px; text-align: center; width: 100%; font-size: 31.5px; height: 90px; line-height: 90px;"><?php echo e($count); ?></div>
							</div>
						</div>
						<h6 class="fw-bold mt-3 mb-0">New Users in 3 days</h6> </div>
					<div class="px-2 pb-2 pb-md-0 text-center">
						<div id="circles-2">
							<div class="circles-wrp" style="position: relative; display: inline-block;">
								<svg xmlns="http://www.w3.org/2000/svg" width="90" height="90">
									<path fill="transparent" stroke="#f1f1f1" stroke-width="7" d="M 44.99154756204665 3.500000860767564 A 41.5 41.5 0 1 1 44.942357332570026 3.500040032273624 Z" class="circles-maxValueStroke"></path>
									<path fill="transparent" stroke="#2BB930" stroke-width="7" d="M 44.99154756204665 3.500000860767564 A 41.5 41.5 0 1 1 5.5495771787290025 57.88076625138973 " class="circles-valueStroke"></path>
								</svg>
								<div class="circles-text" style="position: absolute; top: 0px; left: 0px; text-align: center; width: 100%; font-size: 31.5px; height: 90px; line-height: 90px;"><?php echo e($countOrder); ?></div>
							</div>
						</div>
						<h6 class="fw-bold mt-3 mb-0">Total Order Users</h6> </div>
					<div class="px-2 pb-2 pb-md-0 text-center">
						<div id="circles-3">
							<div class="circles-wrp" style="position: relative; display: inline-block;">
								<svg xmlns="http://www.w3.org/2000/svg" width="90" height="90">
									<path fill="transparent" stroke="#f1f1f1" stroke-width="7" d="M 44.99154756204665 3.500000860767564 A 41.5 41.5 0 1 1 44.942357332570026 3.500040032273624 Z" class="circles-maxValueStroke"></path>
									<path fill="transparent" stroke="#F25961" stroke-width="7" d="M 44.99154756204665 3.500000860767564 A 41.5 41.5 0 0 1 69.44267714510887 78.53812060894248 " class="circles-valueStroke"></path>
								</svg>
								<div class="circles-text" style="position: absolute; top: 0px; left: 0px; text-align: center; width: 100%; font-size: 31.5px; height: 90px; line-height: 90px;"><?php echo e($totalFood); ?></div>
							</div>
						</div>
						<h6 class="fw-bold mt-3 mb-0">Total Items</h6> </div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="card full-height">
			<div class="card-body">
				<div class="card-title">Money statistics</div>
				<div class="row py-3">
					<div class="col-md-4 d-flex flex-column justify-content-around">
						<div>
							<h6 class="fw-bold text-uppercase text-success op-8">Total Pendapatan</h6>
							<h3 class="fw-bold">Rp. 4.000.000.000</h3> </div>
						<div>
							<h6 class="fw-bold text-uppercase text-danger op-8">Total Pengeluaran</h6>
							<h3 class="fw-bold">Rp. 900.000.000</h3> </div>
					</div>
					<div class="col-md-8">
						<div id="chart-container">
							<canvas id="totalIncomeChart"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> <?php endif; ?>
	<div class="container-fluid">
		<!-- Control the column width, and how they should appear on different devices --><?php if(auth()->user()->status == 'user'): ?>
		<form>
			<div class="row mb-4">
				<div style="left: 10em;" class="form-group col-md-9">
					<input name="cari" style="text-align: center;" id="exampleFormControlInput5" type="text" placeholder="Silahkan yang ingin anda cari ?" class="form-control form-control-underlined"> </div>
			</div>
		</form>
		<div style="left: 10em; text-align:center;top: -1em;" class="form-group col-md-9">
			<a href="/home?cari=makanan">
				<button type="button" class="btn btn-outline-primary">Food</button>
			</a>
			<a href="/home?cari=minuman">
				<button type="button" class="btn btn-outline-primary">Drink</button>
			</a>
			<a href="/home?cari=ayam">
				<button type="button" class="btn btn-outline-primary">Ayam</button>
			</a>
			<a href="/home?cari=nasi goreng">
				<button type="button" class="btn btn-outline-primary">Nasi Goreng</button>
			</a>
			<a href="/home?cari=mie">
				<button type="button" class="btn btn-outline-primary">Mie</button>
			</a>
			<a href="/home?cari=tea">
				<button type="button" class="btn btn-outline-primary">Tea</button>
			</a>
			<a href="/home?cari=sushi">
				<button type="button" class="btn btn-outline-primary">Suhsi</button>
			</a>
			<a href="/home?cari=jeruk">
				<button type="button" class="btn btn-outline-primary">Jeruk</button>
			</a>
			<a href="/home?cari=teh gelas">
				<button type="button" class="btn btn-outline-primary">Teh Gelas</button>
			</a>
			<a href="/home?cari=kremes">
				<button type="button" class="btn btn-outline-primary">kremes</button>
			</a>
		</div>
		<div style="left: 10em; text-align:center;top: -1em;" class="form-group col-md-9">
			<a href="/home?cari=Naget">
				<button type="button" class="btn btn-outline-primary">Naget</button>
			</a>
			<a href="/home?cari=Chocolate">
				<button type="button" class="btn btn-outline-primary">Chocolate</button>
			</a>
			<a href="/home?cari=Ramen">
				<button type="button" class="btn btn-outline-primary">Ramen</button>
			</a>
			<a href="/home?cari=Sirup">
				<button type="button" class="btn btn-outline-primary">Sirup</button>
			</a>
			<a href="/home?cari=Susu">
				<button type="button" class="btn btn-outline-primary">Susu</button>
			</a>
			<a href="/home?cari=Soda">
				<button type="button" class="btn btn-outline-primary">Soda</button>
			</a>
		</div>
		<div style="left: 10em; text-align:center;top: -1em;" class="form-group col-md-9">
			<a href="/home?cari=Jamur">
				<button type="button" class="btn btn-outline-primary">Jamur</button>
			</a>
			<a href="/home?cari=Kripik">
				<button type="button" class="btn btn-outline-primary">Kripik</button>
			</a>
			<a href="/home?cari=Kentang">
				<button type="button" class="btn btn-outline-primary">Kentang</button>
			</a>
			<a href="/home?cari=Air Putih">
				<button type="button" class="btn btn-outline-primary">Air Putih</button>
			</a>
		</div>
		<div class="row"> <?php $__currentLoopData = $foods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-sm-3">
				<ul class="cards">
					<li class="cards_item">
						<div class="card">
							<div class="card_image"><img class="imag" src="<?php echo e($f->fotofood()); ?>"></div>
							<div class="card_content">
								<h2 class="card_title"><?php echo e($f->name_food); ?></h2>
								<p class="card_text"><?php echo e($f->description); ?></p>
								<h4 class="card_title">Rp.<?php echo e($f->price); ?></h4>
								<br>
								<a href="/home/cart/<?php echo e($f->food_id); ?>">
									<button type="button" class="btnn">Add Cart</button>
								</a>
							</div>
						</div>
					</li>
				</ul>
			</div> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> </div>
	</div>
	<hr> <?php endif; ?>
	<footer>
		<div class="container-fluid"> </div>
	</footer>
</div>
</main> 

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="<?php echo e(asset('assets/js/plugin/chart.js/chart.min.js')); ?>"></script>

<script>
Highcharts.chart('grafik_keren', {

title: {
	text: 'Grafik Makanan dan Minuman Favorit update terbaru '
},

subtitle: {
	text: 'by akuadalahorangbaikpak'
},

yAxis: {
	title: {
		text: 'price'
	}
},

tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>Rp. {point.y:.0f}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
xAxis: {
        categories:<?php echo json_encode($argf); ?>

    },

plotOptions: {
        series: {
            label: {
                connectorAllowed: false
            },
        }
	},
	
series: [{
	name: 'harga jual normal',
	data: <?php echo json_encode($prc); ?>

},  {
	name: 'keuntungan hpp',
	data: <?php echo json_encode($laba); ?>

}, {
	name: 'harga pokok produksi',
	data: <?php echo json_encode($hpp); ?>

}],

responsive: {
	rules: [{
		condition: {
			maxWidth: 10
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
		  
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>