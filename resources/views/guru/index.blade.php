@extends('guru.guru_master')

@section('content')
       <!-- content -->

        @if(Session::has('error'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>{{ session::get('error') }}</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif()

        <h1>Admin Name : {{ Auth::guard('guru')->user()->name }}</h1>
        <h1>Admin Email : {{ Auth::guard('guru')->user()->email }}</h1>

        <a href="">list product</a>
@endsection
 <!-- content ends -->

