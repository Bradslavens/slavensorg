<?php

$config=array();
// email config
		
		// godaddy settings
		$config['protocol'] = 'sendmail';
		$config['mailpath'] = '/usr/sbin/sendmail';
		$config['smpt_host'] = 'ssl://p3plcpnl0707.prod.phx3.secureserver.net';
		$config['smtp_user'] = 'agents_wanted@srsample.us';
		$config['smtp_pass'] = 'p3nT@gon8';
		$config['smtp_port'] = '465';
		$config['mailtype'] = 'html';


		// google settings 
		// $config['protocol'] = 'smtp';
		// $config['smpt_host'] = 'ssl://smtp.gmail.com';
		// $config['smtp_user'] = 'bradslavens@gmail.com';
		// $config['smtp_pass'] = '76wrongWay';
		// $config['smtp_port'] = '465';
		// $config['mailtype'] = 'html';

		$config['newline']="\r\n"; 
		$config['charset'] = 'utf-8';
		$config['wordwrap'] = TRUE;
