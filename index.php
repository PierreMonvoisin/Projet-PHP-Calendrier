<!DOCTYPE html>
<html lang='fr' dir='ltr'>
<head>
  <title>Calendrier</title>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
</head>
<body class='container-fluid bg-secondary'>
  <div class='row mt-5'>
    <div class='jumbotron shadow-lg py-5 mx-auto text-center'>
      <h2 class="w-100 text-center mb-4">Choisissez le mois et l'année de votre naissance :</h2>
      <div id="calendar">
        <form class="form-group mr-3" action="calendar.php" method="post">
          <label for="month" class="font-weight-bold mb-3">Veuillez choisir un mois :</label>
          <select name="month" class="form-control w-50 mx-auto mb-3" id="month">
            <option name="month" disabled selected>-- Mois --</option>
            <option name="month" value="January">Janvier</option>
            <option name="month" value="February">Février</option>
            <option name="month" value="March">Mars</option>
            <option name="month" value="April">Avril</option>
            <option name="month" value="May">Mai</option>
            <option name="month" value="June">Juin</option>
            <option name="month" value="July">Juillet</option>
            <option name="month" value="August">Août</option>
            <option name="month" value="September">Septembre</option>
            <option name="month" value="October">Octobre</option>
            <option name="month" value="November">Novembre</option>
            <option name="month" value="December">Décembre</option>
          </select>
          <label for="year" class="font-weight-bold mb-3">Veuillez choisir une année :</label>
          <select name="year" class="form-control w-50 mx-auto mb-3" id="year">
            <option name="year" disabled selected>-- Année --</option>
            <?php // Create an automatic list of option from 1500 to today
            foreach (range(date('Y'), 1500) as $year) { ?>
              <option name="year" value="<?= $year ?>"><?= $year ?></option>
            <?php } ?>
          </select>
          <button type="submit" class="btn btn-dark">Valider</button>
        </form>
      </div>
    </div>
  </div>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
</body>
</html>
