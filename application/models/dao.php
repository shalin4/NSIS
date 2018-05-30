<?php
/**
 * Created by PhpStorm.
 * User: Lakindu
 * Date: 5/3/2018
 * Time: 11:25 AM
 */

class Dao extends CI_Model
{

    /*
     * insert Data
     *
     */
    public function insert($table, $data)
    {

        $this->db->insert($table, $data);

    }

    public function selectall($table,$order){
        $this->db->from("$table");
        $this->db->order_by("$order");
        $query = $this->db->get();
        return $query-> result();
    }
}