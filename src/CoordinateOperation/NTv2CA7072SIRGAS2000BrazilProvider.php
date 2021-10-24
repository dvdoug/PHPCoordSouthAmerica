<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class NTv2CA7072SIRGAS2000BrazilProvider implements GridProvider
{
    public function provideGrid(): NTv2Grid
    {
        return new NTv2Grid(__DIR__ . '/../../resources/CA7072_003.GSB');
    }
}
