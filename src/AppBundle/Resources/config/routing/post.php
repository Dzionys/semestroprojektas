<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('post_index', new Route(
    '/',
    array('_controller' => 'AppBundle:Post:index'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('post_show', new Route(
    '/{id}/show',
    array('_controller' => 'AppBundle:Post:show'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('post_new', new Route(
    '/new',
    array('_controller' => 'AppBundle:Post:new'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('post_edit', new Route(
    '/{id}/edit',
    array('_controller' => 'AppBundle:Post:edit'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('post_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'AppBundle:Post:delete'),
    array(),
    array(),
    '',
    array(),
    array('DELETE')
));

return $collection;
