<!DOCTYPE html>
<html long="ru">
<head>
    <meta charset="utf-8">

    <?php  $title = "Gudzovskiy"?>
    <title><?php echo $title?></title>

    <!-- подключение стилей gooleFonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Andika:wght@400;700&display=swap" rel="stylesheet">
    <!-- подключние файла стилей -->
    <link rel="stylesheet" href="styleMain.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>
<body>
    <header>
        <a href="#" id="logo">MielPops</a>
        
        <?php	// начинаем первый PHP скрипт
        echo '<a href="index.php"';
        ?><?php	// начинаем второй PHP скрипт
        echo ' class="selected_menu">Главная</a>';
        ?>
        <a href="#top">Почему мы</a>
        <a href="#top1">Продукция</a>
                <span class="right">
                <?php	// начинаем первый PHP скрипт
        echo '<a href="form_of_com.php"';
        ?><?php	// начинаем второй PHP скрипт
        echo ' class="selected_menu">Обратная связь</a>';
        ?>
                <?php	// начинаем первый PHP скрипт
        echo '<a href="form_login.php"';
        ?><?php	// начинаем второй PHP скрипт
        echo ' class="selected_menu">Войти</a>';
        ?>

        </span>
        
    </header>
    
    <div class="wrap">             
    <div class=" container-fluid" style="background-color: rgb(248, 229, 205);">
      <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="image1.jpg" style="width:100%">
        
      </div>

      <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="image2.jpg" style="width:100%">
        
      </div>

      <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="image3.jpg" style="width:100%">
        
      </div>

      <a class="prev" onclick="plusSlides(-1)">❮</a>
      <a class="next" onclick="plusSlides(1)">❯</a>
    </div>

    <script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
    }
    </script>
    <div class="container-fluid" style="background-color: rgb(248, 229, 205);">
    <div class="row">
      <div class="col-12">
        <h2><a name="top"></a>Почему мы?</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-8 col col-sm-12">
        <p>Только Лучшее</p>
      </div>
      <div class="col-lg-4 col-md-8 col col-sm-12">
        <p>Сымые быстрые</p>
      </div>
      <div class="col-lg-4 col-md-8 col col-sm-12">
        <p>Дешевле других</p>
      </div>
      <div class="col-lg-4 col-md-8 col col-sm-12">
        <p>Вкусно, как дома</p>
      </div>
      <div class="col-lg-4 col-md-8 col col-sm-12">
        <p>Для большинства</p>
      </div>
      <div class="col-lg-4 col-md-8 col col-sm-12">
        <p>Большие скидки</p>
      </div>
      
    </div>
    
    <div class="row">
      <div class="col-12">
        <h2><a name="top1"></a>Продукция</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-8 col col-sm-12">
        <p><a name="wa">Вода</p>
        <img src="\img\870.jpg" style="width: 30%">
      </div>
      <div class="col-lg-4 col-md-8 col col-sm-12">
        <p><a name="br">Хлеб</p>
        <img src="\img\864.jpg" style="width: 30%">
      </div>
      <div class="col-lg-4 col-md-8 col col-sm-12">
        <p><a name="mi">Молоко</p>
        <img src="\img\869.jpg" style="width: 30%">
      </div>
      <div class="col-lg-4 col-md-8 col col-sm-12">
        <p><a name="ff">Фатфуд</p>
        <img src="\img\868.jpg" style="width: 30%">
      </div>
      <div class="col-lg-4 col-md-8 col col-sm-12">
        <p><a name="sn">Снеки</p>
        <img src="\img\867.jpg" style="width: 30%">
      </div>
      <div class="col-lg-4 col-md-8 col col-sm-12">
        <p><a name="en">Энергетики</p>
        <img src="\img\865.jpg" style="width: 30%">
      </div>
      
    </div>
     

    
      <div class= "row" style="background-color: rgb(121, 27, 27);" >
        <span class="left">Все права защищены &copy; 2022
          <?php echo date('d.m.y в H:i:s'); ?>
          </span>
        <span class="right">
          <span class="contact">+7 (900) 235-75-07</span>
          <span class="contact">mark_gudzovskiy@mail.ru</span>
          </span>
      </div>
      
    
</body>
</html>