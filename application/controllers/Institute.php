<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Institute extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        if (!$this->aauth->is_loggedin()) {
            redirect('login');
        }

        if ($this->aauth->get_user()->level == "admin") {
            redirect('admin');
        }
    }

    public function index() {

        $data["sidebar"] = "institute/sidebar.php";
        $data["page"] = "institute/index.php";
        $data["title"] = "لوحه تحكم المعاهد";
        $this->load->view('template', $data);
    }

    public function courses() {
        // courses `id`, `name`, `institute_id`, `fees`, `teacher_id`, `start_date`, `status`, `img`, `category_id`, `duration`, `level`, `cours_type_id`, `created_at`
        $data["courses"] = $this->db->get_where("courses", ['institute_id' => 1])->result();

        $data["sidebar"] = "institute/sidebar.php";
        $data["page"] = "institute/courses.php";
        $data["title"] = "لوحه تحكم المعاهد";
        $this->load->view('template', $data);
    }

    public function add_course() {

        $data["sidebar"] = "institute/sidebar.php";
        $data["page"] = "institute/add_course.php";
        $data["title"] = "اضافة دورة جديد";
        $this->load->view('template', $data);
    }

    public function teachers() {
        $institute_id = $this->aauth->get_user()->institute_id;
        $data["teachers"] = $this->db->get_where("teachers", ["institute_id" => $institute_id])->result();
        $data["sidebar"] = "institute/sidebar.php";
        $data["page"] = "institute/teachers.php";
        $data["title"] = " استاذ";
        $this->load->view('template', $data);
    }

    public function add_teacher() {

        $data["sidebar"] = "institute/sidebar.php";
        $data["page"] = "institute/add_teacher.php";
        $data["title"] = "اضافة استاذ";
        $this->load->view('template', $data);
    }

    public function post_add_teacher() {
        $name = $_POST["name"];
        $about = $_POST["about"];
        $img = "img"; //$_POST["img"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $institute_id = $this->aauth->get_user()->institute_id;


        $this->db->insert("teachers", ['name' => $name, 'about' => $about, ' phone' => $phone, ' email' => $email, ' img' => $img, 'institute_id' => $institute_id]);
        redirect('institute/teachers');
    }

}
