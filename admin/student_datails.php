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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>

  <!-- Sidebar Starts Here Shiva -->
  <?php include 'header.php'; ?>
  <!-- Sidebar Ends Here Shiva --> <!-- Content Starts Here Shiva-->
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
                  <th>Message</th>
                </tr>
              </thead>
              <tbody>
                <?php while ($row = mysqli_fetch_array($registrations)) {
                  $tresponces = mysqli_fetch_assoc(mysqli_query($conn, "SELECT count(*) FROM `responses` WHERE `sid` = '$row[regno]'"))['count(*)'];
                ?>
                  <tr>
                    <td><strong><?php echo $row['player_name'] ?></strong></td>
                    <td><?php echo $row['regno'] ?></td>
                    <td><?php echo $row['department'] ?></td>
                    <td><?php if ($row['place'] == '2027') echo "First Year";
                        elseif ($row['place'] == '2026') echo "Second Year";
                        elseif ($row['place'] == '2025') echo "Third Year";
                        elseif ($row['place'] == '2024') echo "Fourth Year";
                        ?></td>
                    <td><?php if ($row['payment_status'] == '0') echo "Not Paid";
                        elseif ($row['payment_status'] > '1' and $tresponces == '0') echo "Choose to Replay";
                        elseif ($row['payment_status'] > '1' and $tresponces < '15') echo "Semi Replay";
                        elseif ($row['payment_status'] > '1' and $tresponces == '15') echo "Replayed";
                        elseif ($tresponces == '0') echo "Not Played";
                        elseif ($tresponces < '15') echo "Semi Completed";
                        elseif ($tresponces == '15') echo "Completed";
                        ?></td>
                    <td>
                      <button type="button" class="btn rounded-pill btn-primary confirm-game" data-pid="<?php echo $row['pid']; ?> " data-name="<?php echo $row['player_name']; ?> ">
                        Welcome
                      </button>
                    </td>

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
  <script>
    $(document).ready(function() {
      // Add a click event listener to the buttons with the class "confirm-game"
      $(".confirm-game").click(function() {

        var phoneNumber = $(this).data("pid");
        var name = $(this).data("name");
        // var message = "Hello "+name+", Thank You for Playing *SRKR SPELL BEE* You can see leader board hear: https://srkrec.edu.in/spellbee/ This is your Certificate. ";

        var message = "Dear Thank You for Registering to SRKR SpellBee Challenge 2023! You can take the test at any of the SpellBee/Campus Online Stalls on Campus or at Technology Centre.\n\n-SRKR SpellBee Organizing Team, CSD";

        // Encode the message for use in a URL
        var encodedMessage = encodeURIComponent(message);

        // Construct the WhatsApp URL
        var whatsappURL = "https://wa.me/" + phoneNumber + "?text=" + encodedMessage;

        // Open WhatsApp with the pre-filled message
        window.open(whatsappURL, "_blank");


      });
    });
  </script>





</body>

</html>