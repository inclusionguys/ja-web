<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library(array('form_validation'));
//        $this->load->library('encrypt');
        $this->load->model('users');
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
        $loginvalues = (json_decode($json));

// Should be used at registration

// if ($loginvalues->terms !== true){
//     $arrayName = array('error' => 'You must accept our terms and conditions to proceed' );
//     echo(json_encode($arrayName));die;
// }


        $user_details = $this->users->get_user_by_username($loginvalues->username);
// Check if user is registered

        if ($user_details){
    // 1. user exists in the database
    // 2. Authenticate user
    // echo "<pre>";print_r($user_details);die;


            $password = $this->_encrypt_pass($loginvalues->password);
            $msg = '';
            $success = FALSE;
            if ($user_details->member_password == $password) {


                if ($user_details->member_status == 't') {
                    $user = $this->users->get_userdetails($user_details->member_id);
                    $newdata = array(
                        'memberid' => $user_details->member_id,
                        // 'email' => $user_details->email,
                        'username' => $user_details->display_name,
                        'name' => $user_details->member_name,
                        'usertype' => $user_details->member_type,
                        'updatedate' => $user_details->date_joined,
                        'logged_in' => TRUE,
                        'user_details' =>  $user_details
                        );

                    $redirect = ($user_details->member_type == 'merchant_pos') ? 'dashboard/pos' : 'dashboard' ;

                    $this->session->set_userdata($newdata);
                    $arrayName = array('error' => 'none' ,'redirect' => $redirect  );echo(json_encode($arrayName));die;
                } else {
                    $msg = "Sorry, Your account is not active at the moment. Please contact our support team.";
                    $arrayName = array('error' => $msg );echo(json_encode($arrayName));die;
                }
            } else {
                $msg = "Login failed, credential mismatch";
                $arrayName = array('error' => $msg );echo(json_encode($arrayName));die;
            }
            $msg = "login success";

            $lastpage = $this->session->userdata('last_page');
            if (isset($lastpage)) {redirect($this->session->userdata('last_page'));} else {redirect('home');}
        // Go back to last page 

    // $arrayName = array('error' => 'user exists' );echo(json_encode($arrayName));die;

        }else{
    // user does not exist
            $arrayName = array('error' => 'user does not exist' );echo(json_encode($arrayName));
        }
        die;

// echo $loginvalues->username;
// echo $loginvalues->password;
// echo $loginvalues->terms;

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

