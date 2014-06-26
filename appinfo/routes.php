<?php
/**
 * ownCloud - passman
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Sander Brand <brantje@gmail.com>
 * @copyright Sander Brand 2014
 */

namespace OCA\Passman;

/**
 * Create your routes in here. The name is the lowercase name of the controller
 * without the controller part, the stuff after the hash is the method.
 * e.g. page#index -> PageController->index()
 *
 * The controller class has to be registered in the application.php file since
 * it's instantiated in there
 */
use \OCP\AppFramework\App;

use \OCA\Passman\AppInfo\Application;
$application = new Application();

$application->registerRoutes($this, array(

'routes' => array(
	array('name' => 'page#index', 'url' => '/', 'verb' => 'GET'),
	
	array('name' => 'folder_api#index', 'url' => '/api/v1/folders', 'verb' => 'GET'),
	array('name' => 'folder_api#create', 'url' => '/api/v1/folders', 'verb' => 'POST'),
	array('name' => 'folder_api#update', 'url' => '/api/v1/folders/{folderId}', 'verb' => 'PUT'),
	array('name' => 'folder_api#delete', 'url' => '/api/v1/folders/{folderId}', 'verb' => 'DELETE'),
)));
