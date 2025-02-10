<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function show($sku)
    {
        // Find the product by ID
        $product = Product::where('sku', $sku)->with('images', 'categories')->firstOrFail();
        $product->image_path = url(Storage::url($product->images->first()->image));

        // Check if the product exists
        if (!$product) {
            return response()->json([
                'success' => false,
                'message' => 'Product not found'
            ], 404);
        }

        // Return the product details as JSON
        return response()->json([
            'success' => true,
            'data' => $product
        ]);
    }

    public function categories()
    {
        // Find the product by ID
        $categories = Category::get();
        $categories->map(function ($category) {
            $category->image_path = url(Storage::url($category->image));
            return $category;
        });

        // Check if the product exists
        if (!$categories) {
            return response()->json([
                'success' => false,
                'message' => 'Category not found'
            ], 404);
        }

        // Return the product details as JSON
        return response()->json([
            'success' => true,
            'data' => $categories
        ]);
    }

    public function showBySlug($slug)
    {
        info("Slug: $slug");
        // Find the product by ID
        $product = Product::where('slug', $slug)->with('images', 'categories')->firstOrFail();
        $product->image_path = url(Storage::url($product->images->first()->image));

        $product->images->map(function ($image) {
            $image->image = url(Storage::url($image->image));
            return $image;
        });

        // Check if the product exists
        if (!$product) {
            return response()->json([
                'success' => false,
                'message' => 'Product not found'
            ], 404);
        }

        // Return the product details as JSON
        return response()->json([
            'success' => true,
            'data' => $product
        ]);
    }

    public function showById($id)
    {
        info("id: $id");
        // Find the product by ID
        $product = Product::where('id', $id)->with('images', 'categories')->firstOrFail();
        $product->image_path = url(Storage::url($product->images->first()->image));

        $product->images->map(function ($image) {
            $image->image = url(Storage::url($image->image));
            return $image;
        });

        // Check if the product exists
        if (!$product) {
            return response()->json([
                'success' => false,
                'message' => 'Product not found'
            ], 404);
        }

        // Return the product details as JSON
        return response()->json([
            'success' => true,
            'data' => $product
        ]);
    }

    public function fetchProducts(string $ids)
    {
        info($ids);
        // Convert the comma-separated string to an array
        $ids = explode(',', $ids);
        info(json_encode($ids));

        // Find the products by IDs
        $products = Product::whereIn('id', $ids)->with('images', 'categories')->get();
        // add image path to all collection
        $products->map(function ($product) {
            $product->image_path = url(Storage::url($product->images->first()->image));
            return $product;
        });

        // Check if the products exist
        if (!$products) {
            return response()->json([
                'success' => false,
                'message' => 'Products not found'
            ], 404);
        }

        // Return the products as JSON
        return response()->json([
            'success' => true,
            'data' => $products
        ]);
    }

    public function fetchAllProducts()
    {
        info("request to all proudcts");
        // Convert the comma-separated string to an array
        $products = Product::with('images', 'categories')->get();
        // add image path to all collection
        $products->map(function ($product) {
            $product->image_path = url(Storage::url($product->images->first() ? $product->images->first()->image : null));
            return $product;
        });

        // Check if the products exist
        if (!$products) {
            return response()->json([
                'success' => false,
                'message' => 'Products not found'
            ], 404);
        }

        // Return the products as JSON
        return response()->json([
            'success' => true,
            'data' => $products
        ]);
    }


    public function fetchProductsByCategory(string $slug)
    {
        info($slug . " Category");
        $category = Category::where('slug', $slug)->firstOrFail();
        info($category->id);
        $products = $category->products()->with('images', 'categories')->get();

        info($products->count());

        // add image path to all collection
        $products->map(function ($product) {
            info($product->images->first());
            $product->image_path = url(Storage::url($product->images->first()->image ?? ""));
            return $product;
        });

        // Check if the products exist
        if (!$products) {
            return response()->json([
                'success' => false,
                'message' => 'Products not found'
            ], 404);
        }

        // Return the products as JSON
        return response()->json([
            'success' => true,
            'data' => $products
        ]);
    }
}
