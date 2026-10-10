<?php

/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class DATMAGNASIRGAS2018COLGVD2023Provider implements GridProvider
{
    public function provideGrid(): DATHeightGrid
    {
        return new DATHeightGrid(__DIR__ . '/../../resources/QgeoidCOL2023.txt');
    }
}
