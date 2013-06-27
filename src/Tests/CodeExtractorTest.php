<?php

namespace Tests;

use CodeExtractor;

class CodeExtractorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider urlProvider
     */
    public function testSimpleUrl($expected, $actual)
    {
        $this->assertEquals($expected, CodeExtractor::extract($actual));
    }

    public function urlProvider()
    {
        return array(
            array('QH2-TGUlwu4', 'QH2-TGUlwu4'),
            array('QH2-TGUlwu4', 'http://www.youtube.com/watch?v=QH2-TGUlwu4'),
            array('QH2-TGUlwu4', 'http://youtu.be/QH2-TGUlwu4'),
        );
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testException()
    {
        CodeExtractor::extract('http://www.youtube.com/');
    }
}
