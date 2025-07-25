<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking_model extends CI_Model {

    public function insert_booking($data) {
        return $this->db->insert('bookings', $data);
    }
}
