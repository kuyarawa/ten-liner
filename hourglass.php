<?php
class Star {
    public function __construct() {$this->bintang0();}
    var $limit = 200;
    public function __call($method, $_) {
        $count = str_replace('bintang', '', $method); $star = str_pad(substr(str_pad('', $this->limit, "*", STR_PAD_BOTH), $count * 2 < $this->limit ? $count * 2 : ($this->limit % 2 != 0 ? (CEIL($this->limit / 2) * 2 - $count - 2) * 2 : (CEIL($this->limit / 2) * 2 - $count - 1) * 2)), $this->limit, " ", STR_PAD_BOTH);
        echo "<pre>$star</pre>";
        if ($this->limit > $count + 1) $this->{"bintang" . ++$count}(); else die();
    }
}
new Star;
