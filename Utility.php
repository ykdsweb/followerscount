<?php
class Utility
{
    /**
     * 配列の中から確率を使いランダムで1件取得する
     * @param array データ配列
     * @param string 確率を表す連想配列名(デフォルトは"rate")
     */
    public static function getRandomData(array $array, $keyName = 'rate')
    {
        // 確率の合計値を求める
        $max = 0;
        foreach ($array as $record) {
            $max += $record[$keyName];
        }

        // 合計値までのランダム値を求める
        $rate = mt_rand(0, $max-1);

        // ランダムの値がどれにあたるか調べる
        foreach ($array as $record) {
            $max -= $record[$keyName];
            if ($max <= $rate) {
                return $record;
            }
        }
        throw new Exception('ここには来ないはず');
    }
}
