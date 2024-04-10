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
    
   
    <div style=" height:250px; display:flex; justify-content:center;">
        <div style="margin-top: 100px;">
            <p>No Products are available at the moment. Please add an product:</p>
            <a style="margin-left:160px" href="/create_image_gallery" class="btn btn-primary">Add Product</a>
        </div>
    </div>

   


    <table class="table">
        <thead>
            <th scope="col">S.N</th>
            <th scope="col">Product name</th>
            <th scope="col">Product description</th>
            <th scope="col">Product image</th>
            <th scope="col">Actions</th>
        </thead>
        <tbody>
          
            <tr>
                <td>{}</td>
                <td>he</td>
                <td></td>

               

                <td>

                  

                    <img src="" class="img-circle " style="height: 50px; width: 50px; margin-left:-10px; border:3px solid #ffffff" alt="Chasma Ghar">
                 
                </td>


                <th><a href="/edit.product"><i class="fas fa-edit"></i></a><a href=""><i class="fa fa-trash" aria-hidden="true"></i></a></th>
            </tr>
       

        </tbody>
    </table>

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