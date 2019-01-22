<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$this->load->view('layout/header');
        $this->load->view('home');
        $this->load->view('layout/footer');
	}

	public function about_us()
	{

	}

	public function testimonials()
	{

	}

	public function services()
	{

	}

	public function service_details()
	{

	}

	public function gallery()
	{

	}

	public function experts()
	{

	}

	public function expert_details()
	{

	}

	public function blog()
	{

	}

	public function blog_details()
	{

	}

	public function contact()
	{

	}

}