<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; // Import the Log facade

class ProductController extends Controller
{
    public function getProducts()
    {
        try {
            // Attempt to fetch all products
            $products = Products::all();

            // Log success message
            Log::info('Products retrieved successfully.', ['product_count' => count($products)]);

            // Return products as a JSON response
            return response()->json($products);

        } catch (\Exception $e) {
            // Log the error message
            Log::error('Error fetching products: ' . $e->getMessage(), [
                'exception' => $e,
                'trace' => $e->getTraceAsString()
            ]);

            // Return a JSON error response with a 500 status code
            return response()->json(['error' => 'Failed to fetch products'], 500);
        }
    }
}
