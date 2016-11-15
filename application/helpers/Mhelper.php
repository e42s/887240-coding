<?php
	function getrealip() {
	    $client  = @$_SERVER['HTTP_CLIENT_IP'];
	    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
	    $remote  = $_SERVER['REMOTE_ADDR'];

	    if($_SERVER["HTTP_CF_CONNECTING_IP"]!='') $ip = $_SERVER["HTTP_CF_CONNECTING_IP"];
	    else {
		    if(filter_var($client, FILTER_VALIDATE_IP)) $ip = $client;
		    elseif(filter_var($forward, FILTER_VALIDATE_IP)) $ip = $forward;
		    else $ip = $remote;
		}
	    return $ip;
	}
?>