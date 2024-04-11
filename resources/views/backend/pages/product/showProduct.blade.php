@extends('backend.includes.app')
@section('contain')

<div class="container">

    @if ($message = Session::get('success'))
    <div id="alert" class="alert alert-block" style="background-color: #d7f3e3;">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong class="text-s">{{ $message }}</strong>
    </div>
    @endif

    @if ($message = Session::get('error'))
    <div id="alert" class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif

    @if($products->isEmpty())
    <div style=" height:250px; display:flex; justify-content:center;">
        <div style="margin-top: 100px;">
            <p>No Products are available at the moment. Please add an product:</p>
            <a style="margin-left:160px" href="/add.product" class="btn btn-primary">Add Product</a>
        </div>
    </div>
    @else

    <table class="table">
        <thead>
            <th scope="col">S.N</th>
            <th scope="col">Product name</th>
            <th scope="col">Product price</th>
            <th scope="col">Product image</th>
            <th scope="col">Actions</th>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>



                    <img src="{{ $product->image }}" class="img-circle " style="height: 50px; width: 50px; margin-left:-10px; border:3px solid #ffffff" alt="Chasma Ghar">

                </td>


                <th><a href="{{route('edit.product' , $product->id)}}"><i class="fas fa-edit"></i></a><a href="{{route('delete.product' , $product->id)}}"><i class="fa fa-trash" aria-hidden="true"></i></a></th>
            </tr>

            @endforeach
        </tbody>
    </table>
    @endif
</div>

<style>
    a .fa.fa-trash {
        color: red;
        margin-left: 15px;
    }
</style>
<script>
    setTimeout(function() {
        document.getElementById('alert').style.display = 'none';
    }, 5000); // Set the delay to 5000 milliseconds (5 seconds)
</script>


@endsection