<?php

namespace application\models;
use application\core\Model;

class Main extends Model
{
    public $error; 
    /**
     * Валидация формы
     **/
    public function contactValidate ( $post )
    {
        $nameLength = iconv_strlen( $post['name'] );
        if ( $nameLength < 3 || $nameLength > 15 ) {
            $this->error = 'Имя должно содержать от 3 до 15 символов';
            return false;
        }elseif ( !filter_var ( $post['email'], FILTER_VALIDATE_EMAIL ) ) {
            $this->error = 'E-mail указан неверно';
            return false;
        }elseif ( !ctype_digit( $post['phone'] ) ) {
            $this->error = 'Неверно указан телефон';
            return false;
        }

        return true;
    }
    
    /**
     * Получаем главное меню
     **/
    public function getMenu ()
    {
        return $this->db->row( 'SELECT * FROM menu');
    }

    /**
     * Получаем значени для слайдера
     **/
    public function getComments () 
    {
        return $this->db->row( 'SELECT * FROM index_slider' );
    }

    /**
     * Получаем названия верхнего меню страницы каталога
     **/
    public function getCases () 
    {
        return $this->db->row( 'SELECT * FROM cases' );
    }

    /**
     * Получаем все родительские категории для вывода в селект
     **/
    public function getParentCatsForMobile() 
    {
        return $this->db->row( 'SELECT * FROM categories WHERE parent = 0' );
    }

    /**
     * Получаем все дочерние категории для вывода в подкатегории
     **/
    public function getChildCatsForMobile($child)
    {
        $params = [
            'id' => $child,
        ];
        return $this->db->row( 'SELECT * FROM categories WHERE parent = :id', $params );
    }

    /**
     * Получаем все категории с хитами продаж и скидками
     **/
    public function getTopMenu()
    {
        return $this->db->row( 'SELECT * FROM topmenu' );
    }

    /**
     * Получаем все категории
     **/
    public function getCats ()
    {
        $cat = $this->db->row( 'SELECT * FROM categories' );
        $arr_cat = array();
        foreach ( $cat as $c ) {
            $arr_cat[$c['id']] = $c;
        }
        return $arr_cat;
    }

    /**
     * Построение дерева категорий
     **/
    public function treeCategory ( $dataset ) 
    {
        $tree = array();
        foreach ($dataset as $id => &$node) {
            if ( !$node['parent'] ) {
                $tree[$id] = &$node;
            }else{
                $dataset[$node['parent']]['childs'][$id] = &$node;
            }
        }
        return $tree;
    }

     /**
     * Получение всех категорий родительская->дочерняя
     **/
    public function getTree () {
        $categories = $this->getCats();
        $categories_tree = $this->treeCategory($categories);
        return $categories_tree;
    }

    /**
     * Получение всех продуктов
     **/
    public function getProductsFromCategories ($page) 
    {
        $params = [
            'page' => $page
        ];
        return $this->db->row('SELECT categories.id, goods.id, goods.title_name, goods.class, goods.promotion, goods.image, goods.price, goods.old_price FROM categories INNER JOIN categories_goods ON categories.id = categories_goods.categories_id INNER JOIN goods ON categories_goods.goods_id = goods.id WHERE categories.id = :page', $params);
    }
    /**
     * Получаем баннеры и названия категории путем объудунения таблиц 
    **/
    public function getBanners ($banner) 
    {
        $params = [
            'id' => $banner
        ];
        return $this->db->row('SELECT categories.id, categories.title, banners.img  FROM categories INNER JOIN category_banners ON categories.id = category_banners.category_id INNER JOIN banners ON category_banners.banners_id = banners.id WHERE categories.id = :id', $params);
    }
    /**
     * Получение хлебных крошек
     **/
    public function breadcrumbs($array, $id)
    {
        if (!$id) return false;
        $count = count($array);
        $breadcrumbs_array = array();
        for ( $i = 0; $i < $count; $i++ ) {
            if ( $array[$id] ) {
                $breadcrumbs_array[$array[$id]['id']] = $array[$id]['title'];
                $id = $array[$id]['parent'];
            }else break;
        }
        return array_reverse($breadcrumbs_array, true);
    }

    /**
     * Получение всех значений из таблицы goods для вывода на странице категорий
     **/
    public function getGoods () 
    {
        return $this->db->row( 'SELECT * FROM goods' );
    }
    /**
     * Получение категории, по которой был произведен клик и вывод ее на страницу category.php
     **/
    public function getCategory($get )
    {
        $params = [
            'id' => $get
        ];
        return $this->db->row( 'SELECT * FROM goods WHERE id = :id', $params );
    }

    /**
     * Добавление товара в корзину и БД
     **/
    public function addToCart ($product, $id) 
    {
        $params = [
            'customer' => session_id(),
            'idGood' => $id,
            'quantity' => 1,
            'datetime' => time()
        ];
        $this->db->query('INSERT INTO basket (customer, good, quantity, `datetime`) VALUES (:customer, :idGood, :quantity, :datetime)', $params);
    }

    /**
     * Получаем дополнительные услуги
     **/
    public function getServise ()
    {
        return $this->db->row('SELECT * FROM servise');
    }

    /**
     * Добавление услуги в корзину и БД
     **/
    public function addServiseToCart($servise)
    {
        $params = [
            'customer' => session_id(),
            'serv' => $servise,
            'quantity' => 1,
            'datetime' => time()
        ];
        $this->db->query('INSERT INTO basket_servise (customer, good, quantity, `datetime`) VAlUES (:customer, :serv, :quantity, :datetime)', $params);
    }

    /**
     * метод для вывода хитов продаж
    **/
    public function chooseSpecifier ($hit)
    {
        $params = [
            'params' => $hit
        ];
        return $this->db->row('SELECT * FROM `goods` INNER JOIN `specifier_goods` ON goods.id = specifier_goods.goods_id WHERE specifier_goods.special = :params', $params);
    }

    public function getTopMenuSpecifer ()
    {
        return $this->db->row('SELECT * FROM menu_specifer ORDER BY sorter');
    }

    /**
     *  Метод для вавода товаров на страницу cart
    **/
    public function getAllGoods()
    {
        $params = [
            'sessionID' => session_id()
        ];
        return $this->db->row( 'SELECT * FROM basket, goods WHERE customer = :sessionID AND goods.id = basket.good', $params );
    }

    /**
     *  Метод для вавода услуг на страницу cart
    **/
    public function getAllServise()
    {
        $params = [
            'sessionID' => session_id()
        ];
        return $this->db->row( 'SELECT * FROM basket_servise, servise WHERE customer = :sessionID AND servise.title = basket_servise.good', $params );
    }

    /**
     *  Метод для подсчета общей цены на товары и услуги
    **/
    public function countGoodsAndServises()
    {
        $params = [
            'sessionID' => session_id()
        ];
        $countTotalGoods =  $this->db->row( 'SELECT goods.price FROM goods, basket WHERE customer = :sessionID AND goods.id = basket.good', $params );
        $countTotalServises = $this->db->row( 'SELECT servise.price FROM servise, basket_servise WHERE customer = :sessionID AND servise.title = basket_servise.good', $params );
        $countTotal = [
            'totalGoods' => $countTotalGoods,
            'totalServises' => $countTotalServises
        ];
        return $countTotal;
    }

    /**
     *  Метод для подсчета количества товаров в корзине
    **/
    public function countCart ()
    {
        $params = [
            'sessionID' => session_id()
        ];
        $countGoods = $this->db->column( 'SELECT COUNT(*) FROM basket WHERE customer = :sessionID', $params );
        $countServise = $this->db->column( 'SELECT COUNT(*) FROM basket_servise WHERE customer = :sessionID', $params );
        $countTotalNumber = (int)$countGoods + (int)$countServise;
        return $countTotalNumber;
    }

    /**
     *  Метод для удаления товара из корзины
    **/
    public function deleteGoodsFromCart($good)
    {
        $params = [
            'good' => $good
        ];
        return $this->db->row( 'DELETE FROM basket WHERE good = :good', $params );
    }

    /**
     *  Метод для удаления услуги из корзины
    **/
    public function deleteSevisesFromCart($servise)
    {
        $params = [
            'servise' => $servise
        ];
        return $this->db->row( 'DELETE FROM basket_servise WHERE good = :servise', $params );
    }

    public function addScripts ($script_name) 
    {
        echo '<script src="/public/scripts/'.$script_name.'.js"></script>';
    }

    public function addStyle ( $style_name ) 
    {
        echo '<link rel="stylesheet" href="/public/css/'.$style_name.'.css">';
    }
}