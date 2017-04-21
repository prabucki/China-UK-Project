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
	public function test(){
		echo "test";
	}

	public function index()
	{
		$this->load->view('vwWelcome');//load welcome screen
	}

	public function selectMulQuestions(){
		$score = 0;
		$count = 1;
		$region = $this->input->get('region');
		$status = $this->input->get('status');
		$question_id = (int)(rand(100, 2500)/100);
		if($status == 1){
			$region_id = (rand(1, 2));
			if($region_id == 1){
				$region = 'China';
				$result = $this->queries->get_multiple_question_info($question_id, $region);
			}else{
				$region = 'UK';
				$result = $this->queries->get_multiple_question_info($question_id, $region);
			}
		}else{
			$result = $this->queries->get_multiple_question_info($question_id, $region);
		}
		$result['score'] = $score;
		$result['region'] = $region;
		$result['count'] = $count;
		$result['status'] = $status;
		$result['done'] = $question_id.",";
		$this->load->view('multiple', $result);
	}

	public function showMulQuestionAnswer(){
		$questionId = $this->input->post('questionId');
		$region = $this->input->post('region');
		$answer = $this->input->post('answer');
		$result = $this->queries->get_multiple_question_info($questionId, $region);
		$str = 1;
		if(strcmp(trim($answer), trim($result['answer'])) == 0){
			echo $str;
		}else{
			$str = $result['answer'];
			echo $str;
		}
	}

	public function nextMulQuestions(){
		$score = $this->input->get('score');
		$region = $this->input->get('region');
		$count = $this->input->get('count');
		$status = $this->input->get('status');
		$question_id = (int)(rand(100, 2500)/100);
		if($count < 5){
			if($status == 1){
				$region_id = rand(1, 2);
				if($region_id == 1){
					$region = 'China';
					$result = $this->queries->get_multiple_question_info($question_id, $region);
				}else{
					$region = 'UK';
					$result = $this->queries->get_multiple_question_info($question_id, $region);
				}
			}else{
				$result = $this->queries->get_multiple_question_info($question_id, $region);
			}
			$result['score'] = $score;
			$result['region'] = $region;
			$count++;
			$result['count'] = $count;
			$result['status'] = (string)$status;
			$this->load->view('multiple',$result);
		}else{
			$result['score'] = $score*20;
			$this->load->view('score', $result);     //load the result view
		}
	}

	public function selectTFQuestions(){
		$score = 0;
		$count = 1;
		$region = $this->input->get('region');
		$status = $this->input->get('status');
		$question_id = (int)(rand(100, 2200)/100);
		if($status == 1){
			$region_id = (rand(1, 2));
			if($region_id == 1){
				$region = 'China';
				$result = $this->queries->get_tf_question_info($question_id, $region);
			}else{
				$region = 'UK';
				$result = $this->queries->get_tf_question_info($question_id, $region);
			}
		}else{
			$result = $this->queries->get_tf_question_info($question_id, $region);
		}
		$result['score'] = $score;
		$result['region'] = $region;
		$result['count'] = $count;
		$result['status'] = $status;
		$this->load->view('trueOrFalse', $result);
	}

	public function showTFQuestionAnswer(){
		$questionId = $this->input->post('questionId');
		$region = $this->input->post('region');
		$answer = $this->input->post('answer');
		$result = $this->queries->get_tf_question_info($questionId, $region);
		$str = 1;
		if(strcmp(trim($answer), trim($result['answer1'])) == 0){
			echo $str;
		}else{
			$str = $result['answer1'];
			echo $str;
		}
	}

	public function nextTFQuestions(){
		$score = $this->input->get('score');
		$region = $this->input->get('region');
		$count = $this->input->get('count');
		$status = $this->input->get('status');
		$question_id = (int)(rand(100, 2200)/100);
		if($count < 5){
			if($status == 1){
				$region_id = rand(1, 2);
				if($region_id == 1){
					$region = 'China';
					$result = $this->queries->get_tf_question_info($question_id, $region);
				}else{
					$region = 'UK';
					$result = $this->queries->get_tf_question_info($question_id, $region);
				}
			}else{
				$result = $this->queries->get_tf_question_info($question_id, $region);
			}
			$result['score'] = $score;
			$result['region'] = $region;
			$count++;
			$result['count'] = $count;
			$result['status'] = $status;
			$this->load->view('trueOrFalse',$result);
		}else{
			$result['score'] = $score*20;
			$this->load->view('score', $result);     //load the result view
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
