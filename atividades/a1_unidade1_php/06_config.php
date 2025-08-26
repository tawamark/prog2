<?php
declare(strict_types=1);

class Config {
    protected array $parametros = [];
    public function __construct(array $parametros=[]){ $this->parametros = $parametros; }
}
class AppConfig extends Config {
    public function set(string $k, mixed $v): void { $this->parametros[$k] = $v; }
    public function get(string $k, mixed $default=null): mixed { return $this->parametros[$k] ?? $default; }
}
class UserConfig extends Config {
    public function merge(array $dados): void { $this->parametros = array_replace($this->parametros, $dados); }
    public function all(): array { return $this->parametros; }
}
