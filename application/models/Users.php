<?php
class Users extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    public function auth($username, $password)
    {
    	$query = $this->db->query("SELECT * FROM users WHERE username='$username' AND password='$password'");
    	if(query->num_rows()=1)
    	{
    		$this->load->view('welcome_message');
    	}
    }
    ?>