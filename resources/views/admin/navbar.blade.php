<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="/">
            <h2 class=" text-white font-bold">Dental Care Admin</h2>
        </a>
      <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="admin/assets/images/tooth.svg" alt="logo" /></a>
    </div>
    <ul class="nav">

      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href='/home'>
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('add_doctor_view')}}">
            <span class="menu-icon">
                <i class="mdi mdi-doctor"></i>
            </span>
            <span class="menu-title">Doctors</span>
        </a>
    </li>


    <li class="nav-item menu-items">
        <a class="nav-link" href="add_patient_view">
            <span class="menu-icon">
                <i class="mdi mdi-hospital"></i>
            </span>
            <span class="menu-title">Patients</span>
        </a>
    </li>

    <li class="nav-item menu-items">
        <a class="nav-link" href="add_appointment_view">
          <span class="menu-icon">
            <i class="mdi mdi-calendar-clock"></i>
          </span>
          <span class="menu-title">Appointments</span>
        </a>
    </li>

    <li class="nav-item menu-items">
        <a class="nav-link" href="add_medicine_view">
          <span class="menu-icon">
            <i class="mdi mdi-calendar-clock"></i>
          </span>
          <span class="menu-title">Medicine</span>
        </a>
    </li>

    <li class="nav-item menu-items">
        <a class="nav-link" href="add_report_view">
          <span class="menu-icon">
            <i class="mdi mdi-calendar-clock"></i>
          </span>
          <span class="menu-title">Generated Report</span>
        </a>
    </li>


    </ul>
  </nav>
  <!-- partial -->
