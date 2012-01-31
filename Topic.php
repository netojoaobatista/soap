<?php
class Topic {
	/**
	 * @var	string
	 */
	private $title;
	
	/**
	 * @var	string
	 */
	private $datetime;
	
	/**
	 * @var	string
	 */
	private $content;
	
	/**
	 * @return	string
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * @return	string
	 */
	public function getDatetime() {
		return $this->datetime;
	}

	/**
	 * @return	string
	 */
	public function getContent() {
		return $this->content;
	}

	/**
	 * @param	string $title
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * @param	string $datetime
	 */
	public function setDatetime($datetime) {
		$this->datetime = $datetime;
	}

	/**
	 * @param	string $content
	 */
	public function setContent($content) {
		$this->content = $content;
	}
}