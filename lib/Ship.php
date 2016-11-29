<?php
class Ship {
	private $name;
	private $weaponPower = 0;
	private $jediFactor = 0;
	private $strength = 0;
	public function sayHello() {
		echo 'Hello!';
	}
	
	/**
	 *
	 * @param boolean $useShortFormat        	
	 */
	public function getNameAndSpecs($useShortFormat = FALSE) {
		if ($useShortFormat) {
			return sprintf ( '%s: %s/%s/%s', $this->name, $this->weaponPower, $this->jediFactor, $this->strength );
		} else {
			return sprintf ( '%s: w:%s, j:%s, s:%s', $this->name, $this->weaponPower, $this->jediFactor, $this->strength );
		}
	}
	/**
	 *
	 * @param Ship $givenShip        	
	 */
	public function doesGivenShipHaveMoreStrength($givenShip) {
		return $givenShip->strength > $this->strength;
	}
	public function getName() {
		return $this->name;
	}
	public function setName($name) {
		$this->name = $name;
		return $this;
	}
	/**
	 *
	 * @return integer
	 */
	public function getStrength() {
		return $this->strength;
	}
	/**
	 *
	 * @param integer $strength        	
	 */
	public function setStrength($strength) {
		if (! is_numeric ( $strength )) {
			throw new \Exception ( 'Strength must be a number, duh!' );
		}
		$this->strength = $strength;
	}
	public function getWeaponPower() {
		return $this->weaponPower;
	}
	public function setWeaponPower($weaponPower) {
		$this->weaponPower = $weaponPower;
		return $this;
	}
	public function getJediFactor() {
		return $this->jediFactor;
	}
	public function setJediFactor($jediFactor) {
		$this->jediFactor = $jediFactor;
		return $this;
	}
}