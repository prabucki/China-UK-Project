<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Questions extends CI_Controller {

	public function index()
	{
		// Temporary data
		$data['mode'] = 'UK';
		$data['mode2'] = 'Multiple';

		// Collecting appropriate questions from 
		$available = $this->queries-> get_question_ids($data['mode'] ,$data['mode2']);		
		$data['available'] = [];

		// Change to 
		foreach ($available as $each_number) {
			array_push($data['available'], (int) $each_number['id']);
		}

		?><br>RESULT: <?php
		shuffle($data['available']);
		echo implode($data['available']);


		$this->nextQuestion($data);

	}

	public function nextQuestion($data)
	{
		$data['question_id'] = $data['available'][0];
		$data['question'] = $this->queries->get_question_info($data['question_id'], 'UK');

		//Display
		?><br>QuestionID: <?php
		echo $data['question_id']; 
		?><br>Question: <?php
		echo $data['question']['question'];


		unset($data['available'][0]);

		$this->load->view('vwQuestions', $data);
		//echo $question['type'];

		//echo $number;
	}
}