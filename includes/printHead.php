<div id="printHead">

<!---------------------------Horizontal Navbar--------Start--------------------------------->
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">JOBBuddy</a>
  <input class="form-control form-control-dark w-100" type="text" value="Career Guidance Platform " aria-label="Search" readonly>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="AdminHome.php">Admin Home Page</a>
    </li>
  </ul>
</nav>
<!---------------------------Horizontal Navbar--------End--------------------------------->

<!---------------------------Vertical Navbar--------Start--------------------------------->
<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="reportStu.php">
              <span data-feather="file"></span>
              District vise Students
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="reportVtc.php">
              <span data-feather="shopping-cart"></span>
              District vise Vocational Training Centres
            </a>
          </li>
<!-------------------------------------------View Data -----------------Start------------------------------------->        
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Current Data</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="stu_admin_panel.php">
              <span data-feather="file-text"></span>
              Student Details
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="vtc_admin_panel.php">
              <span data-feather="file-text"></span>
              Vocational Training Centre Details
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="com_admin_panel.php">
              <span data-feather="file-text"></span>
              Company Details
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="courses_admin_panel.php">
              <span data-feather="file-text"></span>
              Course Details
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <!-------------------------------------------View Data -----------------End------------------------------------->

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" id="print" class="btn btn-sm btn-outline-secondary">Print</button>
            
          </div>
          
        </div>
      </div>

<!---------------------------Vertical Navbar--------End--------------------------------->

<script src="js\jquery-3.5.1.min.js"></script>
<script src="js\printThis.js"></script>   
<script>
   $('#print').click(function(){
      $('.container-print').printThis();
   })
</script>