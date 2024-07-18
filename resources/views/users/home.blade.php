

<meta charset="utf-8">
<title>DentCare - Dental Clinic Website Template</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="Free HTML Templates" name="keywords">
<meta content="Free HTML Templates" name="description">

<head>

    @include('admin.css')



</head>

<body>
      @include('users.navbar')

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-dark m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-secondary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->







{{-- Full Screen Search --}}
@include('users.search')

{{-- Carousel --}}
@include('users.carousel')

    {{-- Banner --}}
    {{-- @include('users.banner') --}}

      {{-- About --}}
      @include('users.about')

          {{-- Appointments --}}
         @include('users.appointments')

    {{-- Services --}}
    @include('users.services')


    {{-- Testimonials --}}
        @include('users.testimonials')

    {{-- Doctors --}}
@include('users.doctors')

         {{-- Footer --}}
        @include('users.footer')

        <!-- Back to Top -->
 <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>



 <!-- Customized Bootstrap Stylesheet -->
 <link href="css/bootstrap.min.css" rel="stylesheet">

 <!-- Template Stylesheet -->
 <link href="css/style.css" rel="stylesheet">

 <!-- JavaScript Libraries -->
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
 <script src="lib/wow/wow.min.js"></script>
 <script src="lib/easing/easing.min.js"></script>
 <script src="lib/waypoints/waypoints.min.js"></script>
 <script src="lib/owlcarousel/owl.carousel.min.js"></script>
 <script src="lib/tempusdominus/js/moment.min.js"></script>
 <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
 <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
 <script src="lib/twentytwenty/jquery.event.move.js"></script>
 <script src="lib/twentytwenty/jquery.twentytwenty.js"></script>

 <!-- Template Javascript -->
 <script src="js/main.js"></script>

</body>

</html>
