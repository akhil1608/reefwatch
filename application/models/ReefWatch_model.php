
<?php
class ReefWatch_model extends CI_Model {
	public function __construct() {
			parent::__construct();
	}
    public function select($table,$columns="*",$condition=NULL) {
    		$query = $this->db->select($columns)->get_where($table,$condition)->result_array();
    		return $query;
    }
    public function insert($table,$data) {
			$this->db->insert($table, $data);
    		return true;
    }
}
?>