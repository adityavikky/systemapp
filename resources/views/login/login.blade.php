@extends('./layouts.mainlayout')

@section('title', 'Login')

@section('content')

    <div class="row align-items-center vh-100">
        <div class="col-md-4 mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        Login
                    </div>


                    <form>
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="form2Example1" class="form-control" />
                            <label class="form-label" for="form2Example1">Username</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" id="form2Example2" class="form-control" />
                            <label class="form-label" for="form2Example2">Password</label>
                        </div>


                        <!-- Submit button -->
                        <button type="button" class="btn btn-primary btn-block mb-4">Login</button>
                    </form>
                </div>

            </div>
        </div>
    </div>


@endsection
