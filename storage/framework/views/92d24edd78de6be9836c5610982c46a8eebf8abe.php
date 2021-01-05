<?php $__env->startSection('content'); ?>

<?php if(auth()->user()->status == 'user'): ?>


<div class="container-fluid"  id="get_data">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Pengguna</th>
      <th scope="col">Nama Makanan</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Category</th>
      <th scope="col">Tracking</th>
      <th scope="col">Tanggal Order</th>
    </tr>
  </thead>
  <?php $__currentLoopData = $arry; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo e($ar->id); ?></th>
      <th scope="row"><?php echo e($ar->name); ?></th>
      <td><?php echo e($ar->name_food); ?></td>
      <td>Rp.<?php echo e($ar->price); ?></td>
      <td><?php echo e($ar->description); ?></td>
      <td><?php echo e($ar->category); ?></td>
      <?php if($ar->tracking == 'pending'): ?>
      <td>pesanan diterima, sedang di prosess
      <i class='fa fa-clock' style='font-size:30px;float:right;'></i>
      </td>
      <?php else: ?>
      <td>pesanan sudah selesai dibuat
      <i class='fa fa-check' style='font-size:30px;float:right;'></i>
      </td>
<?php endif; ?>

      <td><?php echo e(date('F j, Y H:i:s', strtotime($ar->tanggal_order))); ?></td>
    </tr>
  </tbody>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</div>
</main>
<?php endif; ?>

<?php if(auth()->user()->status == 'admin'): ?>

<div  id="get_data">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Pengguna</th>
      <th scope="col">Nama Makanan</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Category</th>
      <th scope="col">Tanggal Order</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <?php $__currentLoopData = $adminfor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $arr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo e($arr->id); ?></th>
      <th scope="row"><?php echo e($arr->name); ?></th>
      <td><?php echo e($arr->name_food); ?></td>
      <td>Rp.<?php echo e($arr->price); ?></td>
      <td><?php echo e($arr->description); ?></td>
      <td><?php echo e($arr->category); ?></td>
      <td><?php echo e(date('F j, Y H:i:s', strtotime($arr->tanggal_order))); ?></td>
      <td><?php echo e($arr->tracking); ?>

<?php if($arr->tracking == 'success'): ?>
<i class='fas fa-check' style='font-size:30px;float:right;' data-toggle="modal" data-target="#modalFood"></i>
     <?php else: ?>
     <a href="#"></a>
     <i class='fa fa-lock' style='font-size:30px;float:right;'></i>
     <a class="w-25 " href="/home/order/konfirmasi/<?php echo e($arr->order_id); ?>"><i><button class="btn btn-outline-info ">Confirm</button></i></a>
     <?php endif; ?>
      </td>
    </tr>
  </tbody>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</div>
</div>
</main>
<?php endif; ?>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>