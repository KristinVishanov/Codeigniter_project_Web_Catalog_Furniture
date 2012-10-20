<?php

class Banq_model extends CI_Model {

    function get_all() {

        $results = $this->db->get('banq')->result();

        foreach ($results as &$result) {
            
        }

        return $results;
    }

    function get($id) {

        $results = $this->db->get_where('banq', array('id' => $id))->result();
        $result = $results[0];

        if ($result->option_values) {
            $result->option_values = explode(',', $result->option_values);
        }

        return $result;
    }

}
