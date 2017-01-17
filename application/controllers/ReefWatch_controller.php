<?php
	class Reefwatch_controller extends CI_Controller {
		public function index() {
			$this->load->view('reefwatch/main_page');
		}
		public function aboutus() {
			$this->load->view('reefwatch/about_us');
		}
		public function ourteam() {
			$this->load->view('reefwatch/our_team');
		}
		public function whatwedo() {
			$this->load->view('reefwatch/what_we_do');
		}
		public function initiatives() {
			$this->load->view('reefwatch/initiatives');
		}
		public function current_initiatives() {
			$this->load->view('reefwatch/current_initiatives');
		}
		public function past_initiatives() {
			$this->load->view('reefwatch/past_initiatives');
		}
		public function youcanhelp() {
			$this->load->view('reefwatch/you_can_help');
		}
		public function donate() {
			$this->load->view('reefwatch/donate');
		}
		public function partners() {
			$this->load->model('Reefwatch_model');
			$res = $this->Reefwatch_model->select("partners");
			$data = array("res" => $res);
			$this->load->view('reefwatch/partners',$data);
		}
		public function multimedia() {
			$this->load->view('reefwatch/multimedia');
		}
		public function blog() {
			$this->load->view('reefwatch/blog');
		}
		public function gallery() {
			$this->load->view('reefwatch/gallery');
		}
		public function video() {
			$this->load->view('reefwatch/video');
		}
		public function contactus() {
			$this->load->view('reefwatch/contact_us');
			$this->load->model('Reefwatch_model');
			if(!empty($_POST)) {
				$data = array("name" => $_POST["name"],
						      "email" => $_POST["email"],
						      "subject" => $_POST["sub"],
						      "message" => $_POST["mess"]
				);
				$this->Reefwatch_model->insert("contact",$data);
				$this->load->view('reefwatch/thanks');
			}
		}
	}
?>