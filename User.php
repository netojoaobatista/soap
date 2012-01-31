<?php
class User {
	/**
	 * @var	string
	 */
	private $name;
	
	/**
	 * @var	string
	 */
	private $pswd;
	
	/**
	 * @var	string
	 */
	private $token;
	
	/**
	 * @return	string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @return	string
	 */
	public function getPswd() {
		return $this->pswd;
	}

	/**
	 * @return	string
	 */
	public function getToken() {
		return $this->token;
	}

	/**
	 * @param	string $name
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * @param	string $pswd
	 */
	public function setPswd($pswd) {
		$this->pswd = $pswd;
	}

	/**
	 * @param	string $token
	 */
	public function setToken($token) {
		$this->token = $token;
	}
}