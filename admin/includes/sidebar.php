 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
  <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-laugh-wink"></i>
  </div>
  <div class="sidebar-brand-text mx-3">Healthy Card</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
  <a class="nav-link" href="index.php">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Addons
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
    <i class="fas fa-fw fa-folder"></i>
    <span>Pages</span>
  </a>
  <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Other Pages:</h6>


      <?php
      
        $nam  = $_SESSION['name'];
        $id  = $_SESSION['login'];
        require_once "functions/connect.php";
        $sel  = "SELECT * FROM $nam  WHERE  id = $id";
        $query = $conn -> query($sel);
        $name  = $query -> fetch_assoc();

        if ($_SESSION['priv'] == 100) {
        echo '<a class="collapse-item" href="ouner.php">owner</a>';
        echo '<a class="collapse-item" href="manager.php">Managers</a>';
        echo '<a class="collapse-item" href="hospitals.php">Hospitals</a>';
      } elseif ($_SESSION['priv'] == 200) {
        echo '<a class="collapse-item" href="sections.php?id=' . $name['hospital_name_id'] . '">Specialty</a>';
        echo '<a class="collapse-item" href="pharmacy.php?id=' . $name['hospital_name_id'] . '">Pharmacy</a>';
        echo '<a class="collapse-item" href="DRs.php?id=' . $name['hospital_name_id'] . '">DRs</a>';
        echo ' <a class="collapse-item" href="pharmacist.php?id=' . $name['hospital_name_id'] . '">pharmacist</a>';
        echo '<a class="collapse-item" href="nurses.php?id=' . $name['hospital_name_id'] . '">Nurses</a>';
        echo '<a class="collapse-item" href="employees.php?id=' . $name['hospital_name_id'] . '">Employees</a>';
        echo '<a class="collapse-item" href="patients.php?id=' . $name['hospital_name_id'] . '">Patients</a>';
        echo '<a class="collapse-item" href="reservations.php?id=' . $name['hospital_name_id'] . '">Reservations</a>';
        echo '<a class="collapse-item" href="report.php?id=' . $name['hospital_name_id'] . '">Reports</a>';
        echo '<a class="collapse-item" href="review.php">reviews</a>';
        echo '<a class="collapse-item" href="contact.php">contact</a>';
      }
      // elseif ($_SESSION['priv'] == 300) {

      // } elseif ($_SESSION['priv'] == 400) {
        
      // } elseif ($_SESSION['priv'] == 500) {
      //   echo '<a class="collapse-item" href="patients.php">Patients</a>';

      // } elseif ($_SESSION['priv'] == 700) {
      //   echo '<a class="collapse-item" href="pharmacy.php">Pharmacy</a>';
      // }

       ?>



        <!-- <a class="collapse-item" href="medical.php">medical</a> -->



        <!-- <a class="collapse-item" href="404.php">404 Page</a> -->
        <!-- <div class="collapse-divider"></div>
       <h6 class="collapse-header">Login Screens:</h6>
      <a class="collapse-item" href="login.php">Login</a>
      <a class="collapse-item" href="register.php">Register</a>
      <a class="collapse-item" href="forgot-password.php">Forgot Password</a> -->
    </div>
  </div>
</li>

<!-- Nav Item - Charts -->
<li class="nav-item">
  <a class="nav-link" href="charts.php">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Charts</span></a>
</li>

<!-- Nav Item - Tables -->
<!-- <li class="nav-item">
  <a class="nav-link" href="tables.html">
    <i class="fas fa-fw fa-table"></i>
    <span>Tables</span></a>
</li> -->



<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Interface
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
    <i class="fas fa-fw fa-cog"></i>
    <span>Components</span>
  </a>
  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Custom Components:</h6>
      <a class="collapse-item" href="buttons.php">Buttons</a>
      <a class="collapse-item" href="cards.php">Cards</a>
    </div>
  </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
    <i class="fas fa-fw fa-wrench"></i>
    <span>Utilities</span>
  </a>
  <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Custom Utilities:</h6>
      <a class="collapse-item" href="utilities-color.php">Colors</a>
      <a class="collapse-item" href="utilities-border.php">Borders</a>
      <a class="collapse-item" href="utilities-animation.php">Animations</a>
      <a class="collapse-item" href="utilities-other.php">Other</a>
    </div>
  </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->
