<?php
class Frontend extends CI_Controller {

    public function home(){
        
        $this->load->view("header");
        $this->load->view("home");
        $this->load->view("footer");
    }

    public function product_list(){
        
        $data = [];
        $productList = [
            ["id" => "1", "title" => "TV"],
            ["id" => "2", "title" => "Home Cooker"],
        ];
        $data['productList'] = $productList;

        $this->load->view("header");
        $this->load->view("product_list", $data);
        $this->load->view("footer");


    }

    public function product_detail($product_id){
        
        $this->load->view("header");
        $this->load->view("footer");

    }

}
?>