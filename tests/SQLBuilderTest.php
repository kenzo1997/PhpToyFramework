<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class SQLBuilderTest extends TestCase {
    public function testSelectAllFromTable(): void {
      $sql = new SQLBuilder();
      $this->assertEquals(
        $sql->SELECT('users')->go(),
        "SELECT * FROM users"
      );
    }

    public function testSelectAllDistinctFromTable(): void {
      $sql = new SQLBuilder();
      $this->assertEquals(
        $sql->SELECT('users', '*', true)->go(),
        "SELECT DISTINCT * FROM users"
      );
    }

    public function testSelectColumsFromTable(): void {
      $sql = new SQLBuilder();
      $this->assertEquals(
        $sql->SELECT('users', ['name', 'age', 'weight', 'height'])->go(),
        "SELECT name, age, weight, height FROM users"
      );
    }

    //---------
    public function testInsertStatement(): void {
      $sql = new SQLBuilder();

      $this->assertEquals(
        $sql->INSERT('users', [
          'name' => 'bob',
          'age' => 12,
          'weight' => 250,
          'height' => 122
        ])->go(),
        "INSERT INTO users(name, age, weight, height) VALUES (bob, 12, 250, 122)"
      );
    }
}
?>
