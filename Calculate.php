<?php

/**
 * Class Calculate for make simple math calculation.
 *
 * Use method chaining technique.
 */
class Calculate
{
  /**
   * Result variable.
   *
   * @var float
   */
  private $result;

  /**
   * Initialize calculate object and set first operand.
   *
   * @param float|int $number First operand in calculation.
   *
   * @throws Exception Throws when operand not number.
   */
  public function __construct($number = 0)
  {
    $this->validate($number);

    $this->result = $number;
  }

  /**
   * Validate passed number.
   *
   * @param mixed $var Operand for calculation.
   *
   * @throws Exception Throws when operand not number.
   */
  private function validate($var)
  {
    if($var !== 0 && (!is_int($var) && !is_float($var)))
      throw new Exception("Operand must to be number!");
  }

  /**
   * Function for addition.
   *
   * @param float $number Second operand in the addition.
   * @return Calculate $this Current object.
   *
   * @throws Exception Throws when operand not number.
   */
  public function add($number)
  {
    $this->validate($number);
    $this->result = $this->result + $number;
    return $this;
  }

  /**
   * Function for division.
   *
   * @param float $number Second operand of the division.
   * @return Calculate $this Current object.
   *
   * @throws Exception Throws when operand not number or try divide by zero.
   */
  public function divide($number)
  {
    $this->validate($number);

    if($number === 0)
      throw new Exception('Dividing by zero is undefined.');

    $this->result = $this->result / $number;
    return $this;
  }

  /**
   * Just return the result.
   *
   * @return float
   */
  public function getResult()
  {
    return $this->result;
  }

  /**
   * Function for multiplication.
   *
   * @param float $number Second operand of the multiplication.
   * @return Calculate $this Current object.
   *
   * @throws Exception Throws when operand not number.
   */
  public function multiply($number)
  {
    $this->validate($number);
    $this->result = $this->result * $number;
    return $this;
  }

  /**
   * Rounds a float.
   *
   * @param float|int $precision The number of decimal digits to round to.
   * @return Calculate $this Current object.
   *
   * @throws Exception Throws when operand not number.
   */
  public function round($precision = 0)
  {
    if($precision)
      $this->validate($precision);

    $this->result = round($this->result, $precision);
    return $this;
  }

  /**
   * Function for subtraction.
   *
   * @param float $number Second operand in the subtraction.
   * @return Calculate $this Current object.
   *
   * @throws Exception Throws when operand not number.
   */
  public function subtract($number)
  {
    $this->validate($number);
    $this->result = $this->result - $number;
    return $this;
  }
}