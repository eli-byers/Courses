<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->output->enable_profiler();
		$this->load->model('Course');
	}

	public function index(){
		$courses = $this->Course->get_all_courses();
		$this->load->view('main',array('courses'=>$courses));
	}

	public function add_course(){
		if(strlen($this->input->post('title')) >= 15){
			$course = array('title' => $this->input->post('title'),
			'description' => $this->input->post('description'));
			$this->Course->add($course);
		}
		redirect('/');
	}

	public function destroy($course_id){
		$course = $this->Course->get_course_by_id($course_id);
		$this->load->view('destroy',array('course' => $course));
	}

	public function remove_course($course_id){
		$this->Course->delete($course_id);
		redirect('/');
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>
