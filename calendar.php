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
  <title>Exercice 8</title>
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
              <p class="weekday">Lun</p>
              <p class="weekday">Mar</p>
              <p class="weekday">Mer</p>
              <p class="weekday">Jeu</p>
              <p class="weekday">Ven</p>
              <p class="weekday">Sam</p>
              <p class="weekday">Dim</p>
              <?php
              if ($firstDayOfMonth > 1){
                for ($numberOldDays = ($firstDayOfMonth - 2); $numberOldDays > 0; $numberOldDays--){ ?>
                  <p class="old"><?= ($prevMonth - $numberOldDays) ?></p><?php
                }
                ?>
                  <p class="old"><?= ($prevMonth) ?></p><?php
              }
              ?>
              <p>1</p>
              <p>2</p>
              <p>3</p>
              <p>4</p>
              <p>5</p>
              <p>6</p>
              <p>7</p>
              <p>8</p>
              <p>9</p>
              <p>10</p>
              <p>11</p>
              <p>12</p>
              <p>13</p>
              <p>14</p>
              <p>15</p>
              <p>16</p>
              <p>17</p>
              <p>18</p>
              <p>19</p>
              <p>20</p>
              <p>21</p>
              <p>22</p>
              <p>23</p>
              <p>24</p>
              <p>25</p>
              <p>26</p>
              <p>27</p>
              <p>28</p>
              <p>29</p>
              <p>30</p>
              <p>31</p>
              <p class="old">1</p>
              <p class="old">2</p>
              <p class="old">3</p>
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
