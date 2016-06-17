<?php

class 朝昼夜Exception extends Exception {}

class 朝昼夜 {
  protected $hour;

  public function __construct($hour) {
    if ($hour > 29) {
      $this->hour = -1;
    } else {
      $this->hour = $hour < 24 ? $hour : $hour - 24;
    }
  }

  public function is朝() {
    return 6 < $this->hour && $this->hour <= 11;
  }

  public function is昼() {
    return 11 < $this->hour && $this->hour <= 18;
  }

  public function is夜() {
    return (
      (18 < $this->hour && $this->hour < 23) ||
      (3 < $this->hour && $this->hour <= 6)
    );
  }

  public function is深夜() {
    return (
      (23 <= $this->hour && $this->hour <= 24) ||
      (0 <= $this->hour && $this->hour <= 3)
    );
  }
}
