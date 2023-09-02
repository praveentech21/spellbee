<?php
session_start();
if(!isset($_SESSION['supid'])) header("location: login.php");

include "connect.php";

if(isset($_POST['addnewstudent'])){
  $sname = $_POST['sname'];
  $regno = $_POST['regno'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $branch = $_POST['branch'];
  $section = $_POST['section'];
  if(isset($_POST['paymentinfo'])) $paymentinfo = 1; else $paymentinfo = 0;
  $batch = $_POST['batch'];
  $addnewstudent = $conn ->prepare("INSERT INTO `users`(`pid`, `player_name`, `place`, `regno`, `email`, `department`, `section`, `payment_status`) VALUES (?,?,?,?,?,?,?,?)");
  $addnewstudent->bind_param("ssissssi",$mobile,$sname,$batch,$regno,$email,$branch,$section,$paymentinfo);
  if($addnewstudent->execute()){
    echo "<script>alert('New Student Added Successfully');</script>";
  }else{
    echo "<script>alert('New Student Added Failed');</script>";
  }
}
?>
<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="Bhavani/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Campus Online Admin</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="Bhavani/img/cup.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="Bhavani/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="Bhavani/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="Bhavani/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="Bhavani/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="Bhavani/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="Bhavani/vendor/libs/apex-charts/apex-charts.css" />

    <script src="Bhavani/vendor/js/helpers.js"></script>

    <script src="Bhavani/js/config.js"></script>
  </head>

  <body>
        
      <!-- Sidebar Starts Here Shiva -->
        <?php include 'header.php'; ?>
      <!-- Sidebar Ends Here Shiva -->

        <!-- Content Starts Here Shiva-->
          <div class="container-xxl flex-grow-1 container-p-y">
          <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">SPELLBEE</span> REGISTRATIONS</h4>

            <div class="row">
              

              <!-- Basic Layout -->
              <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">New Student Registration</h5>
                      <!-- <small class="text-muted float-end">Default label</small> -->
                    </div>
                    <div class="card-body">
                      <form method="post" action="#">
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                          <div class="col-sm-10">
                            <input type="text" required class="form-control" id="basic-default-name" autofocus name="sname" placeholder="Student Name" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Register Number</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              required
                              class="form-control"
                              id="basic-default-company"
                              name="regno"
                              placeholder="student College ID"
                            />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-email">Email</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <input
                                type="email"
                                name="email"
                                id="basic-default-email"
                                class="form-control"
                                placeholder="Student Email"
                                aria-label="john.doe"
                                aria-describedby="basic-default-email2"
                                required
                              />
                            </div>
                            <div class="form-text">You can use letters, numbers & periods</div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Mobile No</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              id="basic-default-phone"
                              name="mobile"
                              class="form-control phone-mask"
                              placeholder="905 272 7402"
                              aria-label="905 272 7402"
                              aria-describedby="basic-default-phone"
                            />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-email">Branch</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                            <select class="form-select" id="exampleFormControlSelect1" name="branch" aria-label="Default select example">
                          <option selected value="">Select Student Branch</option>
                          <option value="csd">CSD</option>
                          <option value="cse">CSE</option>
                          <option value="csbs">CSBS</option>
                          <option value="CIC">CIC</option>
                          <option value="CSE(Iot)">CSE(Iot)</option>
                          <option value="IT">IT</option>
                          <option value="AIDS">AIDS</option>
                          <option value="AIML">AIML</option>
                          <option value="MECH">MECH</option>
                          <option value="CIVIL">CIVIL</option>
                          <option value="ECE">ECE</option>
                          <option value="EEE">EEE</option>
                        </select>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-email">SECTION</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                            <select class="form-select" id="exampleFormControlSelect1" name="section" aria-label="Default select example">
                          <option selected value="">Select Student Section</option>
                          <option value="A">A</option>
                          <option value="B">B</option>
                          <option value="C">C</option>
                          <option value="D">D</option>
                          <option value="E">E</option>
                          <option value="F">F</option>
                        </select>
                            </div>
                          </div>
                        </div>
                        
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-email">Batch</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                            <select class="form-select" id="exampleFormControlSelect1" name="batch" aria-label="Default select example">
                              <option selected value="">Select Student Year</option>
                              <option value="2027">First Year</option>
                              <option value="2026">Second</option>
                              <option value="2025">Third Year</option>
                              <option value="2024">Fourth Year</option>
                            </select>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <div class="col-sm-10">
                            <input class="form-check-input" type="checkbox" name="paymentinfo" value="1" id="defaultCheck1" />
                            <label class="form-check-label" for="defaultCheck1"> Payment Conformation </label>
                          </div>
                        </div>
                        
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" name="addnewstudent" class="btn btn-primary">Send</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- Basic with Icons -->
              
            </div>
          </div>
        <!-- Content Ends Here Shiva -->

      <!-- Footer Starts Here Shiva-->
        <?php include 'footer.php'; ?>
      <!-- Footer Ends Here Shiva-->

  </body>
</html>
