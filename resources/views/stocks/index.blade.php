@extends('layouts.default')

@section('title')
stock system
@endsection
@section('content')
  <h1>
      <a href="{{ url('/stocks/create') }}" class="header-menu">new stock</a>
      stock system
  </h1>
  <table border="1">
    <tr>
      <th>商品コード</th>
      <th>商品名</th>
      <th>数量</th>
      <th>作成日</th>
      <th>更新日</th>
    </tr>
    @forelse ($stocks as $stock)
        <tr>
        <td>{{ $stock->id }}</td>
        <td>{{ $stock->product_name }}</td>
        <td>{{ $stock->counts }}</td>
        <td>{{ $stock->created_at }}</td>
        <td>{{ $stock->updated_at }}</td>
        <td><a href="{{ action('StocksController@edit', $stock) }}" class="edit">edit</a></td>
        <td><a href="#" class="del" data-id="{{ $stock->id }}">x</a>
            <form action="{{ url('/stocks', $stock->id) }}" method="post" id="form_{{ $stock->id }}">
            {{ csrf_field() }}
            {{ method_field('delete') }}
            </form>
        </td>
        </tr>
    @empty
    <tr>
        <td>{{ $stock->id }}</td>
        <td>no name</td>
        <td>no counts</td>
        <td>no date</td>
        <td>no date</td>
        </tr>
    @endforelse
  </table>
  <script src="/js/main.js"></script>
@endsection
