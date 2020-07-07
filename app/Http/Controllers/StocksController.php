<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stock;
use App\Http\Requests\StockRequest;

class StocksController extends Controller
{
    public function index() {
        $stocks = Stock::latest()->get();
        // dd($stocks->toArray());
        return view('stocks.index')->with('stocks', $stocks);
    }
    public function show(Post $post) {
        return view('stocks.show')->with('stock', $post);
    }
    public function create() {
        return view('stocks.create');
    }
    public function store(StockRequest $request) {
        $stock = new Stock();
        $stock->product_name = $request->product_name;
        $stock->counts = $request->counts;
        $stock->save();
        return redirect('/');
    }
    public function edit(Stock $stock) {
        return view('stocks.edit')->with('stock', $stock);
    }
    public function update(StockRequest $request, Stock $stock) {
        $stock->product_name = $request->product_name;
        $stock->counts = $request->counts;
        $stock->save();
        return redirect('/');
    }
    public function destroy(Stock $stock) {
        $stock->delete();
        return redirect('/');
    }
}
