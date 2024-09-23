@extends('layouts.layout')

@section('title', 'Digital Products')

@section('content')
    <section class="container mx-auto py-16">
        <h1 class="text-5xl font-bold text-center text-gray-900 mb-10">Our Digital Products</h1>
        
        <!-- 제품 리스트 -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- 첫 번째 제품 -->
            <div class="bg-white shadow-md p-6 rounded-lg text-center">
                <h2 class="text-3xl font-bold text-gray-900">Product 1</h2>
                <p class="mt-4 text-lg text-gray-600">Short description of the product.</p>
                <p class="mt-4 text-xl font-bold text-gray-800">$99</p>
                <a href="/products/1" class="mt-6 inline-block bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">Learn More</a>
            </div>

            <!-- 두 번째 제품 -->
            <div class="bg-white shadow-md p-6 rounded-lg text-center">
                <h2 class="text-3xl font-bold text-gray-900">Product 2</h2>
                <p class="mt-4 text-lg text-gray-600">Short description of the product.</p>
                <p class="mt-4 text-xl font-bold text-gray-800">$149</p>
                <a href="/products/2" class="mt-6 inline-block bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">Learn More</a>
            </div>

            <!-- 세 번째 제품 -->
            <div class="bg-white shadow-md p-6 rounded-lg text-center">
                <h2 class="text-3xl font-bold text-gray-900">Product 3</h2>
                <p class="mt-4 text-lg text-gray-600">Short description of the product.</p>
                <p class="mt-4 text-xl font-bold text-gray-800">$199</p>
                <a href="/products/3" class="mt-6 inline-block bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">Learn More</a>
            </div>
        </div>
    </section>
@endsection
