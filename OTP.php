<?php
/*
 * PHP OTP Class
 * https://github.com/itstaha/OTP-Generator/
*/
class OTP {
    private function unique() {
        $unique = uniqid();
        $unique = preg_replace('/([a-zA-Z])/','', $unique);
        return $unique;
    }
    private function shuffle($str) {
        $shuffle = str_shuffle($str);
        return $shuffle;
    }
    private function mix($items,$n) {
        $num = 0;
        foreach($items as $item) {
            foreach($item as $number) {
                $num .= $number;
            }
        }
        $shuffle = $this->shuffle($num);
        return substr($shuffle, 0, $n);
    }
    public function genrate($n) {
        $list = [];
        $unique_id = $this->unique();
        for($i=1;$i<=$n;$i++) {
            $first = $this->shuffle($unique_id);
            $second = $this->shuffle(time());
            $arr = [$first,$second];
            array_push($list,$arr);
        }
        $mix = $this->mix($list,$n);
        return $mix;
    }
}
