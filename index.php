<?php
$title="Интернет-магазин Лотос! Тайская косметика и товары для здоровья в наличии в Ярославле"; 
$h1="Главная"; 
$year=date('Y');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?=$title;?></title>
    <link rel="stylesheet" href="bootstrap.min.css">
      <link rel="stylesheet" href="style.css">
     <script defer src="fontawesome-free-5.0.8/svg-with-js/js/fontawesome-all.js"></script>
       <style>
@import url('https://fonts.googleapis.com/css?family=Montserrat');
</style>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="content">
            <header>
                <div class="header">
                    <a href="#"><img src="image/Lotus_Logo_sait2.png" alt="logo" class="logo"></a>
                </div>
            </header>
            <nav>
                <ul>
                    <li><a href="#">Главная</a></li>
                    <li><a href="catalog.html">Каталог</a></li>
                    <li><a href="action.html">Акции</a></li>
                    <li><a href="delivery.html">Доставка</a></li>
                    <li><a href="contacts.html">Контакты</a></li>
                </ul>
            </nav>
            <h1><?=$h1;?></h1>
            <div class="main">
            <div class="first">
            <p> Интернет-магазин Лотос открыт для ценителей тайской продукции - косметика для лица и тела, уход за волосами, тайские товары, чаи и приправы. Всё, что мы любим, используем сами и хотим рекомендовать Вам. <br>
        Для кого-то эти покупки станут возможностью быстро получить понравившийся в отпуске продукт, для кого-то настоящим открытием действенности и эффективности тайских препаратов, для кого-то просто приятным напоминанием о поездке, которую и так забыть невозможно. В любом случае, Вы получите удовольствие снова используя полюбившиеся средства или даря их, в качестве подарков, своим друзьям. Такие сувениры всем придутся по вкусу - на них не нужно смотреть, их можно кушать, пить и мазать на себя. <br>
        Всё, что представлено на сайте, есть в наличие на нашем складе в Ярославле (возможен самовывоз заказа). В любой другой город России посылка доберётся в течение 7-10 дней. Каждую посылку тщательно упаковываем в пузырчатую плёнку. 
        Оплата возможна несколькими способами - наложенным платежом, перечисление на карту Сбербанк и т.д. Цены в магазине очень демократичные - спасибо нашим поставщикам-производителям! Минуя оптовиков-перекупщиков мы возим товар из Таиланда напрямую.
        <br> Вы сможете порадовать себя не выходя из дома приятными покупками, с любовью доставленными из незабываемого Таиланда! </p></div>
           <div class="action">
               <a href="action.html"><img src="image/dostavka.png" alt="dostavka"></a>
           </div>
            </div>
               <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Новые поступления</h5>
        <p class="card-text">Все самые новые и актуальные предложения этого месяца</p>
        <a href="#" class="btn btn-primary">Смотреть</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Рекомендуем</h5>
        <p class="card-text">Товары, которые зарекомендовали себя </p>
        <a href="#" class="btn btn-primary">Смотреть</a>
      </div>
    </div>
  </div>
</div>         
            </div>
                   
                    <footer>
                    <div class="footer">
                    <div class="soc">
                    <a href="#"><i class="fab fa-vk"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-odnoklassniki"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                <p>&copy; <?=$year;?> Все права защищены</p>
            </div>
        </footer>
    </div>
</body>

</html>