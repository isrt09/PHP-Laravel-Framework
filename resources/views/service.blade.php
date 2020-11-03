@extends('layout.app')
@section('title','Service')

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
	            <img class="card-img" src="{{asset('img/laravel.jpg')}}" alt="Card image cap">
	            <div class="card-body">
	                <a target="_blank" href="http://laravel.rabbil.com/" class="blogCardTitle">লারাভেল ব্যাসিক থেকে লাইভ প্রোজেক্ট</a>
	                <p class="des-text my-1">একজন ভালো লারাভেল ওয়েব ডেভেলপার হওয়ার জন্যে যা যা দরকার ইনশাল্লাহ এই কোর্সে পাবেন। কোর্সটি প্রতিনিয়ত আপডেট হচ্ছে, এবং নতুন নতুন আইটেম যুক্ত হচ্ছে</p>
	                <p class="des-text my-1"><b class="text-merun">কোর্স ফিঃ ৩০০০ টাকা </b></p>
	                <a target="_blank" href="http://laravel.rabbil.com/" class="btn btn-info">শুরু করুন</a>
	            </div>
	       </div>
		</div>		
	</div>
	<div class="row mt-5 mb-5">
		<div class="col-md-6">
	        <h3 class="title-text">ঠিকানা</h3>
	        <p class="footer-text"><i class="fas fa-map-marker-alt"></i> শেখেরটেক ৮,মোহাম্মদপুর, ঢাকা </p>
	        <p class="footer-text"><i class="fas fa-phone"></i> 01774225159 (Manager) </p>
	        <p class="footer-text"><i class="fas fa-envelope"></i>johnsmith@gmail.com</p>       
	    </div>
		<div class="col-md-6">
			<form>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Email address</label>
			    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">			   
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Send Message</label>
			    <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>			   
			  </div>			 
			  <button type="submit" class="btn btn-primary">Send Now</button>
			</form>
		</div>
	</div>
</div>	


@endsection