 <?php $__env->startSection('content'); ?> <?php if(auth()->user()->status == 'user'): ?> <?php if(empty($cart) || count($cart) == 0): ?> <?php else: ?>
<div class="container-fluid">
	<table style="font-family: 'Courier New', Courier, monospace;" id="cart" class="table table-hover table-condensed">
		<thead>
			<tr>
				<th style="width:50%">Food</th>
				<th style="width:10%">Category</th>
				<th style="width:8%">Quantity</th>
				<th style="width:22%" class="text-center">Subtotal</th>
				<th style="width:10%">Status</th>
			</tr>
		</thead> <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tbody>
			<tr>
				<td data-th="Product">
					<div class="row">
						<div class="col-sm-2 hidden-xs"><img width="100px" height="100px;" src="/image/<?php echo e($c->foto_food); ?>" alt="..." class="rounded-circle shadow-lg" /></div>
						<div class="col-sm-10">
							<h4 class="nomargin"><?php echo e($c->name); ?></h4>
							<p><?php echo e($c->description); ?></p>
						</div>
					</div>
				</td>
				<td data-th="Category"><?php echo e($c->category); ?></td>
				<td data-th="Quantity">
					<form action="/home/cart/update/qty/<?php echo e($c->id); ?>" method="post"> <?php echo e(csrf_field()); ?>

						<div class="btn-group" role="group" aria-label="Basic example">
							<input name="quantity" type="number" class="form" value="<?php echo e($c->quantity); ?>">
							<button type="submit" class="btn btn-secondary"><i class="fas fa-clipboard-check"></i></button>
						</div>
					</form>
				</td>
				<td data-th="Subtotal" class="text-center">Rp.<?php echo e(\Cart::session(auth()->id())->get($c->id)->getPriceSum()); ?></td>
				<td class="actions" data-th="">
					<a href="/home/cart">
						<button class="btn btn-info btn-sm"><i class="fas fa-sync"></i></button>
					</a>
					<a href="/home/cart/delete/<?php echo e($c->id); ?>">
						<button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
					</a>
				</td>
			</tr>
		</tbody> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<tfoot>
			<tr>
				<td colspan="3" class="hidden-xs"></td>
				<td class="hidden-xs text-center"><strong>Biaya Admin</strong></td>
				<td class="hidden-xs text-center"><strong> Rp.950</strong></td>
			</tr>
			<tr>
				<td style="border:none;" colspan="3" class="hidden-xs"></td>
				<td class="hidden-xs text-center"><strong>Total</strong></td>
				<td class="hidden-xs text-center"><strong>Rp.<?php echo e(\Cart::session(auth()->id())->getTotal() + 950); ?></strong></td>
			</tr>
			<tr>
				<td style="border:none;" colspan="3" class="hidden-xs"></td>
				<td><a href="/home" class="btn btn-warning"><i class="fa fa-shopping-cart"></i> Continue Shopping</a></td>
				<td><a href="/home/food/cart/payment" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
			</tr>
			</tr>
		</tfoot>
	</table> <?php endif; ?> </div>
</main> <?php endif; ?> </div> <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>