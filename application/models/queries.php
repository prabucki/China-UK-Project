<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Queries extends CI_Model {

    /*
    | -------------------------------------------------------------------
    |  Essentials
    | -------------------------------------------------------------------
    */

    public function get_single_user_information($user_id) {
        $query = $this->db->get_where('booking_users', array('id' => $user_id));
        return $query->row_array();
    }

    public function get_specific_user_group($access_level) {
        $query = $this->db->get_where('booking_users', array('access_level' => $access_level));
        return $query->result_array();
    }

    public function get_question_info($question_id) {
        $query = $this->db->get_where('Questions', array('id' => $question_id));
        return $query->row_array();
    }
    /*
    | -------------------------------------------------------------------
    |  Dashboard
    | -------------------------------------------------------------------
    */

    public function get_users_count($type = FALSE) {
        if ($type === FALSE) {
            $query = $this->db->query("SELECT * FROM `booking_users`");
            return $query->num_rows();
        } else {
            $query = $this->db->get_where('booking_users', array('access_level' => $type));
            return $query->num_rows();
        }
        
    }

    public function all_bookings_count() {
        $query = $this->db->query("SELECT * FROM `booking_sessions`");
        return $query->num_rows();
    }

    /*
    | -------------------------------------------------------------------
    |  Bookings
    | -------------------------------------------------------------------
    */

    public function all_bookings($access_level, $user_id) {
        if ($access_level == 1 || $access_level == 3) {
            $query = $this->db->query("SELECT * FROM `booking_sessions`");
            return $query->result_array();
        }
        elseif ($access_level == 2) {
            $query = $this->db->get_where('booking_sessions', array('instructor_id' => $user_id));
            return $query->result_array();
        }
        elseif ($access_level == 4) {
            $query = $this->db->get_where('booking_sessions', array('booked_by' => $user_id));
            return $query->result_array();
        }
    }

    public function get_booking_types() {
        $query = $this->db->query("SELECT * FROM `booking_types`");
        return $query->result_array();
    }

    public function create_booking($booking_date, $booked_by, $instructor_id, $booking_type) {
        $sql = "INSERT INTO `booking_sessions` (id, session_date, booked_by, instructor_id, status, booking_type)
                VALUES ('', ?, ?, ?, 0, ?)";
        $this->db->query($sql, array($booking_date, $booked_by, $instructor_id, $booking_type));
    }

    public function check_for_active_session($user_id) {
        // where status is 0
        $query = $this->db->get_where('booking_sessions', array('booked_by' => $user_id, 'status' => 0));
        return $query->num_rows();
    }

    /*
    | -------------------------------------------------------------------
    |  Members
    | -------------------------------------------------------------------
    */

    public function all_users($user_id = false) {
        if ($user_id === false) {
            $query = $this->db->query('SELECT * FROM `booking_users`');
            return $query->result_array();
        } else {
            $query = $this->db->get_where('booking_users', array('id' => $user_id));
            return $query->row_array();
        }
    }

    public function remove_user($user_id = false) {
        if ($user_id === false) {
            return 0;
        } else {
            $this->db->where('id', $user_id);
            $this->db->delete('booking_users');
        }
    }

    public function make_instructor($user_id = false) {
        if ($user_id === false) {
            return 0;
        } else {
            $this->db->set('access_level', 2);
            $this->db->where('id', $user_id);
            $this->db->update('booking_users');
        }
    }

    public function make_slope($user_id = false) {
        if ($user_id === false) {
            return 0;
        } else {
            $this->db->set('access_level', 3);
            $this->db->where('id', $user_id);
            $this->db->update('booking_users');
        }
    }

    /*
    | -------------------------------------------------------------------
    |  Membership
    | -------------------------------------------------------------------
    */

    public function check_membership($user_id) {
        $query = $this->db->get_where('booking_sessions', array('booked_by' => $user_id, 'status' => 1));
        return $query->num_rows();
    }

    public function update_membership($user_id, $membership_level) {
        if ($membership_level == 2):{
            $date = new DateTime;
            $date->modify("+1 year");
            $membership_end = $date->format("Y-m-d");}
        else:
            $membership_end = 1;
        endif;
        $sql = "UPDATE `booking_users`
        SET membership_level = ?, membership_end = ?
        WHERE id = ?";
        $this->db->query($sql, array($membership_level, $membership_end, $user_id));
    }

    public function update_bank_details($id, $card_number, $card_type, $security_code, $expiry_date) {
        $sql = "UPDATE `booking_users`
                SET card_number = ?, card_type = ?, security_code = ?, expiry_date = ?
                WHERE id = ?";
        $this->db->query($sql, array($card_number, $card_type, $security_code, $expiry_date, $id));
    }
/*
    public function clear_bank_details($id) {
        $sql = "UPDATE `booking_users`
                SET card_number = NULL, card_type = NULL, security_code = NULL, expiry_date = NULL
                WHERE id = ?";
        $this->db->query($sql, array($card_number=NULL, $card_type=NULL, $security_code=NULL, $expiry_date=NULL, $id));
    }
*/

    /*
    | -------------------------------------------------------------------
    |  Account
    | -------------------------------------------------------------------
    */

    public function check_username($username) {
        $query = $this->db->get_where('booking_users', array('username' => $username));
        return $query->num_rows();
    }

    public function create_account($username, $password, $email_address, $first_name, $last_name) {
        $sql = "INSERT INTO `booking_users` (id, username, password, email_address, first_name, last_name, access_level, membership_level)
                VALUES ('', ?, ?, ?, ?, ?, 4, 1)";
        $this->db->query($sql, array($username, $password, $email_address, $first_name, $last_name));
    }

    public function get_username($username) {
        $query = $this->db->get_where('booking_users', array('username' => $username));
        return $query->row_array();
    }

    public function update_account_details($id, $first_name, $last_name, $email_address, $mobile_number_code, $mobile_number, $current_address, $current_town, $address_postcode, $current_country) {
        $sql = "UPDATE `booking_users`
                SET first_name = ?, last_name = ?, email_address = ?, mobile_number_code = ?, mobile_number = ?, current_address = ?, current_town = ?, current_country = ?, address_postcode = ?
                WHERE id = ?";
        $this->db->query($sql, array($first_name, $last_name, $email_address, $mobile_number_code, $mobile_number, $current_address, $current_town, $current_country, $address_postcode, $id));
    }

}