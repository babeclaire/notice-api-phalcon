<?php
// Define your routes here
// Retrieves all notices
$router = $di->getRouter();
$router->addGet('/notice', array(
	'controller' => 'notice',
	'action' => 'list',
));
// Searches for notices with $title in their title
$router->addGet('/notice/{title}', array(
	'controller' => 'notice',
	'action' => 'search',
));
// Retrieves notices based on primary key
$router->addGet('/notice/{id:[0-9]+}', array(
	'controller' => 'notice',
	'action' => 'readone',
));
// Adds a new notice with the method post
$router->addPost('/notice', array(
	'controller' => 'notice',
	'action' => 'create',
));
// Updates notice based on primary key
$router->addPut('/notice/{id:[0-9]+}', array(
	'controller' => 'notice',
	'action' => 'update',
));
// Delete notice based on primary key
$router->addDelete('/notice/{id:[0-9]+}', array(
	'controller' => 'notice',
	'action' => 'delete',
));
// Delete notice based on primary key with the softdelete
$router->addPut('/noticedel/{id:[0-9]+}', array(
	'controller' => 'notice',
	'action' => 'deletesoft',
));
$router->handle();
