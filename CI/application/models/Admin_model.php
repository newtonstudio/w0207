<?php
class Admin_model extends MY_Model {
    protected $tablename = "admin";

    public function lowsy_auth($email, $password) {

        $this->db->where("email = '$email' AND pwd = '$password'", NULL, FALSE);
        $query = $this->db->get($this->tablename);
        return $query->row_array();

    }

}
?>