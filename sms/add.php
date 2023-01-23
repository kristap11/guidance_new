<?php include('header.php') ?>


<section class="home-section mx-3 bg-light rounded shadow">
  <div class="text">

    <form action="add_profile_query.php" method="POST">
      <div clas="div">
        <h2 class="font-monospace pt-3">PERSONAL INFORMATION:</h2>
        <div class="container  p-3">
          <div class="div">
            <label for="message-text" class="col-form-label">Name:</label>
            <input type="text" name="lname" placeholder="Last Name"></input>
            <input type="text" name="fname" placeholder="First Name"></input>
            <input type="text" name="mname" placeholder="Middle Name"></input>
          </div>
          <label for="message-text" class="col-form-label">Nickname:</label>
          <input type="text" name="nname" placeholder=""></input>
          <label for="message-text" class="col-form-label">Date of Birth</label>
          <input type="date" name="date_of_birth"></input>
          <label for="message-text" class="col-form-label">Gender:</label>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male">
            <label class="form-check-label" for="inlineRadio1">male</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female">
            <label class="form-check-label" for="inlineRadio2">female</label>
          </div>
          <div class="div">
            <label for="message-text" class="col-form-label">Email Address:</label>
            <input type="text" name="email" placeholder=""></input>
            <label for="message-text" class="col-form-label">Contact Number:</label>
            <input type="text" name="contact_number" placeholder=""></input>
          </div>
          <div class="div">
            <label for="message-text" class="col-form-label">Permanent Address:</label>
            <input type="text" name="per_address" placeholder=""></input>
          </div>
          <div class="div">
            <label for="message-text" class="col-form-label">Nationality:</label>
            <input type="text" name="nationality" placeholder=""></input>
            <label for="message-text" class="col-form-label">Civil Status:</label>
            <input type="text" name="civil_status" placeholder=""></input>
            <label for="message-text" class="col-form-label">Religion:</label>
            <input type="text" name="religion" placeholder=""></input>
          </div>
          <div class="div">
            <label for="message-text" class="col-form-label">Name of Spouse(if married):</label>
            <input type="text" name="spouse" placeholder=""></input>
            <label for="message-text" class="col-form-label">Spouse's Occupation:</label>
            <input type="text" name="spuse_occupation" placeholder=""></input>
          </div>
          <div class="div">
            <label for="message-text" class="col-form-label">Birth Order:</label>
            <input type="number" name="birth_order" placeholder="Choose..."></input>
            <label for="message-text" class="col-form-label">No. of brother/s:</label>
            <input type="number" name="brother" placeholder="Choose..."></input>
            <label for="message-text" class="col-form-label">No. of sister/s:</label>
            <input type="number" name="sister" placeholder="Choose..."></input>
          </div>
          <label for="message-text" class="col-form-label">Living with (please choose):</label>
          <div class="div d-inline-flex text-center">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="living_with" id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1">
                Parents
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input ms-1" type="radio" name="living_with" id="flexRadioDefault2" checked>
              <label class="form-check-label" for="flexRadioDefault2">
                Guardian
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input ms-1" type="radio" name="living_with" id="flexRadioDefault3" checked>
              <label class="form-check-label" for="flexRadioDefault3">
                Boarding House
              </label>
            </div>
          </div>
          <div class="">
            <label for="message-text" class="col-form-label">Name of Father</label>
            <label for="message-text" class="col-form-label ms-5">Name of Mother</label></br>
            <input type="text" name="name_of_father" placeholder=""></input>
            <input type="text" name="name_of_mother" placeholder=""></input>
          </div>
          <div class="div">
            <input type="text" name="father_address" placeholder=""></input>
            <label for="message-text" class="col-form-label">Address:</label>
            <input type="text" name="mother_address" placeholder=""></input>
          </div>
          <div class="div">
            <input type="text" name="father_nationality" placeholder=""></input>
            <label for="message-text" class="col-form-label">Nationality:</label>
            <input type="text" name="mother_nationality" placeholder=""></input>
          </div>
          <div class="div">
            <input type="text" name="father_religion" placeholder=""></input>
            <label for="message-text" class="col-form-label">Religion:</label>
            <input type="text" name="mother_religion" placeholder=""></input>
          </div>
          <div class="div">
            <input type="text" name="father_educ" placeholder=""></input>
            <label for="message-text" class="col-form-label">Educ. Attainment:</label>
            <input type="text" name="mother_educ" placeholder=""></input>
          </div>
          <div class="div">
            <input type="text" name="father_occupation" placeholder=""></input>
            <label for="message-text" class="col-form-label">Occupation:</label>
            <input type="text" name="mother_occupation" placeholder=""></input>
          </div>
          <div class="div">
            <input type="text" name="father_company" placeholder=""></input>
            <label for="message-text" class="col-form-label">Company Name:</label>
            <input type="text" name="mother_company" placeholder=""></input>
          </div>
          <div class="div">
            <input type="date" name="father_birthdate" placeholder=""></input>
            <label for="message-text" class="col-form-label">Birthdate:</label>
            <input type="date" name="mother_birthdate" placeholder=""></input>
          </div>
          <div class="div">
            <input type="text" name="father_contact" placeholder=""></input>
            <label for="message-text" class="col-form-label">Contact Number/s:</label>
            <input type="text" name="mother_contact" placeholder=""></input>
          </div>
          <div class="div">
            <input type="text" name="father_email" placeholder=""></input>
            <label for="message-text" class="col-form-label">EmailAddress:</label>
            <input type="text" name="mother_email" placeholder=""></input>
          </div>
          <div class="pt-3">
            <label for="message-text" class="col-form-label">Name of Guardian:</label>
            <input type="text" name="name_of_gurdian" placeholder=""></input>
            <label for="message-text" class="col-form-label">Relationship:</label>
            <input type="text" name="gurdian_relationship" placeholder=""></input>
          </div>
          <div class="div">
            <label for="message-text" class="col-form-label">Address:</label>
            <input type="text" name="gurdian_address" placeholder=""></input>
            <label for="message-text" class="col-form-label">Contact no.:</label>
            <input type="text" name="gurdian_contact" placeholder=""></input>
          </div>
          <div class="div">
            <label for="message-text" class="col-form-label">Email Address of Guardian:</label>
            <input type="text" name="gurdian_email" placeholder=""></input>
          </div>
          <div class="div">
            <label for="message-text" class="col-form-label">Person to notify in case of emergency:</label>
            <input type="text" name="emergency" placeholder=""></input>
            <label for="message-text" class="col-form-label">Contact no.:</label>
            <input type="text" name="emergency_contact" placeholder=""></input>
          </div>
        </div>
      </div>
      <!--------------------------------------------------------------------------profiling 1------------------------------------------------------------------------------------------->

      <div class="div">
        <h2 class="font-monospace">Educational Background:</h2>
        <div class="container p-3">
          <div class="div">
            <label for="message-text" class="col-form-label pt-2">Please Select if you are:</label>
            <div class="div d-inline-flex text-center">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="class" id="flexRadioDefault1" value= "Freshmen">
                <label class="form-check-label" for="flexRadioDefault1">
                  Freshmen
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input ms-1" type="radio" name="class" id="flexRadioDefault2" value= "Transferee" >
                <label class="form-check-label" for="flexRadioDefault2">
                  Transferee
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input ms-1" type="radio" name="class" id="flexRadioDefault3" value="Second Degree" >
                <label class="form-check-label" for="flexRadioDefault3">
                  Second Degree
                </label>
              </div>
            </div>
          </div>
          <h5 class="pt-3">Tertiary</h5>
          <div class=" p-2">
            <div class="div">
              <label for="message-text" class="col-form-label">School Name:</label>
              <input type="text" name="school_name_tertiary" placeholder=""></input>
              <label for="message-text" class="col-form-label">Address:</label>
              <input type="text" name="" placeholder=""></input>
            </div>
            <div class="div">
              <label for="message-text" class="col-form-label">Year Attended/Graduated:</label>
              <input type="text" name="year_attended" placeholder=""></input>
              <label for="message-text" class="col-form-label">Honors:</label>
              <input type="text" name="honors_tertiary" placeholder=""></input>
            </div>
          </div>
          <h5 class="pt-3">Alternative Learning System</h5>
          <div class="p-2">
            <div class="div">
              <label for="message-text" class="col-form-label">School Name:</label>
              <input type="text" name="school_name_als" placeholder=""></input>
              <label for="message-text" class="col-form-label">Address:</label>
              <input type="text" name="school_address_als" placeholder=""></input>
            </div>
            <div class="div">
              <label for="message-text" class="col-form-label">Year Attended/Graduated:</label>
              <input type="text" name="year_attended_als" placeholder=""></input>
              <label for="message-text" class="col-form-label">Honors:</label>
              <input type="text" name="honors_als" placeholder=""></input>
            </div>
          </div>
          <h5 class="pt-3">Secondary</h5>
          <div class="p-2">
            <div class="div">
              <label for="message-text" class="col-form-label">School Name:</label>
              <input type="text" name="school_name_second" placeholder=""></input>
              <label for="message-text" class="col-form-label">Address:</label>
              <input type="text" name="school_address_second" placeholder=""></input>
            </div>
            <div class="div">
              <label for="message-text" class="col-form-label">Year Attended/Graduated:</label>
              <input type="text" name="year_attended_second" placeholder=""></input>
              <label for="message-text" class="col-form-label">Honors:</label>
              <input type="text" name="honors_second" placeholder=""></input>
            </div>
          </div>
          <h5 class="pt-3">Elementary</h5>
          <div class=" p-2">
            <div class="div">
              <label for="message-text" class="col-form-label">School Name:</label>
              <input type="text" name="school_name_elem" placeholder=""></input>
              <label for="message-text" class="col-form-label">Address:</label>
              <input type="text" name="school_address_elem" placeholder=""></input>
            </div>
            <div class="div">
              <label for="message-text" class="col-form-label">Year Attended/Graduated:</label>
              <input type="text" name="year_attended_elem" placeholder=""></input>
              <label for="message-text" class="col-form-label">Honors:</label>
              <input type="text" name="honors_elem" placeholder=""></input>
            </div>
          </div>
        </div>
        <h2 class="font-monospace pt-3">Insisutional Affiliation:</h2>
        <div class="container p-3">
          <div class=" p-2">
            <div class="div">
              <label for="message-text" class="col-form-label">Name of Organization:</label>
              <input type="text" name="name_of_org" placeholder=""></input>
              <label for="message-text" class="col-form-label">Affiliation:</label>
              <input type="text" name="affiliation" placeholder=""></input>
            </div>
            <div class="div">
              <label for="message-text" class="col-form-label">Year:</label>
              <input type="text" name="affiliation_year" placeholder=""></input>
              <label for="message-text" class="col-form-label">Status:</label>
              <input type="text" name="affiliation_status" placeholder=""></input>
            </div>
          </div>
        </div>
      </div>


      <!--------------------------------------------------------------------------profiling 2------------------------------------------------------------------------------------------->
      <div class="div">
        <h2 class="font-monospace pt-3">EDUCATIONAL BACKGROUND:</h2>
        <div class="container">
          <div class="p-2">
            <div class="div">
              <label for="message-text" class="col-form-label">Company Name:</label>
              <input type="text" name="company_name" placeholder=""></input>
            </div>
            <div class="div">
              <label for="message-text" class="col-form-label">Position:</label>
              <input type="text" name="position" placeholder=""></input>
            </div>
            <div class="div">
              <label for="message-text" class="col-form-label">From-To:</label>
              <input type="text" name="from_to" placeholder=""></input>
            </div>
          </div>
        </div>

        <h2 class="font-monospace pt-3">INTEREST:</h2>
        <div class="container p-3 ">
          <div class="form-check">
            <div class="div">
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Watching TV" name="interest[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Watching TV</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Reading Books" name="interest[]">
                <label class="form-check-label" for="flexCheckIndeterminate">Reading Books</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Collecting Items" name="interest[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Collecting Items</label>
              </div>
            </div>
            <div class="div">
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Taking care of pets" name="interest[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Taking care of pets</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Going out w/Friends" name="interest[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Going out w/Friends</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Watching Movies" name="interest[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Watching Movies</label>
              </div>
            </div>
            <div class="div">
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Shopping" name="interest[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Shopping</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Eating" name="interest[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Eating</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Hiking" name="interest[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Hiking</label>
              </div>
            </div>
          </div>
        </div>

        <h2 class="font-monospace pt-3">TALENTS:</h2>
        <div class="container p-3">
          <div class="form-check">
            <div class="div">
              <input class="form-check-input" type="checkbox" value="Dramatic" name="talents[]">
              <label class="form-check-label" for="flexCheckIndeterminate"> Dramatic</label>
            </div>
            <div class="div">
              <input class="form-check-input" type="checkbox" value="Singing" name="talents[]">
              <label class="form-check-label" for="flexCheckIndeterminate"> Singing</label>
            </div>
            <div class="div">
              <input class="form-check-input" type="checkbox" value="Dancing" name="talents[]">
              <label class="form-check-label" for="flexCheckIndeterminate"> Dancing</label>
            </div>
            <div class="div">
              <input class="form-check-input" type="checkbox" value="Painting" name="talents[]">
              <label class="form-check-label" for="flexCheckIndeterminate"> Painting</label>
            </div>
          </div>
        </div>

        <h2 class="font-monospace pt-3">CHARACTERISTICS:</h2>
        <h5>(you may check more than one Characteristics.)</h5>
        <div class="container p-3">
          <div class="form-check">
            <div class="row g-0 p-2">
              <div class="col-6 col-xl-2">
                <div class="div">
                  <input class="form-check-input" type="checkbox" value="Friendly" name="characteristics[]">
                  <label class="form-check-label" for="flexCheckIndeterminate"> Friendly</label>
                </div>
                <div class="div">
                  <input class="form-check-input" type="checkbox" value="Jealous" name="characteristics[]">
                  <label class="form-check-label" for="flexCheckIndeterminate"> Jealous</label>
                </div>
                <div class="div">
                  <input class="form-check-input" type="checkbox" value="Industrious" name="characteristics[]">
                  <label class="form-check-label" for="flexCheckIndeterminate"> Industrious</label>
                </div>
                <div class="div">
                  <input class="form-check-input" type="checkbox" value="Stubborn" name="characteristics[]">
                  <label class="form-check-label" for="flexCheckIndeterminate"> Stubborn</label>
                </div>
              </div>
              <div class="col-6 col-xl-2">
                <div class="div">
                  <input class="form-check-input" type="checkbox" value="Patient" name="characteristics[]">
                  <label class="form-check-label" for="flexCheckIndeterminate"> Patient</label>
                </div>
                <div class="div">
                  <input class="form-check-input" type="checkbox" value="Calm" name="characteristics[]">
                  <label class="form-check-label" for="flexCheckIndeterminate"> Calm</label>
                </div>
                <div class="div">
                  <input class="form-check-input" type="checkbox" value="Confident" name="characteristics[]">
                  <label class="form-check-label" for="flexCheckIndeterminate"> Confident</label>
                </div>
                <div class="div">
                  <input class="form-check-input" type="checkbox" value="Calm" name="characteristics[]">
                  <label class="form-check-label" for="flexCheckIndeterminate"> Calm</label>
                </div>
              </div>
              <div class="col-6 col-xl-2">
                <div class="div">
                  <input class="form-check-input" type="checkbox" value="Kind" name="characteristics[]">
                  <label class="form-check-label" for="flexCheckIndeterminate"> Kind</label>
                </div>
                <div class="div">
                  <input class="form-check-input" type="checkbox" value="Pessimistic" name="characteristics[]">
                  <label class="form-check-label" for="flexCheckIndeterminate"> Pessimistic</label>
                </div>
                <div class="div">
                  <input class="form-check-input" type="checkbox" value="Thoughtful" name="characteristics[]">
                  <label class="form-check-label" for="flexCheckIndeterminate"> Thoughtful</label>
                </div>
                <div class="div">
                  <input class="form-check-input" type="checkbox" value="Insecure" name="characteristics[]">
                  <label class="form-check-label" for="flexCheckIndeterminate"> Insecure</label>
                </div>
              </div>
            </div>
            <div class="row g-0 p-2">
              <div class="col-6 col-xl-2">
                <div class="div">
                  <input class="form-check-input" type="checkbox" value="Humble" name="characteristics[]">
                  <label class="form-check-label" for="flexCheckIndeterminate"> Humble</label>
                </div>
                <div class="div">
                  <input class="form-check-input" type="checkbox" value="Independent" name="characteristics[]">
                  <label class="form-check-label" for="flexCheckIndeterminate"> Independent</label>
                </div>
                <div class="div">
                  <input class="form-check-input" type="checkbox" value="Studious" name="characteristics[]">
                  <label class="form-check-label" for="flexCheckIndeterminate"> Studious</label>
                </div>
                <div class="div">
                  <input class="form-check-input" type="checkbox" value="Talkative" name="characteristics[]">
                  <label class="form-check-label" for="flexCheckIndeterminate"> Talkative</label>
                </div>
              </div>
              <div class="col-6 col-xl-2">
                <div class="div">
                  <input class="form-check-input" type="checkbox" value="Optimistic" name="characteristics[]">
                  <label class="form-check-label" for="flexCheckIndeterminate"> Optimistic</label>
                </div>
                <div class="div">
                  <input class="form-check-input" type="checkbox" value="Moody" name="characteristics[]">
                  <label class="form-check-label" for="flexCheckIndeterminate"> Moody</label>
                </div>
                <div class="div">
                  <input class="form-check-input" type="checkbox" value="Understanding" name="characteristics[]">
                  <label class="form-check-label" for="flexCheckIndeterminate"> Understanding</label>
                </div>
                <div class="div">
                  <input class="form-check-input" type="checkbox" value="Dommineering" name="characteristics[]">
                  <label class="form-check-label" for="flexCheckIndeterminate"> Dommineering</label>
                </div>
              </div>
              <div class="col-6 col-xl-2">
                <div class="div">
                  <input class="form-check-input" type="checkbox" value="Sensitive" name="characteristics[]">
                  <label class="form-check-label" for="flexCheckIndeterminate"> Sensitive</label>
                </div>
                <div class="div">
                  <input class="form-check-input" type="checkbox" value="Responsive" name="characteristics[]">
                  <label class="form-check-label" for="flexCheckIndeterminate"> Responsive</label>
                </div>
                <div class="div">
                  <input class="form-check-input" type="checkbox" value="Selfish" name="characteristics[]">
                  <label class="form-check-label" for="flexCheckIndeterminate"> Selfish</label>
                </div>
                <div class="div">
                  <input class="form-check-input" type="checkbox" value="Spoiled" name="characteristics[]">
                  <label class="form-check-label" for="flexCheckIndeterminate"> Spoiled</label>
                </div>
              </div>
            </div>
            <div class="row g-0 p-2">
              <div class="div">
                <div class="div">
                  <input class="form-check-input" type="checkbox" value="Lazy" name="characteristics[]">
                  <label class="form-check-label" for="flexCheckIndeterminate"> Lazy</label>
                </div>
                <div class="div">
                  <input class="form-check-input" type="checkbox" value="Quiet" name="characteristics[]">
                  <label class="form-check-label" for="flexCheckIndeterminate"> Quiet</label>
                </div>
                <div class="div">
                  <input class="form-check-input" type="checkbox" value="Observant" name="characteristics[]">
                  <label class="form-check-label" for="flexCheckIndeterminate"> Observant</label>
                </div>
                <div class="div">
                  <input class="form-check-input" type="checkbox" value="Tolerant" name="characteristics[]">
                  <label class="form-check-label" for="flexCheckIndeterminate"> Tolerant</label>
                </div>
              </div>
            </div>
          </div>
          <div class="div pt-5">
            <a class="btn btn-secondary ms-1" href="../../pages/profiling/addProf2.php" role="button">Back</a>
            <input class="btn btn-primary ms-1" type="submit" name="save" value="SAVE">
          </div>
        </div>
      </div>
    </form>







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