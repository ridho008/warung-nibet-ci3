<?php

function cekSession()
{
	$ci = get_instance();
	if(!$ci->session->userdata('username')) {
		redirect('auth');
	}
}