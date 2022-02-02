<?php

namespace Tests\AdminBundle\Form\DataTransformer\Drill;

use PHPUnit\Framework\TestCase;

class ProblematicTest extends TestCase
{
    private $foo;

    private function bar(array $seeks, array $matchingIndexes)
    {
        $i = 0;

        $this->foo
            ->expects($this->at($i))
            ->method('createFromSeeks');
    }
}
