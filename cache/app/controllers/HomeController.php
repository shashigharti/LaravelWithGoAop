<?php



class HomeController__AopProxied extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		
	
		
		return View::make('hello');
	}

}

class HomeController extends HomeController__AopProxied implements \Go\Aop\Proxy
{


    /**
     *Property was created automatically, do not change it manually
     */
    private static $__joinPoints = array();
    
    
    public function showWelcome()
    {
        return self::$__joinPoints['method:showWelcome']->__invoke($this);
    }
    
}
\Go\Proxy\ClassProxy::injectJoinPoints('HomeController', unserialize('a:1:{s:6:"method";a:1:{s:11:"showWelcome";a:1:{i:0;C:40:"Go\\Aop\\Framework\\MethodBeforeInterceptor":133:{a:1:{s:12:"adviceMethod";a:3:{s:5:"scope";s:6:"aspect";s:6:"method";s:21:"beforeMethodExecution";s:6:"aspect";s:13:"MonitorAspect";}}}}}}'));
