<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class ControllerTest extends TestCase {
  /*
  * @doesNotPerformAssertions
  */
  public function test(): void {
    $stub = $this->getMockForAbstractClass('Controller');
    $stub->setMiddelware('Logger');
    $this->assertTrue(true);
  }
}
?>
