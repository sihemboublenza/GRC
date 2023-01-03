@extends('layout')
@section('content')
        <!-- Header -->
        <header class="ex-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1">
                        <h1 class="text-center">Log In</h1>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </header> <!-- end of ex-header -->
        <!-- end of header -->
       
       
        
        <!-- Basic -->
        <div class="ex-form-1 pt-5 pb-5">
            @if($message = Session::get('success'))
            <div class="alert alert-info">
                {{$message}}
            </div>
            @endif
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3">
                        <div class="text-box mt-5 mb-5">
                            <p class="mb-4">You don't have a password? Then please <a class="blue" href="{{url('signup')}}">Sign Up</a></p>

                            <!-- Log In Form -->
                            <form action="{{ route('authenticate.validate_login')}}" method="post">
                                @csrf
                                <div class="mb-4 form-floating">
                                    <input type="email" name="email" class="form-control" id="floatingInput">
                                    @if($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email')}} </span>
                                    @endif
                                    <label for="floatingInput">Email address</label>
                                </div>
                                <div class="mb-4 form-floating">
                                    <input type="password" name="password" class="form-control" id="floatingPassword">
                                    @if($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password')}} </span>
                                    @endif
                                    <label for="floatingPassword">Password</label>
                                </div>
                                <button type="submit" class="form-control-submit-button">Log in</button>
                            </form>
                            <!-- end of log in form -->

                        </div> <!-- end of text-box -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of ex-basic-1 -->
        <!-- end of basic -->


@endsection