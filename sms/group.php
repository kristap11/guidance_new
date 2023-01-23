<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/sidebar.css" />
    <link rel="stylesheet" href="assets/css/card.css" />
    <link rel="stylesheet" href="submod_style/counseling.css"/>
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
  </head>
  <body>
    <main class="container-fluid">
      <ul class="topbar m-0 list-unstyled">
        <div
          class="topbarChild d-flex justify-content-between align-items-center"
        >
          <li class="topBarLogo text-dark">
            <div class="logo-details d-flex align-items-center">
              <i class="bx bx-menu rounded-circle" id="btn"></i>
              <img
                class="ms-2 ms-sm-3 my-auto"
                src="assets/images/newLogin/logo.png"
                width="35"
                height="35"
                alt="bcp-logo"
              />
              <div class="logo_name text-dark ms-1 ms-sm-3">BESTLINK</div>
              <div class="my-auto search-boxContainer d-none d-lg-block">
                <input
                  type="text"
                  class="form-control search-box"
                  type="search"
                  placeholder="Search..."
                  aria-label="Example text with button addon"
                  aria-describedby="button-addon1"
                />
              </div>
            </div>
          </li>
          <div class="d-flex align-items-center justify-content-end">
            <li>
              <i class="bx bxs-message-dots fs-4 me-3 mt-1 m-0"></i>
              <i class="bx bxs-bell fs-4 mt-1 m-0"></i>
            </li>
            <li>
              <div class="nav-item dropdown my-auto ms-4">
                <a
                  id="dropdownmenu"
                  class="nav-link dropdown-toggle d-flex align-items-center"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <h5 class="m-0 d-none d-sm-block">User Name</h5>
                  <img
                    class="ms-0 ms-sm-3"
                    src="assets/images/man.png"
                    width="32"
                    height="32"
                    alt="profile-picture"
                  />
                </a>
                <ul class="dropdown-menu border shadow dropdownContainer">
                  <li><a class="dropdown-item" href="#">Edit Profile</a></li>
                  <li><a class="dropdown-item" href="#">Settings</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <a class="dropdown-item" href="login/login.php">Logout</a>
                  </li>
                </ul>
              </div>
            </li>
          </div>
        </div>
      </ul>
      <div class="px-0 d-xl-flex position-relative d-flex">
      <div class="sidebar close rounded shadow">
          <ul class="nav-list p-0 m-0">
            <li class="d-block d-lg-none">
              <i class="bx bx-search"></i>
              <input type="text" placeholder="Search..." />
              <span class="tooltip">Search</span>
            </li>
            <li>
              <a href="index.php">
                <i class="bx bx-grid-alt"></i>
                <span class="links_name">Dashboard</span>
              </a>
              <span class="tooltip">Dashboard</span>
            </li>
            <li>
              <a href="profiling.php">
                <i class='bx bxs-user-circle'></i>
                <span class="links_name">Profiling</span>
              </a>
              <span class="tooltip">Profiling</span>
            </li>
            <li>
              <div class="iocn-link arrow">
                <a class="">
                  <i class='bx bx-smile'></i>
                  <span class="links_name">Counseling Service</span>
                </a>
                <i class="bx bx-chevron-down arrow"></i>
              </div>
              <ul class="sub-menu">
                <li><a class="link_name p-0">Counseling Service</a></li>
                <li><a href="individual.php">Individual Counseling</a></li>
                <li><a href="group.php">Group Counseling</a></li>
              </ul>
              <!-- <span class="tooltip">Analytics</span> -->
            </li>
            <li>
              <a href="appointment.php">
                <i class='bx bxs-calendar'></i>
                <span class="links_name">Appointment</span>
              </a>
              <span class="tooltip">Appointment</span>
            </li>
            <li>
              <a href="visitlogs.php">
               <i class='bx bx-log-in' ></i>
                <span class="links_name">Visit logs</span>
              </a>
              <span class="tooltip">Visit logs</span>
            </li>
            <li>
              <a href="career_orientation.php">
                <i class='bx bx-search-alt'></i>
                <span class="links_name">Career Orientation</span>
              </a>
              <span class="tooltip">Career Orientation</span>
            </li>
            <li>
              <a href="scholarship.php">
                <i class='bx bxs-graduation' ></i>
                <span class="links_name">Scholarship</span>
              </a>
              <span class="tooltip">Scholarship</span>
            </li>
            <li>
              <a href="res.php">
                <i class='bx bx-list-check'></i>
                <span class="links_name">Research/Evaluation/Survey</span>
              </a>
              <span class="tooltip">Research/Evaluation/Survey</span>
            </li>
            <li>
              <a href="student_evaluation.php">
                <i class='bx bxs-user-rectangle'></i>
                <span class="links_name">Student Evaluation</span>
              </a>
              <span class="tooltip">Student Evaluation</span>
            </li>
            <li>
              <a href="reports.php">
                <i class='bx bxs-report' ></i>
                <span class="links_name">Reports</span>
              </a>
              <span class="tooltip">Reports</span>
            </li>
          </ul>
        </div>
        <section class="home-section ms-3 p-5 bg-light rounded shadow">
<!--------------------------------------------------------------------------edit here------------------------------------------------------------------------------------------->

<div class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
</div>



          <h2>GROUP COUNSELING</h2>
          <div class="py-3"> 
          <button href="index.php" type="button" class="btn btn-primary text-light" data-bs-toggle="modal" data-bs-target=".inputStudent">Start Counceling</button>
          </div>
<div class="d-flex justify-content-between align-items-center">
            <div class="dropdown d-flex align-items-center">
    
              <button class="btn text-black me-3  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"> Behavior Therapy </button>
              <button href="index.php" type="button" class="btn btn-primary text-light" data-bs-toggle="modal" data-bs-target="#startModal">Filter</button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Behavior Therapy</a></li>
                    <li><a class="dropdown-item" href="#">Cognitive Therapy</a></li>
                    <li><a class="dropdown-item" href="#">Educational Counseling</a></li>
                   <li><a class="dropdown-item" href="#">Holistic Therapy</a></li>
                    <li><a class="dropdown-item" href="#">Mental Health Counseling</a></li>
                </ul>
</div>   
<nav class="navbar bg-body-tertiary ">
  <div class="container-fluid">
    <form class="d-flex" role="search">
      <input class="form-control " type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-primary" type="submit">Search</button>
    </form>
  </div>
</nav>
</div>
<div class="dropdown py-3 ">
            <a class="btn btn-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> 10 </a>
              <ul class="dropdown-menu">
                 <li><a class="dropdown-item" href="#">10</a></li>
                 <li><a class="dropdown-item" href="#">25</a></li>
                 <li><a class="dropdown-item" href="#">50</a></li>
                 <li><a class="dropdown-item" href="#">100</a></li>
             </ul>
</div>
  
         <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th scope="col">Group Number</th>
                <th scope="col">Counseling Approach</th>
                <th scope="col">Counseling Type</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
         <tbody>
             <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Cognitive Therapy</td>
                <td><a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#viewModal" role="button">View</a></td>
             </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                </tr>
          </tbody>
        </table>    
<!--------------------------------------------------------------------------edit here------------------------------------------------------------------------------------------->
        </section>
      </div>
    </main>

<!-- START COUNSELING/INPUT STUDENT NUMBER -->
<div class="modal fade inputStudent" onclick="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-secondary">Start Counseling:</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-secondary">
        <label>Input student's number before proceeding</label><br>
        <button type="button" class="btn btn-primary m-2" href="#">Add student(s)</button><br>
        <div class="row">
          <div class="col-4 ms-3">
            <label for="message-text" class="">Student Number:</label>
            <input type="#" id=""  class="form-control" style="width:300px;" placeholder="ex. 190***22">
          </div>
          <div class="col-7 ms-5">
            <label for="message-text" class="">Student Name:</label>
              <div class="d-flex align-items-center">
                <input type="#" id=""  class="form-control" style="width:300px;" placeholder="Student Name......">
                <button type="button"  class="btn btn-primary ms-2" href="#">+</button>
              </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" role="button">Submit</a>
      </div>
    </div>
  </div>
</div>


 <!-- START COUNSELING -->
<form action="pages/services/finalization.php">
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">START COUNSELING:</h3>
      </div>
      <div class="modal-body ">
          <div class="mb-3">
            <label for="message-text" class="col-form-label">I. Background of the Case:</label>
            <textarea class="form-control" id="" rows="6"></textarea>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">II. Counseling Plan:</label>
              <div class="mb-3 ps-2 d-flex align-items-center">
                <label for="message-text" class="col-form-label me-3">a. Counseling Approach(es):</label>
                  <div class="dropdown">
                   <a class="btn btn-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Behavior Therapy </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Behavior Therapy</a></li>
                      <li><a class="dropdown-item" href="#">Cognitive Therapy</a></li>
                      <li><a class="dropdown-item" href="#">Educational Counseling</a></li>
                      <li><a class="dropdown-item" href="#">Holistic Therapy</a></li>
                      <li><a class="dropdown-item" href="#">Mental Health Counseling</a></li>
                    </ul>
                </div>
              </div>
                <div class="ps-2">
                  <label for="message-text" class="col-form-label">b. Counseling Goals:</label>
                  <textarea class="form-control" id="" rows="6"></textarea>
                </div>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">III. Comments:</label>
            <textarea class="form-control" id="" rows="6"></textarea>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">IV. Recommendations:</label>
            <textarea class="form-control" id="" rows="6"></textarea>
          </div>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a class="btn btn-primary" href="pages/services/groupFinalization.php" role="button">Save</a>
      </div> 
    </div>
  </div>
  </div> 
</form>

<!-- Start Counselling -->
<div class="modal fade" id="startModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Start Counseling:</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-secondary">
        <label>Input student's number before proceeding</label>
          <div class="pt-3">
            <label for="message-text" class="col-form-label">Student Number:</label>
            <input type="#" id="" class="form-control" placeholder="ex. 190***22">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="pages/services/indvCounseling.php" role="button">Sumbit</a>
      </div>
    </div>
  </div>
</div>

<!-- View Result -->
<div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Name of the Student</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container bg-secondary p-5">
          <label> View Counceling Report</label>
        </div>
        <div class="container bg-info-subtle mt-5 p-5">
          <div class="mb-3">
            <label for="message-text" class="col-form-label">I. Background of the Case:</label>
            <textarea class="form-control" id="" rows="6"></textarea>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">II. Counseling Plan:</label>
              <div class="mb-3 ps-2 d-flex align-items-center">
                <label for="message-text" class="col-form-label me-3">a. Counseling Approach(es):</label>
                  <div class="dropdown">
                   <a class="btn btn-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Behavior Therapy </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Behavior Therapy</a></li>
                      <li><a class="dropdown-item" href="#">Cognitive Therapy</a></li>
                      <li><a class="dropdown-item" href="#">Educational Counseling</a></li>
                      <li><a class="dropdown-item" href="#">Holistic Therapy</a></li>
                      <li><a class="dropdown-item" href="#">Mental Health Counseling</a></li>
                    </ul>
                </div>
              </div>
                <div class="ps-2">
                  <label for="message-text" class="col-form-label">b. Counseling Goals:</label>
                  <textarea class="form-control" id="" rows="6"></textarea>
                </div>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">III. Comments:</label>
            <textarea class="form-control" id="" rows="6"></textarea>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">IV. Recommendations:</label>
            <textarea class="form-control" id="" rows="6"></textarea>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



    <script src="assets/js/dropdown.js"></script>
    <script src="assets/js/sidebar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
