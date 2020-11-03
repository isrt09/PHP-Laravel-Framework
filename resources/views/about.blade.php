@extends('layout.app')
@section('title','About')

@section('content')
<div class="container">
	<div class="row mt-5">
        <div class="col-md-4 p-1 ">
            <div class="card">
                <img class="w-100" src="{{asset('img/blog.jpg')}}" alt="Card image cap">
                <div class="w-100 p-4">
                    <h5 class="blog-card-title mt-2">ফ্লাটার কেনো শিখবেন, কেনো শিখবেন না </h5>
                    <h6 class="blog-card-subtitle p-0 ">মোবাইল স্ক্রিনের বিবর্তন হলো যেভাবে. আইবিএম সায়মন: প্রথম মোবাইল ফোন যারা টাচস্ক্রীন প্রযুক্তি এনেছিল। তবে ফোনটির ব্যাটারি মাত্র এক ঘণ্টা স্থায়ী হতো।</h6>
                    <h6 class="blog-card-date "> <i class="far fa-clock"></i> ২৪/০৫/২০২০</h6>
                    <button class="btn btn-info">আরো পড়ুন </button>
                </div>
            </div>
        </div>
        <div class="col-md-4 p-1 ">
            <div class="card">
                <img class="w-100" src="{{asset('img/dart.jpg')}}" alt="Card image cap">
                <div class="w-100 p-4">
                    <h5 class="blog-card-title mt-2">ফ্লাটার কেনো শিখবেন, কেনো শিখবেন না </h5>
                    <h6 class="blog-card-subtitle p-0 ">মোবাইল স্ক্রিনের বিবর্তন হলো যেভাবে. আইবিএম সায়মন: প্রথম মোবাইল ফোন যারা টাচস্ক্রীন প্রযুক্তি এনেছিল। তবে ফোনটির ব্যাটারি মাত্র এক ঘণ্টা স্থায়ী হতো।</h6>
                    <h6 class="blog-card-date "> <i class="far fa-clock"></i> ২৪/০৫/২০২০</h6>
                    <button class="btn btn-info">আরো পড়ুন </button>
                </div>
            </div>
        </div>
        <div class="col-md-4 p-1 ">
            <div class="card">
                <img class="w-100" src="{{asset('img/reactnative.jpg')}}" alt="Card image cap">
                <div class="w-100 p-4">
                    <h5 class="blog-card-title mt-2">ফ্লাটার কেনো শিখবেন, কেনো শিখবেন না </h5>
                    <h6 class="blog-card-subtitle p-0 ">মোবাইল স্ক্রিনের বিবর্তন হলো যেভাবে. আইবিএম সায়মন: প্রথম মোবাইল ফোন যারা টাচস্ক্রীন প্রযুক্তি এনেছিল। তবে ফোনটির ব্যাটারি মাত্র এক ঘণ্টা স্থায়ী হতো।</h6>
                    <h6 class="blog-card-date "> <i class="far fa-clock"></i> ২৪/০৫/২০২০</h6>
                    <button class="btn btn-info">আরো পড়ুন </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection