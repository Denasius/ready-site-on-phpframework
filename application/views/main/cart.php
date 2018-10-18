
  <section class="headerTop">
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
              <div class="col-8 col-sm-4 col-md-3 align-self-center">
                  <div class="logo">
                      <a class="logo-title" href="/">Готовые сайты</a>
                  </div>
              </div>
              <div class="d-none d-md-block col-md-5 offset-xl-1 align-self-center">
                  <nav class="main-navigation">
                      <a href="/catalog/1">каталог сайтов</a>
                      <a href="#">помощь</a>
                      <a href="#">услуги</a>
                  </nav>
              </div>
              <div class="col-10 order-1 order-sm-0 col-sm-6 col-md-3 align-self-center">
                  <div class="cart">
                      <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                      <a href="/cart">Корзина (<?= $countcart; ?>)</a>
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
  </section>
  <div class="wrap-cart">
    <section class="cart-top">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-9">
                    <div class="top-info" style="background-image: url(/public/img/assets/cart/cart-bg.png)">
                        <div class="cart-ic">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            <p>1.Корзина</p>
                        </div>
                    </div>
                </div>
                <div class="d-none d-md-block col-md-3">
                    <div class="pay">
                        <p>2.Оплата</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php if ( empty($cartgoods) && empty($cartservises) ) : ?>
        <div class="empty">
            Ваша корзина пуста
        </div>
    <?php else : ?>        
        <section class="cart-order">
            <div class="container">
                <div class="row">
                <div class="col-12 col-md-8">
                    <div class="info-order">
                    <?php foreach ( $cartgoods as $cartgood ) : ?>
                        <div class="mb">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="info-order-image">
                                            <img src="<?= $cartgood['image']; ?>" alt="<?= $cartgood['title_name']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="info-order-details">
                                            <div class="price-and-title">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-8">
                                                            <div class="title">
                                                                <h3><?= $cartgood['title_name']; ?></h3>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="price">
                                                            <?php if ( $cartgood['new_price'] !== null ) : ?>
                                                                <p><?= $cartgood['new_price']; ?>$</p>
                                                            <?php else : ?>
                                                                <p><?= $cartgood['price']; ?>$</p>
                                                            <?php endif; ?>
                                                                <div class="delete-from-cart">
                                                                    <a data-id="<?= $cartgood['good']; ?>" href="<?= $_SERVER['REQUEST_URI']; ?>">x</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <ul class="technical">
                                                    <li>Техническая поддержка</li>
                                                    <li>Установка сайта (загрузка на хостинг)</li>
                                                    <li>Ускорение загрузки страниц</li>
                                                    <li>Хостинг на 3 месяца</li>
                                                    <li>Базовая SEO оптимизация</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <?php foreach ( $cartservises as $cartserv ) : ?>
                        <div class="cart-servise">
                            <div class="container">
                                <div class="row">                                    
                                    <div class="col-sm-9 col-md-10">
                                        <div class="head">
                                            <h3><?= $cartserv['title']; ?></h3>
                                        </div>
                                        <div class="servise-description">
                                            <p><?= $cartserv['text']; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-md-2">
                                        <div class="cart-servise-price">
                                            <p><?= $cartserv['price']; ?>$</p>
                                            <div class="delete-servise-from-cart">
                                                <a href="<?= $_SERVER['REQUEST_URI']; ?>" data-servise="<?= $cartserv['title']; ?>">x</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="is-order">
                        <div class="row">
                            <div class="col-12 d-md-none">
                                <div class="step-pay">
                                    <p>2.Оплата</p>
                                </div>
                            </div>
                        </div>
                        <div class="title-info">
                            <p>Ваш заказ:</p>
                            <div class="order-price">
                            <?php $countGoodsPrice = 0; foreach ( $countgoods['totalGoods'] as $count ) {
                                $countGoodsPrice += (int)$count['price'];
                            } ?>
                            <?php $countServisePrise = 0; foreach ( $countgoods['totalServises'] as $counts ) {
                                $countServisePrise += (int)$counts['price'];
                            } ?>
                            <p><?= $countGoodsPrice + $countServisePrise; ?>$</p>
                            </div>
                        </div>
                        <div class="promo">
                            <p>Введите промо-код</p>
                            <div class="promo-code promo-code-hidden">
                                <input type="text" name="promo" placeholder="Промо-код">
                                <button>Отправить</button>
                            </div>
                        </div>
                        <div class="but">
                            <a href="#">Оформить заказ</a>
                        </div>
                        <div class="small-text">
                            <p>*При совершении покупки вы соглашаетесь с 
                                настоящими <span>Условиями использования.</span></p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
  </div>
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
                      <a href="/catalog.html">каталог сайтов</a>
                      <a href="#">помощь</a>
                      <a href="#">услуги</a>
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
              <a href="#"><img src="/public/img/assets/vk.png" alt="Вконтакте"></a>
          </div>
          <div class="vk">
              <a href="#"><img src="/public/img/assets/instagram-logo.png" alt="Инстаграм"></a>
          </div>
      </div>
      <div class="posterum">
          <p><span class="copy">copyright &#169;</span> DIGITAL AGENCY POSTERUM 2018</p>
      </div>
  </footer>