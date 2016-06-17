<?php

use PHPUnit\Framework\TestCase;

class 朝昼夜Test extends TestCase {
  public function test0時() {
    $kls = new 朝昼夜(0);
    $this->assertTrue($kls->is深夜());
  }

  public function test3時() {
    $kls = new 朝昼夜(3);
    $this->assertTrue($kls->is深夜());
  }

  public function test5時() {
    $kls = new 朝昼夜(5);
    $this->assertTrue($kls->is夜());
  }

  public function test7時() {
    $kls = new 朝昼夜(7);
    $this->assertTrue($kls->is朝());
  }

  public function test10時() {
    $kls = new 朝昼夜(10);
    $this->assertTrue($kls->is朝());
  }

  public function test12時() {
    $kls = new 朝昼夜(12);
    $this->assertTrue($kls->is昼());
  }

  public function test14時() {
    $kls = new 朝昼夜(14);
    $this->assertTrue($kls->is昼());
  }

  public function test18時() {
    $kls = new 朝昼夜(18);
    $this->assertTrue($kls->is昼());
  }

  public function test23時() {
    $kls = new 朝昼夜(23);
    $this->assertTrue($kls->is深夜());
  }

  public function test26時() {
    $kls = new 朝昼夜(26);
    $this->assertTrue($kls->is深夜());
  }

  public function test29時() {
    $kls = new 朝昼夜(29);
    $this->assertTrue($kls->is夜());
  }

  public function test33時() {
    $kls = new 朝昼夜(33);
    $this->assertFalse($kls->is朝());
    $this->assertFalse($kls->is昼());
    $this->assertFalse($kls->is夜());
    $this->assertFalse($kls->is深夜());
  }
}
