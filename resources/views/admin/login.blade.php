  @extends('master')
 @section('content')

        <link href="{{url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;1,400&display=swap')}}" rel="stylesheet">
        <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{url('css/fontawesome-all.min.css')}}" rel="stylesheet">
        <link href="{{url('css/swiper.css')}}" rel="stylesheet">
        <link href="{{url('css/styles.css')}}" rel="stylesheet">
        <center><h3>login form</h3></center>
<form>
                                <div class="mb-4 form-floating">
                                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Email address</label>
                                </div>
                                <div class="mb-4 form-floating">
                                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                    <label for="floatingPassword">Password</label>
                                </div>
                                <div class="mb-4 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">I agree with the site's stated <a href="{{url('privacy')}}">Privacy Policy</a> and <a href="{{url('terms')}}">Terms & Conditions</a></label>
                                </div>
                                <button type="submit" class="form-control-submit-button">Log in</button>
                            </form>
                            @endsection