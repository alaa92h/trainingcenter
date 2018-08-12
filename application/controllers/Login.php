<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');

        if ($this->aauth->is_loggedin()) {
            if ($this->aauth->get_user()->level == "institute") {
                redirect('institute');
            } elseif ($this->aauth->get_user()->level == "admin") {
                redirect('admin');
            }
        }
    }

    public function index() {
        // aauth_users `id`, `email`, `pass`, `username`, `banned`, `last_login`, `last_activity`, `date_created`, `forgot_exp`, `remember_time`, `remember_exp`, `verification_code`, `totp_secret`, `ip_address`, `institute_id`, `level`, `created_at`
        if (!isset($_POST["Login"])) {

            $data["page"] = "login/login.php";
            $data["title"] = "تسجيل دخول";
            $this->load->view('login/index', $data);
        } else {
            $email = $_POST["email"];
            $password = $_POST["password"];

            if ($this->aauth->login($email, $password)) {
                if ($this->aauth->get_user()->level == "institute") {
                    redirect('institute');
                } else
                    echo "<pre>";
                print_r($this->aauth->get_user());
                echo "</pre>";
            } else
                echo 'hyr';
            //echo date("Y-m-d H:i:s");

            $this->aauth->print_errors();
        }
    }

    public function register() {
        if (!isset($_POST["register"])) {
            $data["page"] = "login/registration.php";
            $data["title"] = "التسجيل";
            $this->load->view('login/index', $data);
        } else {
            // aauth_users `id`, `email`, `pass`, `username`, `banned`, `last_login`, `last_activity`, `date_created`, `forgot_exp`, `remember_time`, `remember_exp`, `verification_code`, `totp_secret`, `ip_address`, `institute_id`, `level`, `created_at`

            $email = $_POST["email"];
            $password = $_POST["password"];
            $name = $_POST["name"];

            // institutes `id`, `name`, `address`, `about`, `logo`, `user_id`, `created_at`, `phone`
            $institute_name = $_POST['institute_name'];
            $address = $_POST['address'];
            $about = $_POST['about'];
            // $user_id        = $_POST['user_id'];

            $user_id = $this->aauth->create_user($email, $password);
            //echo $this->aauth->print_errors();

            if (isset($user_id) && $user_id > 0) {
                $this->db->insert("institutes", ["name" => $institute_name, "address" => $address, "about" => $about, "logo" => "logo.png", "user_id" => $user_id]);
                $institute_id = $this->db->insert_id();

                $this->db->where('id', $user_id);
                $this->db->update('aauth_users', ["level" => "institute", "institute_id" => $institute_id, "name" => $name]);
                echo "تمت اضافة المعهد بنجاح";
            }
        }
    }

}
