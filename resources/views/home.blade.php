@extends('layout.app')
@section('title','Home')

@section('content')
<div class="container-fluid m-0 paralax">
	<div class="row d-flex justify-content-center">
		<div class="col-md-4 text-center topDiv">
			<h2 class="text-white">Software Engineer</h2>
			<h3 class="text-white">Mobile & Web</h3>
			<button class="btn btn-primary">Learn More</button>			
		</div>
	</div>	
</div>
<div class="container">
    <div class="row mt-5">
		<div class="col-md-4 p-2">
	        <div class="card h-100 mb-3">
	            <img class="card-img" src="{{asset('img/laravel.jpg')}}" alt="Card image cap">
	            <div class="card-body">
	                <a href="https://rabbil.com/postDetails/23/জাভাস্ক্রিপ্টের যত গুন ! জাভাস্ক্রিপ্ট হতে পারে নতুনদের জন্যে একটা ভালো শুরু" class="blogCardTitle">জাভাস্ক্রিপ্টের যত গুন ! জাভাস্ক্রিপ্ট হতে পারে নতুনদের জন্যে একটা ভালো শুরু</a>
	                <p class="des-text">সফটওয়্যার ডেভেলপমেন্টের জন্যে জাভাস্ক্রিপ্ট অন্যতম উত্তম সলুশন। ওয়েব,মোবাইল, ডেক্সটপ, ন্যাটিভ, হাইব্রিড, ক্রস যেটা করতে চান জাভাস্ক্রিপ্ট দিয়ে সবি সম্ভব। </p>
	                <p class="card-text"><small class="text-muted"><i class="fa mr-1 fa-calendar-alt"></i>01/07/2020</small></p>
	            </div>
	        </div>
   		</div>
   		<div class="col-md-4 p-2">
	        <div class="card h-100 mb-3">
	            <img class="card-img" src="{{asset('img/react.jpg')}}" alt="Card image cap">
	            <div class="card-body">
                    <a target="_blank" href="http://react.rabbil.com/" class="blogCardTitle">রিয়াক্ট ওয়েব সাইট প্রোজেক্ট</a>
                    <p class="des-text my-1">এই কোর্সে রিয়াক্ট ব্যাবহার করে একটি ওয়েব সাইট এবং এডমিন প্যানেল ডেভেলপ দেখানো হয়েছে। সাথে লুমেন Rest API এর ক্লাস পাচ্ছেন ফ্রিতে </p>                    
                </div>
	        </div>
   		</div>
   		<div class="col-md-4 p-2">
	        <div class="card h-100 mb-3">
	            <img class="card-img" src="{{asset('img/dart.jpg')}}" alt="Card image cap">
	            <div class="card-body">
                    <a target="_blank" href="https://www.youtube.com/playlist?list=PLkyGuIcLcmx1mIPyMdVodlSVJqL7Y9Wv7" class="blogCardTitle">ডার্ট প্রোগ্রামিং নতুনদের জন্যে</a>
                    <p class="des-text my-1">কোর্সটি সম্পুর্ন ফ্রি, নতুনদের জন্যে আছে Dart Programming এর ব্যাসিক বিষয় গুলি </p>
               </div>
	        </div>
   		</div>
    </div>    
</div>
@endsection