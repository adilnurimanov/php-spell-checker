<?php
class SpellCheckerTest extends PHPUnit_Framework_TestCase
{
    protected $checker;

    public function setUp()
    {
        $this->checker = new SpellChecker();
    }

    public function testInvalidLanguage()
    {
        try {
            $this->checker->spellCheckString([], '');
        }
        catch (Exception $e) {
            $this->assertEquals("Language must be string", $e->getMessage());
            return;
        }
        $this->fail('An expected exception has not been raised.');
    }

    public function testInvalidContent()
    {
        try {
            $this->checker->spellCheckString(SpellChecker::LANG_EN, []);
        }
        catch (Exception $e) {
            $this->assertEquals("Content must be string", $e->getMessage());
            return;
        }
        $this->fail('An expected exception has not been raised.');
    }

    public function testEn()
    {
        $checker = new SpellChecker();
        $this->assertEquals(['iinnnvalid'], $this->checker->spellCheckString(SpellChecker::LANG_EN, 'abracadabra valid iinnnvalid'));
        $this->assertEquals(['Ssome', 'coool'], $this->checker->spellCheckString(SpellChecker::LANG_EN, 'Ssome word in this string is not coool'));
        $this->assertEquals([], $this->checker->spellCheckString(SpellChecker::LANG_EN, 'It is nice string'));
    }

    public function testRu()
    {
        $checker = new SpellChecker();
        $this->assertEquals(['обшибки'], $this->checker->spellCheckString(SpellChecker::LANG_RU, 'в этой строке есть обшибки'));
        $this->assertEquals(['зздесь', 'онни'], $this->checker->spellCheckString(SpellChecker::LANG_RU, 'И зздесь онни есть'));
        $this->assertEquals([], $this->checker->spellCheckString(SpellChecker::LANG_RU, 'А это строка без ошибок'));
    }
}