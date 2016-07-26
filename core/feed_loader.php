<?php
/**
 *
 * phpBB Feeds Bot
 * @copyright (c) 2016 towen - [towenpa@gmail.com]
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

namespace towen\feeds_bot\core;

/**
 * Class feed_loader
 * @package towen\feeds_bot\core
 */
class feed_loader {
	/**
	 * @param $url
	 *
	 * @return \SimpleXMLElement
	 */
	public function getXML($url) {
		return @simplexml_load_file($url);
	}
}