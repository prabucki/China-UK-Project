<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Questions extends CI_Controller {

	public function index()
	{
		//THIS PART SHOULD RUN ONLY AT FIRST ITERATION
		$data['number'] = $this->queries->get_questions_number('UK');

		// Filling Available Questions with IDs
		$data['available'] = range(1,$data['number'],1);
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

		?> <br> <?php
		echo implode($data['available']);

		$this->load->view('vwQuestions', $data);
		//echo $question['type'];

		//echo $number;
	}
}