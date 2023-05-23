<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style/style.css" type="text/css">
  <title>Document</title>
</head>

<body>

  <?php require_once('header.php') ?>
  <?php require_once('approach.php') ?>
  <?php require_once('task.php') ?>
  <?php require_once('services.php') ?>
  <?php require_once('footer.php') ?>


  <!-- общий класс .container для всех контейнеров 1160px
    общий класс .title для всех заголовков
    общий класс .slogan для 2x cлоганов
    общий класс .button-round для круглых кнопок
    общий класс .button-long для длинных кнопок
    общий класс .line для линий декора
    общий класс .bluetext  для синего поинт-текста 
    общий класс .group-img для линии с броколли
  -->

  <!-- ---------------------HEADER--------------------------->

  <header class="header">
    <div class="container">
      <a href="#"><img src="./assets/image/footer/logo.svg" alt="logo" class="header__logo"></a>

      <ul class="header__nav nav">
        <li class="nav__item nav__item_activ">
          <a href="#about" class="nav__link"> Обо мне </a>
        </li>
        <li class="nav__item nav__item_activ">
          <a href="#approach" class="nav__link"> Подход к работе</a>
        </li>
        <li class="nav__item nav__item_activ">
          <a href="#task" class="nav__link"> Чем могу помочь </a>
        </li>
        <li class="nav__item nav__item_activ">
          <a href="#services" class="nav__link"> Услуги </a>
        </li>
        <li class="nav__item nav__item_activ">
          <a href="#rewiew" class="nav__link"> Отзывы </a>
        </li>
        <li class="nav__item nav__item_activ">
          <a href="#sertificates" class="nav__link"> Сертификаты</a>
        </li>
      </ul>
    </div>
  </header>

  <!-- ---------------------HEADER END--------------------------->

  <!-- ---------------------ABOUT-1--------------------------->

  <div class="about" id="about">
    <div class="about__wrapper">
      <img src="./assets/image/about/ElenaKulikova.jpg" alt="Куликова Елена" class="about__photo">
      <div class="about__section section">
        <h3 class="section__slogan slogan">Привычки, а не диеты!</h3>
        <div class="section__img group-img">
          <img src="./assets/image/about/line.png" alt="line" class="line">
          <img src="./assets/image/about/broccoli.svg" alt="broccoli" class="group-img__img">
        </div>
        <h2 class="section__title">Куликова Елена</h2>
        <div class="section__subtitle">Нутрициолог, коуч полезных привычек, change maker</div>
      </div>
    </div>
  </div>

  <!-- ---------------------ABOUT-1 END--------------------------->
  <!-- ---------------------HELLO-2--------------------------->
  <div class="hello">
    <div class="hello__wrapper">
      <h3 class="hello__subtitle">
        Привет! Меня зовут Лена и я помогаю людям внедрять полезные пищевые
        привычки
      </h3>

      <p class="hello__text-1">
        Ведь все знают, что надо есть больше овощей, меньше сладкого, не
        «кусочничать» и убирать телефон на время обеда. Но как это сделать?
      </p>
      <p class="hello__text-2">
        Чтобы разобраться в этом, я пошла на учебу в одну из самых больших и
        престижных школ нутрициологии в мире. Это канадская Precision
        Nutrition, которая дает не только тонну знаний, основанных на
        научных исследованиях, но и инструменты внедрения этих знаний в
        жизнь. Получился, я настоящий коуч по питанию, который верит в силу
        маленьких шагов, в неидеальность, в то, что каждый человек, его
        жизнь и привычки уникальны.
      </p>

    </div>
  </div>


  <!-- ---------------------HELLO-2 END--------------------------->

  <!-- ---------------------APPROACH-3--------------------------->

  <div class="approach" id="approach">
    <div class="container">
      <h2 class="approach__title title">Подход к работе </h2>


      <div class="approach__header header-aproach">
        <h3 class="header-aproach__slogan slogan">К себе и еде — с любовью</h3>
        <div class="header-aproach__img group-img ">
          <img src="./assets/image/approach/line.png" alt="line" class="line">
          <img src="./assets/image/approach/broccoli.svg" alt="broccoli" class="group-img__img">
        </div>
        <div class="header-aproach__text">
          Пожалуй, так я бы описала главный принцип, которым руководствуюсь
          в работе.
        </div>
      </div>

      <div class="approach__list list">
        <h4 class="list__title">Мы не будем:</h4>
        <ul class="list__container">
          <li class="list__item"><img src="./assets/image/approach/krestik.svg" alt="нет">считать калории</li>
          <li class="list__item"><img src="./assets/image/approach/krestik.svg" alt="нет">взвешивать порции</li>
          <li class="list__item"><img src="./assets/image/approach/krestik.svg" alt="нет"> питаться по расписанию</li>
          <li class="list__item">
            <img src="./assets/image/approach/krestik.svg" alt="нет">отказываться от тортов и пиццы
          </li>
        </ul>
      </div>


      <div class="approach__list_green list">
        <h4 class="list__title">Мы будем:</h4>
        <ul class="list__container">
          <li class="list__item"><img src="./assets/image/approach/galochka.svg" alt="да">анализировать ваш образ жизни</li>
          <li class="list__item"><img src="./assets/image/approach/galochka.svg" alt="да">находить моменты, которые можно улучшить</li>
          <li class="list__item"><img src="./assets/image/approach/galochka.svg" alt="да"> шаг за шагом идти к цели</li>
          <li class="list__item">
            <img src="./assets/image/approach/galochka.svg" alt="да">получать удовольствие от новых привычек
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- --------------------APPROACH-3 END--------------------------->

  <!-- --------------------PHOTO-4--------------------------->

  <div class="photo__img">
    <div class="container">
      <img src="./assets/image/photo/food-4.jpg" alt="еда">
    </div>
  </div>
  <!-- --------------------PHOTO-4 END--------------------------->

  <!-- ---------------------TASK-5--------------------------->

  <div class="task" id="task">
    <div class="container">
      <h2 class="task__title title">С какими задачами я могу помочь </h2>
      <div class="task__row row">
        <div class="row__item">
          <div class="row__icon">
            <img src="./assets/image/task/1.svg" alt="иконка">
          </div>
          <div class="row__text">надоело есть одно и то же</div>
        </div>
        <div class="row__item">
          <div class="row__icon">
            <img src="./assets/image/task/2.svg" alt="иконка">
          </div>
          <div class="row__text">постоянно ем, но не наедаюсь</div>
        </div>
        <div class="row__item">
          <div class="row__icon">
            <img src="./assets/image/task/3.svg" alt="иконка">
          </div>
          <div class="row__text">хочу перестать есть сладкое</div>
        </div>
        <div class="row__item">
          <div class="row__icon">
            <img src="./assets/image/task/4.svg" alt="иконка">
          </div>
          <div class="row__text">хочу научиться есть овощи</div>
        </div>
        <div class="row__item">
          <div class="row__icon">
            <img src="./assets/image/task/5.svg" alt="иконка">
          </div>
          <div class="row__text">я не ем мясо, где брать белок</div>
        </div>
      </div>

      <div class="task__row row">
        <div class="row__item">
          <div class="row__icon">
            <img src="./assets/image/task/6.svg" alt="иконка">
          </div>
          <div class="row__text">я переехал(а) в новую страну и не понимаю, что есть</div>
        </div>
        <div class="row__item">
          <div class="row__icon">
            <img src="./assets/image/task/7.svg" alt="иконка">
          </div>
          <div class="row__text">хочу питаться разнообразно и не проводить жизнь на кухне</div>
        </div>
        <div class="row__item">
          <div class="row__icon">
            <img src="./assets/image/task/8.svg" alt="иконка">
          </div>
          <div class="row__text">я не чувствую голод и ем потому, что надо</div>
        </div>
        <div class="row__item">
          <div class="row__icon">
            <img src="./assets/image/task/9.svg" alt="иконка">
          </div>
          <div class="row__text">у меня жесткий график, я не успеваю нормально есть</div>
        </div>
      </div>

      <div class="task__subtitle">
        Не нашли свой запрос? Напишите мне, и я вам честно скажу, смогу ли
        быть полезной
      </div>

      <div class="task__btn">
        <button onclick="window.location.href ='https://t.me/ffemme';" class="button-long">
          Telegram
          <img src="./assets/image/task/telegram.png" alt="иконка Telegram">
        </button>
        <button onclick="window.location.href ='https://wa.me/351912780199';" class="button-long">
          WhatsApp <img src="./assets/image/task/watsapp.png" alt="иконка WhatsApp">
        </button>


      </div>
    </div>
  </div>

  <!-- --------------------TASK-5 END--------------------------->

  <!-- ---------------------SERVICES-6-------------------------->

  <div class="services" id="services">
    <div class="container">
      <h2 class="services__title title">Услуги </h2>
      <div class="services__cards card">
        <div class="card__title">
          Консультация
          <div class="card__title_green">1 час</div>
        </div>
        <div class="card__subtitle">2 000 ₽ / 25 €</div>
        <img src="./assets/image/services/linecard.png" alt="line" class="line">
        <div class="card__text">
          Если у вас есть конкретная задача или вопрос, это оптимальный способ
          начать двигаться в его разрешении. После записи вы заполните
          небольшую анкету, которая поможет мне подготовить для вас
          персональные рекомендации.
        </div>
        <div class="card__text">
            За час мы обсудим варианты решений, сложности и все условия, с
          которыми вы можете столкнуться при внедрении новых привычек. Через
          1-2 дня после консультации вы также получите конспект со всей важной
          информацией.
        </div>
        <div class="card__btn">
          <button onclick="window.location.href ='https://t.me/ffemme';" class="button-round">
            <img src="./assets/image/services/telegramm.png" alt="иконка Telegram">
          </button>
          <button onclick="window.location.href ='https://wa.me/351912780199';" class="button-round">
            <img src="./assets/image/services/watsapp.png" alt="иконка WhatsApp">
          </button>
        </div>
      </div>

      <div class="services__cards card">
        <div class="card__title">
          Групповая работа
          <div class="card__title_green">1 месяц</div>
        </div>
        <div class="card__subtitle">400 ₽ / 5 €</div>
        <img src="./assets/image/services/linecard.png" alt="line" class="line">
        <div class="card__text">
          Одна голова хорошо, а две — лучше. С детства верю в это, а после
          многочисленных креативных- и бизнес-штурмов точно знаю. Закрытый чат
          в Телеграм или Вотсап, на месяц. Заранее известны темы, с которыми
          будем работать 4 недели. Мини-задания на фокус внимания,
          тестирование новых продуктов, простые рецепты — каждый день, плюс
          безлимитная поддержка от меня и других участниц, подарки самым
          активным.
        </div>
        <div class="card__text">
            Со временем я хочу построить сообщество по интересам, где мы будем
          помогать друг другу в воплощении изменений, внедрении новых
          паттернов поведения, здесь будут эфиры с психологами,
          фитнес-тренерами, шеф-поварами.
        </div>
        <div class="card__btn">
          <button onclick="window.location.href ='https://t.me/ffemme';" class="button-round">
            <img src="./assets/image/services/telegramm.png" alt="иконка Telegram">
          </button>
          <button onclick="window.location.href ='https://wa.me/351912780199';" class="button-round">
            <img src="./assets/image/services/watsapp.png" alt="иконка WhatsApp">
          </button>
        </div>
      </div>

      <div class="services__cards card">
        <div class="card__title">
          Индивидуальное сопровождение
          <div class="card__title_green">1 месяц</div>
        </div>
        <div class="card__subtitle">7 000 ₽ / 85 €</div>
        <img src="./assets/image/services/linecard.png" alt="line" class="line">
        <div class="card__text">
          Если вы хотите посвятить время своему здоровью и самочувствию и вам
          нужна поддержка специалиста, то для вас идеально подойдет формат
          месячного сопровождения. Мы начнем с консультации, на которой
          сформулируем основную цель и поставим задачи. Обсудим план и начнем
          по нему двигаться. 
        </div>
        <div class="card__text">
           <span class="card__text_blue"> Формат работы:</span> раз в неделю созвон на 30-45 минут, обсуждаем
          успехи, зоны роста, корректируем план. После каждого созвона вы
          получаете краткий конспект на неделю. Я на связи ежедневно, в
          отдельном чате. За 4 недели вы приобрете 3-7 новых привычек, узнаете
          много про себя и свою еду.
        </div>
        <div class="card__btn">
          <button onclick="window.location.href ='https://t.me/ffemme';" class="button-round">
            <img src="./assets/image/services/telegramm.png" alt="иконка Telegram">
          </button>
          <button onclick="window.location.href ='https://wa.me/351912780199';" class="button-round">
            <img src="./assets/image/services/watsapp.png" alt="иконка WhatsApp">
          </button>
        </div>
      </div>

      <div class="services__cards card">
        <div class="card__title">
          Индивидуальное сопровождение
          <div class="card__title_green">3 месяца</div>
        </div>
        <div class="card__subtitle">18 000 ₽ / 210 €</div>
        <img src="./assets/image/services/linecard.png" alt="line" class="line">
        <div class="card__text">
          Если вы понимаете, что вам нужны большие изменения, если вы хотите
          разобраться во всех аспектах питания, избавиться от страхов,
          связанных с едой, развенчать мифы и построить свой собственный
          каркас привычек на все времена. Этот вариант также хорош для тех,
          кто привык вдумчиво двигаться к поставленной цели и понимает, что
          4-х недель может не хватить на перестройку сложившихся паттернов
          пищевого поведения.
        </div>
        <div class="card__text">
           <span class="card__text_blue">Формат работы:</span> заполнение анкеты и часовая консультация для
          определения цели и задач. Составление плана и дорожной карты. Связь
          в чате ежедневно, где вы показываете свою еду, я задаю вопросы,
          комментирую и советую. Раз в неделю мы созваниваемся, чтобы сверить
          пан, зафиксировать результаты и разобрать сложные моменты.
        </div>
        <div class="card__btn">
          <button onclick="window.location.href ='https://t.me/ffemme';" class="button-round">
            <img src="./assets/image/services/telegramm.png" alt="иконка Telegram">
          </button>
          <button onclick="window.location.href ='https://wa.me/351912780199';" class="button-round">
            <img src="./assets/image/services/watsapp.png" alt="иконка WhatsApp">
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- --------------------SERVICES-6 END--------------------------->

  <!-- ---------------------SERVICES-FOR-BUSINESS-7-------------------------->

  <div class="services-business">
    <div class="container">
      <h2 class="services-business__title title">Услуги для бизнеса </h2>


      <img src="./assets/image/services-business/2people.png" alt="Елена с коллегой" class="services-business__img-1">
      <div class="services-business__text-1"> Если вы <span class="bluetext"> подрядчик</span>, который способен организовать вкусный и сбалансированный <span class="bluetext "> кейтеринг</span>, тоже напишите мне, найдем возможности для сотрудничества.</div>
      <div class="services-business__text-2">Если вы хотите придумать классные и полезные закуски на <span class="bluetext ">вечеринку, детский праздник, пресс-конференцию</span>, танцевальный <span class="bluetext ">фестиваль</span> или провести <span class="bluetext ">лекцию</span> для своих сотрудников по теме питания, подобрать меню для столовой или ретрита — я могу вам помочь.</div>
      <img src="./assets/image/services-business/4people.png" alt="Елена с коллегами" class="services-business__img-2">
    </div>
  </div>
  <!-- ---------------------SERVICES-FOR-BUSINESS-7 END-------------------->

  <!-- --------------------PHOTO-8--------------------------->

  <div class="photo__img">
    <div class="container">
      <img src="./assets/image/photo/food-8.jpg" alt="еда">
    </div>
  </div>
  <!-- --------------------PHOTO-8 END--------------------------->

  <!-- ---------------------REWIEW-9-------------------------->
  <div class="container" id="rewiew">
    <h2 class="rewiew__title title"> Отзывы </h2>
    <div class="rewiew__photo">
      <img src="#" alt="">
      <img src="#" alt="">
      <img src="#" alt="">
      <img src="#" alt="">
    </div>
  </div>
  <!-- ---------------------REWIEW-9 END--------------------------->

  <!-- ---------------------SERTIFICATES-10-------------------------->

  <div class="container" id="sertificates">
    <h2 class="sertificates__title title"> Мои сертификаты </h2>
    <div class="sertificates__text">
      <span class="bluetext ">Основа моего подхода</span> — знания и навыки, полученные в канадской Precision Nutrition. На данный момент я заканчиваю обучение, но у меня уже есть право на практику. Здесь обучают коучей по питанию с 2005 года, это диплом международного образца, признанный во всех странах. Главная особенность PN — сочетание научных знаний и индивидуального подхода. Этим нутрициолог отличается от диетолога: второй говорит, что нужно делать. Первый — что и как.
      <div class="sertificates__photo">
        <img src="#" alt="">
      </div>
      <div class="sertificates__photo">
        <img src="#" alt="">
      </div>
      <div class="sertificates__photo">
        <img src="#" alt="">
      </div>
      <div class="sertificates__photo">
        <img src="#" alt="">
      </div>
    </div>
  </div>

  <!-- ---------------------SERTIFICATES-10 END--------------------------->

  <!-- ---------------------FORM-11-------------------------->

  <div class="form">
    <div class="form__wrapper">
      <h2 class="form__title title"> Напишите мне </h2>
      <div class="form__subtitle">для этого можете заполнить форму или написать в удобный мессенджер</div>
      <form class="form__forma forma" action="#">
        <input class="forma__input" type="text" placeholder="Имя" pattern="[A-Za-zА-Яа-яЁё]{2}" required>
        <input class="forma__input" type="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
        <input class="forma__input" type="tel" placeholder="Телефон" pattern="(\+7[0-9]{10}|8[0-9]{10})" required>
        <input class="forma__input" type="checkbox" value="1">нажимая кнопку, вы даете согласие на обработку персональных данных и соглашаетесь с
        <a href="#">Политикой конфиденциальности</a>
      </form>

      <button class="button-long_white">
        Отправить
      </button>

      <div class="task__btn">
        <button onclick="window.location.href ='https://t.me/ffemme';" class="button-long">
          Telegram
          <img src="./assets/image/task/telegram.png" alt="иконка Telegram">
        </button>
        <button onclick="window.location.href ='https://wa.me/351912780199';" class="button-long">
          WhatsApp <img src="./assets/image/task/watsapp.png" alt="иконка WhatsApp">
        </button>
        <img src="./assets/image/form/elena.jpg" alt="Елена" class="form__img">
      </div>
    </div>
  </div>
  <!-- ---------------------FORM-11 END--------------------------->

  <!-- ---------------------FOOTER--------------------------->
  <footer class="footer">
    <div class="container">
      <img class="footer__logo logo" src="./assets/image/footer/logo.svg" alt="логотип">
      <div class="footer__text">@nutrition2023</div>
      <nav class="footer__nav nav">
        <h6>Меню</h6>
        <a href="#about" class="nav__link">Обо мне</a>
        <a href="#approach" class="nav__link">Подход к работе</a>
        <a href="#task" class="nav__link">Чем могу помочь</a>
        <a href="#services" class="nav__link">Услуги</a>
        <a href="#rewiew" class="nav__link">Отзывы</a>
      </nav>
      <div class="footer__socials">
        <h6>Подписывайтесь</h6>
        <a href="#" class="footer__link">Instagram</a>
        <!-- ADD INSTAGRAM LINK -->
        <a href="https://t.me/heybroccoli" class="footer__link">Мой блог об изменении привычек "А как же брокколи"</a>
        <a href="https://t.me/roadinside_me" class="footer__link">Заметки об эмиграции и приключениях "Взяла и переехала"</a>
      </div>
      <div></div>
    </div>
  </footer>
  <!-- ---------------------FOOTER END--------------------------->

</body>

</html>