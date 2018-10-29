<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class SortTest extends TestCase
{
    public function case(): array
    {
        return [2,8,3,9,10,4,6,5,1,7];
    }

    public function result(): array
    {
        return [1,2,3,4,5,6,7,8,9,10];
    }

    public function testMergeSortIsRigth(): void
    {
        $this->assertEquals(
            $this->result(),
            MergeSort::sort($this->case())
        );
    }
}