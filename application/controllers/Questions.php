<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Questions extends CI_Controller {

	public function index()
	{
		// Temporary data
		$data['score'] = 0;
		$data['mode'] = 'UK';
		$data['mode2'] = 'Multiple';

		// Collecting appropriate questions from the database
		$available = $this->queries-> get_question_ids($data['mode'] ,$data['mode2']);		
		$data['available'] = [];

		// Change array elements to integers
		foreach ($available as $each_number) {
			array_push($data['available'], (int) $each_number['id']);
		}

		//Shuffle the question order
		shuffle($data['available']);

		?><br>RESULT: <?php
		echo implode($data['available']);
		?><br>Size <?php
		echo sizeof($data['available']);

		$this->nextQuestion($data);

	}

	public function nextQuestion($data)
	{
		// Load end view
		if (sizeof($data['available']) == 0):
			$this->load->view('vwFinish', $data);

		else:

			$data['question_id'] = $data['available'][0];
			$data['question'] = $this->queries->get_question_info($data['question_id'], 'UK'); // Set next question from array

			//Display (temporary)
			?><br>QuestionID: <?php
			echo $data['question_id']; 
			?><br>Question: <?php
			echo $data['question']['question'];

			unset($data['available'][0]);	// Delete current question from array
			
			$this->load->view('multiple', $data);

		endif;
	}
}