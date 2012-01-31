<?php
require_once 'Service.php';
require_once 'User.php';

$server = new SoapServer( 'service.wsdl'  , array(
	'trace'			=> true,
	'exceptions'	=> true,
	'style'			=> SOAP_DOCUMENT,
	'use'			=> SOAP_LITERAL,
	'soap_version'	=> SOAP_1_1,
	'encoding'		=> 'UTF-8',
	'classmap'		=> array(
		'User'		=> 'User',
	)
) );

$server->setObject( new Service() );
$server->handle();
