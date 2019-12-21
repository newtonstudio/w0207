<?php
class Frontend extends CI_Controller {

    public function home(){
        
        $this->load->view("home");

    }

    public function product_list(){
        
        $data = [];
        $productList = [
            ["id" => "1", "title" => "TV"],
            ["id" => "2", "title" => "Home Cooker"],
        ];
        $data['productList'] = $productList;

        $this->load->view("product_list", $data);


    }

    public function product_detail($product_id){
        echo "<h1>Product Detail ".$product_id."</h1>";
    }

}
?>