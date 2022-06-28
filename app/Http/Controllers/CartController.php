<?php

namespace App\Http\Controllers;

use App\Models\ShopCart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ShopCart::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'quantity' => 'required',
            
        ]);

        return ShopCart::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return ShopCart::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cart = Cart::find($id);
        request()->validate([

            'quantity' => 'required'
    
        ]);
        
        $success = $cart->update([
          
            'quantity' => request('quantity'),
    
        ]);
    
        return[ 
            'success' => $success
        ];
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function allcarts(){
        return ShopCart::all(); 
     }
    


    public function destroy($id)
    {
        return ShopCart::destroy($id);
    }

     /**
     * Search for a name
     *
     * @param  str  $name
     * @return \Illuminate\Http\Response
     */
    public function search($name)
    {
       // return Product::where('name', 'like', '%'.$name.'%')->get();
    }
}









