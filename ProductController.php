<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $products=[
        ["id"=>1, "name"=>"HP", "price"=>15000],
        ["id"=>2, "name"=>"MAC", "price"=>23000],
        ["id"=>3, "name"=>"DELL", "price"=>18000]
    ];
    // Méthode qui retourne la vue index
    public function index()
    {
        return view('index');
    }

    // Méthode qui retourne la vue products
    public function showproducts()
    {
        return view('products', ["products"=>$this->products]);
    }

    // Méthode qui retourne la vue product-form
    public function newProduct()
    {
        return view('product-create');
    }

    public function saveProduct(Request $request){
        $id=count($this->products)+1;
        $p=["id"=>$id,
            "name"=>$request["name"],
            "price"=>$request["price"]];
            array_push($this->products, $p);
            return view('products', ["products"=>$this->products]);
    }

    public function delete($id){
        foreach($this->products as $k=>$p){
            if($p["id"]==$id){
                unset($this ->products[$k]);
            }
        }
        return view('products', ["products"=>$this->products]);
    }
}
