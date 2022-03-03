<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require __DIR__ . '/../src/DisappointmentPanda.php';

class PandaTest extends TestCase
{
  public function testRandomAdvice_WithDefaultAdviceEntries_ReturnsNotNull()
  {
       $panda = new DisappointmentPanda();
       $this->assertNotNull($panda->getAdvice());
  }

  public function testAdviceArray_WithDefaultEntries_ReturnsCountOf5()
  {
       $panda = new DisappointmentPanda();
       $this->assertCount(5, $panda->advice);
  }

  public function testAddAdvice_WithNewAdvice_ReturnsCountOf6()
  {
       $panda = new DisappointmentPanda();
       $panda->addAdvice('Be excellent to each other');
       //Fill in the last line here!!
       $this->assertCount(6, $panda->advice);
  }  
}
