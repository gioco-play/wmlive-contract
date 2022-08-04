<?php
declare(strict_types=1);
namespace GiocoPlus\WMLIVE\Contract;
/**
 * 完美真人
 */
interface WMLIVEServiceInterface {

    /**
     * 遊戲啟動
     *
     * @param string $op_code
     * @param string $account
     * @param string $game_code
     * @param string $language
     * @param string $back_url
     * @param string $odd_type
     * @return mixed
     */
    function gameLaunch(string $op_code, string $account, string $game_code, string $language, string $back_url = null, string $odd_type = null);

    /**
     * 遊戲詳情
     * @param string $op_code
     * @param string $bet_id
     * @return mixed
     */
    function gameDetail(string $op_code, string $bet_id);

    /**
     * 抓取遊戲紀錄
     *
     * @param string $op_code
     * @param integer $past_minutes
     * @param string $cache_key
     * @return mixed
     */
    function betLogGrabber(string $op_code, int $past_minutes, string $cache_key);

    /**
     * 全營商 抓取遊戲紀錄
     *
     * @param integer $past_minutes
     * @return mixed
     */
    function betLogGrabberAll(int $past_minutes);

    /**
     * 營商帳號轉換為遊戲商帳號
     * @param string $op_code
     * @param array $vendor
     * @param string $player_name
     * @return mixed
     */
    function accountToVendor(string $op_code, array $vendor, string $player_name);

    /**
     * 遊戲商帳號轉換為營商帳號
     * @param string $vendor_account
     * @return mixed
     */
    function accountToOperator(string $vendor_account);
}

