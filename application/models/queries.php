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

    public function get_type_number($region, $type) {
        if($region == 'China'):
            $query = $this->db->query("SELECT * FROM `questions_china` WHERE type = '$type'");
        elseif($region == 'UK'):
            $query = $this->db->query("SELECT * FROM `questions_uk` WHERE type = '$type'");
        endif;
        return $query->num_rows();
    }


    public function get_question_ids($region, $type) {
        if($region == 'China'):
             $query = $this->db->query("SELECT id FROM `questions_china` WHERE type = '$type'");
        elseif($region == 'UK'):
             $query = $this->db->query("SELECT id FROM `questions_uk` WHERE type = '$type'");
        endif;
        return $query->result_array();
    }

    public function get_question_answer($questionId, $region){
        if($region == 'China'):
            $query = $this->db->query("SELECT * FROM `questions_china` WHERE id = '$questionId'");
        elseif($region == 'UK'):
            $query = $this->db->query("SELECT * FROM `questions_uk` WHERE id = '$questionId'");
        endif;
        return $query->row_array();
    }

}