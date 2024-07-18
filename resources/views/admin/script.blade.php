

<script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->

    {{-- for Form --}}
    <script>
        document.getElementById("add-doctor-btn").addEventListener("click", function() {
            window.location.href = "/form";
        });
    </script>

{{-- for Patient --}}
<script>
    document.getElementById("add-patient-btn").addEventListener("click", function() {
        window.location.href = "/patient_form";
    });
</script>

{{-- for Medicine --}}
<script>
    document.getElementById("add-medicine-btn").addEventListener("click", function() {
        window.location.href = "/medicine_form";
    });
</script>
{{-- for Appointment --}}
<script>
    document.getElementById("add-appointment-btn").addEventListener("click", function() {
        window.location.href = "/appointment_form";
    });
</script>

