<?php

namespace application\controllers;
use application\core\Controller;

class MainController extends Controller
{
    public function indexAction ()
    {
        if ( !empty ( $_POST ) ) {
            if ( !$this->model->contactValidate($_POST) ) {
                $this->view->message('Ошибка', $this->model->error, 'error');
            }
            mail( 'tizexo@amadamus.com', 'Заявка с сайта Готовый-сайт.бел от ' . $_POST['email'], $_POST['name'] . ' | ' . $_POST['email'] . ' | ' . $_POST['phone'] );
            $this->view->message('Ваша заявка принята', 'Наш менеджер свяжется с вами <b>в течении 5 минут<b>', 'success');
        }

        $vars = [
            'menus' =>  $this->model->getMenu(),
            'comments' => $this->model->getComments(),
            'cases' => $this->model->getCases(),
            'slick' => $this->model->addStyle('slick'),
            'chooseSite' => $this->model->getTopMenuSpecifer(),
            'nameSite' => 'Готовые сайты',
            'getConsult' => 'Получить консультацию',
            'mainTitle' => [
                'part1' => 'Готовый сайт',
                'part2' => 'для вашего бизнеса',
                'part3' => 'за 1 час'
            ],
            'mainDescription' => 'Полностью функциональный landing page, интернет-магазин, каталог или сайт-визитка',
            'goCatalog' => 'Перейти в каталог',
            'socialTitle' => 'Мы в соцсетях:',
            'socialLinks' => [
                'vk' => '<a href="https://vk.com"><img src="/public/img/assets/vk.png" alt="Вконтакте"></a>',
                'insta' => '<a href="https://instagram.com"><img src="/public/img/assets/instagram-logo.png" alt="Вконтакте"></a>'
            ]
        ];

        $this->view->render('Готовые сайты', $vars);
        $this->model->addScripts('slick');
        $this->model->addScripts('burger');
        $this->model->addScripts('form');
        $this->model->addScripts('sweetalert');
        $this->model->addScripts('main');
    }

    public function catalogAction ()
    {
        $vars = [
            'products' => $this->model->getProductsFromCategories($this->route['page']),
            'page' => $this->route['page'],
            'parents' => $this->model->getParentCatsForMobile(),
            'cats' => $this->model->getTree(),
            'key' => key($this->model->breadcrumbs($this->model->getCats(), $this->route['page'])),
            'breadcrumbs_array' => $this->model->breadcrumbs($this->model->getCats(), $this->route['page']),
            'topmenus' => $this->model->getTopMenu(),
            'countcart' => $this->model->countCart(),
            'banners' => $this->model->getBanners($this->route['page'])
        ];
        $this->view->render('Каталог', $vars);
        $this->model->addScripts('burger');
        $this->model->addScripts('isotope.pkgd.min');
        $this->model->addScripts('isotope-filter');
        $this->model->addScripts('catalog');
    }

    public function categoryAction ()
    {
        if ( !empty($_POST['name']) ) {
            $this->model->addToCart($_POST['button'], $this->route['id']);
            $this->view->message('', 'Товар добавлен в корзину', 'success');
        }
        if ( !empty( $_POST['servise_f'] ) ) {
            $this->model->addServiseToCart($_POST['id']);
            //$this->view->message('OK', 'Услуга добавлена в корзину');
            debug($_POST);
        }
        foreach ( $this->model->getCategory($this->route['id']) as $category_id ) {
            $cat = $category_id['category_id'];
        }
        $vars = [
            'menus' =>  $this->model->getMenu(),
            'breadcrumbs_array' => $this->model->breadcrumbs($this->model->getCats(), (int)$cat),
            'categories' => $this->model->getCategory($this->route['id']),
            'servises' => $this->model->getServise(),
            'countcart' => $this->model->countCart(),
            'details' => 'Дополнительные услуги',
            'inCart' => 'Добавить в корзину'
        ];
        $this->view->render('Страница категорий', $vars);
        $this->model->addScripts('form');
        $this->model->addScripts('burger');
        $this->model->addScripts('sweetalert');
        $this->model->addScripts('category');
    }

    public function cartAction ()
    {
        $vars = [
            'menus' =>  $this->model->getMenu(),
            'cartgoods' => $this->model->getAllGoods(),
            'cartservises' => $this->model->getAllServise(),
            'countgoods' => $this->model->countGoodsAndServises(),
            'countcart' => $this->model->countCart(),
        ];
        if ( !empty($_POST['deletegoods_f']) ) {
            $this->model->deleteGoodsFromCart($_POST['deletegoods']);
            $this->view->redirectPage('cart');
        }elseif ( !empty($_POST['deleteservise_f']) ) {
            $this->model->deleteSevisesFromCart($_POST['deleteserv']);
            $this->view->redirectPage('cart');
        }
        $this->view->render('Корзина', $vars);
        $this->model->addScripts('burger');
        $this->model->addScripts('cart');
    }

    public function hitAction ()
    {
        $vars = [
            'cats' => $this->model->getTree(),
            'topmenus' => $this->model->getTopMenu(),
            'hits' => $this->model->chooseSpecifier($this->route['action']),
        ];

        $this->view->render('Хиты продаж', $vars);
        $this->model->addScripts('burger');
        $this->model->addScripts('isotope.pkgd.min');
        $this->model->addScripts('isotope-filter');
        $this->model->addScripts('catalog');
    }

    public function salesAction ()
    {
        $vars = [
            'cats' => $this->model->getTree(),
            'topmenus' => $this->model->getTopMenu(),
            'sales' => $this->model->chooseSpecifier($this->route['action']),
        ];

        $this->view->render('Скидки', $vars);
        $this->model->addScripts('burger');
        $this->model->addScripts('isotope.pkgd.min');
        $this->model->addScripts('isotope-filter');
        $this->model->addScripts('catalog');
    }
}