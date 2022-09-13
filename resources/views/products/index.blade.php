{{-- <h1>List Products</h1>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Image URL</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->image_url }}</td>
            <td>
                <a href="/products/{{ $product->id }}/edit">Edit</a>
                <form action="/products/{{ $product->id }}" method="POST">
                    @method('DELETE') 
                    @csrf
                    <input type="submit" value="Delete">
                </form>
             </td>

        </tr>
        @endforeach
    </tbody>

    <a href="/products/create">Create</a>
</table> --}}


@extends('layouts.app', [
    'namePage' => 'Table List',
    'class' => 'login-page sidebar-mini ',
    'activePage' => 'table',
    'backgroundImage' => asset('now') . "/img/bg14.jpg",
])

@section('content')
  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"> Simple Table</h4>
          </div>
          <div class="card-body">
            <a href="/products/create" button class="btn btn-primary">Create</a></button>
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>Name</th>
                  <th>Description</th>
                  <th>Price</th>
                  <th>Image URL</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  @foreach ($products as $product)
                  <tr>
                      <td>{{ $product->name }}</td>
                      <td>{{ $product->description }}</td>
                      <td>{{ $product->price }}</td>
                      <td>{{ $product->image_url }}</td>
                      <td>
                        <a href="/products/{{ $product->id }}/edit" button class="btn btn-info">Edit</a></button>
                        <a href="{{url('/products/destroy')}}/{{$product->id}}" class="btn btn-danger">Delete</a>
                      </td>

                      {{-- <button class="btn btn-info" >
                        <form action="/products/{{ $product->id }}" method="POST">
                          @method('DELETE') 
                          @csrf
                          <input type="submit" value="">
                        </form>
                      </button> --}}
                      {{-- <td>
                          <a href="/products/{{ $product->id }}/edit">Edit</a>
                          <form action="/products/{{ $product->id }}" method="POST">
                              @method('DELETE') 
                              @csrf
                              <input type="submit" value="Delete">
                          </form>
                      </td> --}}
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection