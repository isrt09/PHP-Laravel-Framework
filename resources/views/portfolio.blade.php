@extends('layout.app')
@section('title','Portfolio')

@section('content')
<div class="container">
	<div class="row mt-5">
       <div class="col-md-4 p-1">
	       <div class="m-1 h-100 card ">
	            <img class="card-img" src="{{asset('img/laravel.jpg')}}" alt="Card image cap">
	            <div class="card-body">
	                <a target="_blank" href="http://laravel.rabbil.com/" class="blogCardTitle">লারাভেল ব্যাসিক থেকে লাইভ প্রোজেক্ট</a>
	                <p class="des-text my-1">একজন ভালো লারাভেল ওয়েব ডেভেলপার হওয়ার জন্যে যা যা দরকার ইনশাল্লাহ এই কোর্সে পাবেন। কোর্সটি প্রতিনিয়ত আপডেট হচ্ছে, এবং নতুন নতুন আইটেম যুক্ত হচ্ছে</p>
	                <p class="des-text my-1"><b class="text-merun">কোর্স ফিঃ ৩০০০ টাকা </b></p>
	                <a target="_blank" href="http://laravel.rabbil.com/" class="btn btn-info">শুরু করুন</a>
	            </div>
	       </div>
        </div>
        <div class="col-md-4 p-1">
	       <div class="m-1 h-100 card ">
	            <img class="card-img" src="{{asset('img/ecom.png')}}" alt="Card image cap">
	            <div class="card-body">
                    <a target="_blank" href="http://ecom.rabbil.com/" class="blogCardTitle">ই-কমার্স সিস্টেম কমপ্লিট সিরিজ</a>
                    <p class="des-text my-1">এই সিরিজে ই-কমার্স ওয়েব সাইটের সাথে থাকছে ই-কমার্স মোবাইল অ্যাপ। এছাড়া এখানে  পেয়ে যাচ্ছেন Progressive Web App নিয়ে বিশেষ ক্লাস</p>
                    <p class="des-text my-1"><b class="text-merun">কোর্স ফিঃ ৩০০০ টাকা </b></p>
                    <a target="_blank" href="http://ecom.rabbil.com/" class="btn my-1 normal-btn-outline">শুরু করুন</a>
                </div>
	       </div>
        </div>
        <div class="col-md-4 p-1">
	       <div class="m-1 h-100 card ">
	            <img class="card-img" src="{{asset('img/react.jpg')}}" alt="Card image cap">
	            <div class="card-body">
                        <a target="_blank" href="http://react.rabbil.com/" class="blogCardTitle">রিয়াক্ট ওয়েব সাইট প্রোজেক্ট</a>
                        <p class="des-text my-1">এই কোর্সে রিয়াক্ট ব্যাবহার করে একটি ওয়েব সাইট এবং এডমিন প্যানেল ডেভেলপ দেখানো হয়েছে। সাথে লুমেন Rest API এর ক্লাস পাচ্ছেন ফ্রিতে </p>
                        <p class="des-text my-1"><b class="text-merun">কোর্স ফিঃ ২০০০ টাকা </b></p>
                        <a target="_blank" href="http://react.rabbil.com/" class="btn my-1 normal-btn-outline">শুরু করুন</a>
                    </div>
	       </div>
        </div>               
    </div>
</div>

@endsection

