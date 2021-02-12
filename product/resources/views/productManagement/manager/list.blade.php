@extends('productManagement.layouts.app')
@section('content')
<section class="content" style="padding-top:50px;">
<h2  style="margin-left: 100px;"><b>Manager List</b></h2>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table border="1"  style="margin-left: 500px;" >
                    <thead>
                        <tr>
                            <th scope="col">Role id</th>
                            <th scope="col">Name</th>
                            <th scope="col">E-mail Address</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                            <th scope="col">Add</th>

                        </tr>
                    </thead>
                    @forelse ($users as $data)
                    <tbody>
                        <tr>
                            
                            <td>{{$data->roleid}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->email}}</td>
                            <td><a href="{{route('manager/edit',['id'=>$data->id])}}"><input name="submit" type="submit" value="Edit"></a></td>
                            <td>
                                <form action="{{route('manager/delete',['id'=>$data->id])}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input name="submit" type="submit" value="Delete">
                                </form>
                            </td>
                            <td><a href="{{route('product/manager')}}"><input name="submit" type="submit" value="Add"></a></td>

                        </tr>
                    </tbody>
                    @empty
                    
                    @endforelse
                </table>
                <div>
                    <h2 style="margin-left: 200px;"><b>Manager Managing</b></h2>
                    <div class="col-sm-8 text-center">
                        
                        <div class="col-sm-15 text-center" style="margin-left: 300px;">
                            <div class="col-sm-15 text-center">
                                <label>Customer</label>
                                <div class="input-group-append">
                                    <a href="{{route('product/customer')}}"><input name="submit" type="submit" class="btn btn-dark" value="Create"></a>
                                    <a href="{{route('customer/list')}}"><input name="submit" type="submit" class="btn btn-dark" value="List"></a>


                                </div>
                                <div class="col-sm-15 text-center">
                                    <label>Product</label>
                                    <div class="input-group-append">
                                        <a href="{{route('product/add_product')}}"><input name="submit" type="submit" class="btn btn-dark" value="Create"></a>
                                        <a href="{{route('product/product_list')}}"><input name="submit" type="submit" class="btn btn-dark" value="List"></a>

                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>
@endsection