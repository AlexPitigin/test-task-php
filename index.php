<?php

/**
 * Class Main for bootstrap app.
 */
class Main
{
  /**
   * Primitive function for load dependencies.
   */
  private static function autoloader()
  {
    include './Calculate.php';
  }

  /**
   * Create and bootstrap app.
   */
  public static function bootstrap()
  {
    self::autoloader();

    try
    {
      $calculator = new Calculate();

      $calculator->subtract(20)
        ->add(20);

      if ($calculator->getResult() !== 0)
        $calculator->add(42);

      echo $calculator->getResult() . "\n";
    }
    catch (Exception $ex)
    {
      echo $ex->getMessage() . "\n";
    }
  }
}
Main::bootstrap();
