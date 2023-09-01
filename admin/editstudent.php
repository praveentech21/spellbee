<?php 
include 'connect.php';
$run1 = mysqli_query($conn, "select * from users where pid='0'");
if (isset($_POST['getdetails'])) {
  $pid = $_POST['pid'];
  $run1 = mysqli_query($conn, "select * from users where pid='$pid'");
  if (mysqli_num_rows($run1) == 0) {
    echo "<script>alert('No Parent Found')</script>";
  }
}
if(isset($_POST['update'])){
$name = $_POST['name'];
$email = $_POST['email'];
echo "<script>alert('$email')</script>";
$year = $_POST['year'];
$branch = $_POST['branch'];
$section = $_POST['section'];
$regno = $_POST['regno'];
$pid = $_POST['pid'];
$update = $conn -> prepare("UPDATE `users` SET `regno`=?,`player_name`=?,`place`=?,`email`=?,`department`=?,`section`=? WHERE `pid` = ?");
$update -> bind_param("sssisss", $regno, $name, $year, $email, $branch, $section, $pid);
if($update -> execute()){
  echo "<script>alert('Student Details Updated Successfully')</script>";
  echo "<script>window.location.href='editstudent.php'</script>";
}
else{
  echo "<script>alert('Student Details Updation Failed')</script>";
  echo "<script>window.location.href='editstudent.php'</script>";
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
    <link rel="icon" type="image/x-icon" href="Bhavani/img/favicon/favicon.ico" />

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
            <div class="row">

            <div class="col-md-6">
          <div class="card mb-4">
            <h5 class="card-header">Get Student Details</h5>
            <form action="" method="post">
              <div class="card-body">
                <div>
                  <label for="pid" class="form-label">Student Mobile Number</label>
                  <input type="text" class="form-control" id="pid" placeholder="905 2727 402"  name="pid" />
                </div>
                <div class="mt-3">
                  <button type="submit" name="getdetails" class="btn btn-primary">Get Details</button>
                </div>
              </div>
            </form>
          </div>
        </div>
              
            </div>

            <?php
              if(mysqli_num_rows($run1) > 0){ 
                $run1 = mysqli_fetch_array($run1);
              ?>

            <div class="row">
          <div class="col-md-6">
            <form action="" method="post">
              <div class="card mb-4">
                <h5 class="card-header">Update Student Details</h5>
                <div class="card-body">
                  <div>
                    <label for="name" class="form-label">Name </label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $run1['player_name']; ?>"  />
                    <input type="hidden" name="pid" value="<?php echo $pid ?>">
                  </div>
                  <div>
                    <label for="mobile" class="form-label">Registration Number</label>
                    <input type="text" class="form-control" id="regno" name="regno" value="<?php echo $run1['regno']; ?>" />
                  </div>
                  <div>
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $run1['email']; ?>" />
                  </div>
                  <div>
                    <label for="year" class="form-label">Year</label>
                    <select class="form-select" id="year" name="year">
                          <option <?php if($run1['place'] == '2027' ) echo 'selected' ?> value="2027">First Year</option>
                          <option <?php if($run1['place'] == '2026' ) echo 'selected' ?> value="2026">Second Year</option>
                          <option <?php if($run1['place'] == '2025' ) echo 'selected' ?> value="2025">Third Year</option>
                          <option <?php if($run1['place'] == '2024' ) echo 'selected' ?> value="2024">Fourth Year</option>
                        </select>
                  </div>
                  <div>
                    <label for="branch" class="form-label">Branch</label>
                    <select class="form-select" id="branch" name="branch">
                          <option <?php if($run1['department'] == 'csd' ) echo 'selected' ?> value="csd">CSD</option>
                          <option <?php if($run1['department'] == 'cse' ) echo 'selected' ?> value="cse">CSE</option>
                          <option <?php if($run1['department'] == 'csbs' ) echo 'selected' ?> value="csbs">CSBS</option>
                          <option <?php if($run1['department'] == 'cic' ) echo 'selected' ?> value="CIC">CIC</option>
                          <option <?php if($run1['department'] == 'cse(iot)' ) echo 'selected' ?> value="CSE(Iot)">CSE(Iot)</option>
                          <option <?php if($run1['department'] == 'it' ) echo 'selected' ?> value="IT">IT</option>
                          <option <?php if($run1['department'] == 'aids' ) echo 'selected' ?> value="AIDS">AIDS</option>
                          <option <?php if($run1['department'] == 'aiml' ) echo 'selected' ?> value="AIML">AIML</option>
                          <option <?php if($run1['department'] == 'mech' ) echo 'selected' ?> value="MECH">MECH</option>
                          <option <?php if($run1['department'] == 'civil' ) echo 'selected' ?> value="CIVIL">CIVIL</option>
                          <option <?php if($run1['department'] == 'ece' ) echo 'selected' ?> value="ECE">ECE</option>
                          <option <?php if($run1['department'] == 'eee' ) echo 'selected' ?> value="EEE">EEE</option>
                        </select>
                  </div>
                  <div>
                    <label for="section" class="form-label">Section</label>
                    <select class="form-select" id="section" name="section">
                          <option <?php if($run1['section'] == 'A' ) echo 'selected' ?> value="A">A</option>
                          <option <?php if($run1['section'] == 'B' ) echo 'selected' ?> value="B">B</option>
                          <option <?php if($run1['section'] == 'C' ) echo 'selected' ?> value="C">C</option>
                          <option <?php if($run1['section'] == 'D' ) echo 'selected' ?> value="D">D</option>
                          <option <?php if($run1['section'] == 'E' ) echo 'selected' ?> value="E">E</option>
                          <option <?php if($run1['section'] == 'F' ) echo 'selected' ?> value="F">F</option>
                        </select>
                  </div>
                  <div class="mt-3">
                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
          </div>
          <?php
            } ?>
        <!-- Content Ends Here Shiva -->

      <!-- Footer Starts Here Shiva-->
        <?php include 'footer.php'; ?>
      <!-- Footer Ends Here Shiva-->

  </body>
</html>
