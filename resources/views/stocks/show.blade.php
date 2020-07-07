<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>{{ $stock->product_name}}</title>
</head>
<body>
  <div class="container">
  <h1>{{ $stock->product_name}}</h1>
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
    
  </div>
</body>
</html>