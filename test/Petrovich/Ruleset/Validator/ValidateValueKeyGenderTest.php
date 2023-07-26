<?php
namespace BoShurik\Petrovich\Test\Petrovich\Ruleset;

use PHPUnit\Framework\TestCase;

use BoShurik\Petrovich\Petrovich\Ruleset;

class ValidateValueKeyGenderTest extends TestCase
{
    public function testNoSuchKey()
    {
        $validator = new Ruleset\Validator;

        static::assertTrue($validator->validateValueKeyGender([]));
    }

    public function testRuleIsInvalidType()
    {
        $validator = new Ruleset\Validator;

        static::assertFalse(
            $validator->validateValueKeyGender(
                [
                    Ruleset::VALUE_KEY_GENDER => [],
                ]
            )
        );
    }

    public function testRuleIsValidValue()
    {
        $validator = new Ruleset\Validator;

        foreach (Ruleset::getAvailableGenders() as $gender) {
            static::assertTrue(
                $validator->validateValueKeyGender(
                    [
                        Ruleset::VALUE_KEY_GENDER => $gender,
                    ]
                )
            );
        }
    }

    public function testRuleUnknownValue()
    {
        $validator = new Ruleset\Validator;

        static::assertFalse(
            $validator->validateValueKeyGender(
                [
                    Ruleset::VALUE_KEY_GENDER => 'unknownGender',
                ]
            )
        );
    }
}
