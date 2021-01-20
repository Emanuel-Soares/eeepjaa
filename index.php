<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <?php include 'common/headContent.php' ?>
  <link rel="stylesheet" href="/assets/css/home/slider.css">
  <link rel="stylesheet" href="/assets/css/home/course.css">
  <link rel="stylesheet" href="/assets/css/home/mission.css">
  <link rel="stylesheet" href="/assets/css/home/numbers.css">
  <link rel="stylesheet" href="/assets/css/home/structureManagement.css">
  <link rel="stylesheet" href="/assets/css/home/structure.css">
  <link rel="stylesheet" href="/assets/css/home/management.css">
  <link rel="stylesheet" href="/assets/css/home/news.css">
  <link rel="stylesheet" href="/assets/css/home/faq.css">
  <title>Página Inicial</title>
</head>

<body>
  <?php include 'common/header.php' ?>
  <main>
    <?php include 'components/home/slider.php' ?>
    <?php include 'components/home/course.php' ?>
    <?php include 'components/home/mission.php' ?>
    <?php include 'components/home/numbers.php' ?>
    <div class="row structureManagement grey lighten-4" id="structureManagement">
      <?php include 'components/home/structure.php' ?>
      <?php include 'components/home/management.php' ?>
    </div>
    <?php include 'components/home/news.php' ?>
    <?php include 'components/home/faq.php' ?>
  </main>
  <?php include 'common/beginButton.php' ?>
  <?php include 'common/footer.php' ?>
  <script src="/assets/js/home.js"></script>
</body>

</html>