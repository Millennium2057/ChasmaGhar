@extends('backend.includes.app')
@section('contain')


<!-- Main content -->
<section class="edit-product-content">
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
    <div class="container-fluid">
        <form action="{{route('update.product', $editProducts->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <h4 class="my-3">Edit product</h4>
            <p class="">You can edit product here. Please edit the form below:</p>
            <hr />
            <div class="form-group">
                <label for="">Product name</label>
                <input type="text" name="name" value="{{ $editProducts->name }}" placeholder="add event name" class="form-control">
            </div>
            <div class="form-group">
                <label for="product-price">Product price</label>
                <input type="number" id="product-price" name="price" value="{{ $editProducts->price }}" placeholder="Enter product price" class="form-control" min="0" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="">Product Image</label>
                <input type="file" name="product_image" multiple placeholder="add event product" class="form-control">
            </div>
            <div id="create-product-btn">
                <input type="submit" class="btn btn-info" value="Update product">

            </div>

        </form>
        <div class="form-group" style=" margin-top: 40px;">
            <h4 class="my-3">Previous product</h4>


           


            <div style="justify-content:space-around; margin-bottom: 20px;">
             

                <img src="{{$editProducts->image}}" style="height: 100px; margin-right: 50px;" onclick="openLightbox('{}')" class="" alt="Chasma Ghar">

              
            </div>
        </div>
    </div><!-- /.container-fluid -->
    <div class="lightbox" id="lightbox" onclick="closeLightbox()">
        <span class="lightbox-close">&times;</span>
        <img src="" alt="Lightbox product" id="lightbox-product">
    </div>
</section>
<style>
    .edit-product-content {
        background-color: #fff;
        padding: 20px;
        width: 80%;
        margin-left: auto;
        margin-right: auto;
        border-radius: 10px;
    }

    .container-fluid #product {
        height: 45px;
    }

    .container-fluid form {
        width: 80%;
        margin: auto;

    }

    .container-fluid h4 {
        color: #17a2b8;
        font-size: 22px;
        font-weight: 600;
    }

    .container-fluid .form-group label {
        color: #4c4747;
        font-weight: 600;
    }

    .container-fluid #create-product-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 15px
    }

    .container-fluid #create-product-btn input {

        margin: 0 auto;
        font-size: 17px !important;
        font-weight: 500 !important;
    }

    
    .container-fluid p {
        font-size: 14px;
        color: #aaa;
    }

    .edit-product-content .form-group {
        margin: auto;
        width: 100%;
    }

    .lightbox {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.9);
        z-index: 999;
        display: none;
        justify-content: center;
        align-items: center;
    }

    .lightbox img {
        max-width: 80%;
        max-height: 80%;
    }

    .lightbox-close {
        position: absolute;
        top: 20px;
        right: 20px;
        cursor: pointer;
        color: #fff;
        font-size: 24px;
    }
</style>

<script>
    tinymce.init({
        selector: 'textarea#menubar',
        menubar: 'file edit view'
    });

    function openLightbox(productUrl) {
        document.getElementById('lightbox-product').src = productUrl;
        document.getElementById('lightbox').style.display = 'flex';
    }

    function closeLightbox() {
        document.getElementById('lightbox').style.display = 'none';
    }
    setTimeout(function() {
        document.getElementById('alert').style.display = 'none';
    }, 5000); // Set the delay to 5000 milliseconds (5 seconds)
</script>
@endsection