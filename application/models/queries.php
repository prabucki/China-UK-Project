<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Queries extends CI_Model {

    /*
    | -------------------------------------------------------------------
    |  Essentials
    | -------------------------------------------------------------------
    */

    public function get_question_info($question_id, $region) {
        if($region == 'China'):
            $query = $this->db->get_where('questions_china', array('id' => $question_id));
        elseif($region == 'UK'):
            $query = $this->db->get_where('questions_uk', array('id' => $question_id));
        endif;
        return $query->row_array();
    }

    public function get_questions_number($region) {
        if($region == 'China'):
            $query = $this->db->query("SELECT * FROM `questions_china`");
        elseif($region == 'UK'):
            $query = $this->db->query("SELECT * FROM `questions_uk`");
        endif;
        return $query->num_rows();
    }
}