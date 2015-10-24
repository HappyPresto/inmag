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
        var_dump($res);
        /*if (false === $res) {
            return false;
        }*/
        $ret = [];
        echo $sql;
        while (false != mysql_fetch_array($res)) {
            $ret[] = $res;
            var_dump($ret);
        }
        return $ret;
    }
} 