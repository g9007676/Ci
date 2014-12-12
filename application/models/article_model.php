<?php

class Article_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get_last_ten_entries()
    {
         $query = $this->db->get('article',10);
         return $query->result();
    }

    public function insert_entry()
    {
        $this->title   = 'test1'; // 請看一下下面的注意事項
        $this->content = 1234;

        $this->db->insert('article', $this);
    }
}
