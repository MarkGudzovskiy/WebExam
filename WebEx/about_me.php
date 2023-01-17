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
</head>
<body>
    <header>
        <a href="#" id="logo">MielPops</a>
        
        <?php	// начинаем первый PHP скрипт
echo '<a href="about_me.php"';
?><?php	// начинаем второй PHP скрипт
echo ' class="selected_menu">Обо мне</a>';
?>

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
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="image1.jpg" style="width:50%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="image2.jpg" style="width:50%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="image3.jpg" style="width:50%">
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
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


    </main>
        <footer>

            <span class="left">Все права защищены &copy; 2022
            <?php echo date('d.m.y в H:i:s'); ?>
            </span>
            <span class="right">
                <span class="contact">+7 (900) 235-75-07</span>
                <span class="contact">mark_gudzovskiy@mail.ru</span>
            </span>
        
        </footer>
    </div>
</body>
</html>