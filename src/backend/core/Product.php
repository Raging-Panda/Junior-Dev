<?php

class Product extends QueryBuilder
{
    private $table_name = 'products';

    function __construct()
    {
        parent::__construct($this->table_name);
    }

    public function getAll()
    {
        return $this->select(['*'])->get();
    }
};
