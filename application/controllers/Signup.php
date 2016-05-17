 <?php

 if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class signup extends CI_Controller {

    function __construct() {
        parent::__construct();
        // $this->config->load('facebook');
        $this->load->library(array('form_validation'));
        $this->load->model('merchant_model');
        // $this->load->library('encrypt');
        // $this->load->model('countries');
        // $this->load->model('users');
    }

    function index() {
        
        // $data['countries'] = $this->countries->get_all();
        $data['unity'] = '';
        $data['pagetitle'] = 'Paid Merchant Signup';
        $this->load->view('pages/merchants_signup_view',$data);
    }

    // For those who may forget their passwords to the system
    function forgot() {
        
    }

    function submit() {
        $json = file_get_contents('php://input');
        $signup = (json_decode($json));

       $redirect = '';
// $error = ($signup->terms < 1) ? 'You must agree to terms and conditions before proceeding' : '' ;
        if ($signup->password !== $signup->confirmpassword) {
            $resp = array('error' => 'Confirmation password must match password' ,'redirect' => $redirect  );echo(json_encode($resp));die;
        }
        if ($signup->terms < 1) {
            $resp = array('error' => 'You must agree to terms and conditions before proceeding' ,'redirect' => $redirect  );echo(json_encode($resp));die;
        }

        $merchant = array(
            'merchant_businessno'         =>  $signup->businesstill,
            'merchant_businessname'       =>  $signup->businessname,
            'merchant_phone'              =>  $signup->businessphone,
            'merchant_address'            =>  $signup->businesspostaladdress,
            'merchant_location'           =>  $signup->businessmaplocation,
            'merchant_location'                                              => $signup->businesstown,
            'merchant_businessdesc'       =>  $signup->businessname,
            'merchant_contactperson'      =>  $signup->contactname,
            'merchant_contactpersonphone' =>  $signup->businesstelephone,
            'merchant_email'              =>  $signup->email,   
            'merchant_paidsubscription'   =>  $signup->paidplan,
            'merchant_latitude'           =>  $signup->businesslatitude,
            'merchant_longitude'          =>  $signup->businesslongitude
            );
        $user = array(
            'us_username' => $signup->username,
            'us_password'                 =>  $this->_encrypt_pass($signup->password),
            );


        $resp = $this->merchant_model->create_merchant($merchant,$user);
        $resp = array('error' => 'none' ,'redirect' => $redirect  );echo(json_encode($resp));die;
    }

    function password_strength($pwd) {
        $password_strength = 0;

        if (strlen($pwd) > 8) {
            $password_strength += 20;
            #echo "Password too short! <br />";
            $result = false;
        }

        if (preg_match("#[0-9]+#", $pwd)) {
            $password_strength += 20;
            #echo "Password must include at least one number! <br />";
            $result = false;
        }

        if (preg_match("#[a-zA-Z]+#", $pwd)) {
            $password_strength += 20;
            #echo "Password must include at least one letter! <br />";
            $result = false;
        }
        if (preg_match('/[\'^£$%&*()!}{@#~?><>,|=_+¬-]/', $pwd)) {
            $password_strength += 20;
            #echo "Password must include at least one special character <br />";
            $result = false;
        }

        return $result;
    }

    function _encrypt_pass($password) {
        $secret = "JaCh13v3rs";
        $password = ( hash_hmac('sha1',$password,$secret));

        return $password;
    }

    function activate($hash) {
        // chech whether the hash exists on the other end of it
        $msg = '';
        $email = $_GET['email'];
        if ($this->users->activate_user($email, $hash)) {
            $msg = 'Activation succesfull';
            redirect('login', $msg);
        } else {
            $msg = 'Activation Failed';
            redirect('login', $msg);
        }
    }

}

/* End of file home.php */    