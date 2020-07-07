@extends('layouts.default')

@section('title')
Edit stock
@endsection
@section('content')
  <h1>
      <a href="{{ url('/') }}" class="header-menu">back</a>
      Edit stock
  </h1>
  <form action="{{ url('/stocks', $stock->id)}}" method="post">
    {{ csrf_field() }}
    {{ method_field('patch') }}
    <p>
      <input type="text" name="product_name" placeholder="enter product name" value="{{ old('product_name', $stock->product_name) }}">
      @if ($errors->has('product_name')) 
      <span class="error">{{ $errors->first('product_name') }}</span>
      @endif
    </p>
    <p>
      <input type="number" name="counts" placeholder="enter counts" value="{{ old('counts', $stock->counts) }}">
      @if ($errors->has('counts')) 
      <span class="error">{{ $errors->first('counts') }}</span>
      @endif
    </p>
    <p>
      <input type="submit" value="Update">
    </p>
  </form>
@endsection
