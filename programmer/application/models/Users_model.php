
<?php  

class Users_model extends CI_model {
	public function getAllUsers()
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->join('skills', 'uid = user_id');
	//	$this->db->where($id);

		return  $this->db->get()->result_array();

	//	return $this->db->get('users')->result_array();
	}
	
	public function tambahDataUsers()
	{
		$data = [
			"uid" => $this->input->post('uid',true),
			"name" => $this->input->post('name',true),
 		];

 		$this->db->insert('users',$data);
	}
	public function hapusDataUsers($id)
	{
		//$this->db->where('id', $id);
		$this->db->delete('users',['id' => $id]);
		$this->db->delete('skills',['user_id' => $id]);
	}
	public function getUsersById($id)
	{
		return $this->db->get_where('users',['id' => $id])->row_array();
		
	}
	public function getUsersId($id)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->join('skills', 'skills.user_id = users.uid');
		//$this->db->where($id);

		return $this->db->get_where('',['uid' => $id])->row_array();

	}
	

	public function ubahDataUsers()
	{
		$data = [
			"skill" => $this->input->post('skill',true),
			"user_id" => $this->input->post('user_id',true)
 		];

 		$this->db->where('user_id', $this->input->post('user_id'));
		$this->db->update('skills', $data);

	}
	
}