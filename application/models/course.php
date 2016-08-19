<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Course extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->output->enable_profiler();
    }

    public function get_all_courses(){
        return $this->db->query("SELECT * FROM courses")->result_array();
    }

    public function get_course_by_id($course_id){
        return $this->db->query("SELECT * FROM courses WHERE id = ?", array($course_id))->row_array();
    }

    public function add($course){
        $query = "INSERT INTO courses (title, description, created_at, updated_at) VALUES (?,?,?,?)";
        $values = array($course['title'], $course['description'], date("Y-m-d, H:i:s"),date("Y-m-d, H:i:s"));
        return $this->db->query($query, $values);
    }

    public function delete($course_id){
        $query = "DELETE FROM courses WHERE id = ?";
        return $this->db->query($query, $course_id);
    }


}

/* Location: ./application/controllers/welcome.php */
