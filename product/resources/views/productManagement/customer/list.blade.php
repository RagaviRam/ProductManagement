@extends('productManagement.layouts.app')
@section('content')
<section class="content" style="padding-top:50px;">
<h2  style="margin-left: 100px;"><b>Customer List</b></h2>
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
                            <td><a href="{{route('customer/edit',['id'=>$data->id])}}"><input name="submit" type="submit" value="Edit"></a></td>
                            <td>
                                <form action="{{route('customer/delete',['id'=>$data->id])}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input name="submit" type="submit" value="Delete">
                                </form>
                            </td>
                            <td><a href="{{route('product/customer')}}"><input name="submit" type="submit" value="Add"></a></td>

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