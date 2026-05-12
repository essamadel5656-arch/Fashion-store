<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Item;

class ProductController extends Controller
{
function add_product(){
    return view('store');
}
public function store_product(Request $request){


    $request->validate([
        'name' => 'required',
        'price' => 'required' ,
        'color' => 'required'
    ]);
        $image = $request->file('image')->store('item' , 'public');

    Item::create([
        'name' => $request->name,
        'description' => $request->description,
        'price' => $request->price,
        'image' => $image,
        'color'=>$request->color
    ]);

    return redirect('/product');
}
function get_products(){
    $products =Item::all();

    return view('product', ['items' => $products]);
}

function delete_product(Item $item){
    if ($item->image) {
        Storage::disk('public')->delete($item->image);
    }
    $item->delete();
    return redirect('/product');
}

function edit_product(Item $item){
    return view('edit',compact('item'));
}
function update_product(Item $item, Request $request)
{
    $data = $request->validate([
        'name'        => 'required',
        'description' => 'required',
        'price'       => 'required',
        'color'       => 'required',
    ]);
    if ($request->hasFile('image')) {

        $request->validate([
            'image' => 'image|mimes:jpg,png,jpeg|max:2048'
        ]);
        if ($item->image) {
            Storage::disk('public')->delete($item->image);
        }
        $data['image'] = $request->file('image')->store('item', 'public');
    }

    $item->update($data);

    return redirect('/product');
}

}