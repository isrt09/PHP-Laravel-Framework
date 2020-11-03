<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
    <img src="{{asset('img/logo.svg')}}" width="100%" height="30" alt="" loading="lazy">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/about')}}">About</a>
      </li>      
      <li class="nav-item">
        <a class="nav-link" href="{{url('/service')}}">Service</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="{{url('/portfolio')}}">Portfolio</a>
      </li> 
    </ul>    
  </div>
</nav>