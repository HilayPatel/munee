<?php
/**
 * Munee: Optimising Your Assets
 *
 * @copyright Cody Lundquist 2012
 * @license http://opensource.org/licenses/mit-license.php
 */

// Include the bootstrap file - Change this if you want to move the library out of webroot
require __DIR__ . '/config/bootstrap.php';

// Echo out the response
echo munee\Dispatcher::run(new munee\Request());