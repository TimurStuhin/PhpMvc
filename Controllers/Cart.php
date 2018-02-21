<?php

class Cart {

    public function AddToCartAjax($productid) {
        $productlist = array();
        $lfhg = isset($_SESSION['cart_product_id']);
       if(isset($_SESSION['cart_product_id']))
        $productlist = $_SESSION['cart_product_id'];
       if(array_key_exists($productid, $productlist)){
           echo count($_SESSION['cart_product_id']);
           die();
       }
       else
        $productlist[$productid] = 1; 
        $_SESSION['cart_product_id'] = $productlist;
        $count_product = count($_SESSION['cart_product_id']);
        echo $count_product;
    }
    
    public function ShopCart(){
        $product_it;
        $productsList = array();
        $productDAO = new ProductDAO();
        $product_it =  $productDAO->GetProductById(33); 
        foreach ($_SESSION['cart_product_id'] as $key => $value) {
          $product_it =  $productDAO->GetProductById($key); 
          $productsList[] = $product_it;
        } 
        require_once('Views/Cart/ShopCart.php');
    }
    
    public function DeleteProductFromSessionAjax($id){
        unset($_SESSION['cart_product_id'][$id]);
        $refer = $_SERVER['HTTP_REFERER'];
    }
}    