<?php

	function get_input_check($id)
	{
		$ci = get_model();
		$data = get_selected($id);
		$check = $ci->input->post('check');
		$data = get_data_pdf($data);
		if($check == '1')
		{
			get_information_pdf3($data);
		}
		else if($check == '2')
		{
			get_information_pdf4($data);
		}
	}

	function get_input($id)
	{
		$data = get_selected($id);
		$data = get_data_pdf($data);
		return($data);
	}
	
	function get_selected($id)
	{
		$ci = get_model();
		$data['id'] = $id;
		$data['address']  = $ci->input->post('address_com');
		$date = $ci->input->post('date');
		$date = date_eng_to_data($date);
		$data['date'] = date_to_pdf($date);
		$data['name_manager']  = $ci->input->post('name_manager');
		$data['name_manager2']  = $ci->input->post('name_manager2');
		$data['witness']  = $ci->input->post('witness');
		$data['witness2']  = $ci->input->post('witness2');
		$data['position_manager']  = $ci->input->post('position_manager');
		$data['faction']  = $ci->input->post('faction');
		return($data);
	}