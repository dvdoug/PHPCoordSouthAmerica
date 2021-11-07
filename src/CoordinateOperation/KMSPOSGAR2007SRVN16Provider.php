<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class KMSPOSGAR2007SRVN16Provider implements GridProvider
{
    public function provideGrid(): KMSGrid
    {
        return new KMSGrid(__DIR__ . '/../../resources/GEOIDE-Ar16.gri');
    }
}
