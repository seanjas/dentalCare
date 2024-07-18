<!DOCTYPE html>
<html lang="en">
  <head>

        {{-- for head --}}
        @include('admin.head')

       <link rel="stylesheet" href="css/table.css">

  </head>

  <body>
    <div class="container-scroller">

      @include('admin.navbar')

      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="admin/assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>

            <ul class="navbar-nav navbar-nav-right">



            <li class="nav-item dropdown border-left">

              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="admin/assets/images/faces/face15.jpg" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">{{ auth()->user()->name }}</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>

                  {{-- Athorization display --}}
            @if (Route::has('login'))
            @auth
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>

            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                <a href="{{ route('api-tokens.index') }}" class="dropdown-item">API Tokens</a>
            @endif
                    <div class="preview-item-content">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <p type="submit"  class="preview-subject mb-1" onclick="event.preventDefault(); this.closest('form').submit();">
                                Log Out
                            </p>

                        </form>

                    </div>
                  </a>
                </div>
              </li>

              @endauth
            @endif
            </ul>


            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            {{-- table --}}
            <div class="content-wrapper">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Medicine Table</h4>
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <button class="btn btn-success btn-sm" id="add-medicine-btn">
                              <i class="mdi mdi-plus"></i> Add Medicine
                            </button>
                          </div>
                        <div class="table-responsive">
                          <table class="table table-bordered">
                            <thead>
                              <tr>



                                <th>Medicine Name</th>
                                <th>TOTAL MEDICINE</th>
                                <th>DATE ADDED</th>
                                <th>EXPIRATION DATE</th>
                                <th>ACTION</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($medicine as $medicines)
                                <tr>
                                  <td>{{$medicines->medicine_name}}</td>
                                  <td>{{$medicines->quantity}}</td>
                                  <td>{{$medicines->date_added}}</td>
                                  <td>{{$medicines->expiration_date}}</td>
                                  <td>
                                    <a href="#" class="btn btn-sm btn-primary">
                                      <i class="mdi mdi-pencil-outline"></i> Edit
                                    </a>
                                    <a href="#" class="btn btn-sm btn-danger">
                                      <i class="mdi mdi-delete-outline"></i> Delete
                                    </a>
                                  </td>
                                </tr>
                                @endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            {{-- body content wrapper --}}


            <!-- content-wrapper ends -->
          <!-- partial -->
        </div>
        <!-- main-panel ends -->


    </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->


    <!-- plugins:js -->
    @include('admin.script')
    {{-- end of custom js --}}
  </body>
</html>
