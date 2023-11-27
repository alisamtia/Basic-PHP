<?php
namespace core;
class container{
    protected $bindings=[];
    public function bind($key,$value){
        $this->bindings[$key]=$value;
    }
    public function resolve($key){
        if(array_key_exists($key,$this->bindings)){
            $resolver=$this->bindings[$key];
            return call_user_func($resolver);
        }else{
            throw new \Exception("The binding $key Does not found!!");
        };
    }
}