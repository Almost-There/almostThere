<?php
/*
 * Minequery PHP
 * Copyright (C) 2011 Vex Software LLC
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * The Minequery PHP class.
 */
class Minequery {
	/**
	 * @var string name of itself for testing
	 */
	public static $classname = 'Minequery';

	/**
	 * Queries a Minequery server.
	 *
	 * @static
	 * @param string $address The address to the Minequery server.
	 * @param int $port The port of the Minequery server.
	 * @param int $timeout The time given before the connection attempt gives up.
	 * @return array|bool An array on success, FALSE on failure.
	 */
	public static function query($address, $port = 25566, $timeout = 30) {
		$query = array();

		$write = "QUERY\n";

		$class = self::$classname;

		$response = $class->read($address, $port, $errno, $errstr, $timeout, $write, $latency);

		if (false === $response) {
			return false;
		}

		$response = explode("\n", $response);

		// Server port
		$query['serverPort'] = explode(" ", $response[0], 2);
		$query['serverPort'] = $query['serverPort'][1];

		// Player count
		$query['playerCount'] = explode(" ", $response[1], 2);
		$query['playerCount'] = $query['playerCount'][1];

		// Max players
		$query['maxPlayers'] = explode(" ", $response[2], 2);
		$query['maxPlayers'] = $query['maxPlayers'][1];

		// Player list
		list(, $buffer) = explode(" ", $response[3], 2);
		$buffer = trim($buffer, "[] ");
		$query['playerList'] = $buffer ? explode(", ", $buffer) : array();

		$query['latency'] = $latency;

		return $query;
	}

	/**
	 * Queries a Minequery server using JSON.
	 *
	 * @static
	 * @param string $address The address to the Minequery server.
	 * @param int $port The port of the Minequery server.
	 * @param int $timeout The time given before the connection attempt gives up.
	 * @return object|bool A stdClass object on success, FALSE on failure.
	 */
	public static function query_json($address, $port = 25566, $timeout = 30) {
		$beginning_time = microtime(true);

		$socket = @fsockopen($address, $port, $errno, $errstr, $timeout);

		if (!$socket) {
			// Could not establish a connection to the server.
			return false;
		}

		$end_time = microtime(true);

		fwrite($socket, "QUERY_JSON\n");

		$response = "";

		while (!feof($socket)) {
			$response .= fgets($socket, 1024);
		}

		$query = json_decode($response);
		$query->latency = ($end_time - $beginning_time) * 1000;

		return $query;
	}

	/**
	 * Queries a Remote Socket
	 *
	 * @static
	 * @param string $address The address to the Minequery server.
	 * @param int $port The port of the Minequery server.
	 * @param int $errno
	 * @param string $errstr
	 * @param int $timeout The time given before the connection attempt gives up.
	 * @param string $write
	 * @param int $latency
	 * @return string|bool An string on success, FALSE on failure.
	 */
	protected static function read($address, $port, &$errno, &$errstr, $timeout, $write, &$latency) {
		$latency = NULL;

		$beginning_time = microtime(true);

		$socket = @fsockopen($address, $port, $errno, $errstr, $timeout);

		if (!$socket) {
			// Could not establish a connection to the server.
			return false;
		}

		$end_time = microtime(true);

		$latency = ($end_time - $beginning_time) * 1000;

		fwrite($socket, $write);

		$response = "";

		while (!feof($socket)) {
			$response .= fgets($socket, 1024);
		}

		return $response;
	}
}
