<?php
namespace Lzfr\Shortcode\Test;

use Lzfr\Shortcode\ShortcodeGenerator;
use PHPUnit\Framework\TestCase;

/**
 * @test
 */
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

    /**
     * @return void
     * @test
     */
    public function testLength(){
        $generator = new ShortcodeGenerator();
        $code = $generator->generateShortCodeByLength(10);
        $this->assertEquals(10, strlen($code));
    }

    public function testPrefix(){
        $generator = new ShortcodeGenerator();
        $code = $generator->generateShortCodeWithPrefix( 'prefix', 10);

        $this->assertEquals(16, strlen($code));
        $this->assertEquals('prefix', substr($code, 0, 6));
    }
}