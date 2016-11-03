<?php 
class News_model extends CI_Model {

    function get_all_news()
    {
        $query = $this->db->get('news');
        $data = $query->result();
        return $data;
    }

    public function getTotalNews($keyword = null)
    {   
        if(!empty($keyword)) {
            return $this->db->select()
                        ->like('title', $keyword)
                        ->get('news')->num_rows();
        } else {
            return $this->db->select()->get('news')->num_rows();
        }
       
    }

    function getNews( $perpage, $offset, $keyword = null ){
        // var_dump($keyword);die;
        $news = $this->db->select()
                        ->like('title', $keyword)
                        ->limit($perpage, $offset)
                        ->order_by('title', 'ASC')
                        ->get('news')
                        ->result();
        return $news;
    }

    function getPopularPost(){
        $news = $this->db->select()
                        ->order_by('hits', 'DESC')
                        ->limit('4')
                        ->get('news')
                        ->result();
        return $news;
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


    public function increase_hit($id=0) {
        //lay thong tin của news
        $this->db->where('id', $id);
        $query = $this->db->get('news');
        $data_news = $query->row();


        $data = array(
            'hits' => $data_news->hits + 1
            );
        $this->db->where('id',$id);
        return $this->db->update('news',$data);
    }

	function getNewsById($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('news');
        $data = $query->row();
        return $data;
    }

    public function truncate($string,$length=100,$append="&hellip;") {
      $string = trim($string);

      if(strlen($string) > $length) {
        $string = wordwrap($string, $length);
        $string = explode("\n", $string, 2);
        $string = $string[0] . $append;
      }
      return $string;
    }

}
?>