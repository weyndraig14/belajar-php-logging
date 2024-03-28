<?php

namespace agung\Belajar\PHP\MVC;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Monolog\Test\TestCase;

class LoggingTest extends TestCase
{
   public function testLogging()
   {
      $logger = new Logger(HandlerTest::class);

      $logger->pushHandler(new StreamHandler("php://stderr"));
      $logger->pushHandler(new StreamHandler(__DIR__ . "/../application.log"));

      $logger->info("Belajar pemograman PHP Logging");
      $logger->info("Selamat datang di programmer zaman now");
      $logger->info("Ini informasi aplikasi logging");

      self::assertNotNull($logger);

   }
}