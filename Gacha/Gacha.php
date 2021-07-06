<?php
require_once 'Utility.php';

class Gacha
{
    /**
     * ガチャをひく
     * @param int ガチャID
     * @param int 引く枚数
     * @return array (カードID => 枚数)
     */
    public static function doGacha($gachaId, $number = 1)
    {
        // どのグレードを何回引けばいいか取得
        $gradeList = self::getGachaGrade($gachaId, $number);

        // グレードに対応するガチャを引く
        $result = [];
        foreach ($gradeList as $gradeId => $number) {
            $cardList = self::getCard($gradeId, $number);
            foreach ($cardList as $cardId => $cardNumber) {
                if (isset($result[$cardId])) {
                    $result[$cardId] += $cardNumber;
                } else {
                    $result[$cardId] = $cardNumber;
                }
            }
        }
        return $result;
    }

    /**
     * 当選グレードを決める
     * @param int $gachaId ガチャID
     * @param int $number 引く回数
     * @return array [グレードID => 回数]
     */
    private static function getGachaGrade($gachaId, $number = 1)
    {
        // 指定ガチャIDのグレード一覧を取得
        // 配列で返却される['id' => グレードID, 'rate' => 確率]
        $gradeList = GachaGradeModel::findByGachaId($gachaId);

        // 引くグレードIDと回数を取得
        $result = [];
        for ($i = 0 ; $i < $number ; $i++) {
            // ランダムでグレードを取得
            $grade = Utility::getRandomData($gradeList);
            if (isset($result[$grade['id']])) {
                $result[$grade['id']]++;
            } else {
                $result[$grade['id']] = 1;
            }
        }
        return $result;
    }

    /**
     * ガチャの中身を引く
     * @param int $gradeId ガチャグレードID
     * @param int $number 引く回数
     * @return array [カードID => 枚数]
     */
    private static function getCard($gradeId, $number = 1)
    {
        // ガチャの中身一覧を取得
        // 配列で返却される['card_id' => カードID, 'rate' => 確率]
        $contentsList = GachaContentsModel::findByGradeId($gradeId);

        // 引くカードと枚数を取得
        $result = [];
        for ($i = 0 ; $i < $number ; $i++) {
            // 中身からランダムに1枚取得
            $contents = Utility::getRandomData($contentsList);

            if (isset($result[$contents['card_id']])) {
                $result[$contents['card_id']]++;
            } else {
                $result[$contents['card_id']] = 1;
            }
        }
        return $result;
    }
}
