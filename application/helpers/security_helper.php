<?php
function security()
{
	$ins = get_instance();
	if(!$ins->session->userdata('username'))
	{
		redirect('auth');
	} else {
		// $role_id 	= $ins->session->userdata('role_id'); //14
		// $menu 		= $ins->uri->segment(1); //2
		// $queryMenu 	= $ins->db->get_where('user_menu',['menu' => $menu]) ->row_array();
		// $menu_id 	= $queryMenu['id'];
		// $userAccess = $ins->db->get_where('user_access_menu',[
		// 	'role_id' => $role_id,
		// 	'menu_id' => $menu_id
		// ]);
		// if($userAccess->num_rows() < 1)
		// {
		// 	redirect('auth/blocked');
		// }
	}
}