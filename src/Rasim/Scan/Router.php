<?php 

namespace Rasim\Scan;

use Illuminate\Routing\Router as LaravelRouter;
use Illuminate\Support\Facades\Config;

class Router extends LaravelRouter {


    public function scan($uri, $controller, $prefix = false)
    {
        
    $prepended = $controller;

    if ( ! empty($this->groupStack))
    {
      $prepended = $this->prependGroupUses($controller);
    }

    $routable = $this->getInspector()->getRoutable($prepended, $uri);

    
    foreach ($routable as $method => $routes)
    {
            foreach ($routes as $route)
            {
             $this->{$route['verb']}($route['uri'], $controller.'@'.$method);
               if ($prefix === false) {
                   $routeName = str_replace('/', '.',$route['plain']);
                   $this->{$route['verb']}($route['uri'], array(
                       'as' => $routeName,
                       'uses' => $controller.'@'.$method
                   ));
               }else {
                   $routeName = str_replace('/', '.', $prefix . '.' . $route['plain']);
                   $this->{$route['verb']}($route['uri'], array(
                       'as' => $routeName,
                       'uses' => $controller.'@'.$method
                   ));
               }
            }
    }

    $this->addFallthroughRoute($controller, $uri);


    }

}