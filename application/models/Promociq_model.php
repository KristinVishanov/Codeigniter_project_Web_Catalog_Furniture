<?php

class Promociq_model extends CI_Model {

    function get_num_rows() {
        $q = $this->db->get('katalog_ceni_list');
        return $q->num_rows();
    }

    function search($sort_by, $sort_order, $per_page, $offset) {
        $this->db->order_by($sort_by, $sort_order);
        $q = $this->db->get('katalog_ceni_list', $per_page, $offset);

        return $q->result();
    }

    /* --------------------login forma------------------------------------ */

    function validate() {      // Този модел проверява дали същевтвуват потребителското име и парола
        $this->db->where('username', $this->input->post('username'));
        $this->db->where('password', md5($this->input->post('password')));
        $query = $this->db->get('membership');

        if ($query->num_rows == 1) {
            return true;
        }
    }

    function create_member() {    // Този метод записва данните от формата за регистрация в базата данни

        $new_promociq_insert_data = array(
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email_adres' => $this->input->post('email_adres')
        );

        $insert = $this->db->insert('membership', $new_promociq_insert_data);
        return $insert;
    }

}

?>
