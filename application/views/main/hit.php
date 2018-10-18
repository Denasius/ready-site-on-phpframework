<section class="headerTop">
        <div class="mobile-menu">
                <nav class="mobile-nav">
                    <a href="/catalogl/2">каталог сайтов</a>
                    <a href="#">помощь</a>
                    <a href="#">услуги</a>
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
                            <a href="/catalog/2">каталог сайтов</a>
                            <a href="#">помощь</a>
                            <a href="#">услуги</a>
                        </nav>
                    </div>
                    <div class="col-10 order-1 order-sm-0 col-sm-6 col-md-3 align-self-center">
                        <div class="cart">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            <a href="/cart">Корзина (0)</a>
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

    <section class="banners">
        <div class="banner hit">
            <img src="/public/img/assets/catalog/banners/banner-top.png" alt="Баннер">
        </div>
    </section>

    <section class="main">
        <div class="container">
            <div class="row">
                <div class="d-lg-none col-12 col-md-10 offset-md-1">
                    
                    <div class="row">
                        <div class="col-12 d-md-none">
                                <div class="btn-help btn-block-md">
                                    <a href="#">Помощь в выборе сайта</a>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="d-none d-lg-block col-lg-3 col-xxl-4">
                    <aside>
                        <div class="btn-help">
                            <a href="#">помощь в выборе сайта</a>
                        </div>
                        <div class="small-menu">
                            <?php foreach ( $topmenus as $top ) : ?>
                            <div class="row justify-content-center">
                                <div class="col-2">
                                    <div class="icon">
                                        <img src="<?= $top['image_top']; ?>" alt="<?= $top['name']; ?>">
                                    </div>
                                </div>
                                <div class="col-10">
                                    <a href="/<?= $top['filter']; ?>" data-filter="<?= $top['filter']; ?>" data-menu="<?= $top['name'] ?>"><?= $top['name']; ?></a>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <hr>
                        <div class="catalog-navigation">
                            <h3>Категории</h3>
                            <nav class="nav-category">
                            <?php foreach ( $cats as $cat ) : ?>
                            <a href="/catalog/<?= $cat['id']; ?>" class="<?= $cat['class']; ?>" data-id="<?= $cat['id'] ?>" data-filter="<?= $cat['filter']; ?>"><?= $cat['title']; ?></a>
                                <?php if ( $cat['childs'] ) : ?>
                                   <div class="dropdown">
                                        <nav>
                                        <?php foreach ( $cat['childs'] as $child ) : ?>
                                            <a href="/catalog/<?= $child['id']; ?>" data-filter="<?= $child['filter'] ?>"><?= $child['title'] ?></a>
                                        <?php endforeach; ?>
                                        </nav>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            </nav>
                        </div>
                    </aside>
                </div>
                <div class="col-12 col-lg-9 col-xxl-8">
                    <div class="wrapper">
                        <div class="bread-crumbs">
                            <ul>
                                <li><a href="/">Главная<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                <li><a href="/catalog/1">Каталог<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                <li><a href="#" data-attr="this-page">Хит продаж<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="catalog-navigation-top">
                            <nav>
                                <a href="#" data-filter="*">Всё</a>
                                <a href="#" data-filter=".landing">Landing-page</a>
                                <a href="#" data-filter=".shop">Интернет-магазин</a>
                                <a href="#" data-filter=".card">Сайт-визитка</a>
                                <a href="#" data-filter=".catalogs">Каталог</a>
                                <a href="#" data-filter=".quiz">QUIZ</a>
                            </nav>
                        </div>
                        <div class="count_suggestion">

                            <div class="container container-count">

                                <div class="count_suggestion_block" style="background-image: url(/public/img/assets/catalog/bg-sug.png);">

                                    <div class="suggestion">
                                        <img src="/public/img/assets/catalog/pc_img.png" alt="suggestion">
                                        <div class="count-suggestion">
                                            <img src="/public/img/assets/catalog/suggesten.png" alt="suggestion">
                                        </div>
                                    </div>

                                    <div class="counter">

                                        <div class="h2">предложение дня</div>
                                        <div class="timer">

                                            <div class="timer-item">
                                                <span class="timer-item-numbers" id="timer-v-hours"></span>:
                                            </div>
                                            <div class="timer-item">
                                                <span class="timer-item-numbers" id="timer-v-minutes"></span>:
                                            </div>
                                            <div class="timer-item">
                                                <span class="timer-item-numbers" id="timer-v-seconds"></span>
                                            </div>

                                        </div>
                                        <div class="buttons">
                                            <button class="buyNow" onclick="redirectPage('/catalog/1')">купить</button>
                                            <button class="moreDetailed">посмотреть</button>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="site-catalog">
                            <div class="row site-catalog-grid">
                                <?php foreach ( $hits as $product ) : ?>
                                    <div class="col-12 col-md-6 building landing design">
                                        <div class="cart-site">
                                            <div class="image-cart <?= $product['promotion']; ?>">
                                                <img src="<?= $product['image'] ?>" alt="<?= $product['title_name'] ?>">
                                            </div>
                                            <div class="price-cart">
                                                <div class="row">
                                                    <div class="col-6 col-md-12 col-lg-6">
                                                        <div class="title">
                                                            <h2><?= $product['title_name'] ?></h2>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-md-12 col-lg-6">
                                                    <div class="price-price">
                                                        <?php if ( $product['old_price'] === null ) : ?>
                                                            <div class="old-price" style="display: none;"><p></p></div>
                                                            <div class="price"><p><?= $product['price']; ?>$</p></div>
                                                        <?php else : ?>
                                                            <div class="old-price"><p><?= $product['old_price'] ?>$</p></div>
                                                            <div class="price"><p><?= $product['price']; ?>$</p></div>
                                                        <?php endif; ?>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-xl-6">
                                                        <div class="btn-buy">
                                                        <a href="/category/<?= $product['id']; ?>">Купить</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-xl-6">
                                                        <div class="see">
                                                            <a href="#">Посмотреть сайт</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
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
                        <a href="#">каталог сайтов</a>
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