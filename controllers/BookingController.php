<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BookingController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Booking_model');
    }

    public function save() {
        $data = array(
            'first_name' => $this->input->post('fname'),
            'last_name'  => $this->input->post('lname'),
            'email'      => $this->input->post('email'),
            'shoot_type' => $this->input->post('subject'),
            'message'    => $this->input->post('message'),
        );

        $this->Booking_model->insert_booking($data);

        // Optionally redirect or show success
        $this->session->set_flashdata('success', 'Booking submitted successfully!');
        redirect(base_url()); // change as needed
    }
}
