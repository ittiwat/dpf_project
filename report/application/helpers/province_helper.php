<?php

	function get_province()
	{
		$ci = get_model();
		$data['district'] = $ci->province->get_district();
		$data['amphur'] = $ci->province->get_amphur();
		$data['province'] = $ci->province->get_province();
		return($data);
	}

?>