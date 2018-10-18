    <section class="choose-website">
		<div class="choose">
			<i class="fa fa-times" aria-hidden="true"></i>
			<div class="choose-head">
				<p>Не можете подобрать сайт?</p>
				<p class="span">Заполните форму и мы поможем вам</p>
			</div>
			<div class="container">
				<div class="row">	
					<div class="col-12">
						<div class="choose-form">
							<div class="field-name">
								<input type="text" id="name_choose" placeholder="Ваше имя">
							</div>
							<div class="field-email">
								<input type="text" id="email_choose" placeholder="Ваш E-mail">
							</div>
							<div class="field-phone">
								<input type="text" id="phone_choose" placeholder="Ваш телефон">
                            </div>
                            <div id="error"></div>
							<a href="<?= $_SERVER['REQUEST_URI'] ?>" class="_btn_group get-consult-choose">Получить косультацию</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="choose-success">
			<i class="fa fa-times" aria-hidden="true"></i>
			<div class="choose-success-img">
				<img src="/public/img/assets/yes.png" alt="Успех">
			</div>
			<div class="choose-success-div">
	            <p class="choose-success-p">Ваша заявка принята</p>
	            <p>Наш менеджер свяжется с вами в <strong>течении 5 минут</strong></p>
	        </div>
	        <button id="choose-back" class="_btn_group">Вернуться на сайт</button>
		</div>
	</section>
    <section class="modal-popap">
        <div class="popap">
        	<i class="fa fa-times" aria-hidden="true"></i>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="head">
                            <p>Получить консультацию просто</p>
                            <p class="span">Заполните форму и мы поможем вам</p>
                        </div>
                        <div class="row">
                            <div class="col-12 col-to-form">
                                <div class="form_call">
                                    <div class="field-name">
                                        <input type="text" id="name_call" placeholder="Ваше имя">
                                    </div>
                                    <div class="field-email">
                                        <input type="text" id="email_call" placeholder="Ваш E-mail">
                                    </div>
                                    <div class="field-phone">
                                        <input type="text" id="phone_call" placeholder="Ваш телефон">
                                    </div>
                                    <div id="error_call_field"></div>
                                    <a href="<?= $_SERVER['REQUEST_URI']; ?>" class="_btn_group _btn-phone">Заказать звонок</a>
                                </div>
                            </div>
                            <div class="col-12 col-xl-8 success-field">
                                <div class="success">
                                    <img src="/public/img/assets/yes.png" alt="Успех">
                                </div>
                                <div class="success-div">
                                    <p class="success-p">Ваша заявка принята</p>
                                    <p>Наш менеджер свяжется с вами <br>в <strong>течении 5 минут</strong></p>
                                </div>
                                <button id="back" class="_btn_group">Вернуться на сайт</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  <section class="headerTop" style="background-image: url(/public/img/assets/sloi_9.png)">
    <div class="mobile-menu">
        <nav class="mobile-nav">       
          <?php foreach ( $menus as $menu ) : ?>
            <a href="/catalog/1"><?= $menu['name']; ?></a>
          <?php endforeach; ?>
        </nav>
    </div>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-8 col-sm-4 col-md-3 align-self-center align-self-md-end">
                    <div class="logo">
                        <a class="logo-title" href="/"><?= $vars['nameSite']; ?></a>
                    </div>
                </div>
                <div class="d-none d-md-block col-md-5 offset-xl-1 align-self-end">
                    <nav class="main-navigation">
                    <?php foreach ( $menus as $menu ) : ?>
                      <a href="/catalog/1"><?= $menu['name']; ?></a>
                    <?php endforeach; ?>
                    </nav>
                </div>
                <div class="col-10 order-1 order-sm-0 col-sm-6 col-md-3 align-self-center align-self-md-end">
                    <div class="consult">
                        <a id="consult-link" href="#"><?= $vars['getConsult']; ?></a>
                    </div>
                </div>
                <div class="col-4 order-0 order-sm-1 col-sm-2 d-md-none toggle-btn">
                    <div class="toggle">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="headerContent">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="description">
                        <div class="title">
                          <?php foreach ( $vars['mainTitle'] as $titleheader ) : ?>
                            <p class="head"><?= $titleheader; ?></p>
                          <?php endforeach; ?>
                        </div>
                        <div class="text">
                            <p>
                                <?= $vars['mainDescription'] ?>
                            </p>
                        </div>
                        <div class="go-catalog">
                            <a class="_btn_group" href="/catalog/1"><?= $vars['goCatalog']; ?></a>
                        </div>
                        <div class="social">
                            <p><?= $vars['socialTitle']; ?></p>
                            <div class="social-icons">
                              <?php foreach ( $vars['socialLinks'] as $social ) : ?>
                                <?= $social; ?>
                              <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none d-md-block col-md-6">
                    <div class="info-block">
                        <img class="img1" src="public/img/assets/pryamougolnik.png" alt="">
                        <img class="img2" src="public/img/assets/3-layers.png" alt="img">
                        <div class="decisions">
                            <p class="fade_effects fade1"><span class="spincrement1">468</span>готовых решений</p>
                            <div class="line line1">
                                <img src="public/img/assets/2-layers.png" alt="img">
                            </div>
                        </div>
                        <div class="service">
                            <p class="fade_effects fade2"><span><span class="spincrement2_1">24</span>/<span class="spincrement2_2">7</span></span>обслуживание</p>
                            <div class="line line2">
                                <img src="public/img/assets/2-layers.png" alt="img">
                            </div>
                        </div>
                        <div class="clients">
                            <p class="fade_effects fade3"><span class="spincrement3">573</span>довольных клиента</p>
                            <div class="line line3">
                                <img src="public/img/assets/2-layers.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-4 d-md-none">
                    <div class="sm-advantages">
                        <p><span class="block">468</span>готовых решения</p>
                    </div>
                </div>
                <div class="col-12 col-sm-4 d-md-none">
                    <div class="sm-advantages">
                        <p><span class="block">24/7</span>обслуживание</p>
                    </div>
                </div>
                <div class="col-12 col-sm-4 d-md-none">
                    <div class="sm-advantages">
                        <p><span class="block">573</span>довольных клиента</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>

  <section id="scrollMenu" class="scroll-menu">
      <div class="container">
          <div class="row">
              <div class="col-lg-9 col-xl-8 offset-lg-1 offset-xl-2">
                <nav class="botoom-scroll-nav">
                <?php foreach ( $chooseSite as $site ) : ?>
                    <a class="for-choice" href="#"><?= $site['name']; ?></a>
                <?php endforeach; ?>
                </nav>
              </div>
          </div>
      </div>
  </section>

<?php $count = 0; foreach ( $chooseSite as $desc ) : ?>
    <section class="choice <?php if ( $count == 0 ) {echo 'active-choice';} ?>">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-3">
                    <div class="choice-button">
                        <a href="/catalog/1"><img src="public/img/assets/sites.png" alt="Большой выбор сайтов"></a>
                    </div>
                </div>
                <div class="col-3">
                    <div class="choice-arr">
                        <img src="public/img/assets/arrow.png" alt="Стрелка">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-8">
                    <div class="container-computer">
                        <img src="<?= $desc['image'] ?>" alt="<?= $desc['name'] ?>">
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="container-advantages">
                        <div class="head">
                            <h1><?= $desc['name']; ?></h1>
                        </div>
                        <div class="description-section">
                            <p><?= $desc['description']; ?></p>
                        </div>
                        <div class="btns-container">
                            <a class="_btn_group" href="/catalog/1">Выбрать интернет-магазин</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $count++; endforeach; ?>

  <section class="best-decision">
      <div class="container">
          <div class="row">
              <div class="col-12 col-md-8 col-xl-6 offset-lg-1">
                  <h2 class="section-header">Почему готовый сайт - лучшее решение для бизнеса</h2>
              </div>
              <div class="d-none d-md-block col-md-2">
                  <div class="question">
                      <img src="public/img/assets/questions.png" alt="Почему готовый сайт лучше">
                  </div>
              </div>
          </div>
          <div class="owr-description">
              <div class="row justify-content-center">
                  <div class="col-12 col-md-4 freelance">
                      <div class="field-for-icon">
                          <img src="public/img/assets/x.png" alt="Готовый-сайт.бел">
                      </div>
                      <div class="head">
                          <p>Заказ сайта у фрилансера</p>
                      </div>
                      <div class="descrip">
                          <p>Ненадежно. Никаких гарантий, что работу
                              выполнят качественно и вовремя</p>

                          <p>Долго. В среднем на разработку
                              сайта уходит 20 дней</p>

                          <p>Без договора. У вас нет прав, гарантий и
                              возможности вернуть деньги</p>

                          <p>Много времени уходит на коммуникацию
                              с исполнителем</p>

                          <p>Для создания сайта требуется привлекать сразу
                              двух специалистов: дизайнера и верстальщика</p>
                      </div>
                  </div>
                  <div class="col-12 col-md-4 web-studio">
                      <div class="field-for-icon">
                          <img src="public/img/assets/x.png" alt="Готовый-сайт.бел">
                      </div>
                      <div class="head">
                          <p>Заказ сайта в веб-студии</p>
                      </div>
                      <div class="descrip">
                          <p>Долго. В среднем на разработку сайта
                              уходит месяц</p>

                          <p>Дорого. Стоимость сайта в студии
                              начинается от 500$</p>

                          <p>Дополнительные расходы
                              за доработки</p>

                          <p>Высокий процент предоплаты</p>
                      </div>
                  </div>
                  <div class="col-12 col-md-4 constructor">
                      <div class="field-for-icon">
                          <img src="public/img/assets/x.png" alt="Готовый-сайт.бел">
                      </div>
                      <div class="head">
                          <p>Конструктор сайтов</p>
                      </div>
                      <div class="descrip">
                          <p>Ежемесячная плата. В среднем год
                              пользования сайтом обходится в 150$</p>

                          <p>Лимит на размер загружаемой информации</p>

                          <p>Сложно. Каждая страница сайта
                              создается вручную</p>

                          <p>Возможности конструкторов ограничены</p>

                          <p>Плохая адаптивность на
                              мобильных устройствах</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <section class="ready">
      <div class="container">
          <div class="row">
              <div class="col-11 offset-1">
                  <h2 class="section-header">Наш готовый сайт</h2>
              </div>
          </div>
          <div class="row">
              <div class="col-12 col-sm-6 col-md-3">
                  <div class="icons">
                      <img src="public/img/assets/our-site.png" alt="Готовый-сайт.бел">
                      <span class="num">1</span>
                  </div>
                  <div class="tit">
                      <p>Дешево</p>
                  </div>
                  <div class="price">
                      <p>От 65$ за готовый сайт</p>
                  </div>
              </div>
              <div class="col-12 col-sm-6 col-md-3">
                  <div class="icons">
                      <img src="public/img/assets/our-site.png" alt="Готовый-сайт.бел">
                      <span class="num">2</span>
                  </div>
                  <div class="tit">
                      <p>Быстро</p>
                  </div>
                  <div class="price">
                      <p>1 час - сайт у вас</p>
                  </div>
              </div>
              <div class="col-12 col-sm-6 col-md-3">
                  <div class="icons">
                      <img src="public/img/assets/our-site.png" alt="Готовый-сайт.бел">
                      <span class="num">3</span>
                  </div>
                  <div class="tit">
                      <p>Просто</p>
                  </div>
                  <div class="price">
                      <p>Не требует навыков</p>
                  </div>
              </div>
              <div class="col-12 col-sm-6 col-md-3">
                  <div class="icons">
                      <img src="public/img/assets/our-site.png" alt="Готовый-сайт.бел">
                      <span class="num">4</span>
                  </div>
                  <div class="tit">
                      <p>Рассрочка</p>
                  </div>
                  <div class="price">
                      <p>Возможно оформить</p>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <section class="form-main">
      <div class="container">
          <div class="row">
              <div class="col-12 col-md-8">
                  <p class="order">Оставьте заявку <span class="now">сейчас</span>,</p>
                  <p class="selection">и мы бесплатно подберём сайт под ваш бизнес</p>
                  <form action="<?= $_SERVER['REQUEST_URI']; ?>" method="post">
                    <div class="container mb-85">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="inputs-group">
                                    <input type="text" name="name" placeholder="Ваше имя">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="inputs-group">
                                    <input type="text" name="phone" placeholder="Ваш телефон">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="inputs-group">
                                    <input type="text" name="email" placeholder="Ваше email">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="inputs-group">
                                    <button type="submit" class="_btn_group">Бесплатно подобрать сайт</button>
                                </div>
                            </div>
                        </div>
                    </div>
                  </form>
              </div>
              <div class="d-none d-md-block col-md-4">
                  <div class="transform-images">
                      <div class="container">
                          <div class="row">
                              <div class="col-6">
                                  <img src="public/img/assets/1.jpg" alt="image">
                              </div>
                              <div class="col-6">
                                  <img src="public/img/assets/2.jpg" alt="image">
                              </div>
                              <div class="col-6 mt-20">
                                  <img src="public/img/assets/3.jpg" alt="image">
                              </div>
                              <div class="col-6 mt-20">
                                  <img src="public/img/assets/4.jpg" alt="image">
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <section class="buy-site">
      <div class="container">
          <div class="row">
              <div class="col-12 col-md-6">
                  <h2 class="section-header">Что вы получите, купив наш готовый сайт</h2>
              </div>
              <div class="d-none d-md-block col-md-6">
                  <img class="mouse" src="public/img/assets/msh.png" alt="image">
              </div>
          </div>
          <div class="row">
              <div class="col-12 col-md-6 offset-block mb-90">
                  <div class="what-get">
                      <h3 class="get-head">Продающий сайт  за небольшие деньги</h3>
                      <div class="what-get-description">
                          <ul>
                              <li>Цена готового сайта значительно ниже, чем у индивидуальных проектов</li>
                              <li>Сайт начнет приводить клиентов на следующий день после запуска</li>
                              <li>Быстрое решение экономит ваше время и деньги</li>
                          </ul>
                      </div>
                  </div>
              </div>
              <div class="col-12 col-md-6 mb-90">
                  <div class="what-get">
                      <h3 class="get-head">Гарантии</h3>
                      <div class="what-get-description">
                          <ul>
                              <li>Работаем по договору</li>
                              <li>Мы – официально зарегистрированная компания</li>
                              <li>Гарантийные обязательства – 6 месяцев</li>
                          </ul>
                      </div>
                  </div>
              </div>
              <div class="col-12 col-md-6 offset-block">
                  <div class="what-get">
                      <h3 class="get-head">Функциональность</h3>
                      <div class="what-get-description">
                          <ul>
                              <li>Легко и быстро загружайте фотографии, текст, видео</li>
                              <li>Готовые сайты имеют правильную продающую структуру</li>
                              <li>Понятная установка и настройка шаблона</li>
                              <li>Сайты корректно отображаются на всех устройствах</li>
                          </ul>
                      </div>
                  </div>
              </div>
              <div class="col-12 col-md-6">
                  <div class="what-get">
                      <h3 class="get-head">Техническая поддержка</h3>
                      <div class="what-get-description">
                          <ul>
                              <li>Помогаем в подборе, установке и настройке</li>
                              <li>Консультируем по дальнейшему развитию проекта</li>
                              <li>Переносим и адаптируем контент</li>
                              <li>Услуга сайт «под ключ»</li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="keyboard">
          <div class="keyboard-image">
              <img src="public/img/assets/key-horizontal.png" alt="Готовый-сайт.бел">
          </div>
      </div>
  </section>

  <section class="howWeWork">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="how-work-h2">
                      <h2 class="section-header">Как мы работаем</h2>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="d-none d-md-block col-md-12 col-lg-10 offset-lg-1">
                  <div class="container">
                      <div class="row">
                          <div class="col-1">
                              <div class="figure">
                                  <img src="public/img/assets/figure-small.png" alt="figure">
                              </div>
                          </div>
                          <div class="col-4 offset-2">
                              <div class="description-work">
                                  <h3 class="how-we-work">Оформление и оплата</h3>
                                  <p>Выбирайте готовое решение и оформляйте заказ</p>
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="figure-big">
                                  <img src="public/img/assets/figure-big.png" alt="figure">
                              </div>
                          </div>
                          <div class="col-3">
                              <div class="description-work">
                                  <h3 class="how-we-work">Запуск</h3>
                                  <p>Все! Сайт готов для работы</p>
                              </div>
                          </div>
                      </div>
                      <div class="row field-images">
                          <div class="col-3">
                              <img src="public/img/assets/consultation.png" alt="Готовый-сайт.бел">
                          </div>
                          <div class="col-3">
                              <img src="public/img/assets/pay.png" alt="Готовый-сайт.бел">
                          </div>
                          <div class="col-3">
                              <img src="public/img/assets/setting.png" alt="Готовый-сайт.бел">
                          </div>
                          <div class="col-3">
                              <img src="public/img/assets/start.png" alt="Готовый-сайт.бел">
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-4">
                              <div class="description-work">
                                  <h3 class="how-we-work">
                                      Консультация
                                  </h3>
                                  <p>Бесплатно помогаем в выборе
                                      продающего сайта для вашего бизнеса</p>
                              </div>
                          </div>
                          <div class="col-4 offset-2">
                              <div class="description-work">
                                  <h3 class="how-we-work">
                                      Настройка
                                  </h3>
                                  <p>Настраиваем сайт
                                      для корректной работы</p>
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="figure-small-bottom">
                                  <img src="public/img/assets/figure-small.png" alt="Готовый-сайт.бел">
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-6 d-md-none col-368-12">
                  <div class="mobile-section">
                      <div class="image-icon">
                          <img src="public/img/assets/mobile/consultation-mobile.png" alt="Консультация">
                      </div>
                      <div class="description-work">
                          <h3 class="how-we-work">
                              Консультация
                          </h3>
                          <p>Бесплатно помогаем в выборе
                              продающего сайта для вашего бизнеса</p>
                      </div>
                  </div>
              </div>
              <div class="col-6 d-md-none col-368-12">
                  <div class="mobile-section">
                      <div class="image-icon">
                          <img src="public/img/assets/mobile/pay-mobile.png" alt="Оформление и оплата">
                      </div>
                      <div class="description-work">
                          <h3 class="how-we-work">
                              Оформление и оплата
                          </h3>
                          <p>Выбирайте готовое решение и
                              оформляйте заказ</p>
                      </div>
                  </div>
              </div>
              <div class="col-6 d-md-none col-368-12">
                  <div class="mobile-section">
                      <div class="image-icon">
                          <img src="public/img/assets/mobile/setting-mobile.png" alt="Настройка">
                      </div>
                      <div class="description-work">
                          <h3 class="how-we-work">
                              Настройка
                          </h3>
                          <p>Настраиваем сайт
                              для корректной работы</p>
                      </div>
                  </div>
              </div>
              <div class="col-6 d-md-none col-368-12">
                  <div class="mobile-section">
                      <div class="image-icon">
                          <img src="public/img/assets/mobile/start-mobile.png" alt="ЗАПУСК">
                      </div>
                      <div class="description-work">
                          <h3 class="how-we-work">
                              ЗАПУСК
                          </h3>
                          <p>Все! Сайт готов для работы</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <section class="s-slider">
      <div class="slider">
      <?php foreach ( $comments as $comment ) : ?>
          <div class="item">
              <div class="container">
                  <div class="row">
                      <div class="col-12 col-md-8 col-xl-7">
                          <h3 class="clients-about-us">
                              Клиенты о нас
                          </h3>
                          <div class="row user-info">
                              <div class="col-3 col-xl-2">
                                  <div class="photo">
                                      <img src="<?= $comment['photo']; ?>" alt="<?= $comment['name']; ?>">
                                  </div>
                              </div>
                              <div class="col-6">
                                  <div class="name">
                                      <p><?= $comment['name']; ?></p>
                                  </div>
                                  <div class="work">
                                      <p>
                                          <?= $comment['job']; ?>
                                      </p>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-12 col-sm-10">
                                  <div class="review">
                                      <p>
                                          <?= $comment['comment']; ?>
                                      </p>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="d-none d-md-block col-4 offset-xl-1">
                          <div class="microfone-img">
                              <img class="microfone_img" src="public/img/assets/microfone.png" alt="Готовый-сайт.бел">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      <?php endforeach; ?>
      </div>
  </section>

  <footer>
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="logo-footer">
                      <a class="logo-title" href="/">Готовые сайты</a>
                  </div>
              </div>
          </div>

          <div class="row">
              <div class="d-none d-sm-block col-sm-12 col-lg-8 col-xl-6 offset-lg-2 offset-xl-3">
                  <nav class="footer-navigation">
                      <?php foreach ($menus as $menu) : ?>
                        <a href="/<?= $menu['path']; ?>"><?= $menu['name']; ?></a>
                      <?php endforeach; ?>
                  </nav>
              </div>
          </div>
      </div>

      <div class="footer-btns">
          <button class="_btn_group" onclick="redirectPage('/catalog/1')">Перейти в каталог</button>
      </div>
      <div class="footer-btns-2">
          <button class="order-call">Заказать звонок</button>
      </div>
      <div class="footer-social">
          <div class="insta">
              <a href="#"><img src="public/img/assets/vk.png" alt="Вконтакте"></a>
          </div>
          <div class="vk">
              <a href="#"><img src="public/img/assets/instagram-logo.png" alt="Инстаграм"></a>
          </div>
      </div>
      <div class="posterum">
          <p><span class="copy">copyright &#169;</span> DIGITAL AGENCY POSTERUM 2018</p>
      </div>
  </footer>
  <script type="text/javascript">
        (function ($) {
            $.extend($.easing, {
                spincrementEasing: function (x, t, b, c, d) {
                    return (t === d) ? b + c : c * (-Math.pow(2, -10 * t / d) + 1) + b
                }
            });
            $.fn.spincrement = function (opts) {
                var defaults = {
                    from: 0,
                    to: null,
                    decimalPlaces: null,
                    decimalPoint: '.',
                    thousandSeparator: ',',
                    duration: 1000,
                    leeway: 50,
                    easing: 'spincrementEasing',
                    fade: true,
                    complete: null
                };
                var options = $.extend(defaults, opts);

                var re_thouSep = new RegExp(/^(-?[0-9]+)([0-9]{3})/);

                function format(num, dp) {
                    num = num.toFixed(dp);

                    if ((dp > 0) && (options.decimalPoint !== '.')) {
                        num = num.replace('.', options.decimalPoint)
                    }

                    if (options.thousandSeparator) {
                        while (re_thouSep.test(num)) {
                            num = num.replace(re_thouSep, '$1' + options.thousandSeparator + '$2')
                        }
                    }
                    return num
                }

                return this.each(function () {
                    var obj = $(this);

                    var from = options.from;
                    if (obj.attr('data-from')) {
                        from = parseFloat(obj.attr('data-from'))
                    }

                    var to;
                    if (obj.attr('data-to')) {
                        to = parseFloat(obj.attr('data-to'))
                    } else if (options.to !== null) {
                        to = options.to
                    } else {
                        var ts = $.inArray(options.thousandSeparator, ['\\', '^', '$', '*', '+', '?', '.']) > -1 ? '\\' + options.thousandSeparator : options.thousandSeparator
                        var re = new RegExp(ts, 'g');
                        to = parseFloat(obj.text().replace(re, ''))
                    }

                    var duration = options.duration;
                    if (options.leeway) {
                        duration += Math.round(options.duration * ((Math.random() * 2) - 1) * options.leeway / 100)
                    }

                    var dp;
                    if (obj.attr('data-dp')) {
                        dp = parseInt(obj.attr('data-dp'), 10)
                    } else if (options.decimalPlaces !== null) {
                        dp = options.decimalPlaces
                    } else {
                        var ix = obj.text().indexOf(options.decimalPoint);
                        dp = (ix > -1) ? obj.text().length - (ix + 1) : 0
                    }

                    obj.css('counter', from);
                    if (options.fade) obj.css('opacity', 0);
                    obj.animate({
                        counter: to,
                        opacity: 1
                    }, {
                        easing: options.easing,
                        duration: duration,

                        step: function (progress) {
                            obj.html(format(progress * to, dp))
                        },
                        complete: function () {
                            obj.css('counter', null);
                            obj.html(format(to, dp));

                            if (options.complete) {
                                options.complete(obj)
                            }
                        }
                    })
                })
            }
        })(jQuery);
        $('.spincrement1').spincrement({
            from: 0,
            to: 468,
            duration: 10000
        });
        $('.spincrement2_1').spincrement({
            from: 0,
            to: 24,
            duration: 10000
        });
        $('.spincrement2_2').spincrement({
            from: 0,
            to: 7,
            duration: 10000
        });
        $('.spincrement3').spincrement({
            from: 0,
            to: 567,
            duration: 10000
        });

        $(document).ready(function () {

            $('.slider').slick({
                dots: true,
                arrows: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                speed: 500,
                infinite: true
            });

        });
    </script>