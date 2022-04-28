<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class RequestTest extends TestCase {
  public function testSetParams(): void {
    $request = new Request();
    $request->setParams("id", 4);
    $this->assertEquals($request->getParam("id"), 4);
  }

  public function testSetMultipleParams(): void {
    $request = new Request();
    $request->setParams("id", 4);
    $request->setParams('name', 'bob');
    $this->assertEquals($request->getParams(), ['id' => 4, 'name' => 'bob']);
  }
}
 ?>
