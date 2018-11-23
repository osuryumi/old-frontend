<?php

class Schiavo {
	/**
	 * Sends a message to the channel #bunker.
	 *
	 * @param string $message
	 */
	static function Bunk($message) {
		return false;
	}

	static function CM($message) {
		return false;
	}
}

// Can a static function call a private function in the same class?
// I don't remember. And don't wanna test to figure it out. So fuck it.
function __schiavoCall($c, $message) {
	global $schiavoConfig;
	return false;
}
