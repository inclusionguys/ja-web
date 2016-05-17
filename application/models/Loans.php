<?php

class Loans extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    function get_loan($loanid) {
        $this->db->select('*');
        $this->db->where('request_id', $loanid);
        $query = $this->db->get('tbl_loan_request');
        $returnable = $query->result();
        return $returnable[0];
    }

    function get_loans() {
        $query = $this->db->query('SELECT * FROM  tbl_loan_request;');
        return $query->result();
    }

    function get_disbursedloans() {
        $query = $this->db->query("SELECT * FROM tbl_loan_request where loan_status != 'disbursed'");
        return $query->result();
    }

    function get_pendingloans() {
        $query = $this->db->query("SELECT * FROM tbl_loan_request where loan_status = 'pending'"); 
        return $query->result();
    }

    function get_memberloans($display_name) {
        $query = $this->db->query("SELECT tr.* FROM tbl_loan_request tr, tbl_member tm
            WHERE tm.member_id = tr.request_member
            AND tm.display_name = '$display_name'"); 
        return $query->result();
    }       
    function get_loanrepayments($loanid) {
        $query = $this->db->query("SELECT * FROM tbl_loan_repayment where request_id = $loanid"); 
        return $query->result();
    }
}

?>
