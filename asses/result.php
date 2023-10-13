<?php
session_start();
if (!isset($_SESSION['user'])) {
  header('location:login.php');
}
include 'connect.php';

//I want the words that user not yet assesed
$words = mysqli_query($conn, "SELECT * FROM `words1`");
?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="Bhavani/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Asses Spell Bee Words</title>

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
  <link rel="stylesheet" href="Bhavani/css/style.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="Bhavani/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <link rel="stylesheet" href="Bhavani/vendor/libs/apex-charts/apex-charts.css" />

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Helpers -->
  <script src="Bhavani/vendor/js/helpers.js"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="Bhavani/js/config.js"></script>
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->

      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
          <span class="app-brand-logo demo">
            <img src="Bhavani/img/red.png" alt="Lunch Box" class="img-fluid" />
          </span>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
          <!-- Dashboard -->
          <li class="menu-item">
            <a href="result.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-cube-alt"></i>
              <div data-i18n="Analytics">Result</div>
            </a>
          </li>

          <li class="menu-item active">
            <a href="index.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Analytics">Asses</div>
            </a>
          </li>

        </ul>
      </aside>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->

        <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <h2 style="padding-top: 18px;">Result for Spell Bee 2023 Words</h2>
            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="Bhavani/img/team_1.jpg" alt class="w-px-40 h-auto rounded-circle" />
                  </div>
                </a>
              </li>
              <!--/ User -->
            </ul>
          </div>
        </nav>

        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->
          <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row mb-5">
              <!-- Bordered Table -->
              <div class="card">
                <h5 class="card-header">Word Analysis</h5>
                <div class="card-body">
                  <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                        <th>SI NO</th>
                        <th>Word</th>
                          <th>Esay</th>
                          <th>Esay Percentage</th>
                          <th>Medium</th>
                          <th>Medium Percentage</th>
                          <th>Difficult</th>
                          <th>Difficult Percentage</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $sino = 1;
                         while($aword = mysqli_fetch_assoc($words)){
                          $esay = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `responces` WHERE `wordid` = '{$aword['qid']}' AND `responce` = '1'"));
                          $medium = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `responces` WHERE `wordid` = '{$aword['qid']}' AND `responce` = '2'"));
                          $difficult = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `responces` WHERE `wordid` = '{$aword['qid']}' AND `responce` = '3'"));
                          $total = $esay + $medium + $difficult;
                          $esay_percentage = ($esay/$total)*100;
                          $medium_percentage = ($medium/$total)*100;
                          $difficult_percentage = ($difficult/$total)*100;
                           ?>
                        <tr>
                        <td><strong><?php echo $sino ?></strong></td>
                        <td><strong><?php echo $aword['word'] ?></strong></td>
                          <td><?php echo $esay ?></td>
                          <td><span class="badge bg-label-success me-1"><?php echo $esay_percentage ?></span></td>
                          <td><?php echo $medium ?></td>
                          <td><span class="badge bg-label-info me-1"><?php echo $medium_percentage ?></span></td>
                          <td><?php echo $difficult ?></td>
                          <td><span class="badge bg-label-warning me-1"><?php echo $difficult_percentage ?></span></td>
                          <td><?php echo $total ?></td>
                        </tr>
                        <?php $sino++; } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!--/ Bordered Table -->
            </div>
          </div>
          <!-- Footer -->
          <footer class="content-footer footer bg-footer-theme">
            <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
              <div class="mb-2 mb-md-0">
                ©
                <script>
                  document.write(new Date().getFullYear());
                </script>
                , made with ❤️ by
                <a href="https://saipraveen.tech" target="_blank" class="footer-link fw-bolder">Sai Praveen</a>
              </div>
            </div>
          </footer>
          <!-- / Footer -->

        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    <!-- Overlay -->
  </div>
  <!-- / Layout wrapper -->


  <!-- Core JS -->
  <!-- build:js vendor/js/core.js -->
  <script src="Bhavani/vendor/libs/jquery/jquery.js"></script>
  <script src="Bhavani/vendor/libs/popper/popper.js"></script>
  <script src="Bhavani/vendor/js/bootstrap.js"></script>
  <script src="Bhavani/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <script src="Bhavani/vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="Bhavani/vendor/libs/apex-charts/apexcharts.js"></script>

  <!-- Main JS -->
  <script src="Bhavani/js/main.js"></script>

  <!-- Page JS -->
  <script src="Bhavani/js/dashboards-analytics.js"></script>

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script>
    function change_status(stdid, eid) {
      // axaj call to pickup.php
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          console.log(this.responseText);
        }
      };
      var data = "?stdid=" + stdid + "&eid=" + eid;
      xhttp.open("GET", "update_status.php" + data, true);
      xhttp.send();
      window.location.reload();
    }
  </script>
  <script>
    var audio = document.getElementById("myAudio");
    var seekBar = document.getElementById("seekBar");

    function playPause() {
      if (audio.paused) {
        audio.play();
      } else {
        audio.pause();
      }
    }

    function increaseVolume() {
      if (audio.volume < 1.0) {
        audio.volume += 0.1;
      }
    }

    function decreaseVolume() {
      if (audio.volume > 0.0) {
        audio.volume -= 0.1;
      }
    }

    function seekAudio() {
      var seekTo = audio.duration * (seekBar.value / 100);
      audio.currentTime = seekTo;
    }

    // Update the seek bar as the audio plays
    audio.addEventListener("timeupdate", function() {
      var seekValue = (100 / audio.duration) * audio.currentTime;
      seekBar.value = seekValue;
    });
  </script>
  <script>
    $(document).ready(function() {
      $('#esay').click(function() {

        var qid = $(this).data('qid');
        // Perform the AJAX request
        $.ajax({
          url: 'update.php', // Replace with the path to your PHP script
          type: 'POST', // Use POST or GET, depending on your requirements
          data: {
            action: 'esay',
            qid: qid // You can pass any data needed for your update here
          },
          success: function(response) {
            // Handle the response from the server, e.g., show a success message
            console.log(response);
            var container = document.getElementById('wordbox' + qid);
            if (container) {
              container.remove();
            }
          },
          error: function() {
            console.log('Error updating the database');
            var container = document.getElementById('wordbox' + qid);
            if (container) {
              container.remove();
            }
          }
        });
      });
      $('#medium').click(function() {

        var qid = $(this).data('qid');

        // Perform the AJAX request
        $.ajax({
          url: 'update.php', // Replace with the path to your PHP script
          type: 'POST', // Use POST or GET, depending on your requirements
          data: {
            action: 'medium',
            qid: qid // You can pass any data needed for your update here
          },
          success: function(response) {
            console.log(response);
            var container = document.getElementById('wordbox' + qid);
            if (container) {
              container.remove();
            }
          },
          error: function() {
            console.log('Error updating the database');
            var container = document.getElementById('wordbox' + qid);
            if (container) {
              container.remove();
            }
          }
        });
      });
      $('#difficult').click(function() {

        var qid = $(this).data('qid');

        // Perform the AJAX request
        $.ajax({
          url: 'update.php', // Replace with the path to your PHP script
          type: 'POST', // Use POST or GET, depending on your requirements
          data: {
            action: 'difficult',
            qid: qid // You can pass any data needed for your update here
          },
          success: function(response) {
            console.log(response);
            var container = document.getElementById('wordbox' + qid);
            if (container) {
              container.remove();
            }
          },
          error: function() {
            console.log('Error updating the database');
            var container = document.getElementById('wordbox' + qid);
            if (container) {
              container.remove();
            }
          }
        });
      });
    });
  </script>

</body>

</html>