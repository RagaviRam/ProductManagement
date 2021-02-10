@extends('productManagement.layouts.app')
@section('content')

    <section  class="content">
    <div class="col-sm-8 text-center">

    <form action="{{route('product/store_product')}}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <h2 align ="center">Product Create</h2>
            <div style="margin-left: 100px;" class="row col-5">
                <div class='col-lg-6'><label class="text-primary" ><b>Product Name:</b></label>
                </div>
                <div class='col-lg-6'><input type="text" name="productname" value ="{{old('productname')}}">
                    <div class="text-danger">
                        @if($errors->has('productname'))
                        {{ $errors->first('productname') }}
                        @endif
                    </div>
                </div>
                <div class='col-lg-6'><label class="text-primary" ><b>SKU:</b></label>
                </div>
                <div class='col-lg-6'><input type="text" name="sku" value ="{{old('sku')}}">
                    <div class="text-danger">
                        @if($errors->has('sku'))
                        {{ $errors->first('sku') }}
                        @endif
                    </div>
                </div>
                <div class='col-lg-6'><label class="text-primary" ><b>Quantity</b></label>
                </div>
                <div class='col-lg-6'><input type="text" name="quantity" value ="{{old('quantity')}}">
                    <div class="text-danger">
                        @if($errors->has('quantity'))
                        {{ $errors->first('quantity') }}
                        @endif
                    </div>
                </div>
                <div class='col-lg-6'><label class="text-primary" ><b>Product Image:</b></label>
                </div>
                <div class='col-lg-6'><input type="file" name="image" value ="{{old('image')}}">
                    <div class="text-danger">
                        @if($errors->has('image'))
                        {{ $errors->first('image') }}
                        @endif
                    </div>
                </div>
                
                <div class='col-lg-6'></div>
                <div class='col-lg-6'><button class="btn btn-dark" type="submit" style="width: 50%;"><b>Add</b></button>
                </div>
            </div>
    </form>
    </div>
    </section>
    @endsection
