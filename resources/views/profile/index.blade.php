@extends('layouts.app') @section('content')
<div class="container-fluid">
	<div class="col col-6"></div>
    <form action="/profile/{{auth()->user()->id}}/edit" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Enter name" name="nama" value="{{$editprofile->nama}}"> <small id="name" class="form-text text-muted">We'll never share your name with anyone else.</small> </div>
		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Enter email" name="email" value="{{$editprofile->email}}"> <small id="email" class="form-text text-muted">We'll never share your email with anyone else.</small> </div>
		<div class="form-group">
			<label for="no_pelajar">No Pelajar</label>
			<input type="text" class="form-control" id="no_pelajar" aria-describedby="no_pelajar" placeholder="Enter no_pelajar" name="no_pelajar" value="{{$editprofile->no_pelajar}}"> <small id="no_pelajar" class="form-text text-muted">We'll never share your no pelajar with anyone else.</small> </div>
		<div class="form-group">
			<label for="address">Address</label>
			<input type="text" class="form-control" id="address" aria-describedby="address" placeholder="Enter address" name="alamat" value="{{$editprofile->alamat}}"> <small id="address" class="form-text text-muted">We'll never share your address with anyone else.</small> </div>
		<div class="form-group">
			<div class="custom-file">
				<input type="file" class="custom-file-input" id="gfoto" name="foto">
				<label class="custom-file-label" for="customFile">Choose file</label>
			</div>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</form>
</div>
</div>
</main> 

@endsection