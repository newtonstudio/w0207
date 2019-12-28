<?php
class MY_Model extends CI_Model {

    protected $tablename = "";

    public function __construct(){
        //parent::__construct();
        $this->load->database();
        
    }

    public function record_count($where=array()) {
        //SELECT COUNT(*) as total FROM tablename WHERE X = Y
        
        $this->db->select("COUNT(*) AS total");
        $this->db->where($where);
        $query = $this->db->get($this->tablename);
        $row = $query->row_array();
        return $row['total'];

    }

    public function getOne($where=array()) {
        //query builder
        $this->db->select("*");
        $this->db->where($where);
        $query = $this->db->get($this->tablename);
        return $query->row_array(); //return associative array
    }

    //SELECT * FROM product WHERE featured = 1
    public function get_where($where=array()){

        //query builder
        $this->db->select("*");
        $this->db->where($where);
        $query = $this->db->get($this->tablename);
        return $query->result_array(); //return multidimensional array

    }

    public function insert($insert_array=array()) {

        //INSERT INTO TABLENAME (id, id, id) VALUES (val, val, val)

        $this->db->insert($this->tablename, $insert_array);

        return $this->db->insert_id();

    }

    //UPDATE TABLENAME SET col1=val1, col2=val2 WHERE id = X
    public function update($where=array(), $update_array=array()){

        $this->db->update($this->tablename, $update_array, $where);

    }

}
?>