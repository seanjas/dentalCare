 <!-- Team Start -->
 <div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.1s">
                <div class="section-title bg-light rounded h-100 p-5">
                    <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Dentist</h5>
                    <h1 class="display-6 mb-4">Meet Our Certified & Experienced Dentist</h1>
                    <a href="appointment.html" class="btn btn-primary py-3 px-5">Appointment</a>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                @foreach ($doctor as $doctors)
                <div class="team-item wow slideInUp" data-wow-delay="0.3s">
                    <div class="position-relative rounded-top" style="z-index: 1;">
                        <img class="img-fluid rounded-top w-100" src="doctorimage/{{$doctors->image}}" alt="">
                        <div class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                            <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                        <h4 class="mb-2">{{$doctors->name}}</h4>
                        <p class="text-primary mb-0">Dentist</p>
                    </div>
                </div>
                @endforeach
            </div>


        </div>
    </div>
</div>
<!-- Team End -->
