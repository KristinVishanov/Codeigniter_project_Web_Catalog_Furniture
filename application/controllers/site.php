<?php

class Site extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->is_logged_in();
    }

    function members_area($sort_by = 'title', $sort_order = 'asc') {
        $this->load->library('pagination');
        $this->load->model('Promociq_model');

        $total_rows = $this->Promociq_model->get_num_rows();

        $config['base_url'] = 'http://localhost/E-shoping/site/members_area/' . $sort_by . '/' . $sort_order . '/page/';
        $config['total_rows'] = $total_rows;
        $config['per_page'] = '10';
        $config['uri_segment'] = 6;


        $this->pagination->initialize($config);
        $data['title'] = 'Поздравления';
        $data['pagination'] = $this->pagination->create_links();
        $data['rows'] = $this->Promociq_model->search($sort_by, $sort_order, $config['per_page'], $this->uri->segment($config['uri_segment']));
        $data['sort_by'] = $sort_by;
        $data['sort_order'] = $sort_order;



        $this->load->view('promociq_view_uspeshna_registraciq', $data);
    }

    function is_logged_in() {
        $is_logged_in = $this->session->userdata('is_logged_in');
        if (!isset($is_logged_in) || $is_logged_in != true) {
            echo 'You don\'t have permission to access this page. <a href="../login">Login</a>';
            die();
            //$this->load->view('login_form');
        }
    }

}

?>
