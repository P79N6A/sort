<?php
declare(strict_types=1);

final class MergeSort
{
    public static function sort($source): array
    {
        $length = count($source);
        if ($length <= 1) {
            return $source;
        }

        $mid = intval($length/2);
        $aArr = array_slice($source, 0, $mid);
        $bArr = array_slice($source, $mid);

        return self::merge(self::sort($aArr), self::sort($bArr));
    }

    private static function merge($aArr, $bArr): array
    {
        $result = [];

        while (count($aArr) > 0 && count($bArr) > 0) {
            if ($aArr[0] > $bArr[0]) {
                $result[] = $bArr[0];
                $bArr = array_slice($bArr, 1);
            } else {
                $result[] = $aArr[0];
                $aArr = array_slice($aArr, 1);
            }
        }

        while (count($aArr) > 0) {
            $result[] = $aArr[0];
            $aArr = array_slice($aArr, 1);
        }

        while (count($bArr) > 0) {
            $result[] = $bArr[0];
            $bArr = array_slice($bArr, 1);
        }

        return $result;
    }
}