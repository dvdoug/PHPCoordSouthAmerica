<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class NTv2SAD6996SIRGAS2000BrazilProvider implements GridProvider
{
    public function provideGrid(): NTv2Grid
    {
        return new NTv2Grid(__DIR__ . '/../../resources/SAD96_003.GSB');
    }
}
