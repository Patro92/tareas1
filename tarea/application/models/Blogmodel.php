<?php
class Blogmodel extends CI_Model {

    var $title   = '';
    var $content = '';
   // var $lol = 'lol';
   // var $date2 =  0 ;
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
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
   
    function get_by_id($id)
    {
	$query = $this->db->get_where('entries',array('id'=>$id));
	return $query->row();
    }
}
