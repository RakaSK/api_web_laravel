@extends('layouts.app', [
    'namePage' => 'Forms',
    'class' => 'login-page sidebar-mini ',
    'activePage' => 'forms',
    'backgroundImage' => asset('now') . "/img/bg14.jpg",
])

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
<div class="row">
    <div class="col-md-12">
        <form action="/pages/store" method="POST">
        <div class="card ">
        <div class="card-header ">
        <h4 class="card-title">Input Product</h4>
        </div>
        <div class="card-body ">
        <div class="form-group has-label">
            <label>Product Name *</label>
            <input class="form-control" name="name" type="text" required="true" />
        </div>
        <div class="form-group has-label">
            <label>Product Description *</label>
            <input class="form-control" name="description" type="text" required="true" />
        </div>
        <div class="form-group has-label">
            <label>Product Price *</label>
            <input class="form-control" name="price" type="number" required="true" />
        </div>
        <div class="form-group has-label">
            <label>Image URL *</label>
            <input class="form-control" name="image_url" type="text" required="true" />
        </div>
        <div class="card-footer text-center">
        <button type="submit" value="Save" class="btn btn-primary">Submit</button>
        </div>
        </div>
        </form>
        </div>
@endsection