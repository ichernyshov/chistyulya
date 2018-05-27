<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/inc/functions.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../img/favicon.ico">

    <title>Цены</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="../css/price.css" rel="stylesheet">
  </head>

  <body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal">Чистюля</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="home.html" target="_blank">Главная</a>
        <a class="p-2 text-dark" href="gallery.html" target="_blank">Наши работы</a>
        <a class="p-2 text-dark" href="contact.html" target="_blank">Контакты</a>
      </nav>
    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Цены</h1>
      <p class="lead">Более подробно узнать об услугах Вы можете на главной странице сайта</p>
    </div>

    <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Стандарт</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">150 руб</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Первичная очистка</li>
              <li>Стирка шнурков</li>
              <li>Дезинфекция</li>
              <li>Боковая поверхность подошвы</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary buy" data-price="150" data-product="standart">Заказать</button>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Премиальная</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">350 руб</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Первичная очистка</li>
              <li>Глубокая чистка подошвы</li>
              <li>Глубокая ручная чистка</li>
              <li>Сушка</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary buy" data-price="350" data-product="premium">Заказать</button>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Зимняя</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">450 руб</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Первичная очистка</li>
              <li>Глубокая чистка подошвы</li>
              <li>Стирка шнурков</li>
              <li>Глубокая ручная чистка</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary buy" data-price="450" data-product="winter">Заказать</button>
          </div>
        </div>
      </div>  
    </div>
    
    <div class="modal fade" id="order">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Оформление заказа</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="buy" method="post">
                    <div class="form-group">
                        <label for="name">Ваше имя</label>
                        <input type="name" name="name" class="form-control" id="name" placeholder="Имя" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Ваш телефонный номер</label>
                        <input type="tel" minlength="11" maxlength="11" name="phone" class="form-control" id="phone" placeholder="89991234567" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="product">Выбранная услуга</label>
                        <input type="text" name="product" class="form-control" id="product" readonly>
                    </div>
                    <div class="form-group">
                        <label for="price">Цена</label>
                        <input type="text" name="price" class="form-control" id="price" readonly>
                    </div>
                    <button type="submit" class="btn btn-primary">Заказать</button>
                </form>
            </div>
        </div>
    </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="../js/main.js"></script>

  </body>
</html>
