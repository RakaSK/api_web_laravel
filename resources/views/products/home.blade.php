@extends('layouts.app', [
    'namePage' => 'Home',
    'class' => 'login-page sidebar-mini ',
    'activePage' => 'home',
    'backgroundImage' => asset('now') . "/img/bg14.jpg",
])

{{-- @section('content')
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
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>Name</th>
                  <th>Description</th>
                  <th>Price</th>
                  <th>Image URL</th>
                </thead>
                <tbody>
                  @foreach ($products as $product)
                  <tr>
                      <td>{{ $product->name }}</td>
                      <td>{{ $product->description }}</td>
                      <td>{{ $product->price }}</td>
                      <td>{{ $product->image_url }}</td>
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
@endsection --}}

@section('content')
  <div class="panel-header panel-header-lg">
    <canvas id="bigDashboardChart"></canvas>
  </div>
  <div class="content">
   
    <div class="row">
      <div class="col-md-12">
        <div class="card  card-tasks">
            <div class="card-header">
                <h4 class="card-title"> Simple Table</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Name</th>
                      <th>Description</th>
                      <th>Price</th>
                      <th>Image URL</th>
                    </thead>
                    <tbody>
                      @foreach ($products as $product)
                      <tr>
                          <td>{{ $product->name }}</td>
                          <td>{{ $product->description }}</td>
                          <td>{{ $product->price }}</td>
                          <td>{{ $product->image_url }}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
          <div class="card-footer ">
            <hr>
            <div class="stats">
              <i class="now-ui-icons loader_refresh spin"></i> Updated 3 minutes ago
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
@endpush