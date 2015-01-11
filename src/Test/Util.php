<?php
namespace Tiago\Test;

/**
 * Util stuffs
 * 
 * @author tiagofischer
 */
class Util {
    /**
     * Sum numbers
     *
     * @param mixed $args Array or multiple parameters
     * @return int
     */
    public static function sum() {
        // Via parameters or array
        $args = func_get_args();
        $numArgs = func_num_args();
        if (func_num_args() == 1 && is_array($args[0])) {
            $args = $args[0];
            $numArgs = count($args);
        }

        // Checks
        if (!$numArgs) {
            throw new \InvalidArgumentException("No parameters sent.");
        }
        if ($numArgs == 1) {
            throw new \InvalidArgumentException("Minimum of two parameters is required.");
        }
        foreach ($args as $num) {
            if (!is_numeric($num)) {
                throw new \InvalidArgumentException("Non numeric parameters sent.");
            }
        }

        return array_sum($args);
    }
}