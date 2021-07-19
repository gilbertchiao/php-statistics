<?php

namespace GilbertChiao\Utility;

/**
 * Class Statistics
 * Simple statistics library.
 *
 * @package GilbertChiao\Statistics
 * @see https://blog.poettner.de/2011/06/09/simple-statistics-with-php/
 */
class Statistics
{
    /**
     * Median 中位數
     *
     * @param $Array
     * @return float|int|mixed
     */
    public static function Median($Array) {
        return self::Q2($Array);
    }

    /**
     * Lower quartile / First quartile 第一四分位數
     *
     * @param $Array
     * @return float|int|mixed
     */
    public static function Q1($Array) {
        return self::Quartile($Array, 0.25);
    }

    /**
     * Second quartile 第二四分位數
     *
     * @param $Array
     * @return float|int|mixed
     */
    public static function Q2($Array) {
        return self::Quartile($Array, 0.5);
    }

    /**
     * Upper quartile / Third quartile 第三四分位數
     *
     * @param $Array
     * @return float|int|mixed
     */
    public static function Q3($Array) {
        return self::Quartile($Array, 0.75);
    }

    /**
     * Quantile 分位數
     *
     * @param $Array
     * @param $Quartile
     * @return float|int|mixed
     */
    public static function Quartile($Array, $Quartile) {
        sort($Array);
        $pos = (count($Array) - 1) * $Quartile;

        $base = floor($pos);
        $rest = $pos - $base;

        if( isset($Array[$base+1]) ) {
            return $Array[$base] + $rest * ($Array[$base+1] - $Array[$base]);
        } else {
            return $Array[$base];
        }
    }

    /**
     * Mean 平均數
     *
     * @param $Array
     * @return float|int
     */
    public static function Mean($Array)
    {
        return self::Average($Array);
    }

    /**
     * Average 平均值
     *
     * @param $Array
     * @return float|int
     */
    public static function Average($Array) {
        return array_sum($Array) / count($Array);
    }

    /**
     * Standard Deviation 標準差
     *
     * @param $Array
     * @return false|float
     */
    public static function SD($Array) {
        return self::StandardDeviation($Array);
    }

    /**
     * Standard Deviation 標準差
     *
     * @param $Array
     * @return false|float
     */
    public static function StandardDeviation($Array) {
        if (count($Array) < 2) {
            return false;
        }

        $avg = self::Average($Array);

        $sum = 0;
        foreach($Array as $value) {
            $sum += pow($value - $avg, 2);
        }

        return sqrt((1 / (count($Array) - 1)) * $sum);
    }
}
