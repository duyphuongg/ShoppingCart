@extends('admin.layout.index')
@section('content')
	@if(Session::has('err'))
                    <div class="alert alert-danger" width="50px">{{Session::get('err')}}@endif</div>
@endsection
