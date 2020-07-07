@extends('layouts.default')

@section('title')
New Stock
@endsection
@section('content')
  <h1>
      <a href="{{ url('/') }}" class="header-menu">back</a>
      New Stock
  </h1>
  <form action="{{ url('/stocks')}}" method="post">
    {{ csrf_field() }}
    <p>
      <input type="text" name="product_name" placeholder="enter product name" value="{{ old('product_name') }}">
      @if ($errors->has('product_name')) 
      <span class="error">{{ $errors->first('product_name') }}</span>
      @endif
    </p>
    <p>
      <input type="number" name="counts" placeholder="enter counts" value="{{ old('counts') }}">
      @if ($errors->has('counts')) 
      <span class="error">{{ $errors->first('counts') }}</span>
      @endif
    </p>
    <p>
      <input type="submit" value="Add">
    </p>
  </form>
@endsection
