<?php 
class User_model extends CI_Model {

	function insert_data($data){
		$this->db->insert('member', $data);
	}

	public function get_all_user()
    {
        $query = $this->db->get('member');
        $data = $query->result();
        return $data;
    }

    public function getAll() {
    	$query = $this->db->get('member');
    	$data = $query->result();
    	return $data;
    }

    public function deleteUser($id) {
    	$this->db->where('id', $id);
    	$this->db->delete('member');
    }

    public function update_user($id=0)
    {
        $data = array(
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'age' => $this->input->post('age'),
            'password' => $this->input->post('password'),
        );
        $this->db->where('id',$id);
        return $this->db->update('member',$data);
    }

    public function getUserById($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('member');
        $data = $query->row();
        return $data;
    }
}
?>