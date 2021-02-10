@extends('productManagement.layouts.app')
@section('content')

    <section class="content">
    <div class="col-sm-8 text-center">
    <form>
        <h1 style="margin-left: 100px;"><b>Customer</b></h1>
        <h2 style="margin-left: 100px;"><b>Register Here</b></h2>
            <div style="margin-left: 100px;" class="row col-5">
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6"><input type="text" class="form-control" name="first_name" placeholder="First Name"></div>
                        <div class="col-sm-6"><input type="text" class="form-control" name="last_name" placeholder="Last Name"></div>
                    </div>
                    <div class="row">
                        <div class="col">@if($errors->has('first_name'))
                                                {{ $errors->first('first_name') }}
                                                @endif</div>
                        <div class="col">@if($errors->has('last_name'))
                                                {{ $errors->first('last_name') }}
                                                @endif</div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
                <div>
                @if($errors->has('email'))
                {{ $errors->first('email') }}
                @endif
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <div>
                @if($errors->has('password'))
                {{ $errors->first('password') }}
                @endif
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
                </div>
            </div>
        
    </div>
</section>
    </form>
  </div>
</div>
@endsection
