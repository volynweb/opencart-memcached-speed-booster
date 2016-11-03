<?php

/**
 * LICENSE
 *
 * This source file is subject to the GNU General Public License, Version 3
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @category   OpenCart
 * @package    Memcached Speed Booster for OpenCart 2.0
 * @copyright  Copyright (c) 2015 Eugene Lifescale by OpenCart Ukrainian Community (http://opencart-ukraine.tumblr.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU General Public License, Version 3
 */

namespace Cache;

class Null {

    public function __construct($expire) {}

    public function set($key, $value) {
        return true;
    }

    public function get($key) {
        return false;
    }

    public function delete($key) {
        return false;
    }
}
