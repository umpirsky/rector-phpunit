<?php

namespace Tests\AdminBundle\Form\DataTransformer\Drill;

use PHPUnit\Framework\TestCase;

class ProblematicTest extends TestCase
{
    private $foo;

    public function barTest()
    {
        $i = 0;

        $this->foo
            ->expects($this->at($i))
            ->method('createFromSeeks')
            ->willReturn(1);
    }
}
