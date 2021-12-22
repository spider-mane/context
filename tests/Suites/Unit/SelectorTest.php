<?php

declare(strict_types=1);

namespace Tests\Suites\Unit;

use Tests\Support\TestCase;
use WebTheory\Context\Selector;

class SelectorTest extends TestCase
{
    protected Selector $contextView;

    public function setUp(): void
    {
        $this->contextView = new Selector([], []);
    }

    /**
     * @test
     */
    public function it_works()
    {
        //
    }
}
