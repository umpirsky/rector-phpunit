<?php

namespace Tests\AdminBundle\Form\DataTransformer\Drill;

use PHPUnit\Framework\TestCase;

class ProblematicTest extends TestCase
{
    public function testSuccessfulBuildFoundEntity(): void
    {
        $entity = $this->createMock(TestCase::class);
        $entity->expects(self::once())->method('getId')->willReturn(1);
    }
}
