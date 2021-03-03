<?php

class Table
{
    private $table = [];

    public function show_table()
    {
        foreach ($this->table as $row) {
            foreach ($row as $column) {
                echo $column;
            }
            echo '<br>';
        }
    }

    public function set_size($size)
    {
        for ($i=0;$i<$size;$i++) {
            for ($j=0;$j<$size;$j++) {
                $this->table[$i][$j] = '<span class="cell"></span>';
            }
        }
    }
}
