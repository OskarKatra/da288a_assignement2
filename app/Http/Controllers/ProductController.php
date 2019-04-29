<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Product;
use Illuminate\Http\Request;


class ProductController extends BaseController
{

    /**
     * Returns all products
     * @return Response
     */
    public function showAllProducts()
    {
        return response()->json(Product::all());
    }

    /**
     * @param $id: product id for requested product.
     * @return Response
     */
    public function showOneProduct($id)
    {
        return response()->json(Product::find($id));
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function create(Request $request)
    {
        $product = Product::create($request->all());

        return response()->json($product, 201);
    }
}