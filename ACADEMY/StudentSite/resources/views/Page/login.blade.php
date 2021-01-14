@extends('Layout.app')
@section('title', 'Login')
@section('content')

        <div class="container section-marginbg">
            <div class="row ">
                <div class="container card p-lg-5">
                    <div class="row ">
                        <div class="col-md-3 text-center col-sm-12">

                        </div>
                            <div class="col-md-6 mt-5 col-sm-12">
                                <div class="card-body">
                                <h5 class="title-text mt-3">STUDENT LOGIN</h5>
                                 <form action=" " class="loginForm">
                                <input id="mobile" required="" name="mobile" value="" type="text" class="form-control my-3 " placeholder="Mobile No">
                                <input id="password" required="" name="password" value="" type="password" class="form-control my-3 " placeholder="Password">
                                <button type="submit" name="submit" id="logBtn" class="btn loginBtn btn-block normal-btn">Login</button>
                                     <!--  <div class="ml-4 my-3">
                                       <input type="checkbox" name="check" value="check" class="form-check-input " id="exampleCheck1">
                                       <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                                     </div> -->
                                 </form>
                                <a href="" data-toggle="modal" data-target="#passResetModal"  class="nav-font">Password Reset</a> ||
                                <a href="" data-toggle="modal" data-target="#quickModal" class="nav-font">Forget Password</a>
                                </div>

                                <div id="snackbar"></div>
                        </div>

                        <div class="col-md-3  text-center col-sm-12">

                        </div>

            </div>
        </div>
            </div>
        </div>

    @include('Component.pass_reset')
    @include('Component.pass_recover')
@endsection


