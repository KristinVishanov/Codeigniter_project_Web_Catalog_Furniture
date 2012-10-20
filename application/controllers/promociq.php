<?php

class Promociq extends CI_Controller {

    function index() {
        $this->load->model('Products_model');

        $data['products'] = $this->Products_model->get_all();
        $data['title'] = 'E-shoping';

        $this->load->view('promociq_view', $data);
    }

    /* --------------------login forma------------------------------------ */

    function Vhod() {
        $data['title'] = 'Вход в системата';
        $this->load->view('promociq_view_vhod', $data);
    }

    function validate_credentials() {    // Този метод валидира потребителското име и парола, след това проверява дали 
        // същесвтуват името и паролата в базата данни и ако съществуват логва потребителя
        $this->load->library('form_validation');
        $val = $this->form_validation;

        $val->set_rules('username', 'Име', 'trim|required|min_length[3]');
        $val->set_rules('password', 'Парола', 'trim|required|min_length[4]');

        if ($val->run()) {
            $this->load->model('Promociq_model');
            $query = $this->Promociq_model->validate();

            if ($query) {                  // if the user's credentials validated...
                $data = array(
                    'username' => $this->input->post('username'),
                    'is_logged_in' => true
                );
                $this->session->set_userdata($data);
                redirect('site/members_area');
            } else {                     // incorrect username or password
                $this->session->set_flashdata('errmag', 'Грешно име или парола');
                redirect('promociq/Vhod', 'refresh');
            }
        } else {
            $this->session->set_flashdata('errmag', 'Кратко име или парола');
            redirect('promociq/Vhod', 'refresh');
        }
    }

    function signup() {              // Този метод ни отваря формата за регистрация на нови потребители
        $data['title'] = 'Регистрация';
        $this->load->view('promociq_view_registraciq', $data);
    }

    function create_member() {         // Този метод валидира формата за регистрация и ако е валидна се обръща
        // към модела create_member които прави записа в базата данни
        $this->load->library('form_validation');

        // field name, error message, validation rules
        $this->form_validation->set_rules('first_name', 'Name', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('email_adres', 'Email Adres', 'trim|required|valid_email');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
        $this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('promociq_view_registraciq');
        } else {
            $this->load->model('Promociq_model');

            if ($query = $this->Promociq_model->create_member()) {
                $data['title'] = 'Регистрацията е успешна';

                $this->load->view('Promociq_view_regitraciqta_uspeshna', $data);
            } else {
                $this->load->view('signup_form');
            }
        }
    }

    function logout() {                       // Този метод изтрива сесията на потребителя
        $this->session->sess_destroy();
        $this->index();
    }

    /* --------------------KOLICHKA ZA PAZARVANE------------------------------------ */

    function add() {

        $this->load->model('Products_model');

        $product = $this->Products_model->get($this->input->post('id'));

        $insert = array(
            'id' => $this->input->post('id'),
            'qty' => 1,
            'price' => $product->price,
            'name' => $product->name
        );
        if ($product->option_name) {
            $insert['options'] = array(
                $product->option_name => $product->option_values[$this->input->post($product->option_name)]
            );
        }

        $this->cart->insert($insert);

        redirect('promociq');
    }

    function addkuhnq() {

        $this->load->model('Kuhnq_model');

        $product = $this->Kuhnq_model->get($this->input->post('id'));

        $insert = array(
            'id' => $this->input->post('id'),
            'qty' => 1,
            'price' => $product->price,
            'name' => $product->name
        );
        if ($product->option_name) {
            $insert['options'] = array(
                $product->option_name => $product->option_values[$this->input->post($product->option_name)]
            );
        }

        $this->cart->insert($insert);

        redirect('obekti');
    }

    function remove($rowid) {

        $this->cart->update(array(
            'rowid' => $rowid,
            'qty' => 0
        ));

        redirect('promociq');
    }

}

?>
