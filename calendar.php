<?php
$month = $_POST['month'];
$year = $_POST['year'];
// Put the variables into a single string
$date = $month. '-' .$year;
// Convert the date string into a unix timestamp
$unixTimestamp = strtotime($date);
// Get the weekday of the first day of the month (N = from 1 to 7)
$firstDayOfMonth = date('N', $unixTimestamp);
// Get the number of days in the month (t = from 28 to 31)
$daysInMonth = date('t', $unixTimestamp);
// Get the date - 1 month
$prevDate = date_sub(date_create($month. '-' .$year), date_interval_create_from_date_string('1 month'));
// Single out the number of days in that month
$prevMonth = date_format($prevDate, 't');
?>
<!DOCTYPE html>
<html lang='fr' dir='ltr'>
<head>
  <title>Calendrier</title>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class='container-fluid bg-secondary'>
  <div class='row mt-5'>
    <div class='jumbotron shadow-lg py-5 mx-auto text-center'>
      <h2 class="w-100 text-center mb-4">- Calendrier -</h2>
      <div id="calendar">
        <div class="calendar">
          <div class="base bottom">
            <div class="days">
              <!-- Days of the week -->
              <p class="weekday">Lun</p>
              <p class="weekday">Mar</p>
              <p class="weekday">Mer</p>
              <p class="weekday">Jeu</p>
              <p class="weekday">Ven</p>
              <p class="weekday">Sam</p>
              <p class="weekday">Dim</p>
              <?php
              // Var for the final display of the calendar
              $totalDay = 0;
              // If the month doesn't start on a Monday, display last days from last month
              if ($firstDayOfMonth > 1){
                for ($numberOldDays = ($firstDayOfMonth - 2); $numberOldDays > 0; $numberOldDays--){
                  $totalDay++; ?>
                  <p class="old daysBorder"><?= ($prevMonth - $numberOldDays) ?></p><?php
                }
                $totalDay++; ?>
                <p class="old daysBorder"><?= ($prevMonth) ?></p>
              <?php }
              // Display the day of the month
              for ($numberDays = ($daysInMonth - 1); $numberDays > 0; $numberDays--){
                $totalDay++; ?>
                <p class="daysBorder"><?= ($daysInMonth - $numberDays) ?></p>
              <?php }
              $totalDay++; ?>
              <p class="daysBorder"><?= $daysInMonth ?></p>
              <?php // Add first days of the next month to complete de calendar line
              if ($totalDay < 35){
                for ($numberNewDays = (34 - $totalDay); $numberNewDays >= 0; $numberNewDays--){ ?>
                  <p class="futur daysBorder"><?= ((35 - $totalDay) - $numberNewDays) ?></p>
                <?php }
                } else if ($totalDay < 42){
                  for ($numberNewDays = (41 - $totalDay); $numberNewDays >= 0; $numberNewDays--){ ?>
                    <p class="futur daysBorder"><?= ((42 - $totalDay) - $numberNewDays) ?></p>
                  <?php }
                } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
  </body>
  </html>
