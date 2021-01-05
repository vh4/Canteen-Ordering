 <?php $__env->startSection('content'); ?> <?php if(auth()->user()->status == 'admin'): ?>
<div class="modal fade" id="modalFood" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Tambah Food</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
			</div>
			<div class="modal-body">
				<form action="/home/food/input" method="post" enctype="multipart/form-data"> <?php echo e(csrf_field()); ?>

					<div class="form-group">
						<label for="name_food">Nama</label>
						<input type="text" name="name_food" class="form-control" id="name_food" aria-describedby="name_food" placeholder="name_food"> </div>
					<div class="form-group">
						<label for="price">price</label>
						<input type="text" name="price" class="form-control" id="price" aria-describedby="price" placeholder="price"> </div>
					<div class="form-group">
						<label for="description">description</label>
						<input type="text" name="description" class="form-control" id="description" aria-describedby="description" placeholder="description"> </div>
					<div class="form-group">
						<label for="category">category</label>
						<input type="text" name="category" class="form-control" id="category" aria-describedby="category" placeholder="category"> </div>
					<div class="form-group">
						<input type="file" class="form-control-file" id="foto_food" name="foto_food"> </div>
					<div class="modal-footer">
						<button type="submit" name="submit_food" class="btn btn-primary">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="card mb-4"> <?php if(session('status')): ?>
	<div class="alert alert-success" role="alert"> <?php echo e(session('status')); ?> </div> <?php endif; ?>
	<div class="card-header"> <i class="fas fa-table mr-1"></i> Data Table Foods <?php if(auth()->user()->status == 'admin'): ?> <i class='fas fa-plus-circle bentarcuy' style='font-size:30px;float:right;' data-toggle="modal" data-target="#modalFood"></i> <?php endif; ?> </div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="foodTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th style="display:none;">#</th>
						<th>#</th>
						<th>name food</th>
						<th>price</th>
						<th>description</th>
						<th>category</th>
						<th>tanggal</th> <?php if(auth()->user()->status == 'admin'): ?>
						<th>STATUS</th> <?php endif; ?> </tr>
				</thead>
				<tbody> <?php $__currentLoopData = $foodpag; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td style="display:none;"><?php echo e($x->food_id); ?></td>
						<td><img class="rounded" width="90px;" height="90px;" src="<?php echo e($x->fotofood()); ?>"></img>
						</td>
						<td><?php echo e($x->name_food); ?></td>
						<td>Rp.<?php echo e($x->price); ?></td>
						<td><?php echo e($x->description); ?></td>
						<td><?php echo e($x->category); ?></td>
						<td><?php echo e(date('F j, Y', strtotime($x->created_at))); ?></td> <?php if(auth()->user()->status == 'admin'): ?>
						<td>
							<button type="button" class="btn btn-outline-warning FoodeditTable" data-toggle="modal" data-target="#editFood">Edit</button>
							<div class="modal fade" id="editFood" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title " id="exampleModalLongTitle">Edit Food</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
										</div>
										<div class="modal-body">
											<form id="editFoodForm" action="/home/food/<?php echo e($x->food_id); ?>/edit" method="post" enctype="multipart/form-data"> <?php echo e(csrf_field()); ?>

												<div class="form-group">
													<label for="name_food">Nama</label>
													<input type="text" name="name_food" class="form-control" id="fname_food" aria-describedby="name_food" placeholder="name_food"> </div>
												<div class="form-group">
													<label for="price">Price</label>
													<input type="text" name="price" class="form-control" id="fprice" aria-describedby="price" placeholder="price"> </div>
												<div class="form-group">
													<label for="description">description</label>
													<input type="text" name="description" class="form-control" id="fdescription" aria-describedby="description" placeholder="description"> </div>
												<div class="form-group">
													<label for="category">category</label>
													<input type="text" name="category" class="form-control" id="fcategory" aria-describedby="category" placeholder="category"> </div>
												<div class="form-group">
													<input type="file" class="form-control-file" id="ffoto_food" name="foto_food"> </div>
												<div class="modal-footer">
													<button type="submit" name="submit" class="btn btn-primary">Submit</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
							<a href="/food/<?php echo e($x->food_id); ?>/delete">
								<button type="button" class="btn btn-outline-danger">Delete</button>
							</a>
						</td> <?php endif; ?> </tr> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> </tbody>
			</table>
			<div class="d-flex justify-content-center"> <?php echo e($foodpag->links("pagination::bootstrap-4")); ?> </div>
		</div>
	</div>
</div>
</div>
</main <?php else: ?> Not Found <?php endif; ?> <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>