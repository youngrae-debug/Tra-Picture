@extends('layouts.layout')

@section('title', 'Product Detail')

@section('content')
    <section class="container mx-auto py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- 제품 이미지 -->
            <div class="bg-white p-6 shadow-md rounded-lg">
                <img src="https://via.placeholder.com/400" alt="Product Image" class="rounded-lg">
            </div>

            <!-- 제품 설명 -->
            <div>
                <h1 class="text-5xl font-bold text-gray-900">Product Name</h1>
                <p class="mt-6 text-xl text-gray-600">Detailed description of the product, highlighting features and benefits.</p>
                <p class="mt-4 text-2xl font-bold text-gray-800">$199</p>

                <!-- 구매 버튼 -->
                <a href="/checkout" class="mt-6 inline-block bg-green-500 text-white px-8 py-3 rounded-lg hover:bg-green-600">Buy Now</a>
            </div>
        </div>
    </section>
@endsection
