Esqueleto para crição de um web service SOAP em PHP
===================================================

O exemplo utiliza a classe [SoapServer](http://php.net/manual/en/class.soapserver.php), nativa do PHP.

Para consumir o serviço, supondo que ele esteja hospedado em http://127.0.0.3/soap

	<?php
	require_once 'Topic.php';

	//Configura o SOAP client
	$client = new SoapClient( 'http://127.0.0.3/soap/service.wsdl' , array(
		'trace'			=> true,
		'exceptions'	=> true,
		'style'			=> SOAP_DOCUMENT,
		'use'			=> SOAP_LITERAL,
		'soap_version'	=> SOAP_1_1,
		'encoding'		=> 'UTF-8',
		'classmap'		=> array(
			'Topic'			=> 'Topic',
		)
	) );

	//Configura a autenticação
	$client->__setSoapHeaders( new SoapHeader(
		'urn:com.imasters/forum',
		'authentication',
		(object) array(
			'name' => 'usuario',
			'pswd' => 'senha',
			'token' => sha1( 'token' )
		)
	) );

	try {
		//Recupera as notícias
		$news = $client->getNews();
	
		var_dump( $news );
	} catch ( SoapFault $f ) {
		//regras para manipulação do Soap Fault
	}
