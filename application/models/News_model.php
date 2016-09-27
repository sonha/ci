<?php 
class News_model extends CI_Model {

    function get_all_news()
    {
        $query = $this->db->get('news');
        $data = $query->result();
        return $data;
    }
    function get_news_by_category($id)
    {
        $this->db->where('category_id',$id);
        $query = $this->db->get('news');
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