@extends('productManagement.layouts.app')

@section('content')

<section class="content">
    <div class="col-sm-8 text-center">
    
    <form action="{{route('customer/register')}}" method="post" enctype="multipart/form-data">
    @csrf
        
        
                <h2 style="margin-left: 100px;"><b>Customer</b></h2>
        <h2 style="margin-left: 100px;"><b>Register Here</b></h2>
            <div style="margin-left: 100px;" class="row col-5">
            <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Name">
                </div>
                <div>
                @if($errors->has('name'))
                {{ $errors->first('name') }}
                @endif
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
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
                
            </div>
            
        
    </div>
</section>
    </form>
    
  </div>
</div>

@endsection

