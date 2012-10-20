<?php

class Obekti extends CI_Controller {
    /* -----------------------------горно меню бутон обекти------------------------ */

    function objekt() {

        $data['title'] = 'Търговски Обекти ';

        $this->load->view('Topmenu/obekti_view', $data);
    }

    /* -----------------------------горно меню бутон връзки------------------------ */

    function vrazki() {

        $data['title'] = 'За нас ';

        $this->load->view('Topmenu/vrazki_view', $data);
    }

    /* -----------------------------горно меню бутон контакти------------------------ */

    function kontakti() {

        $data['title'] = 'Контакти';

        $this->load->view('Topmenu/kontakti_view', $data);
    }

    /* -----------------------------ляво меню бутон кухня------------------------ */

    function kuhnq() {

        $this->load->model('Kuhnq_model');

        $data['kuhnq'] = $this->Kuhnq_model->get_all();


        $data['title'] = 'Кухня ';

        $this->load->view('Leftmenu/kuhnq_view', $data);
    }

    /* -----------------------------ляво меню бутон спалня ------------------------ */

    function spalnq() {

        $this->load->model('Spalnq_model');

        $data['spalnq'] = $this->Spalnq_model->get_all();


        $data['title'] = 'Спалня ';

        $this->load->view('Leftmenu/spalnq_view', $data);
    }

    /* -----------------------------ляво меню бутон хол------------------------ */

    function hol() {
        $this->load->model('Hol_model');

        $data['hol'] = $this->Hol_model->get_all();


        $data['title'] = 'Хол ';

        $this->load->view('Leftmenu/hol_view', $data);
    }

    /* -----------------------------ляво меню бутон трапезария------------------------ */

    function trapezariq() {

        $this->load->model('Trapezariq_model');

        $data['trapezariq'] = $this->Trapezariq_model->get_all();


        $data['title'] = 'Трапезария ';

        $this->load->view('Leftmenu/trapezariq_view', $data);
    }

    /* -----------------------------ляво меню бутон детска стая------------------------ */

    function detska_staq() {

        $this->load->model('Detska_staq_model');

        $data['detska_staq'] = $this->Detska_staq_model->get_all();



        $data['title'] = 'Детска стая ';

        $this->load->view('Leftmenu/detska_staq_view', $data);
    }

    /* -----------------------------ляво меню бутон баня------------------------ */

    function banq() {


        $this->load->model('Banq_model');

        $data['banq'] = $this->Banq_model->get_all();


        $data['title'] = 'Баня ';

        $this->load->view('Leftmenu/banq_view', $data);
    }

}
?>