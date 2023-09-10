<?php
session_start();
if (!isset($_SESSION['admin'])) header("location: login.php");

include 'connect.php';

$registrations = mysqli_query($conn, "SELECT * FROM `users`");

?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="Bhavani/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Students SpellBee SRKR</title>

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
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">

      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
          <a href="../index.php" class="app-brand-link">
            <img src="Bhavani/img/red.png" alt="">
          </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
          <!-- Dashboard -->

          <!-- Layouts -->
          <li class="menu-item ">
            <a href="students.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Analytics">Home</div>
            </a>
          </li>
          <li class="menu-item ">
            <a href="logout.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-cube-alt"></i>
              <div data-i18n="Analytics">Logout</div>
            </a>
          </li>
        </ul>
      </aside>
      <div class="layout-page">
        <!-- Navbar -->

        <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <div class="navbar-nav align-items-center">
              <div class="nav-item d-flex align-items-center">
                <i class="bx bx-search fs-4 lh-0"></i>
                <input type="text" class="form-control border-0 shadow-none" id="searchInput" title="Search with regno or name or phone number....." placeholder="Search with regno or name or phone number....." aria-label="Search with regno or name or phone number....." />
              </div>
            </div>


            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="Bhavani/img/team_1.jpg" alt class="w-px-40 h-auto rounded-circle" />
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar avatar-online">  
                            <img src="Bhavani/img/team_1.jpg" alt class="w-px-40 h-auto rounded-circle" />
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <span class="fw-semibold d-block">Dr. Suresh Babu</span>
                          <small class="text-muted">Founder BVRMOL</small>
                        </div>
                      </div>
                    </a>
                  </li>

                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="logout.php">
                      <i class="bx bx-power-off me-2"></i>
                      <span class="align-middle">Log Out</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ User -->
            </ul>
          </div>
        </nav>

        <!-- / Navbar -->

        <div class="content-wrapper">

          <!-- Sidebar Ends Here Shiva -->


          <!-- Content Starts Here Shiva-->
          <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">

              <!-- Bordered Table -->
              <div class="card">
                <h5 class="card-header">Registered Students</h5>
                <div class="card-body">
                  <div class="table-responsive text-nowrap">
                    <table class="table table-bordered" id="registrationTable">
                      <thead>
                        <tr>
                          <th>NAME</th>
                          <th>REGISTRATION NO</th>
                          <th>DEPARTMENT</th>
                          <th>YEAR</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php while ($row = mysqli_fetch_array($registrations)) {
                          $tresponces = mysqli_fetch_assoc(mysqli_query($conn, "SELECT count(*) FROM `responses` WHERE `sid` = '$row[regno]'"))['count(*)'];
                        ?>
                          <tr>
                            <td><strong><?php echo strtoupper($row['player_name']) ?></strong></td>
                            <td><?php echo strtoupper($row['regno']) ?></td>
                            <td><?php echo $row['department'] ?></td>
                            <td><?php if ($row['place'] == '2027') echo "First Year";
                                elseif ($row['place'] == '2026') echo "Second Year";
                                elseif ($row['place'] == '2025') echo "Third Year";
                                elseif ($row['place'] == '2024') echo "Fourth Year";
                                ?></td>
                            <td><?php if ($row['payment_status'] == '0') echo "Not Paid";
                        elseif ($row['payment_status'] == '1' and $row['status'] == '0') echo "Payment Confirmed";
                        elseif ($row['payment_status'] == '1' and $row['status'] == '1' and $tresponces == 0) echo "Go and Play";
                        elseif ($row['payment_status'] == '1' and $row['status'] == '1' and $tresponces < 15) echo "Semi Played";
                        elseif ($row['payment_status'] == '1' and $row['status'] == '1' and $tresponces == 15) echo "Game Completed";
                        elseif ($row['payment_status'] > 1 and $row['status'] == '1' and $tresponces == '0') echo "Choose to Replay";
                        elseif ($row['payment_status'] > 1 and $row['status'] == '1' and $tresponces < '15') echo "Semi Replay";
                        elseif ($row['payment_status'] > 1 and $row['status'] == '1' and $tresponces == '15') echo "Replayed";
                        else echo "Update Status";
                        ?></td>
                                
                          </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!--/ Bordered Table -->



            </div>
          </div>
          <!-- Content Ends Here Shiva -->

          <!-- Footer Starts Here Shiva-->
          <?php include 'footer.php'; ?>
          <!-- Footer Ends Here Shiva-->

          <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
          <script>
            $(document).ready(function() {
              // Cache the table rows for better performance
              var rows = $("#registrationTable tr");

              // Bind the input field's keyup event
              $("#searchInput").keyup(function() {
                var searchText = $(this).val().toLowerCase();

                // Iterate through each table row
                rows.each(function() {
                  var name = $(this).find("td:nth-child(1)").text().toLowerCase();
                  var regno = $(this).find("td:nth-child(2)").text().toLowerCase();
                  var department = $(this).find("td:nth-child(3)").text().toLowerCase();

                  // Check if the search text matches any of the row data
                  if (
                    name.includes(searchText) ||
                    regno.includes(searchText) ||
                    department.includes(searchText)
                  ) {
                    $(this).show();
                  } else {
                    $(this).hide();
                  }
                });
              });
            });
          </script>



</body>

</html>