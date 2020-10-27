<?php
require_once "./PigLatin.php";
use PHPUnit\Framework\TestCase;

class PigLatinTest extends TestCase
{

    public function testWordBeginningWithP()
    {
        $this->assertEquals("igpay", PigLatin::pigify("pig"));
    }

    public function testWordBeginningWithK()
    {
        $this->assertEquals("eepkay", PigLatin::pigify("keep"));
    }

    public function testWordBeginningWithY()
    {
        $this->assertEquals("ellowyay", PigLatin::pigify("yellow"));
    }

    public function testWordBeginningWithX()
    {
        $this->assertEquals("enonxay", PigLatin::pigify("xenon"));
    }

    public function testWordBeginningWithA()
    {
        $this->assertEquals("appleay", PigLatin::pigify("apple"));
    }

    public function testWordBeginningWithE()
    {
        $this->assertEquals("earay", PigLatin::pigify("ear"));
    }

    public function testWordBeginningWithI()
    {
        $this->assertEquals("iglooay", PigLatin::pigify("igloo"));
    }

    public function testWordBeginningWithO()
    {
        $this->assertEquals("objectay", PigLatin::pigify("object"));
    }

    public function testWordBeginningWithU()
    {
        $this->assertEquals("underay", PigLatin::pigify("under"));
    }


    public function testWordBeginningWithQWithoutAFollowingU()
    {
        $this->assertEquals("atqay", PigLatin::pigify("qat"));
    }


    public function testWordBeginningWithCh()
    {
        $this->assertEquals("airchay", PigLatin::pigify("chair"));
    }

    public function testWordBeginningWithQu()
    {
        $this->assertEquals("eenquay", PigLatin::pigify("queen"));
    }

    public function testWordBeginningWithQuAndAPrecedingConsonant()
    {
        $this->assertEquals("aresquay", PigLatin::pigify("square"));
    }

    public function testWordBeginningWithTh()
    {
        $this->assertEquals("erapythay", PigLatin::pigify("therapy"));
    }

    public function testWordBeginningWithThr()
    {
        $this->assertEquals("ushthray", PigLatin::pigify("thrush"));
    }

    public function testWordBeginningWithSch()
    {
        $this->assertEquals("oolschay", PigLatin::pigify("school"));
    }

    public function testWordBeginningWithYt()
    {
        $this->assertEquals("yttriaay", PigLatin::pigify("yttria"));
    }

    public function testWordBeginningWithXr()
    {
        $this->assertEquals("xrayay", PigLatin::pigify("xray"));
    }

    public function testIsWordPigLatin()
    {
        $this->assertTrue(true, PigLatin::isWordPigLatin("appleay"));
    }
}

?>