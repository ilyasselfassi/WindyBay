














































































<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
    <a href="" class="navbar-brand p-0">
        <h1 class="text-primary ">
            <i class="fa fa-utensils me-3 mt-2"></i>
            <img class="mb-2" src="{{asset('front/img/lg-modified.png')}}" alt="Logo"></h1>
        <!-- <img src="img/logo.png" alt="Logo"> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0 pe-4">
            <a href="{{url('/')}}" class="nav-item nav-link ">Home</a>
            <a href="{{url('/about')}}" class="nav-item nav-link">About</a>
            <a href="{{url('/service')}}" class="nav-item nav-link">Service</a>
            <a href="{{url('/menu')}}" class="nav-item nav-link">Menu</a>
            <a href="{{url('/testimonial')}}" class="nav-item nav-link">Testimonial</a>
            <a href="{{url('/contact')}}" class="nav-item nav-link">Contact & location</a>
        </div>
        <a href="{{url('/booking')}}" class="btn btn-primary py-2 px-4">Book A Table</a>
    </div>
</nav>