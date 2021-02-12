@extends('productManagement.layouts.app')
@section('content')
<section class="content">
    <div class="col-sm-8 text-center">

        <form action="{{route('product/cart')}}" method="post" enctype="multipart/form-data">
            @csrf


            <h2 style="margin-left: 100px;"><b>Product</b></h2>
            <h2 style="margin-left: 100px;"><b>Cart</b></h2>
            <div style="margin-left: 100px;" class="row col-5">
                <div class="form-group">
                    <textarea class="form-control" rows="5" cols="5" name="address" placeholder="Current Address"></textarea>
                </div>
                <div>
                    @if($errors->has('address'))
                    {{ $errors->first('address') }}
                    @endif
                </div>
                <div class="form-check mb-2 mr-sm-2">
                    <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                    <label class="form-check-label" for="inlineFormCheck">
                        i accept your terms and conditions
                    </label>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Order</button>
                </div>

            </div>


    </div>
</section>
</form>

</div>
</div>
@endsection