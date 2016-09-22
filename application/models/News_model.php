<?php 
class News_model extends CI_Model {

    function get_all_news()
    {
        $query = $this->db->get('news', 10);
        $data = $query->result();
        return $data;
    }

    function insert_data($data){
		$this->db->insert('news', $data);
	}

    public function update($id=0, $data) {
        $this->db->where('id',$id);
        return $this->db->update('news',$data);
    }

	function getNewsById($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('news');
        $data = $query->row();
        return $data;
    }
}
?>