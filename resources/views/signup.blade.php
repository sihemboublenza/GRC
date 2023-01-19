@extends('layout.public.index')
        <!-- Header -->
        <header class="ex-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1">
                        <h1 class="text-center">Contact us</h1>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </header> <!-- end of ex-header -->
        <!-- end of header -->
        
        
        <!-- Basic -->
        <div class="ex-form-1 pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3">
                        <div class="text-box mt-5 mb-5">
                            <!-- Sign Up Form -->
                            <form action="{{route('prospect.contacted')}}" method="post">
                                @csrf
                                <div class="mb-4 form-floating">
                                    <input type="email" class="form-control" name="email" id="floatingInput">
                                    @if($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email')}} </span>
                                    @endif
                                    <label for="floatingInput">Email address</label>
                                </div>
                                <div class="mb-4 form-floating">
                                    <input type="text" class="form-control" name="nom" id="floatingInput">
                                    @if($errors->has('nom'))
                                    <span class="text-danger">{{ $errors->first('nom')}} </span>
                                    @endif
                                    <label for="floatingInput">First name</label>
                                </div>
                                <div class="mb-4 form-floating">
                                    <input type="text" class="form-control" name="prenom" id="floatingInput">
                                    @if($errors->has('prenom'))
                                    <span class="text-danger">{{ $errors->first('prenom')}} </span>
                                    @endif
                                    <label for="floatingInput">Last name</label>
                                </div>
                                <div class="mb-4 form-floating">
                                    <input type="text" class="form-control" name="societe" id="floatingInputCompany">
                                    @if($errors->has('societe'))
                                    <span class="text-danger">{{ $errors->first('societe')}} </span>
                                    @endif
                                    <label for="floatingInputCompany">Company</label>
                                </div>
                                <div class="mb-4 form-floating">
                                    <input type="text" class="form-control" name="fonction" id="floatingInputFunction">
                                    @if($errors->has('fonction'))
                                    <span class="text-danger">{{ $errors->first('fonction')}} </span>
                                    @endif
                                    <label for="floatingInputFunction">Function</label>
                                </div>
                                <div class="mb-4 form-floating">
                                    <input type="text" class="form-control" name="tel" id="floatingInputTel">
                                    @if($errors->has('tel'))
                                    <span class="text-danger">{{ $errors->first('tel')}} </span>
                                    @endif
                                    <label for="floatingInputTel">Phone number</label>
                                </div>
                                
                                <div class="mb-4 form-floating">
                                    
                                </div>
                                <div class="mb-4 form-check">
                                    <input type="checkbox" class="form-check-input" id="heck1">
                                    <label class="form-check-label" for="Check1">I agree with the site's stated <a href="{{url('terms')}}">Terms & Conditions</a></label>
                                </div>
                                <button type="submit" class="form-control-submit-button">Sign up</button>
                            </form>
                            <!-- end of sign up form -->
                        </div> <!-- end of text-box -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of ex-basic-1 -->
        <!-- end of basic -->