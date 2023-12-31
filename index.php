<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css" />
    <title>1 год Академии</title>
  </head>
  <body>
    <header>
      <div class="header__wrapper container">
        <div class="header__left-side">
          <a href="https://sectiodivina.net"
            ><img class="logo" src="./img/logo.png" alt=""
          /></a>
        </div>
        <div class="header__center-side">
          <nav class="header__navigation">
            <a class="navigations" href="https://sectiodivina.net/about/">О нас</a>
          </nav>
        </div>
      </div>
    </header>
    <main>
      <div class="text__main container">
        <h1 class="text-main">
          Дорогие друзья, Приглашаем вас 7 октября в 11.00 на день рождение
          нашей Академии Психологии, Бизнеса и Творчества Золотое Сечение!<br><br>
          Задумывались ли вы, над фразой: "Всё что есть в жизни, когда-то было
          чьей-то мечтой!" Так и наш центр Золотое Сечение, за время своего
          существования более 25 лет, начинал с семинаров и тренингов, и статус
          обучающего оставался лишь мечтой! Сейчас он вырос и имеет статус
          Академии с образовательной лицензией. 
          <br><br>Мечта стала реальностью! А Вы
          любите мечтать ? Готовы быть в гармонии с людьми и с самим собой? Вы
          достойны наслаждаться жизнью? Вы любите себя? Каждое ваше "Да"
          открывает завесу на вашем пути. <br><br>Наша Академия открыта для вас! Мы рады
          пригласить вас на наш грандиозный праздник, на котором каждого гостя
          ждут подарки! А главное, будут разыграны 3 супер приза!
          Регистрируйтесь сейчас, и получите ключик, который откроет дверь вашей
          мечты!
        </h1>
      </div>
    </main>
    <aside>

        <!-- Кнопка для открытия модального окна -->
        <div class="forma__wrapper container">    
          <button class="forma__button" onclick="openModal()">Зарегистрироваться</button>
        </div>

    <!-- Модальное окно -->
    <div id="myModal" class="modal">
        <div class="modal-content">
          <span class="close" onclick="closeModal()">&times;</span>
            <h2 class="forma">Регистрация</h2>
            <form class="forms" action="mailto:sectiodivina@mail.ru" method="post" enctype="text/plain">
                <label for="name">Имя:</label><br>
                <input type="text" placeholder="Ваше Имя"  id="name" name="name" required><br><br>
                <label for="email">Email:</label><br>
                <input type="email"  placeholder="Ваш Email" id="email" name="email" required><br><br>
                <input type="submit" value="Отправить">
            </form>
        </div>
    </div>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Настройки SMTP
    $smtpHost = "smtp.mail.ru";
    $smtpPort = 587;
    $smtpUsername = "your_username@mail.ru";
    $smtpPassword = "your_password";

    require 'PHPMailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;

    // Настройки SMTP
    $mail->isSMTP();
    $mail->Host = $smtpHost;
    $mail->SMTPAuth = true;
    $mail->Username = $smtpUsername;
    $mail->Password = $smtpPassword;
    $mail->SMTPSecure = 'tls';
    $mail->Port = $smtpPort;

    // Отправитель и получатель
    $mail->setFrom($smtpUsername);
    $mail->addAddress($email);
    $mail->addReplyTo($smtpUsername);

    // Тема письма и содержимое
    $mail->Subject = "Регистрация";
    $mail->Body = "Здравствуйте, $name! Спасибо за регистрацию на нашем сайте.";

    // Отправка письма
    if(!$mail->send()) {
        echo 'Ошибка отправки письма: ' . $mail->ErrorInfo;
    } else {
        echo 'Письмо успешно отправлено';
    }
}
?>

      <!-- Swiper -->
      <div class="present hidden">
        <img class="presents-present" src="./img/present.png" alt="">
        <img class="present-presents" src="./img/present.png" alt="">
      </div>
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="./img/6.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./img/2.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./img/3.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./img/5.jpg" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
  
    </aside>
    <footer>
      <ul class="wrapper container">
        <li class="icon facebook">
          <span class="tooltip">Facebook</span>
          <span><i class="fab fa-facebook-f"></i></span>
          <img
            class="facebook__logo"
            src="./img/facebook-svgrepo-com.svg"
            alt=""
          />
        </li>
        <li class="icon instagram">
          <span class="tooltip">Instagram</span>
          <span><i class="fab fa-instagram"></i></span>
          <a href="https://www.instagram.com/romashkina1159/">
            <img
            class="facebook__logo"
            src="./img/instagram-2016-logo-svgrepo-com.svg"
            alt=""/></a>
       
        </li>
        <li class="icon youtube">
          <span class="tooltip">Youtube</span>
          <span><i class="fab fa-youtube"></i></span>
          <a href="https://www.youtube.com/@user-zx1sj7fl8d"
            ><img
              class="facebook__logo"
              src="./img/youtube-svgrepo-com.svg"
              alt=""
          /></a>
        </li>
      </ul>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="./JS/slider.js"></script>
    <script src="./JS/form.js"></script>
  </body>
</html>
