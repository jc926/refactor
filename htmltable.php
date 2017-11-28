<?php

class htmltable{
    public static function Atable($input){
       
        $table = htmltag:: tablestart();
        foreach ($input as $row =>$line){
            $table.= htmltag:: rowstart();
            foreach ($line as $inrow =>$value){
                $table.=htmltag::tablehead($inrow);
            }
            $table.=htmltag:: rowend();
            break;
        }
        foreach ($input as $row =>$line){
            $table.= htmltag:: rowstart();
            foreach ($line as $inrow =>$value){
                $table.=htmltag::tabledata($value);
            }
            $table.=htmltag:: rowend();
        }
        $table .= htmltag::tableend();
        return $table;   

    }
    public static function Otable($line){
        $table = htmltag:: tablestart();
        $table .=htmltag::rowstart();
        foreach ($line as $row =>$value){
            $table.=htmltag::tablehead($row);
        }
        $table.=htmltag::rowend();
        foreach($line as $row =>$value){
            $table.=htmltag::tabledata($value);
        }
        $table.=htmltag::tableend();
        return $table;

    }

}

?>