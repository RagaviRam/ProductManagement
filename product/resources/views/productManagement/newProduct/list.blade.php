@extends('productManagement.layouts.app')
@section('content')
<section class="content" style="padding-top:50px;">
<h2  style="margin-left: 100px;"><b>Products</b></h2>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table border="1"  style="margin-left: 500px;" >
                    <thead>
                        <tr>
                            <th scope="col">Product Name</th>
                            <th scope="col">SKU</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Product</th>
                            <th scope="col">Update</th>
                            <th scope="col">Destroy</th>
                            <th scope="col">Add</th>
                        </tr>
                    </thead>
                    @forelse ($users as $data)
                    <tbody>
                        <tr>
                            
                            <td>{{$data->productname}}</td>
                            <td>{{$data->SKU}}</td>
                            <td>{{$data->quantity}}</td>
                            <td><img src="{{asset('storage/image/'.$data->productimage)}}" style="max-width:60px;"></td>
                            <td><a href=""><input name="submit" type="submit" value="Edit"></a></td>
                            <td>
                                <form action="{{route('product/product_delete',['id'=>$data->id])}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input name="submit" type="submit" value="Delete">
                                </form>
                            </td>
                            <td><a href="{{route('product/add_product')}}"><input name="submit" type="submit" value="Add"></a></td>

                        </tr>
                    </tbody>
                    @empty
                    
                    @endforelse
                </table>
            </div>
        </div>
    </div>
</section>
@endsection