<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('vwWelcome');//load welcome screen
	}

	public function selectQuestions(){
		$count = 1;
		$score = $this->input->get('score');
		$region = $this->input->get('region');
		$question_id = rand(1, 8);
		$result = $this->queries->get_question_info($question_id, $region);
		$result['score'] = $score;
		$result['region'] = $region;
		$result['count'] = $count;
		$result['status'] = "unmix";
		if($result['type'] == 'Multiple'){
			$this->load->view('multiple',$result);
		}else{
			$this->load->view('trueOrFalse',$result);
		}
	}

	public function nextQuestions(){
		$questionId = $this->input->post('questionId');
		$score = $this->input->get('score');
		$region = $this->input->get('region');
		$answer = $this->input->get('answer');
		$count = $this->input->get('count');
		$correct_answer = $this->queries->get_question_answer($questionId, $region);
		if(strcmp($answer, $correct_answer['answer1'])) {
			$score++;
		}
		if($count <= 10){
			$question_id = rand(1, 8);
			$result = $this->queries->get_question_info($question_id, $region);
			$result['score'] = $score;
			$result['region'] = $region;
			$count++;
			$result['count'] = $count;
			$result['status'] = "unmix";
			if($result['type'] == 'Multiple'){
				$this->load->view('multiple',$result);
			}else{
				$this->load->view('trueOrFalse',$result);
			}
		}else{
			$this->load->view('', $score);     //load the result view
		}
	}

	public function selectMixQuestions(){
		$count = 1;
		$score = $this->input->get('score');
		$region_id = rand(1, 2);
		$region = null;
		if($region_id == 1){
			$region = "China";
		}else{
			$region = "UK";
		}
		$question_id = rand(1, 8);
		$result = $this->queries->get_question_info($question_id, $region);
		$result['score'] = $score;
		$result['region'] = $region;
		$result['count'] = $count;
		$result['status'] = "mix";
		if($result['type'] == 'Multiple'){
			$this->load->view('multiple',$result);
		}else{
			$this->load->view('trueOrFalse',$result);
		}
	}

	public function nextMixQuestions(){
		$questionId = $this->input->post('questionId');
		$score = $this->input->get('score');
		$region = $this->input->get('region');
		$answer = $this->input->get('answer');
		$count = $this->input->get('count');
		$correct_answer = $this->queries->get_question_answer($questionId, $region);
		if(strcmp($answer, $correct_answer['answer1'])) {
			$score++;
		}
		if($count <= 10){
			$region_id = rand(1, 2);
			if($region_id == 1){
				$region = "China";
			}else{
				$region = "UK";
			}
			$question_id = rand(1, 8);
			$result = $this->queries->get_question_info($question_id, $region);
			$result['score'] = $score;
			$result['region'] = $region;
			$count++;
			$result['count'] = $count;
			$result['status'] = "mix";
			if($result['type'] == 'Multiple'){
				$this->load->view('multiple',$result);
			}else{
				$this->load->view('trueOrFalse',$result);
			}
		}else{
			$this->load->view('', $score);     //load the result view
		}
	}
}
