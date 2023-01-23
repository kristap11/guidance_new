<?php include('header.php') ?>



<!--------------------------------------------------------------------------edit here------------------------------------------------------------------------------------------->
<section class="home-section ms-3 p-5 bg-light rounded shadow">
  <div class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
  </div>



  <h2>INDIVIDUAL COUNSELING</h2>
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
        <th scope="col">Student Number</th>
        <th scope="col">Student Name</th>
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
        <div class="row pt-3">
          <div class="col-4 ms-3">
            <label for="message-text" class="">Student Number:</label>
            <input type="text" name="student_no" class="form-control" style="width:300px;" placeholder="ex. 190***22" required>
          </div>
          <div class="col-7 ms-5">
            <label for="message-text" class="">Student Name:</label>
            <div class="d-flex align-items-center">
              <input type="text" name="student_name" class="form-control" style="width:300px;" placeholder="Student Name......" required>
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
          <a class="btn btn-primary" href="pages/services/finalization.php" role="button">Save</a>
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