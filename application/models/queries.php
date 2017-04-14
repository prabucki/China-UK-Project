<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Queries extends CI_Model {

    /*
    | -------------------------------------------------------------------
    |  Essentials
    | -------------------------------------------------------------------
    */

    public function get_question_info($question_id) {
        $query = $this->db->get_where('questions_uk', array('id' => $question_id));
        return $query->row_array();
    }
}