<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <?php include 'common/headContent.php' ?>
  <link rel="stylesheet" href="/assets/css/home/main.css">
  <link rel="stylesheet" href="/assets/css/home/course.css">
  <link rel="stylesheet" href="/assets/css/home/mission.css">
  <link rel="stylesheet" href="/assets/css/home/numbers.css">
  <link rel="stylesheet" href="/assets/css/home/structureManagement.css">
  <link rel="stylesheet" href="/assets/css/home/structure.css">
  <link rel="stylesheet" href="/assets/css/home/management.css">
  <title>EEEP - Joaquim Albano</title>
  <style>
    body {
      font-size: 1.15em;
    }
  </style>
</head>

<body>
  <?php include 'common/header.php' ?>
  <div id="app">
    <main>
      <?php include 'components/home/slider.php' ?>
      <?php include 'components/home/course.php' ?>
      <?php include 'components/home/missiontest.php' ?>
      <?php include 'components/home/numbers.php' ?>
      <div class="row structureManagement background-text" id="structureManagement">
        <?php include 'components/home/structure.php' ?>
        <?php include 'components/home/management.php' ?>
      </div>
      <?php include 'components/home/news.php' ?>
      <?php include 'components/home/faq.php' ?>
      <?php include 'components/home/rate.php' ?>
    </main>
  </div>
  <?php include 'common/homeButton.php' ?>
  <?php include 'common/footer.php' ?>
</body>

</html>