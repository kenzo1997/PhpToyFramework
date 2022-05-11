<?php
declare(strict_types=1);
namespace lib;

use \lib\controller\{Request, Response};

/**
 * Core
 *
 * @package
 * @author   Kenzo Coenaerts
 */
class Core {
  private $router;
  private $request;
  private $response;

  public function __construct($router) {
    $this->router = $router;
    $this->request = new Request();
    $this->response = new Response();
  }

  /**
  * staring point of the project
  **/
  public function start() {
    $uri = explode('/', $_SERVER['REQUEST_URI']);
    $path = $uri[1];

    $controller = $router->get($path);
    $params = $router->getRouteParams();

    array_shift($uri);
    array_shift($uri);

    for($i = 0; $i < count($uri); $i++){
      $this->request->setParams(
        $params[$i],
        $uri[$i]
      );
    }

    $this->methodCaller($controller, $_SERVER['REQUEST_METHOD'], $uri);
  }

  /**
  * checks what crud method of a giving controller to execute depending on the request method
  *
  * @param controller  the current controller
  * @param RequestType is the request method that needs to be checked
  * @param params
  */
   private function methodCaller($controller, $RequestType, $params) {
     switch($RequestType) {
       case 'GET':
         $params == []
           ? $controller->getAll($this->request, $this->response)
           : $controller->get($this->request, $this->response);
       break;
       case 'POST':
         $controller->add($this->request, $this->response);
       break;
       case 'PUT':
         $controller->update($this->request, $this->response);
       break;
       case 'delete':
         $controller->remove($this->request, $this->response);
       break;
     }
   }
}
?>
