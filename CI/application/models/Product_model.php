<?php
class Product_model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }

    //SELECT * FROM product WHERE featured = 1

    public function get_where(){

        //query builder
        $this->db->select("*");
        $this->db->where(array(
            'featured' => 1,
        ));
        $query = $this->db->get("product");
        return $query->result_array();

    }

}
?>