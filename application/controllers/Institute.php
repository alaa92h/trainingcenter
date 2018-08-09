<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Institute extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
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

        $data["sidebar"] = "institute/sidebar.php";
        $data["page"] = "institute/teachers.php";
        $data["title"] = "اضافة استاذ";
        $this->load->view('template', $data);
    }

    public function add_teacher() {

        $data["sidebar"] = "institute/sidebar.php";
        $data["page"] = "institute/add_teacher.php";
        $data["title"] = "اضافة استاذ";
        $this->load->view('template', $data);
    }

}
