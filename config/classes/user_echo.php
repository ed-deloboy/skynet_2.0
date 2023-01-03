<?php

class User
{
    function __construct($arr)
    {
        foreach ($arr as $key => $value) {
            $this->$key = $value;
        }
    }

    public function ed($data)
    {
        return $this->$data;
    }
}