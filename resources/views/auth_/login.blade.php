@extends('auth_.tamplates')

@section('content')
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-md-6">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 200px; border-radius: 24%;"
                      src="https://www.sinaugis.com/wp-content/uploads/2018/01/sinaugisicon.png" alt="...">
                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                  </div>
                  {{-- print eror validation --}}

                  @if ($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                        @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                      </ul>

                    </div>
                  @endif

                  <form action="{{ route('login') }}" method="POST" class="user">
                    @csrf
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                        aria-describedby="emailHelp" name="email" placeholder="Masukkan Email">
                      <div class="invalid-feedback">

                      </div>
                    </div>

                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user"
                        id="exampleInputPassword" placeholder="Password">
                    </div>

                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      LOGIN
                    </button>
                  </form>


                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
@endsection
