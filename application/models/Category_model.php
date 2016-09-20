<?php 
class Category_model extends CI_Model {

	function insert_data($data){
		$this->db->insert('category', $data);
	}

    public function getAll() {
    	$query = $this->db->get('category');
    	$data = $query->result();
    	return $data;
    }

   public function getCategoryById($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('category');
        $data = $query->row();
        return $data;
    }

    public function update($id=0) {
        $data = array(
            'category_name' => $this->input->post('category_name'),
            'description' => $this->input->post('description')
        );
        // var_dump( $data);die;
        $this->db->where('id',$id);
        return $this->db->update('category',$data);
    }
}
?>