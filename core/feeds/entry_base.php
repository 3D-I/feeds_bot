<?php
/**
 *
 * phpBB Feeds Bot
 * @copyright (c) 2016 towen - [towenpa@gmail.com]
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

namespace towen\feeds_bot\core\feeds;

/**
 * Class item_base
 * @package towen\feeds_bot\core\feeds
 */
abstract class item_base {
	/**
	 * @var string
	 */
	protected $title;
	/**
	 * @var string
	 */
	protected $content;
	/**
	 * @var string
	 */
	protected $id;
	/**
	 * @var string
	 */
	protected $link;
	/**
	 * @var string
	 */
	protected $pub_date;

	/**
	 * @return string
	 */
	abstract function title();

	/**
	 * @return string
	 */
	abstract function content();

	/**
	 * @return string
	 */
	abstract function id();

	/**
	 * @return string
	 */
	abstract function link();

	/**
	 * @return string
	 */
	abstract function pub_date();
}
