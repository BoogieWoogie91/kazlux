﻿<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <!--FavIcons-->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
    <meta name="description" content="ЗАКАЖИ УМНЫЕ ЧАСЫ COLMI">
    <meta name="keywords" content="COLMI, Элитные часы, Подарок часы, Купить элитные часы">
    <meta name="author" content="Denis Yakunin">
    <script type="text/javascript" src="js/analytics.js"></script>
    <title>ColMI</title>
     
  </head>
  <body onload="startTimer()">

  <div class='content'>

    <div class='row top row justify-content-between'> <!--Top Row With Logo and Navbar-->
          <div class='col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 logoBox'><!--Logo Column-->
            <a href='index.html'><img class='logoImg' src='img/logo.png'></a>
          </div><!--Logo Column Ending-->

        </div><!--Top Row With Logo and Navbar Ending-->

        <div class ='row rowShopNavbar' id="rowTobeHidden">
          <div class='col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 phones shopNavbar'>
            <a href="index_phones.html">
            <p>Телефоны</p>
            <img src='img/phoneicon.png'>
          </a>
          </div>

          <div class='col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 beauty shopNavbar'>
            <a href='index_beauty.html'>
            <p>Красота и здоровье</p>
            <img src='img/makeupicon.png'>
          </a>
          </div>

          <div class='col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 bags shopNavbar'>
            <a href='index_bags.html'>
            <p>Рюкзаки,<br> сумки</p>
            <img src='img/briefcaseicon.png'>
          </a>
          </div>

          <div class='col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 accessories shopNavbar'>
            <a href='index_watch.html'>
            <p>Часы и <br> аксессуары</p>
            <img src='img/wristwatchicon.png'>
          </a>
          </div>

          <div class='col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 kids shopNavbar'>
            <a href='index_kids.html'>
            <p>Для детей</p>
            <img src='img/baby-boyicon.png'>
          </a>
          </div>

          <div class='col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 misc shopNavbar'>
            <a href='index_misc.html'>
            <p>Разное</p>
            <img src='img/umbrellaicon.png'>
          </a>
          </div>
        </div>


        <!-------------------------------------------------------------------------THE NEXT STUFF SUPPOSED TO SHOW ON SMALL SCREENS-------------------------------------------------------->
        <div class='navbarForSmall' id='hiddenNavBar'>
          <a href='index.html'><img class ='mobileLogoImg' src='img/logo_lux.svg'></a>
          <button class="navbarToggleForSmall" onclick="toggle_visibility('hiddenNavBar'); toggle_visibility('hiddenNavBar1'); toggle_visibility('hidden');">
            <span class="navbar-toggler-icon"><i class="fas fa-bars mobileBurger"></i></span>
          </button>

          <div class='blueNavbar' id='hiddenNavBar1'>
            <img src='img/logo_lux_white.svg'>
            <button class="navbarToggleForSmallBlue" onclick="toggle_visibility('hidden'); toggle_visibility('hiddenNavBar1'); toggle_visibility('hiddenNavBar');">
              <span class="navbar-toggler-icon"><i class="fas fa-bars mobileBurgerBlue"></i></span>
            </button>
          </div>

          <ul class="accordion" id='hidden'>
            <li><div class="trigger">
              <input type="checkbox" id="checkbox-1" name="checkbox-1" />
              <label for="checkbox-1" class="checkbox"><a href='index_phones.html'>
                <img class ='phoneImg' src='img/smartphone-call.svg'>
                Телефоны</a>
              </label>
            </div></li>

            <li><div class="trigger">
              <input type="checkbox" id="checkbox-2" name="checkbox-2" />
              <label for="checkbox-2" class="checkbox"><a href='index_beauty.html'>
                <img class ='beautyImg' src='img/cosmetics.svg'>
                Красота и здоровье</a>
              </label>
            </div></li>

            <li><div class="trigger">
              <input type="checkbox" id="checkbox-3" name="checkbox-3" />
              <label for="checkbox-3" class="checkbox"><a href='index_bags.html'>
                <img class ='bagsImg' src='img/working-briefcase.svg'>
                Рюкзаки, сумки</a>
              </label>
            </div></li>

            <li><div class="trigger">
              <input type="checkbox" id="checkbox-4" name="checkbox-3" />
              <label for="checkbox-4" class="checkbox"><a href='index_watch.html'>
                <img class ='accessoriesImg' src='img/wristwatch.svg'>
                Часы и аксессуары</a>
              </label>
            </div></li>

            <li><div class="trigger">
              <input type="checkbox" id="checkbox-5" name="checkbox-3" />
              <label for="checkbox-5" class="checkbox"><a href='index_kids.html'>
                <img class ='kidsImg' src='img/baby-boy.svg'>
                Для детей</a>
              </label>
            </div></li>

            <li><div class="trigger">
              <input type="checkbox" id="checkbox-6" name="checkbox-3" />
              <label for="checkbox-6" class="checkbox"><a href='index_misc.html'>
                <img class ='miscImg' src='img/insurance.svg'>
                Разное</a>
              </label>
            </div></li>
          </ul>

        </div>
      </div>
      <div class="fixedNavContainer" id="rowTobeFixed">
        <div class ='row rowShopNavbarFIxed'>
          <div class='col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 phonesFixed shopNavbarFixed'>
           <a href='index_phones.html'><p>Телефоны</p></a>
            <img src='img/iconphoneforfixed.png'>
          </div>
          <div class='col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 beautyFixed shopNavbarFixed'>
            <a href='index_beauty.html'><p>Красота и здоровье</p></a>
            <img src='img/makeupforfixed.png'>
          </div>

          <div class='col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 bagsFixed  shopNavbarFixed'>
            <a href='index_bags.html'><p>Рюкзаки,<br> сумки</p></a>
            <img src='img/briefcaseforfixed.png'>
          </div>

          <div class='col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 accessoriesFixed  shopNavbarFixed'>
            <a href='index_watch.html'><p>Часы и <br> аксессуары</p></a>
            <img src='img/wristwatchforfixed.png'>
          </div>

          <div class='col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 kidsFixed  shopNavbarFixed'>
            <a href='index_kids.html'><p>Для детей</p></a>
            <img src='img/baby-boyforfixed.png'>
          </div>

          <div class='col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 miscFixed  shopNavbarFixed'>
            <a href='index_misc.html'><p>Разное</p></a>
            <img src='img/umbrellaforfixed.png'>
          </div>
        </div>
      </div>


<!---------------------------------------------------------------------EBANNYI SLICK-->
<section class="center slider" id="slider">
    <div>
        <img src="img/colMiSlider_1.png">
    </div>
    <div>
        <img src="img/colMiSlider_2.png">
    </div>
    <div>
        <img src="img/colMiSlider_3.png">
    </div>
    <div>
        <img src="img/colMiSlider_1.png">
    </div>
    <div>
        <img src="img/colMiSlider_2.png">
    </div>
    <div>
        <img src="img/colMiSlider_3.png">
    </div>
</section>
<!---------------------------------------------------------------------EBANNYI SLICK-->


<div class='orderThisNow'>
    <div class='content_1366'>
    <div class='row wrapper_10Row'>
        <div class='col-12 col-sm-12 col-md-12 col-lg-7 col-xl-6 offset-xl-1'>
            <h1 class='alignLeftt hidable2'>ЗАКАЖИ УМНЫЕ ЧАСЫ COLMI</h1>
           
        </div>
    </div>
    <div class='row orderThisNowRow align-items-start'>
        <div class='col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 offset-xl-1 orderThisNowCol orderThisNowCol_1 ColMiOrderThisNowCol_1 order-2 order-sm-2 order-md-2 order-lg-1 order-xl-1'>
            <h1 class='alignLeftt showable2'>ЗАКАЖИ УМНЫЕ ЧАСЫ COLMI</h1>
       
            <div class='form_lastBlock'>
                <form action="form/integration.php" method="post">
                    <input type="hidden" name="tema" value="colMi"/>
                    <input type="hidden" name="price" value="11.900"/>
                    <input type="hidden" name="comments" value="http://kz-luxury.com/colMi.html"/>
                    <p>Ваше Имя</p>
                    <input class='purchaseFormInput' type="text" placeholder="Иван Иванович" name="name">
                    <p>Ваш Телефон</p>
                     <input class='purchaseFormInput' type="text" placeholder="+7 (7XX) XXX XX XX" name='phone' id='phone2'>
                    <div class='buttonWrap_3'>
                        <button class='purchaseFormButton' type='submit'>Заказать</button>
                    </div>
                </form>
            </div>
        </div>
        <div class='col-12 col-sm-12 col-md-12 col-lg-4 col-xl-3 orderThisNowCol orderThisNowCol_2_colMi order-1 order-sm-1 order-md-1 order-lg-2 order-xl-2'>
        </div>
        <div class='col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 orderThisNowCol orderThisNowCol_3 order-3 order-sm-3 order-md-3 order-lg-3 order-xl-3'>
            <div class="howWeWorkWrapper">
                <h1>Как мы работаем</h1>
                <div class='howWeWork howWeWork_1'>
                    <div class='imgWrap_11'>
                        <img src='img/untitled-2.png'>
                    </div>
                    <p><span class='boldy'>Заявка</span><br>Вы оставляете<br>заявку на сайте</p>
                </div>
                <div class='howWeWork howWeWork_2'>
                    <div class='imgWrap_12'>
                        <img src='img/untitled-1.png'>
                    </div>
                    <p><span class='boldy'>Подтверждение</span><br>Менеджер связывается с<br>Вами для подтверждения заказа</p>
                </div>
                <div class='howWeWork howWeWork_3'>
                    <div class='imgWrap_13'>
                        <img src='img/untitled-3.png'>
                    </div>
                    <p><span class='boldy'>Доставка</span><br>Мы быстро доставляем<br>Вашу посылку по указанному адресу</p>
                </div>
                <div class='howWeWork howWeWork_4'>
          <div class='imgWrap_13'>
            <img src='img/crcard.png' alt="delivery">
          </div>
          <p><span class='boldy'>Оплата</span><br>Оплата при получении<br>на КазПочте</p>
        </div>
            </div>
        </div>
    </div>
</div>
</div>



<div class="sync">
    <div class="content_1100">
        <h1>СИНХРОНИЗАЦИЯ</h1>
        <p>Часы синхронизируются с устройствами iOS (iPhone) и Android.</p>
        <div class="row syncRow">
            <div class="col-12 col-sm-12  col-md-12  col-lg-4  col-xl-4 syncCol syncCol_1">
                <img src="img/sfaq-iphone_2x.png">
            </div>
            <div class="col-12 col-sm-12  col-md-12  col-lg-4  col-xl-4 syncCol syncCol_2">
                <img src="img/smartWatch.png">
                <p>Также в часы можно вставить sim-карту и карту памяти, что позволяет им работать, как отдельное устройство.</p>
                <div class='buttonWrap_1'>
                    <a href="#slider"><div class="buttonChanger">ЗАКАЗАТЬ</div></a>
                </div>
            </div>
            <div class="col-12 col-sm-12  col-md-12  col-lg-4  col-xl-4 syncCol syncCol_3">
                <img src="img/samsung-galaxy-s9-render1 (1).png">
            </div>
        </div>
    </div>
</div>

<div class='characteristics colMiChar'>
    <div class='content_1100'>
        <div class='row characteristicsRow'>
            <div class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-8 characteristicsCol characteristicsCol_1'>
                <h1>Характеристики часов</h1>
                <p class='colored'>Качество, которое не оставит Вас равнодушным</p>
                <p class='charP'>Возьмите эти часы с собой на деловую встречу, занятия спортом,<br>отдых или просто носите их в повседневной жизни и они будут дарить<br>Вам только приятные эмоции, восхищение со стороны женщин и уважение мужчин.</p>
                <div class='charLists'>
                    <ul>
                        <li><span class='boldy'>Бренд:</span> "ColMi"</li>
                        <li><span class='boldy'>Тип:</span> Умные часы</li>
                        <li class='last'><span class='boldy'>Браслет:</span> Силикон</li>
                    </ul>
                    <ul class='rightUl'>
                        <li><span class='boldy'>Корпус:</span> Нержавеющая сталь</li>
                        <li><span class='boldy'>Цвет корпуса:</span> Золотистый, серебристый, розовый</li>
                        <li class='last'><span class='boldy'>Экран:</span> Сенсорный ЖК-экран, 1.54", 240x240</li>
                    </ul>
                </div>
            </div>
            <div class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 characteristicsCol characteristicsCol_2'>
                <div class='imgWrap_21 colMiChars'>
                    <img src='img/colMiphotos.png'>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="colMiBanner">
    <img src="img/colMibackgrnd.png">
</div>


<div class="colMifunctions">
    <div class="content_1100">
        <h1>Функционал</h1>
        <p>Умных часов ColMi</p>
        <div class="row colMifuncRow_1">
            <div class='col-6 col-sm-4 col-md-4 col-lg-2 col-xl-2 colMifuncCol colMiFuncCol_1'>
                <img src="img/auricular-phone-symbol-in-a-circle.png">
                <p>Звонки с СИМ карты, так же по Bluetooth</p>
            </div>
            <div class='col-6 col-sm-4 col-md-4 col-lg-2 col-xl-2 colMifuncCol colMiFuncCol_2'>
                <img src="img/sms.png">
                <p>Отправка и получение SMS чатов</p>
            </div>
            <div class='col-6 col-sm-4 col-md-4 col-lg-2 col-xl-2 colMifuncCol colMiFuncCol_3'>
                <img src="img/contacts.png">
                <p>Автоматическая синхронизация контактов</p>
            </div>
            <div class='col-6 col-sm-4 col-md-4 col-lg-2 col-xl-2 colMifuncCol colMiFuncCol_4'>
                <img src="img/clock1.png">
                <p>Три предустановленных циферблата</p>
            </div>
            <div class='col-6 col-sm-4 col-md-4 col-lg-2 col-xl-2 colMifuncCol colMiFuncCol_5'>
                <img src="img/camera-shutter1.png">
                <p>Камера часов позволяет делать фотографии</p>
            </div>
            <div class='col-6 col-sm-4 col-md-4 col-lg-2 col-xl-2 colMifuncCol colMiFuncCol_6'>
                <img src="img/music-player.png">
                <p>Музыкальный плеер</p>
            </div>
        </div>
        <div class="row colMifuncRow_2">
            <div class='col-6 col-sm-4 col-md-4 col-lg-2 col-xl-2 colMifuncCol colMiFuncCol_1'>
                <img src="img/runningdude.png">
                <p>Шагомер</p>
            </div>
            <div class='col-6 col-sm-4 col-md-4 col-lg-2 col-xl-2 colMifuncCol colMiFuncCol_2'>
                <img src="img/microphone.png">
                <p>Диктофон</p>
            </div>
            <div class='col-6 col-sm-4 col-md-4 col-lg-2 col-xl-2 colMifuncCol colMiFuncCol_3'>
                <img src="img/reminder.png">
                <p>Сидячий напоминатель</p>
            </div>
            <div class='col-6 col-sm-4 col-md-4 col-lg-2 col-xl-2 colMifuncCol colMiFuncCol_4'>
                <img src="img/moon.png">
                <p>Мониторинг сна</p>
            </div>
            <div class='col-6 col-sm-4 col-md-4 col-lg-2 col-xl-2 colMifuncCol colMiFuncCol_5'>
                <img src="img/magnifying-glass-finder.png">
                <p>Нахождение смартфона</p>
            </div>
            <div class='col-6 col-sm-4 col-md-4 col-lg-2 col-xl-2 colMifuncCol colMiFuncCol_6'>
                <img src="img/sync-arrows.png">
                <p>Синхронизация со смартфоном</p>
            </div>
        </div>
    </div>
</div>


<div class='certificate'>
  <div class='content_1100'>
    <h1>ВЫБИРАЙТЕ ОФИЦИАЛЬНОГО ДИЛЕРА</h1>
    <p class='colored'>Умных часов ColMi</p>
    <div class='row'>
      <div class='col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 noPad'>
        <div class='wrap_276'>
          <img src='img/cer1.png'>
        </div>
      </div>

      <div class='col-12 col-sm-12 col-md-12 col-lg-3 col-xl-4 noPad'>
        <div class='wrap_276'>
          <img src='img/cer2.png'>
        </div>
      </div>

      <div class='col-12 col-sm-12 col-md-12 col-lg-6 col-xl-5'>
        <p class='certificateP'>1. Вы получаете цветной гарантийный талон сроком на 365 дней<br><br>

            2. Официальный сертифицированный производитель ColMi<br><br>

            3. Вы получаете полную техническую поддержку и помощь в настройке<br><br>

            4. Для вас – бесплатное приложение для Android<br><br>

            5. Инструкция на русском языке<br><br>

            6. Полностью русифицированный интерфейс<br><br>

            7. Оригинальная фирменная упаковка<br><br>

            8. Имеется декларация соответствия требованиям Таможенного Союза</p>
      </div>
    </div>
  </div>
</div>


<div class='supposedToMakeUbuy'>
    <div class='content_1100'>
        <h1>Умные Часы colMi</h1>
        <p>С нами Вам будет удобно</p>
        <div class='row makeUbuyRow'>
            <div class='col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 makeUbuyCol makeUbuyCol_1'>
                <div class='imgWrap_2'>
                    <img src='img/guarantee.png'>
                </div>
                <p>Прямые поставки от производителя.<br> 100% гарантия качества и низкой<br> цены</p>
            </div>
            <div class='col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 makeUbuyCol makeUbuyCol_2'>
                <div class='imgWrap_1'>
                    <img src='img/donation.png'>
                </div>
                <p>Вы получаете только лучший товар,<br> вы в праве отказаться в течении 14<br> дней с момента получения товара.</p>
            </div>
            <div class='col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 makeUbuyCol makeUbuyCol_3'>
                <div class='imgWrap_3'>
                    <img src='img/delivery-truck.png'>
                </div>
                <p>Без предоплаты, доставка по всей<br> стране</p>
            </div>
        </div>
        <div class='buttonWrap_1'>
            <a href="#slider"><div class="buttonChanger">ЗАКАЗАТЬ</div></a>
        </div>
    </div>
</div>


<div class='timerBlock'>
    <p>До конца акции осталось:</p>
    <?php 

    $time = '07  00  00';
    if ( isset( $_COOKIE["my_timer"] ) ) {

      $time = $_COOKIE["my_timer"];
    }
    ?>
    <p><span id="my_timer" style="color: #fff; font-size: 273%;"><?php print $time; ?></span></p>
    <div class='flexNoWrap textBoxForTimer'>
      <p class='mlzero'>Часы</p>
      <p class='mauto'>Минуты</p>
      <p class='mrzero'>Секунды</p>
    </div> 
  </div>


<div class='trueFeedbackBlock'>
    <div class='content_1100'>
        <h1>ОТЗЫВЫ ПОКУПАТЕЛЕЙ</h1>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
                <div class='row trueFeedbackRow'>
                    <div class='col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 noPad'>
                        <div class='FeedBackPhoto'>
                            <img src='img/15099556_331483367223315_5758413243890532352_n.jpg'>                            
                        </div>
                        <p class='FeedBackName'>Владислав Ким</p>
                        <p class='FeedBackCity'>Талды-Курган</p>
                    </div>
                    <div class='col-12 col-sm-12 col-md-8 col-lg-9 col-xl-9 trueFeedbackCol_2'>
                        <p>Огромное спасибо сотрудникам магазина за замечательный товар, практичный и качественный. Точное соотношение цена-качество. Как и обещяли получил посылку на почте и оплатила при получение на руки! буду пользоваться ВСЕГДА!</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
              <div class='row trueFeedbackRow'>
                    <div class='col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 noPad'>
                        <div class='FeedBackPhoto'>
                            <img src='img/37568364_1950929921866048_13885590613262336_n.jpg'>
                        </div>
                        <p class='FeedBackName'>Абдулла Ганиев</p>
                        <p class='FeedBackCity'>Шымкент</p>
                    </div>
                    <div class='col-12 col-sm-12 col-md-8 col-lg-9 col-xl-9 trueFeedbackCol_2'>
                        <p>сделал заказ в данном магазине, думал будут просить оплату или еще что то. ВСЕ КАК ЗАЯВЛЕННО!!!! Получил часы и оплата по факту получения!!!!!</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
              <div class='row trueFeedbackRow'>
                    <div class='col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 noPad'>
                        <div class='FeedBackPhoto'>
                            <img src='img/15035718_330979600601297_6420557605906677760_n.jpg'>
                        </div>
                        <p class='FeedBackName'>Ермек Хамидов</p>
                        <p class='FeedBackCity'>Алматы</p>
                    </div>
                    <div class='col-12 col-sm-12 col-md-8 col-lg-9 col-xl-9 trueFeedbackCol_2'>
                        <p>Ввел номер телефона в 1 клик, перезвонили, согласовали, отправили, пришла посылка, получение и долгожданный товар уже радует, процветания вашему делу;))))</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
              <div class='row trueFeedbackRow'>
                    <div class='col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 noPad'>
                        <div class='FeedBackPhoto'>
                            <img src='img/22220686_1922708651381295_6250012155458879488_n.jpg'>
                        </div>
                        <p class='FeedBackName'>Лена Югай</p>
                        <p class='FeedBackCity'>Алматы</p>
                    </div>
                    <div class='col-12 col-sm-12 col-md-8 col-lg-9 col-xl-9 trueFeedbackCol_2'>
                        <p>Получила посылочку, спасибо вам огромное!!! очень довольна телефоном. все как на картинке, пользуюсь уже две недели, нареканий никаких нету, рекомендую этот магазин</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
              <div class='row trueFeedbackRow'>
                    <div class='col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3'>
                        <div class='FeedBackPhoto'>
                            <img src='img/26071274_315707815588759_8535706214661619712_n.jpg'>
                        </div>
                        <p class='FeedBackName'>Лютвинюк Полина</p>
                        <p class='FeedBackCity'>Астана</p>
                    </div>
                    <div class='col-12 col-sm-12 col-md-8 col-lg-9 col-xl-9 trueFeedbackCol_2'>
                        <p>Товар шикарный, несмотря на то, что посылка немного задержалась, но заказывать буду еще !</p>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
</div>


<div class='purchase_block_colMi'>
    <div class='content_1100'>
        <div class='row purchaseRow'>
            <div class='col-12 offset-0 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-4 offset-lg-0 col-xl-4 formCol'>
                <div class='form_colMi'>
                    <form action ='form/integration.php' method='post'>
                        <input type="hidden" name="tema" value="colMi"/>
                        <input type="hidden" name="price" value="11.900"/>
                        <input type="hidden" name="comments" value="http://kz-luxury.com/colMi.html"/>
                        <p>Ваше ФИО</p>
                        <input class='purchaseFormInput' type="text" placeholder="Имя" name='name'>
                        <p>Ваш Телефон</p>
                        <input class='purchaseFormInput' type="text" placeholder="+7 (7XX) XXX XX XX" name='phone' id='phone'>
                        <div class='buttonWrap'>
                            <button class='purchaseFormButton' type='submit'>ЗАКАЗАТЬ В ОДИН КЛИК</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class='col-12 col-sm-12 offset-sm-0 col-md-10 offset-md-1 col-lg-8 offset-lg-0 col-xl-8 offset-xl-0 picCol_colMi'>
                <div class="colMiWrap">
                    <h1>Новинка</h1>
                    <h2>МНОГОФУНКЦИОНАЛЬНЫЕ<br> БРЕНДОВЫЕ УМНЫЕ ЧАСЫ GT08</h2>
                 
                    <div class='priceCircle_1 specialPriceCircle'>
                      <div class='innerPriceCircle_1'>
                        <p>Цена cо скидкой</p>
                        <p class='price'>11 900тг.</p>
                        <p>Старая цена:<br><span class='lineThrough'>25 320 тенге</span></p>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class='footer'>
    <div class='content_1230'>
        <div class='row'>
            <div class='col-4 col-sm-4 col-md-2 col-lg-2 col-xl-3'>
                <img src='img/logo_lux_white.svg'>
            </div>
            <div class='col-6 col-sm-6 col-md-8 col-lg-8 col-xl-8'>
                <p>"Luxury Shop" г.Москва, ул. Новоорловская, д. 5Б, 119633</p>
            </div>
            <div class='col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1'>
                <button><a href="#slider"><img src="img/arrow-up.png"></a></button>
            </div>
        </div>
    </div>
</div>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script src="./js/jquery.maskedinput.min.js"></script>

<script type="text/javascript">
   $(window).scroll(function() {
        var height = $(window).scrollTop();

        /*Если сделали скролл на 100px задаём новый класс для header*/
        if(height > 90){
            $('#rowTobeHidden').addClass('hidden');
        } else {
            /*Если меньше 100px удаляем класс для header*/
            $('#rowTobeHidden').removeClass('hidden');
        }
    });
</script>

<script type="text/javascript">
    function toggle_visibility(id) {
        let e = document.getElementById(id);
        if(e.style.display == 'block')
            e.style.display = 'none';
        else
            e.style.display = 'block';
    }
</script>

<script type="text/javascript">
    $(".center").slick({
        dots: false,
        infinite: true,
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        autoplay: false,
        focusOnSelect: true,
        arrows: false
    });
</script>

<script>
$(function(){
  $("#phone").mask("+7(799)999-9999");
});
  </script>

  
      <script>
$(function(){
  $("#phone2").mask("+7(799)999-9999");
});
  </script>


  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-128196736-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-128196736-1');
</script>

<!-- Yandex.Metrika counter -->
<script>
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter50910083 = new Ya.Metrika2({
                    id:50910083,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/50910083" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

  <script type="text/javascript">
      function startTimer() {
        var my_timer = document.getElementById("my_timer");
        var time = my_timer.innerHTML;
        var arr = time.split("  ");
        var h = arr[0];
        var m = arr[1];
        var s = arr[2];
        if (s == 0) {
          if (m == 0) {
            if (h == 0) {             
              window.location.reload();
              return;
            }
            h--;
            m = 60;
            if (h < 10) h = "0" + h; // Сюда вставить из куки
          }
          m--;
          if (m < 10) m = "0" + m; // сюда
          s = 59;
        }
        else s--;
        if (s < 10) s = "0" + s; // и сюда
        document.getElementById("my_timer").innerHTML = h +"  "+m+"  "+s;
        document.cookie = "my_timer="+ h +"  "+ m +"  "+s;

        setTimeout(startTimer, 1000);
    }
</script>

</body>
</html>