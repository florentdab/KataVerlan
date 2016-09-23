  <?php

  class KataVerlanTest extends PHPUnit_Framework_TestCase
  {
      public function testAction()
      {
          $this->assertEquals(true, \wcs\KataVerlan::action("value"));
      }

  }
