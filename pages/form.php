<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../img/favicon.ico">

    <title>Чистюля</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="../css/payment.css" rel="stylesheet">
  </head>

  <body>

    <?php if(!empty($_SESSION['payment'])): ?>
    <main role="main" class="container">
    <h1 class="mt-5">Оплата</h1>
    <p class="lead">Для совершения платежа нажмите на кнопку</p>
    <form id="payment" name="payment" method="post" action="https://sci.interkassa.com/" enctype="utf-8">
        <input type="hidden" name="ik_co_id" value="" />
        <input type="hidden" name="ik_pm_no" value="<?=$_SESSION['payment']['id'];?>" />
        <input type="hidden" name="ik_am" value="<?=$_SESSION['payment']['price'];?>" />
        <input type="hidden" name="ik_desc" value="Оплата за товар" />
        <input type="submit" value="Оплатить" class="btn btn-primary">
    </form>
    </main>
<?php endif; ?>

    <footer class="footer">
      <div class="container">
        <span class="text-muted">Благодарим за выбор нашего сервиса!</span>
      </div>
    </footer>
  </body>
</html>