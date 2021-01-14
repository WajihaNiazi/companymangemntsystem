
<?php
class Item_model extends CI_Model{
	public function create_item() {
		$data = array(
			'itemName'  	 => $this->input->post('itemName',true), 
			'price'   		 => $this->input->post('price',true), 
			'itemDate'   	 => $this->input->post('itemDate',true),
			'itemquantity'   => $this->input->post('itemquantity',true)
	
			);
		$insert_data = $this->db->insert('items', $data);
		return $insert_data;
	}
	public function get_item() {
		$query = $this->db->get("items");
		return $query->result();
	}
    public function edit_items($items_id,$data) {
        $this->db->where('iditems',$items_id);
        $this->db->update('items',$data);
        return true;
    }
    public function get_projects_info($iditems){
        $this->db->where('iditems',$iditems);
        $get_data = $this->db->get('items');
        return $get_data->row();
    }
    public function delete_items($iditems) {
        $this->db->where('iditems', $iditems);
        $this->db->delete('items');
    }
}
?>