<?php
namespace Lzfr\Shortcode\Test;

use Lzfr\Shortcode\ShortcodeGenerator;
use PHPUnit\Framework\TestCase;

 class TestShortCode extends TestCase {

     /**
      * @test
      */
    public function ShortCode()
    {
        $generator = new ShortcodeGenerator();
        $code = $generator->generateShortcode();
        $this->assertEquals(6, strlen($code));
    }
}