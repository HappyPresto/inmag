<?php

class DB
{
    public function __construct()
    {
        mysql_connect('localhost', 'root', '');
        mysql_select_db('news');
    }

    public function queryAll()
    {

    }

    public function queryOne()
    {

    }

    public function query($sql)
    {
        $res=mysql_query($sql);
        if (false === $res) {
            return false;
        }
        $ret = [];
        while (false != ($row = mysql_fetch_array($res))) {
            $ret[] = $row;
        }
        return $ret;
    }
} 