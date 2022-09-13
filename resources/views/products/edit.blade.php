@extends('layouts.app', [
    'namePage' => 'Forms',
    'class' => 'login-page sidebar-mini ',
    'activePage' => 'forms',
    'backgroundImage' => asset('now') . "/img/bg14.jpg",
])
{{-- <h1>Create Product</h1>

<form action="/products/{{ $product->id }}" method="POST">
    @method('PUT') 
    @csrf
    Name : <input type="text" name="name"  value="{{{ $product->name ?? old('name') }}}"><br>
    Description : <input type="text" name="description" value="{{{ $product->description ?? old('description') }}}"><br>
    Price : <input type="number" name="price" value="{{{ $product->price ?? old('price') }}}"><br>
    Image : <input type="text" name="image_url" value="{{{ $product->image_url ?? old('image_url') }}}"><br>

    <input type="submit" value="Save">
</form> --}}
 

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
<div class="row">
    <div class="col-md-12">
        <form action="/products/{{ $product->id }}" method="POST">
        @method('PUT') 
        @csrf
        <div class="card ">
        <div class="card-header ">
        <h4 class="card-title">Input Product</h4>
        </div>
        <div class="card-body ">
        <div class="form-group has-label">
            <label>Product Name *</label>
            <input class="form-control" name="name" type="text" value="{{{ $product->name ?? old('name') }}}" required="true" />
        </div>
        <div class="form-group has-label">
            <label>Product Description *</label>
            <input class="form-control" name="description" type="text" value="{{{ $product->description ?? old('description') }}}" required="true" />
        </div>
        <div class="form-group has-label">
            <label>Product Price *</label>
            <input class="form-control" name="price" type="number" value="{{{ $product->price ?? old('price') }}}" required="true" />
        </div>
        <div class="form-group has-label">
            <label>Image URL *</label>
            <input class="form-control" name="image_url" type="text" value="{{{ $product->image_url ?? old('image_url') }}}" required="true" />
        </div>
        <div class="card-footer text-center">
        <button type="submit" value="Save" class="btn btn-primary">Submit</button>
        </div>
        </div>
        </form>
        </div>
@endsection