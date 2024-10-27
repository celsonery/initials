<?php

namespace Unit;

use CelsoNery\Initials\Services\Traits\Initials;
use PHPUnit\Framework\TestCase;

class InitialsTest extends TestCase
{
    use Initials;

    public function testWithoutName()
    {
        $this->assertEquals("The name is necessary", $this->getInitials(''));
    }

    public function testWithOnlyOneName()
    {
        $this->assertEquals('C', $this->getInitials('Celso'));
    }

    public function testWithOnlyOneNameAndSpaceBefore()
    {
        $this->assertEquals('C', $this->getInitials(' Celso'));
    }

    public function testWithOnlyOneNameAndSpacesBefore()
    {
        $this->assertEquals('C', $this->getInitials('                Celso'));
    }

    public function testWithOnlyOneNameAndSpaceAfter()
    {
        $this->assertEquals('C', $this->getInitials('Celso '));
    }

    public function testWithOnlyOneNameAndSpacesAfter()
    {
        $this->assertEquals('C', $this->getInitials('Celso     '));
    }

    public function testWithOnlyOneNameAndSpaceBoth()
    {
        $this->assertEquals('C', $this->getInitials(' Celso '));
    }

    public function testWithOnlyOneNameAndSpacesBoth()
    {
        $this->assertEquals('C', $this->getInitials('      Celso      '));
    }

    public function testWithLastName()
    {
        $this->assertEquals('CR', $this->getInitials('Celso Ribeiro'));
    }

    public function testWithFullName()
    {
        $this->assertEquals('CN', $this->getInitials('Celso Nery Pereira Ribeiro'));
    }

    public function testWithFullNameAndSpaceBefore()
    {
        $this->assertEquals('CN', $this->getInitials(' Celso Nery Pereira Ribeiro'));
    }

    public function testWithFullNameAndSpaceAfter()
    {
        $this->assertEquals('CN', $this->getInitials('Celso Nery Pereira Ribeiro '));
    }

    public function testWithFullNameAndSpaceBoth()
    {
        $this->assertEquals('CN', $this->getInitials(' Celso Nery Pereira Ribeiro '));
    }

    public function testWithFullNameInLowerCase()
    {
        $this->assertEquals('CN', $this->getInitials('celso nery pereira ribeiro'));
    }

    public function testWithFullNameInUpperCase()
    {
        $this->assertEquals('CN', $this->getInitials('CELSO NERY PEREIRA RIBEIRO'));
    }
}
