<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>1337</title>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="/home">Dashboard 1337</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/logout">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="/home">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Menu
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="s.html">Database</a>
                                            <a class="nav-link" href="s.html">User</a>
                                            <a class="nav-link" href="s.html">Admin</a>

                                        </nav>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                      <div style="text-align:center;bottom:0px;">
                        <i class='fab fa-youtube' style='font-size:20px;'></i>
                        <i class='fab fa-twitter' style='font-size:20px;'></i>
                        <i class='fab fa-facebook' style='font-size:20px;'></i>
                        <i class='fab fa-instagram' style='font-size:20px;'></i>
                    </div>
                    <div class="sb-sidenav-footer">
                      <div class="small">Logged in as:</div>
                      {{auth()->user()->name}}
                  </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4"> </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <!--
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area mr-1"></i>
                                        Area Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar mr-1"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                      -->
                      <!-- Button trigger modal -->

                      <!-- Modal -->
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
                                  <input type="text"  name="nama" class="form-control" id="nama" aria-describedby="nim" placeholder="nama">
                                </div>
                                <div class="form-group">
                                  <label for="nim">Nim</label>
                                    <input type="text"  name="nim" class="form-control" id="nim" aria-describedby="nim" placeholder="nim">
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
                                Data Table Users
                                 <i class='fas fa-plus-circle bentarcuy' style='font-size:30px;float:right;' data-toggle="modal" data-target="#exampleModalCenter"></i>
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
                                                <th>NIM</th>
                                                <th>ALAMAT</th>
                                                <th>TANGGAL</th>
                                                <th>STATUS</th>
                                            </tr>
                                        </thead>
                                    <tbody>
                                          @foreach($pag as $stdn)
                                            <tr>
                                              <td style="display:none;">{{$stdn->id}}</td>
                                                <td><img width="40px;" src="{{ asset('image')}}/{{$stdn->foto}}"></img></td>
                                                <td>{{$stdn->nama}}</td>
                                                <td>{{$stdn->email}}</td>
                                                <td>{{$stdn->nim}}</td>
                                                <td>{{$stdn->alamat}}</td>
                                                <td>{{$stdn->created_at}}</td>
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
                                                          <form id="editForm" action="/home/{{$stdn->id}}/edit" method="post" enctype="multipart/form-data">
                                                            {{csrf_field()}}
                                                            <div class="form-group">
                                                              <label for="nama">Nama</label>
                                                              <input type="text"  name="nama" class="form-control" id="fnama" aria-describedby="nim" placeholder="nama">
                                                            </div>
                                                            <div class="form-group">
                                                              <label for="nim">Nim</label>
                                                                <input type="text"  name="nim" class="form-control" id="fnim" aria-describedby="nim" placeholder="nim">
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
                                                  <a href="/home/{{$stdn->id}}/delete"><button type="button" class="btn btn-outline-danger">Delete</button></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content-center">
                                    {{$pag->links("pagination::bootstrap-4")}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                      <div class="text-muted" style="text-align:center;">Copyright &copy;anakbaik 2020</div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/script.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/chart-area-demo.js') }}"></script>
        <script src="{{ asset('js/chart-bar-demo.js') }}"></script>
        <script src="{{ asset('js/edit.js') }}"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/public/js/datatables-demo.js') }}"></script>
    </body>
</html>
