<?php 
/**
* GameClass
*/
class Game
{
	private $_blts = array(), $_playerID = 0, $_playerName = '';

	function __construct($data = array())
	{
		$this->setBlts($data['blts']);
		$this->setPlayerID($data['id']);
		$this->setPlayerName($data['name']);
	}

	private function setBlts($blts = array()) {
		if($blts) {
			$this->_blts = $blts;
		}
	}
	private function getBlts() {
		return $this->_blts;
	}
	private function setPlayerID($pid) {
		if($pid) {
			$this->_playerID = $pid;
		}
	}
	private function getPlayerID() {
		return $this->_playerID;
	}
	private function setPlayerName($pn) {
		if($pid) {
			$this->_playerName = $pn;
		}
	}
	private function getPlayerName() {
		return $this->_playerName;
	}

	public function getResults() {
		return $this->getPlayerName();
	}

}




 ?>