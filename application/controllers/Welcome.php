<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{



	public function index()
	{

		$data =
			[
				'konten' => [
					'isi' => ['coba_view'],
				]
			];

		footer_js(
			[
				'js/argon.js?v=1.1.0',
			]
		);

		add_css(
			[
				'css/argon.css?v=1.1.0'
			]
		);

		$this->load->view('welcome_message', $data);
	}

	public function coba()
	{
		// $faker = Faker\Factory::create();
		// // generate data by calling methods
		// echo $faker->name();
		//  <button class="btn btn-primary" data-toggle="sweet-alert" data-sweet-alert="basic">Basic alert</button>
		$this->session->set_flashdata('msg', '<div class="btn btn-primary" data-toggle="sweet-alert" data-sweet-alert="basic"></div>');
		redirect('welcome/cobadua');
	}

	public function cobadua()
	{
		footer_js('vendor/bootstrap-notify/bootstrap-notify.min.js');
		footer_js('vendor/sweetalert2/dist/sweetalert2.min.js');
		$data = [
			'konten' => [
				'isi' => ['page/fitur', 'page/home'],
				'info' => 'page/home'
			],

		];
		$this->load->view('welcome_message', $data);
		# code...
	}
}
