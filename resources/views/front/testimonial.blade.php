<!DOCTYPE html>
<html lang="en">

<head>
@include('front.partials.head')
</head>

<body>
    <div class="container-fluid bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
             @include('front.partials.header')

            <div class="container-fluid py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Testimonial</h1>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Testimonial Start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
                    <h1 class="mb-5">Our Clients Say!!!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Super restaurant, accueil, cuisine,service Un joli spot avec une vue sur l océan
                             Une belle adresse ou les plats sont copieux et raffinés De l entrée au dessert.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="{{asset('front/img/testimonial-1.jpg')}}" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Viravan P</h5>
                                <small>Date de la visite : mars 2024</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Toute la carte est sublime, à des prix imbattables :
                             tajine de bœuf pruneau délicieux, 
                             tajine poulet citron olives succulent ,
                              tbone d'une tendretée à la petite cuillère , 
                              burger pain maison avec des vraies frittes , 
                              desserts maison incroyables . Tout est parfait ,
                             l'équipe est super accueillante et rodée, mes respect au Chef.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="{{asset('front/img/testimonial-2.jpg')}}" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">widhoff m</h5>
                                <small>Date de la visite : mars 2024</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Idéalement situé dans le superbe village de TAGHAZOUT, 
                            avec une vue mer imprenable; difficile d'être plus près de l'océan; 
                            accueil parfait, cuisine locale (sardines et casserole du pêcheurs, excellents poke bowl...) 
                            Gentillesse du personnel Un pur moment de plaisir.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="{{asset('front/img/testimonial-3.jpg')}}" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">JmC616</h5>
                                <small>Date de la visite : février 2024</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Merci à Adou pour son service et son accueil, un vrai professionnel, rare de nos jours..
                             vote cuisine rien à redire tout était parfait Je recommande.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="{{asset('front/img/testimonial-4.jpg')}}" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">flo U</h5>
                                <small>Date de la visite : mars 2024</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
        

        <!-- Footer Start -->
        @include('front.partials.footer')
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    @include('front.partials.script')
</body>

</html>