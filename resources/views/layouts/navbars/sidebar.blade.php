<div class="sidebar" data-color="orange">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
-->
  <div class="logo">
    <a href="" class="simple-text logo-mini">
      {{ __('AE') }}
    </a>
    <a href="" class="simple-text logo-normal">
      {{ __('Admin Ecommerce') }}
    </a>
  </div>
  <div class="sidebar-wrapper" id="sidebar-wrapper">
    <ul class="nav">
      <li class="@if ($activePage == 'home') active @endif">
        <a href="{{ route('products.home') }}">
          <i class="now-ui-icons design_app"></i>
          <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class = " @if ($activePage == 'table') active @endif">
        <a href="{{ route('products.index') }}">
          <i class="now-ui-icons design_bullet-list-67"></i>
          <p>{{ __('Table List') }}</p>
        </a>
      </li>
      <li class = " @if ($activePage == 'forms') active @endif">
        <a href="{{ route('products.create') }}">
          <i class="now-ui-icons files_single-copy-04"></i>
          <p>{{ __('Forms') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>
