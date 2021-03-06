<?php
/**
 * FloatRange.php
 *
 * @copyright 2017 George D. Cooksey, III
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 */

namespace texdc\range;

/**
 * A range composed of two floats.
 *
 * @author George D. Cooksey, III
 */
final class FloatRange extends AbstractNumericRange
{
    /**
     * @param float $start
     * @param float $end
     */
    public function __construct(float $start, float $end)
    {
        $this->start = $start;
        $this->end   = $end;
    }
}
