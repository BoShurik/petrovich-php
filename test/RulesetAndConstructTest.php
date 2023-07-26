<?php
namespace BoShurik\Petrovich\Test;

use PHPUnit\Framework\TestCase;

use BoShurik\Petrovich\Petrovich;

class RulesetAndConstructTest extends TestCase
{
    public function testConstructShouldStoreRuleset()
    {
        $ruleset = new Petrovich\Ruleset([], false);

        $petrovich = new Petrovich($ruleset);

        static::assertSame($ruleset, $petrovich->getRuleset());
    }

    public function testSetterShouldStoreRuleset()
    {
        $rulesetConstruct = new Petrovich\Ruleset([], false);
        $rulesetSetter    = new Petrovich\Ruleset([], false);

        $petrovich = new Petrovich($rulesetConstruct);

        static::assertNotSame($rulesetSetter, $rulesetConstruct);

        $petrovich->setRuleset($rulesetSetter);

        static::assertSame($rulesetSetter, $petrovich->getRuleset());
    }
}
