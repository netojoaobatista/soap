<?php
require_once 'Topic.php';
require_once 'User.php';

class Service {
	/**
	 * Autenticação do usuário.
	 * @param	User $request Usuário que está utilizando o webservice.
	 */
	public function authentication( User $request ) {
		// TODO: Regras de negócio para validação da autenticação
		if ( $request->getName() !== 'usuario' ||
			 $request->getPswd() !== 'senha' ||
			 $request->getToken() !== sha1( 'token' ) ){
			
			throw new SoapFault( 'AUTH' , 'Não autenticado' );
		}
	}
	
	/**
	 * Recupera os tópicos de notícias.
	 * @param	string $request Data no formato YYYY-MM-DDTHH:MM:SS
	 * @return	array[Topic]
	 */
	public function getNews( $request ) {
		//TODO: Utilizar a model já existente para recuperar as notícias.
		return array( new Topic() , new Topic() );
	}
}