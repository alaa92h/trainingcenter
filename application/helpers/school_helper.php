<?php

if ( ! function_exists('sessions'))
{
	/**
	 * Form Declaration
	 *
	 * Creates the opening portion of the form.
	 *
	 * @param	string	the URI segments of the form destination
	 * @param	array	a key/value pair of attributes
	 * @param	array	a key/value pair hidden data
	 * @return	string
	 */
	function sessions()
	{
		$CI =& get_instance();
		return $CI->db->get("sessions")->result();
	}
}

if ( ! function_exists('parent_name'))
{

	function parent_name($id)
	{
		$CI =& get_instance();
		return $CI->db->get_where("parents", ["id" => $id])->row()->name;
	}
}

if ( ! function_exists('addresses'))
{

	function addresses($id)
	{
		$CI =& get_instance();
		return $CI->db->get_where("addresses", ["id" => $id])->row()->name;
	}
}




if ( ! function_exists('studants_addres_count'))
{

	function studants_addres_count($address_id)
	{
		$number = 0;
		$CI =& get_instance();
		
		$studants =  $CI->db->get_where("studants", ["address_id" => $address_id])->result();
	

		foreach ($studants as  $studant) {
			$number++;
		}
		return $number;
	}
}



if ( ! function_exists('subject_name'))
{

	function subject_name($id)
	{
		
		$CI =& get_instance();
		
		return $studants =  $CI->db->get_where("subjects" , ["id" => $id])->row();
	
	}
}


if ( ! function_exists('setting'))
{

	function setting()
	{
		
		$CI =& get_instance();
		
		return $studants =  $CI->db->get("setting")->row();
	
	}
}

?>