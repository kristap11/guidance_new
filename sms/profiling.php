<?php include('header.php') ?>


<section class="home-section mx-3 bg-light rounded shadow">
  <div class="text">
    
    <div class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item"><a href="#">Library</a></li>
      <li class="breadcrumb-item active" aria-current="page">Data</li>
    </div>


    <h2>PROFILING</h1>
      <div class="d-flex justify-content-between align-items-center">
        <div class="dropdown d-flex align-items-center">
          <a class="btn btn-primary ms-1" role="button" href="add_profile.php">Add</a>
          <a class="btn btn-secondary ms-1" role="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Import</a>

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
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Cognitive Therapy</td>
            <td>Regular</td>
            <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".profile">View</button></td>
          </tr>
        </tbody>
      </table>

  </div>
</section>
</div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");
  let arrow = document.querySelectorAll(".arrow");

  closeBtn.addEventListener("click", () => {
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  searchBtn.addEventListener("click", () => {
    // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
    if (sidebar.classList.contains("open")) {
      closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
    } else {
      closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
    }
  }

  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e) => {
      let arrowParent = e.currentTarget.parentNode;
      console.log(arrowParent);
      arrowParent.classList.toggle("showMenu");
    });
  }

  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", () => {
    sidebar.classList.toggle("close");
  });
</script>
</body>

</html>