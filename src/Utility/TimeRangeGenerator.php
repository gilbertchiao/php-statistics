<?php

namespace GilbertChiao\Utility;

/**
 * Class TimeRangeGenerator
 *
 * 產生指定時間內每隔指定秒數之時間範圍
 */
class TimeRangeGenerator
{
    /**
     * 產生指定日期的時間範圍
     *
     * @param string $date
     * @param int $interval interval in seconds
     * @return array
     */
    public static function date(string $date, int $interval): array
    {
        $time = strtotime(date('Y-m-d', strtotime($date)));
        $max = 86400/$interval;

        $ranges = [];
        for ($i=0; $i<$max; $i++) {
            $ranges[$i] = [
                'from' => date('Y-m-d H:i:s', $time + $i*$interval),
                'to' => date('Y-m-d H:i:s', $time + ($i+1)*$interval-1),
            ];
        }

        return $ranges;
    }
}
