@extends('layouts.app')
@section('content')
<style>a{text-decoration: none;}.form-control:focus {box-shadow: none;}.form-control-underlined {border-width: 0;border-bottom-width: 1px;border-radius: 0;padding-left: 0;}.form-control::placeholder {font-size: 0.95rem;color: #aaa;font-style: italic;}</style>
                   <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form action="/input" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                  <label for="nama">Nama</label>
                                  <input type="text"  name="nama" class="form-control" id="nama" aria-describedby="no_pelajar" placeholder="nama">
                                </div>
                                <div class="form-group">
                                  <label for="no_pelajar">no_pelajar</label>
                                    <input type="text"  name="no_pelajar" class="form-control" id="no_pelajar" aria-describedby="no_pelajar" placeholder="no_pelajar">
                                </div>
                                <div class="form-group">
                                  <label for="imail">Email</label>
                                    <input type="text"  name="imail" class="form-control" id="imail" aria-describedby="imail" placeholder="imail">
                                </div>
                                <div class="form-group">
                                  <label for="alamat">Alamat</label>
                                    <input type="text"  name="alamat" class="form-control" id="alamat" aria-describedby="alamat" placeholder="alamat">
                                </div>
                                  <div class="form-group">
                                    <input type="file" class="form-control-file" id="foto" name="foto">
                                  </div>
                                <div class="modal-footer">
                                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>                                                  
                        <div class="card mb-4">
                          @if(session('status'))
                             <div class="alert alert-success" role="alert">
                          {{session('status')}}
                          </div>
                          @endif
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                  Canteen Ordering Food Management System
                                @if(auth()->user()->status == 'admin')
                                    <!--
                                 <i class='fas fa-plus-circle bentarcuy' style='font-size:30px;float:right;' data-toggle="modal" data-target="#exampleModalCenter"></i>
-->
                                </div>
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
                                    <tbody>
                                          @foreach($pag as $stdn)
                                            <tr>
                                              <td style="display:none;">{{$stdn->user_detail_id}}</td>
                                                <td><img  class="rounded-circle" width="50px;" height="50px;" src="{{$stdn->fotolain()}}"></img></td>
                                                <td>{{$stdn->nama}}</td>
                                                <td>{{$stdn->email}}</td>
                                                <td>{{$stdn->no_pelajar}}</td>
                                                <td>{{$stdn->alamat}}</td>
                                                <td>{{date('F j, Y', strtotime($stdn->created_at))}}</td>
                                                <td>
                                                  <button type="button" class="btn btn-outline-warning editTable" data-toggle="modal" data-target="#editdata">Edit</button>
                                                  <div class="modal fade" id="editdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <h5 class="modal-title editdata" id="exampleModalLongTitle">Edit Data</h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                          </button>
                                                        </div>
                                                        <div class="modal-body">
                                                          <form id="editForm" action="/home/{{$stdn->user_id}}/edit" method="post" enctype="multipart/form-data">
                                                            {{csrf_field()}}
                                                            <div class="form-group">
                                                              <label for="nama">Nama</label>
                                                              <input type="text"  name="nama" class="form-control" id="fnama" aria-describedby="no_pelajar" placeholder="nama">
                                                            </div>
                                                            <div class="form-group">
                                                              <label for="no_pelajar">no_pelajar</label>
                                                                <input type="text"  name="no_pelajar" class="form-control" id="fno_pelajar" aria-describedby="no_pelajar" placeholder="no_pelajar">
                                                            </div>
                                                            <div class="form-group">
                                                              <label for="email">Email</label>
                                                                <input type="text"  name="email" class="form-control" id="femail" aria-describedby="email" placeholder="email">
                                                            </div>
                                                            <div class="form-group">
                                                              <label for="alamat">Alamat</label>
                                                                <input type="text"  name="alamat" class="form-control" id="falamat" aria-describedby="alamat" placeholder="alamat">
                                                            </div>
                                                              <div class="form-group">
                                                                <input type="file" class="form-control-file" id="efoto" name="foto">
                                                              </div>
                                                            <div class="modal-footer">
                                                              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                                            </div>
                                                          </form>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <a href="/home/{{$stdn->user_detail_id}}/delete"><button type="button" class="btn btn-outline-danger">Delete</button></a>
                                                  <a href="/home/{{$stdn->user_id}}/view"><button type="button" class="btn btn-outline-primary">View</button></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content-center">
                                    {{$pag->links("pagination::bootstrap-4")}}
                                    </div>
                                </div>
                                @endif

                            </div>
                            <hr>
                             <div class="container-fluid">
                               <!-- Control the column width, and how they should appear on different devices -->
                               <form>
                                 <div class="row mb-4">
                                   <div style="left: 10em;" class="form-group col-md-9">
                                   <input name="cari" style="text-align: center;" id="exampleFormControlInput5" type="text" placeholder="Silahkan yang ingin anda cari ?" class="form-control form-control-underlined">
                                    </div>
                                    </div>
                                  </form>   
                                   <div style="left: 10em; text-align:center;top: -1em;" class="form-group col-md-9">
                                   <a href="/home?cari=makanan"><button type="button" class="btn btn-outline-primary">Food</button></a>
                                   <a href="/home?cari=minuman"><button type="button" class="btn btn-outline-primary">Drink</button></a>
                                   <a href="/home?cari=ayam"><button type="button" class="btn btn-outline-primary">Ayam</button></a>
                                   <a href="/home?cari=nasi goreng"><button type="button" class="btn btn-outline-primary">Nasi Goreng</button></a>
                                   <a href="/home?cari=mie"><button type="button" class="btn btn-outline-primary">Mie</button></a>
                                   <a href="/home?cari=tea"><button type="button" class="btn btn-outline-primary">Tea</button></a>
                                   <a href="/home?cari=sushi"><button type="button" class="btn btn-outline-primary">Suhsi</button></a>
                                   <a href="/home?cari=jeruk"><button type="button" class="btn btn-outline-primary">Jeruk</button></a>
                                   <a href="/home?cari=teh gelas"><button type="button" class="btn btn-outline-primary">Teh Gelas</button></a>
                                   <a href="/home?cari=kremes"><button type="button" class="btn btn-outline-primary">kremes</button></a>
                                    </div>
                                    <div style="left: 10em; text-align:center;top: -1em;" class="form-group col-md-9">
                                    <a href="/home?cari=Naget"><button type="button" class="btn btn-outline-primary">Naget</button></a>
                                    <a href="/home?cari=Chocolate"><button type="button" class="btn btn-outline-primary">Chocolate</button></a>
                                    <a href="/home?cari=Ramen"><button type="button" class="btn btn-outline-primary">Ramen</button></a>
                                    <a href="/home?cari=Sirup"><button type="button" class="btn btn-outline-primary">Sirup</button></a>
                                    <a href="/home?cari=Susu"><button type="button" class="btn btn-outline-primary">Susu</button></a>
                                    <a href="/home?cari=Soda"><button type="button" class="btn btn-outline-primary">Soda</button></a>
                                    </div>
                                    <div style="left: 10em; text-align:center;top: -1em;" class="form-group col-md-9">
                                    <a href="/home?cari=Jamur"><button type="button" class="btn btn-outline-primary">Jamur</button></a>
                                    <a href="/home?cari=Kripik"><button type="button" class="btn btn-outline-primary">Kripik</button></a>
                                    <a href="/home?cari=Kentang"><button type="button" class="btn btn-outline-primary">Kentang</button></a>
                                    <a href="/home?cari=Air Putih"><button type="button" class="btn btn-outline-primary">Air Putih</button></a>
                                    </div>
                                <div class="row">
                                @foreach($foods as $f)
                                <div class="col-sm-3" >
                                  <ul class="cards">
                                    <li class="cards_item">
                                      <div class="card">
                                        <div class="card_image"><img class="imag" src="{{$f->fotofood()}}"></div>
                                        <div class="card_content">
                                          <h2 class="card_title">{{$f->name_food}}</h2>
                                           <p class="card_text">{{$f->description}}</p>
                                           <h4 class="card_title">Rp.{{$f->price}}</h4><br>
                                           <a href="/home/cart/{{$f->food_id}}"><button type="button" class="btnn">Add Cart</button></a>
                                          </div>
                                        </div>
                                      </li>
                                    </ul>
                                   </div>
                                    @endforeach
                            </div>
                          </div>
                          <hr>

                          <footer>
                          <div class="container-fluid">
                        
                          </div>

                          </footer>


                        </div>
                    </div>
                </main>
@endsection





