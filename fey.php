<?php
/*
 CODER : CATUR MAHDI AL FURQON
WEB SCRAPING DATA STATISTIC FEYORRA TOKEN
https://github.com/caturmahdialfurqon
*/
error_reporting(0);
system('clear');
$lb = "\033[1;36m"; $pt = "\033[0;37m"; $r = "\033[1;31m"; $gr = "\033[1;32m"; $y = "\33[1;33m";
function x($x1, $x2, $xdata) {
    $xget = explode($x2, explode($x1, $xdata)[1])[0];
    return $xget;
}

function timer($clk) {
    $ti = time()+$clk;
    while (1) :
    echo "\r                        \r";
    $res = $ti-time();
    if ($res < 1) {
        break;
    }
    echo date('H:i:s', $res);
    sleep(1);
    endwhile;
}

//===================================START====================================//
function cek($cek) {
    $lb = "\033[1;36m"; $pt = "\033[0;37m"; $r = "\033[1;31m"; $gr = "\033[1;32m"; $y = "\33[1;33m";
    $url = "https://feyorra.com/data/statistics";
    $tgs = array("user-agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36", "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9", "accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7",);
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => 1,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_HTTPHEADER => $tgs,
        CURLOPT_SSL_VERIFYPEER => 1,
    ));
    $go = curl_exec($ch);
    curl_close($ch);
    $usdp = x('usd_price":"', '"', $go);
    $ethp = x('"eth_price":"', '"', $go);
    $tslpy = x('"total_supply":"', '"', $go);
    $csply = x('"circulating_supply":"', '"', $go);
    $apy = x('"apy":"', '"', $go);
    $tsa = x('total_staked_amount":"', '"', $go);
    $tsk = x('total_stakers":"', '"}', $go);

    echo "
    $lb ===============================================================
    $gr                 Feyorra Data Statistics
    $lb ===============================================================
    $gr => $pt Usd_price           $r : $pt $usdp
    $gr => $pt Eth_price           $r : $pt $ethp
    $gr => $pt Total_suppl         $r : $lb $tslpy
    $gr => $pt Circulating_supply  $r : $gr $csply
    $gr => $pt Apy                 $r : $y $apy %
    $gr => $pt Total_staked_amount $r : $pt $tsa
    $gr => $pt Total_stakers       $r : $pt $tsk
    $lb ===============================================================
    \n";
}
echo " $y                        FEYORRA TOKEN
$lb ===============================================================
=> $y MENUS :
$lb ===============================================================
$y=> $lb 1. $pt Check data statistics
$y=> $lb 2. $r Exit.
$lb ===============================================================
    \n";
$co = readline("$pt INPUT YOUR CHOICE : $gr ");
function menu() {
    $lb = "\033[1;36m"; $pt = "\033[0;37m"; $r = "\033[1;31m"; $gr = "\033[1;32m"; $y = "\33[1;33m";
    echo " $y                            FEYORRA TOKEN
    $lb ===============================================================
    => $y MENUS :
    $lb ===============================================================
    $y=> $lb 1. $pt Check data statistics
    $y=> $lb 2. $pt Refresh
    $y=> $lb 3. $r Exit.
    $lb ===============================================================
    \n";
    $co = readline("$pt INPUT YOUR CHOICE : $gr ");
    if ($co == 1) {
        system('clear');
        echo "$pt PLEASE WAIT. . .";
        sleep(3);
        system('clear');
        cek($cek);
        echo "\n $pt ENTER 1 BACK TO MENU,$gr CTRL+C $pt TO $r EXIT. \n";
        $weo = readline("$pt INPUT YOUR CHOICE : $gr ");
        if ($weo == 1) {
            system('clear');
            menu();
        } else {
            system('clear');
            echo "$gr Are you sure for exit? $pt ($gr y $y / $r n $pt) \n";
            $ro = readline("$pt => $lb ");
            if ($ro == n) {
            system('clear');
            menu();
        } else {
            system('clear');
            echo "$gr Thanks For Using this Tools :) \n";
            exit(3);
        }
        }
    }
    if ($co == 2) {
        system('clear');
        cek($cek);
        timer(20);
        system('clear');
        menu();
    }
    if ($co == 3) {
        system('clear');
        echo "$gr Thanks For Using this Tools :) \n";
        exit(3);
    }

}
if ($co == 1) {
    system('clear');
    echo "$pt PLEASE WAIT. . .";
    sleep(3);
    system('clear');
    cek($cek);
    echo "\n $pt ENTER 1 BACK TO MENU,$gr CTRL+C $pt TO $r EXIT. \n";
    $weo = readline("$pt INPUT YOUR CHOICE : $gr ");
    if ($weo == 1) {
        system('clear');
        menu();
    } else {
        system('clear');
        echo "$gr Are you sure for exit? $pt ($gr y $y / $r n $pt) \n";
        $ro = readline("$pt => $lb ");
        if ($ro == n) {
            system('clear');
            menu();
        } else {
            system('clear');
            echo "$gr Thanks For Using this Tools :) \n";
            exit(3);
        }
    }
}
if ($co == 2) {
    system('clear');
    echo "$gr Thanks For Using this Tools :) \n";
    exit(3);
}

//===================================END======================================//