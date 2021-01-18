<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <?php include 'common/headContent.php' ?>
  <link rel="stylesheet" href="/assets/css/home/slider.css">
  <link rel="stylesheet" href="/assets/css/home/course.css">
  <link rel="stylesheet" href="/assets/css/home/mission.css">
  <link rel="stylesheet" href="/assets/css/home/numbers.css">
  <title> Página Inicial</title>
</head>

<body>
  <?php include 'common/header.php' ?>
  <main>
    <?php include 'components/home/slider.php' ?>
    <?php include 'components/home/course.php' ?>
    <?php include 'components/home/mission.php' ?>
    <?php include 'components/home/news.php' ?>
    <?php include 'components/home/numbers.php' ?>
    <a href="#" id="return-to-top"><i class="material-icons">arrow_upward</i></a>
  </main>
  <?php include 'common/footer.php' ?>
  <script src="/assets/js/home.js"></script>
</body>

</html>