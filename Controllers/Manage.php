<?php

class Manage{
    
    
    public function __construct() {
        $userDAO = new UserDAO();
        if($userDAO->CheckGuest()){
            header('Location: /index.php');
        }
    }

        public function Admin() {
        require_once('Views/Manage/Admin.php');
    }
    
    public function Categorys() {
        $categorydao = new CategoryDAO();
        $categoryList = $categorydao->GetAllCategory();
        
        if(isset($_POST['submit'])){
            
            $categorydao->AddCategory($_POST['name']);
        }
        require_once('Views/Manage/Categorys.php');
    }

    public function DeleteCategoryAjax($id) {
        $categorydao = new CategoryDAO();
        $categorydao->DeleteCategory($id);
    }

    public function ListCategoryAjax() {
        $categorydao = new CategoryDAO();
        $categoryList = $categorydao->GetAllCategory();
        $json = json_encode($categoryList);
        echo $json;
    }

    public function GetProductsByCategoryAjax($id) {
        $productdao = new ProductDAO();
        $ListProducts = $productdao->GetAllProductByCategory($id);
        $json = json_encode($ListProducts);
        echo $json;
    }
    public function GetProductsAjax(){
        $productdao = new ProductDAO();
        $ListProducts = $productdao->GetAllProduct();
        $json = json_encode($ListProducts);
        echo $json;
    }
    
    public function SearchingAjax($str){
        $productdao = new ProductDAO();
        $ListProducts = $productdao->SearchingInProducts($str);
        $json = json_encode($ListProducts);
        echo $json;
    }
    
    public function DeleteProductAjax($id) {
        $productdao = new ProductDAO();
        $productdao->DeleteProduct($id);
    }


    public function AddHouse() {
        if (isset($_POST['submit'])) {
            $productdao = new ProductDAO();
            
            $productdao->AddProduct($_POST['name'], $_POST['inner_title'], $_POST['short_description'], $_POST['description'], $_POST['category'], $_POST['status'], $_POST['grid_type'], $_POST['price']);
            $this_product = $productdao->GetProductByName($_POST['name']);
            $images = array();
            $route = '/ImagesProduct/';
            $name;
            $miniature;
            $upload_name;
            for ($i = 0; $i < 5; $i++) {
                $upload_name = 'image' . $i;
                if (isset($_FILES[$upload_name])) {
                    $name = $i . '_' . $this_product['id'];
                    $inner_file_route = $productdao->MoveAndRenameImage($upload_name, $name, $route);
                    $images[$i] = $productdao->GetImageRoute($inner_file_route);
                }
            }
            if(isset($_FILES['miniature'])){
                $miniature_route = $productdao->MoveAndRenameImage('miniature',$this_product['id'], '/ImagesProduct/Miniature/');
                $miniature = $productdao->GetImageRoute($miniature_route);
            }
            if (isset($images)) {
                $productdao->UploadImage($this_product['id'], $images, $miniature);
            }
        }
        require_once('Views/Manage/AddHouse.php');
    }

    public function EditHouse($id) {
        $productdao = new ProductDAO();
        $product = $productdao->GetProductById($id);
        $images = json_decode($product['image'], true);
        if (isset($_POST['submit'])) {
            for ($i = 0; $i < 5; $i++) {
                if (is_uploaded_file($_FILES['image' . $i]['tmp_name'])) {
                    $images[$i] = $productdao->MoveAndRenameImage($i, $product['id']);
                }
            }
            $product['image'] = json_encode($images);
            $product['name'] = $_POST['name'];
            $product['inner_title'] = $_POST['inner_title'];
            $product['short_description'] = $_POST['short_description'];
            $product['description'] = $_POST['description'];
            $product['id_category'] = $_POST['id_category'];
            $product['status'] = $_POST['status'];
            $product['grid_type'] = $_POST['grid_type'];
            $product['price'] = $_POST['price'];

            $productdao->UpdateProduct($product);
        }
        require_once('Views/Manage/EditHouse.php');
    }
    
    public function Houses(){
        $productdao = new ProductDAO();
        $productList = $productdao->GetAllProduct();
        
        require_once('Views/Manage/Houses.php');
    }
   
}

