<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use NumberCheck\Validator;

class ValidatorTest extends TestCase {
  private Validator $validator;

  protected function setUp(): void {
    $this->validator = new Validator();
  }

  public function test有効な数字はtrueを返す(): void {
    $this->assertTrue($this->validator->isValidNumber('1'));
    $this->assertTrue($this->validator->isValidNumber('9'));
  }

  public function test有効でない数字はfalseを返す(): void {
    $this->assertFalse($this->validator->isValidNumber('0'));
    $this->assertFalse($this->validator->isValidNumber('10'));
  }

  public function test有効でない値はfalseを返す(): void {
    $this->assertFalse($this->validator->isValidNumber(''));
    $this->assertFalse($this->validator->isValidNumber('abc'));
  }

  public function test引数の数値が一致すればtrueを返す(): void {
    $this->assertTrue($this->validator->isCorrect(1, 1));
  }

  public function test引数の数値が一致しない場合はfalseを返す(): void {
    $this->assertFalse($this->validator->isCorrect(1, 2));
  }
}