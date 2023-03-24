<?php

require_once('database.php');

class Projects extends DatabaseObject {
	
	protected static $tblName="projects";
	protected static $tblFields = array('p_id', 'c_id', 's_ids', 'project_title', 'project_desc', 'budget', 'status', 'archive', 'trash', 'start_time','end_time','revisions','file','days');
	
	public $p_id;
	public $c_id;
	public $s_ids;
	public $project_title;
	public $project_desc;
	public $budget;
	public $status;
	public $archive;
	public $trash;
	public $start_time;
	public $end_time;
	public $revisions;
	public $file;
	public $days;
	
	public $message=NULL;

	
	
 	// This will return  record by username in users table
	// Find user by username
	public static function findByProjectId($proj_id="") {
    global $database;
		$sql  = "SELECT * FROM projects ";
		$sql .= "WHERE p_id = '{$proj_id}' ";
		$sql .= "LIMIT 1";
		$result_array = self::findBySql($sql);  // $result_array is an object
		
		return !empty($result_array) ? array_shift($result_array) : false;
			
	}
	// Find user by id
	public static function findByTitle($proj_title="") {
    global $database;
		$sql  = "SELECT * FROM projects";
		$sql .= "WHERE project_title = '{$proj_title}' ";
		$sql .= "LIMIT 1";
		$result_array = self::findBySql($sql);  // $result_array is an object
		
		return !empty($result_array) ? array_shift($result_array) : false;
			
	}
	
	
}
?>