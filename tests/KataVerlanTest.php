  <?php

  class KataVerlanTest extends PHPUnit_Framework_TestCase
  {
      public function testAction()
      {
          $this->assertEquals("la sonmai", \wcs\KataVerlan::action("la maison"));
          $this->assertEquals("le chat gris", \wcs\KataVerlan::action("le chat gris"));
          $this->assertEquals("la sonmai prés de la ainefont", \wcs\KataVerlan::action("la maison prés de la fontaine"));
      }

      public function testActionOption()
      {
          $this->assertEquals("la sonmai", \wcs\KataVerlan::action("la maison"));
          $this->assertEquals("le chat gris", \wcs\KataVerlan::action("le chat gris"));
          $this->assertEquals("la sonmai prés de la tainefon", \wcs\KataVerlan::action("la maison prés de la fontaine"));
      }
  }
