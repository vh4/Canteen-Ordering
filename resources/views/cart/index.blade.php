@extends('layouts.app') @section('content') @if(auth()->user()->status == 'user') @if(empty($cart) || count($cart) == 0) @else
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
		</thead> @foreach($cart as $c )
		<tbody>
			<tr>
				<td data-th="Product">
					<div class="row">
						<div class="col-sm-2 hidden-xs"><img width="100px" height="100px;" src="/image/{{$c->foto_food}}" alt="..." class="rounded-circle shadow-lg" /></div>
						<div class="col-sm-10">
							<h4 class="nomargin">{{$c->name}}</h4>
							<p>{{$c->description}}</p>
						</div>
					</div>
				</td>
				<td data-th="Category">{{$c->category}}</td>
				<td data-th="Quantity">
					<form action="/home/cart/update/qty/{{$c->id}}" method="post"> {{csrf_field()}}
						<div class="btn-group" role="group" aria-label="Basic example">
							<input name="quantity" type="number" class="form" value="{{$c->quantity}}">
							<button type="submit" class="btn btn-secondary"><i class="fas fa-clipboard-check"></i></button>
						</div>
					</form>
				</td>
				<td data-th="Subtotal" class="text-center">Rp.{{ \Cart::session(auth()->id())->get($c->id)->getPriceSum()}}</td>
				<td class="actions" data-th="">
					<a href="/home/cart">
						<button class="btn btn-info btn-sm"><i class="fas fa-sync"></i></button>
					</a>
					<a href="/home/cart/delete/{{$c->id}}">
						<button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
					</a>
				</td>
			</tr>
		</tbody> @endforeach
		<tfoot>
			<tr>
				<td colspan="3" class="hidden-xs"></td>
				<td class="hidden-xs text-center"><strong>Biaya Admin</strong></td>
				<td class="hidden-xs text-center"><strong> Rp.950</strong></td>
			</tr>
			<tr>
				<td style="border:none;" colspan="3" class="hidden-xs"></td>
				<td class="hidden-xs text-center"><strong>Total</strong></td>
				<td class="hidden-xs text-center"><strong>Rp.{{ \Cart::session(auth()->id())->getTotal() + 950}}</strong></td>
			</tr>
			<tr>
				<td style="border:none;" colspan="3" class="hidden-xs"></td>
				<td><a href="/home" class="btn btn-warning"><i class="fa fa-shopping-cart"></i> Continue Shopping</a></td>
				<td><a href="/home/food/cart/payment" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
			</tr>
			</tr>
		</tfoot>
	</table> @endif </div>
</main> @endif </div> @endsection