<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class SessionWrapper extends TestCase {
  public function testSessionWrapper(): void {
    $session = new SessionWrapper();
    $session->user = 'kenzo';
    $this->assertEquals(
      $session->user,
      "kenzo"
    );
  }
}
?>
