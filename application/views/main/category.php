
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
                      <a href="/cart">Корзина (<span id="count" ><?= $countcart; ?></span>)</a>
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
  <section class="category">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="bread-crumbs category-bread-crumbs">
                      <nav>
                          <a href="/"><img src="/public/img/assets/category/home.png" alt="Главная"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                          <a href="/catalog/1">Каталог<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                          <?php foreach ( $breadcrumbs_array as $id => $title ) : ?>
                            <a href="/catalog/<?= $id; ?>" data-id="<?= $id ?>"><?= $title ?><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        <?php endforeach; ?>
                      </nav>
                  </div>
              </div>
          </div>
            <?php foreach ( $categories as $category ) : ?>
                <div class="row">
                    <div class="col-12 order-1 order-lg-0 col-lg-6">
                        <div class="catalog-details">
                            <div class="details-price">
                                <div class="title">
                                    <h3><?= $category['title_name'] ?></h3>
                                </div>
                                <div class="price">
                                    <?php if ( $category['new_price'] !== null ) : ?>
                                        <p><?= $category['new_price']; ?>$</p>
                                    <?php else : ?>
                                    <p><?= $category['price']; ?>$</p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="details-info">
                                    <ul class="technical">
                                        <li>Техническая поддержка</li>
                                        <li>Установка сайта (загрузка на хостинг)</li>
                                        <li>Ускорение загрузки страниц</li>
                                        <li>Хостинг на 3 месяца</li>
                                        <li>Базовая SEO оптимизация</li>
                                        </ul>
                                        <div id="linktext"></div>
                                        <ul class="title-help">
                                        <li>Бесплатно <span><img class="link_text" data-showtext="Круглосуточная поддержка. Поможем, проконсультируем, без проблем ответим на вопросы" src="/public/img/assets/category/help_pre.png" alt="help"></span></li>
                                        <li>Бесплатно <span><img class="link_text"  data-showtext="Установим сайт в течение 2-х часов после оплаты" src="/public/img/assets/category/help_pre.png" alt="help"></span></li>
                                        <li>Бесплатно <span><img class="link_text"  data-showtext="Разово настраиваем контекстную или таргетированную рекламу" src="/public/img/assets/category/help_pre.png" alt="help"></span></li>
                                        <li>Бесплатно <span><img class="link_text"  data-showtext="Оплачиваем хостинг на 3 месяца" src="/public/img/assets/category/help_pre.png" alt="help"></span></li>
                                        <li>Бесплатно <span><img class="link_text"  data-showtext="Оптимизируем код сайта под поисковые алгоритмы. Прописываем атрибуты alt, title, description" src="/public/img/assets/category/help_pre.png" alt="help"></span></li>
                                    </ul>
                            </div>
                            
                            <div class="details-btns">
                                <a class="to-see" href="#"><?= $details; ?> <i class="fa fa-arrow-circle-down"></i></a>
                                <form method="post" action="<?= $_SERVER['REQUEST_URI']; ?>">                                 
                                    <input type="hidden" name="name" value="<?= $category['title_name']; ?>">
                                    <button class="btn-ord" type="submit" name="addSite"><i class="fa fa-cart-plus"></i> <?= $inCart; ?></a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 order-0 order-lg-1 col-lg-6">
                        <div class="catalog-image">
                            <img src="<?= $category['image']; ?>" alt="<?= $category['title']; ?>">
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
      </div>
      <div class="servise">
          <div class="container">
              <h3>Дополнительные услуги</h3>
                <?php foreach ( $servises as $servise ) : ?>
                    <div id="<?= $servise['id_extra']; ?>" class="row row-block">
                        <div class="col-10">
                            <div class="servise-more">
                                <h4><?= $servise['title']; ?></h4>
                                <div class="servise-description">
                                    <p><?= $servise['text']; ?></p>
                                    <div class="servise-details">
                                        <a href="#">Детали </a>
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </div>
                                    <p class="servise-details-hidden"><?= $servise['more_details'] ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="price-cart">
                                <div class="price-servise">
                                    <p><?= $servise['price'] ?>$</p>
                                </div>
                                <div class="add-to-cart">
                                    <a id="<?= $servise['title'] ?>" href="#">+</a>
                                </div>
                            </div>
                        </div>
                </div>
                <?php endforeach; ?>
          </div>
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
                      <a href="/catalog">каталог сайтов</a>
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