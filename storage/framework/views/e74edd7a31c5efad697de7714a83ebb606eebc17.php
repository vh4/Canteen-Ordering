 <?php $__env->startSection('content'); ?> <?php if(auth()->user()->status == 'user'): ?> </div>
<div class="container"> <i class="fas fa-table mr-1"></i> Payment Method
	<hr>
	<!--
                                 <i class='fas fa-plus-circle bentarcuy' style='font-size:30px;float:right;' data-toggle="modal" data-target="#exampleModalCenter"></i>
-->
	<div class="row">
		<div class="col-md-10">
			<form action="/home/cart/payment/creditcart" method="POST">
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="name"><i class="fa fa-user"></i> Full name</label>
						<input type="text" class="form-control" id="name" placeholder="Fathoni W" name="nama"> </div>
					<div class="form-group col-md-6">
						<label for="email"><i class="fa fa-envelope"></i> Email</label>
						<input type="text" class="form-control" id="email" placeholder="Ex. fathoni@gmail.com" name="email"> </div>
					<div class="form-group col-md-6">
						<label for="address"><i class="fas fa-address-card"></i> Address</label>
						<input type="text" class="form-control" id="address" name="address" placeholder="Jaten Street IX"> </div>
					<div class="form-group col-md-6">
						<label for="city"><i class="fas  fa-university"></i> City</label>
						<input type="text" class="form-control" id="city" name="city" placeholder="Surakarta"> </div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="namecard">Name on Card</label>
						<input type="text" class="form-control" placeholder="Fathoni Waseso Jati" name="namecard" id="namecard"> </div>
					<div class="form-group col-md-6">
						<label for="cc">Credit Card</label>
						<input type="text" class="form-control" placeholder="11111-22222-33333-44444" name="cc" id="cc"> </div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-3">
						<label for="State">State</label>
						<input type="text" class="form-control" placeholder="NY" name="State" id="State"> </div>
					<div class="form-group col-md-3">
						<label for="zip">ZIP</label>
						<input type="text" class="form-control" placeholder="20001" name="zip" id="zip"> </div>
					<div class="form-group col-md-3">
						<label for="expyear">Exp Year</label>
						<input type="text" class="form-control" placeholder="2024" name="expyear" id="expyear"> </div>
					<div class="form-group col-md-3">
						<label for="cvv">CVV</label>
						<input type="text" class="form-control" placeholder="357" name="cvv" id="cvv"> </div>
				</div>
				<div class="form-group col md-6">
					<label>
						<input type="checkbox" checked="checked" name="sameadr"> Alamat pengiriman sama dengan billing </label>
				</div>
				<div class="button">
					<button style="padding: 12px;margin: 10px 0;border: none;width: 100%;" class="btn btn-primary" type="submit">Countinue to Checkout</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="container" style="text-align: center;left:-8em;position:relative"> <img src="/image/ovo.png" alt="asa" width="100px" height="40px"> <img src="/image/gopay.jpg" alt="asa" width="100px" height="50px"> <img src="/image/linkaja.png" alt="asa" width="100px" height="50px"> <img src="/image/visa.png" alt="asa" width="100px" height="40px"> </div>
</div>
</main> <?php endif; ?>
<div id="map"></div> <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>