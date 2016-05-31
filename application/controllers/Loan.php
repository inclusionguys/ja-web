<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Loan extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library(array('form_validation'));
//        $this->load->library('encrypt');
        $this->load->model('users');
        $this->load->model('loans');
        $this->load->library('session');
    }

    function index() {
        $data['pagetitle'] = 'Paid Login';
        ($this->session->userdata('userid')) ? redirect('dashboard/pos') : null;
        $this->load->view('pages/login_view',$data);
    }

    public function submit() {
        $this->load->library('session');
        // $json = $this->input->post('json');
        $json = file_get_contents('php://input');
        $loanvalues = (json_decode($json));
        $request_member = $this -> session -> userdata('memberid');

        $applicant_name = (isset($loanvalues->applicant_name)) ? $loanvalues->applicant_name :  '';
        $id_no = (isset($loanvalues->id_no)) ? $loanvalues->id_no :  '';
        $email = (isset($loanvalues->email)) ? $loanvalues->email :  '';
        $telephone_number = (isset($loanvalues->telephone_number)) ? $loanvalues->telephone_number :  '';
        $postal_address = (isset($loanvalues->postal_address)) ? $loanvalues->postal_address :  '';
        $name_of_business = (isset($loanvalues->name_of_business)) ? $loanvalues->name_of_business :  '';
        $position_in_business = (isset($loanvalues->position_in_business)) ? $loanvalues->position_in_business :  '';
        $nature_of_business = (isset($loanvalues->nature_of_business)) ? $loanvalues->nature_of_business :  '';
        $year_in_operation = (isset($loanvalues->year_in_operation)) ? $loanvalues->year_in_operation :  '';
        $registration_number = (isset($loanvalues->registration_number)) ? $loanvalues->registration_number :  '';
        $pin_no = (isset($loanvalues->pin_no)) ? $loanvalues->pin_no :  '';
        $number_of_members = (isset($loanvalues->number_of_members)) ? $loanvalues->number_of_members :  '';
        $current_location = (isset($loanvalues->current_location)) ? $loanvalues->current_location :  '';
        $business_reference = (isset($loanvalues->business_reference)) ? $loanvalues->business_reference :  '';
        $total_revenue_to_date = (isset($loanvalues->total_revenue_to_date)) ? $loanvalues->total_revenue_to_date :  '';
        $last_6_months_expenses_total = (isset($loanvalues->last_6_months_expenses_total)) ? $loanvalues->last_6_months_expenses_total :  '';
        $expected_6_months_expenses_total = (isset($loanvalues->expected_6_months_expenses_total)) ? $loanvalues->expected_6_months_expenses_total :  '';
        $owed_debts = (isset($loanvalues->owed_debts)) ? $loanvalues->owed_debts :  '';
        $debts_you_owe = (isset($loanvalues->debts_you_owe)) ? $loanvalues->debts_you_owe :  '';
        $total_assets_held = (isset($loanvalues->total_assets_held)) ? $loanvalues->total_assets_held :  '';
        $assets_bought_this_year = (isset($loanvalues->assets_bought_this_year)) ? $loanvalues->assets_bought_this_year :  '';
        $cash_in_bank = (isset($loanvalues->cash_in_bank)) ? $loanvalues->cash_in_bank :  '';
        $amount_from_members = (isset($loanvalues->amount_from_members)) ? $loanvalues->amount_from_members :  '';
        $debts_incurred_this_year = (isset($loanvalues->debts_incurred_this_year)) ? $loanvalues->debts_incurred_this_year :  '';
        $business_needs = (isset($loanvalues->business_needs)) ? $loanvalues->business_needs :  '';
        $loan_amount_required = (isset($loanvalues->loan_amount_required)) ? $loanvalues->loan_amount_required :  '';
        $cash_at_hand = (isset($loanvalues->cash_at_hand)) ? $loanvalues->cash_at_hand :  '';
        $have_other_loan = (isset($loanvalues->have_other_loan)) ? 't' :  'f';
        $loan_1_institution = (isset($loanvalues->loan_1_institution)) ? $loanvalues->loan_1_institution :  '';
        $loan_1_amount = (isset($loanvalues->loan_1_amount)) ? $loanvalues->loan_1_amount :  '';
        $business_registration_certificate = (isset($loanvalues->business_registration_certificate)) ? $loanvalues->business_registration_certificate :  '';
        $business_pin_no = (isset($loanvalues->business_pin_no)) ? $loanvalues->business_pin_no :  '';


        $loanrequest = array(
            'applicant_name' => $applicant_name,
            'id_no' => $id_no,
            'email' => $email,
            'telephone_number' => $telephone_number,
            'postal_address' => $postal_address,
            'name_of_business' => $name_of_business,
            'position_in_business' => $position_in_business,
            'nature_of_business' => $nature_of_business,
            'year_in_operation' => $year_in_operation,
            'registration_number' => $registration_number,
            'pin_no' => $pin_no,
            'number_of_members' => $number_of_members,
            'current_location' => $current_location,
            'business_reference' => $business_reference,
            'total_revenue_to_date' => $total_revenue_to_date,
            'last_6_months_expenses_total' => $last_6_months_expenses_total,
            'expected_6_months_expenses_total' => $expected_6_months_expenses_total,
            'owed_debts' => $owed_debts,
            'debts_you_owe' => $debts_you_owe,
            'total_assets_held' => $total_assets_held,
            'assets_bought_this_year' => $assets_bought_this_year,
            'cash_in_bank' => $cash_in_bank,
            'amount_from_members' => $amount_from_members,
            'debts_incurred_this_year' => $debts_incurred_this_year,
            'business_needs' => $business_needs,
            'loan_amount_required' => $loan_amount_required,
            'cash_at_hand' => $cash_at_hand,
            'have_other_loan' => $have_other_loan,
            'loan_1_institution' => $loan_1_institution,
            'loan_1_amount' => $loan_1_amount,
            'business_registration_certificate' => $business_registration_certificate,
            'business_pin_no' => $business_pin_no,
            'request_member' => $request_member,
            'loan_status' => 'pending'
            );

        if( $this->loans->create_loanrequest($loanrequest))
        {

            $redirect = 'dashboard/profile' ;
            $resp = array('error' => 'none' ,'redirect' => $redirect  );echo(json_encode($resp));die;
        }



    }

    function usas() {
        $usrs = $this->users->get_user('inclusion');
        $tx = $this->transaction->get_lnmtransactions(933657);
        echo "<pre>";
        // echo $this->_encrypt_pass('inclusionist');
        var_dump($tx);
    }
    function _encrypt_pass($password) {
        $secret = "JaCh13v3rs";
        $password = ( hash_hmac('sha1',$password,$secret));

        return $password;
    }

    //This won't destroy your facebook session
    function logout() {
        $this->session->sess_destroy();
        $data['logged_out'] = TRUE;
        redirect('login');
    }

}

/* End of file home.php */
?>

