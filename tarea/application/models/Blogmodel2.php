<?php
class Blogmodel2 extends CI_Model {

    var $title   = '';
    var $content = '';
    var $lol2    = 'lol';
        var $date    = 0;
          var $date3    = "2012-09-09";

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
     function api_lol()
    {
        return Array(1,2,4,5,6,7);
    }
    function get_last_ten_entries()
    {
        $query = $this->db->get('entries', 10);
        return $query->result();
    }

    function insert_entry()
    {
        $this->title   = $_POST['title']; // please read the below note
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->insert('entries', $this);
    }

    function update_entry()
    {
        $this->title   = $_POST['title'];
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }

}
