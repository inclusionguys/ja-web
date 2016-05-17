<?php

class Users extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    function get_user($username) {
        $this->db->select('*');
        $this->db->where('us_username', $username);
        $query = $this->db->get('tbl_user');
        $returnable = $query->result();
        return $returnable[0];
    }

    function get_users() {
        $query = $this->db->query('SELECT * FROM  tbl_user;');
        return $query->result();
    }
    function get_user_types() {
        $query = $this->db->query('SELECT member_type, count(member_type) as members FROM tbl_member group by member_type');
        return $query->result();
    }    

    function get_user_by_username($username) {
        if ($this->check_username_exists($username)) {
            $this->db->select('*');
            $this->db->where('display_name', $username);
            $query = $this->db->get('tbl_member');
            $returnable = $query->result();
            return $returnable[0];
        }else{return false;}
    }
    

    function get_userdetails($user) {
        $query = $this->db->query('SELECT * FROM tbl_member WHERE member_id = '.$user);
        $returnable = $query->result();
        return $returnable[0];

    } 
    function get_members(){

        $this->db->select('*');
        $query = $this->db->get('tbl_member');
        if ($query->num_rows() > 0) {
            $returnable =  $query->result();
    }
        return $returnable;
        
    }

    function check_username_exists($username) {
        $result = false;
        $this->db->select('*');
        $this->db->where('display_name', $username);
        $query = $this->db->get('tbl_member');
        if ($query->num_rows() > 0) {
            $result = true;
        }
        return $result;
    }

    function sendmail($email, $message, $subject) {

        $result = false;
        $headers = "From: Paid Inc. <no-reply@paid.co.ke> \r\n";
        $headers .= "Reply-To: no-reply@paid.co.ke\r\n";
        $headers .= "CC: nguru@inclusion.pro\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        if (mail($email, $subject, $message, $headers)) {
            $result = true;
        }
        return $result;
    }

    function activate_user($email, $hash) {
        $result = false;
        if ($this->check_email_exists($email)) {
            $this->db->where('activation', $hash);
            $this->db->where('email', $email);
            $this->db->update('tbl_user', array('status' => 1));
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

}

?>
