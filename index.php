<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);


define('DATABASE', 'jc926');
define('USERNAME', 'jc926');
define('PASSWORD', 'gkXLdWmKr');
define('CONNECTION', 'sql2.njit.edu');

//Autuloader class
class Manage {
    public static function autoload($class) {
        //you can put any file name or directory here
        include $class . '.php';
    }
}
spl_autoload_register(array('Manage', 'autoload'));
//instantiate the main object
$obj = new main();

class main{
    public function __construct(){
        $form = '<form method ="post" enctype= "multipart/form-data">';
        
        $form .='<h1>find one todos records</h1>';
        $allT= todos::findOne(2);
        $tableshow = htmltable:: Otable($allT);
        $form .=$tableshow;

        $form .='<h1>find all accounts records</h1>';
        $allA= accounts::findAll();
        $tableshow = htmltable:: Atable($allA);
        $form .=$tableshow;
        $form .= '</form>';
      
        $form .='<h1>find update todos records</h1>';
        $newT = new todo();
        $newT->id = '3';
        $newT->owneremail = '@njit.edu';
        $newT->ownerid = 'jc1234';
        $newT->createddate = '11/18';
        $newT ->save();
        $tableshow = htmltable:: Otable($newT);
        $form .=$tableshow;
        $form .= '</form>';
      
        $form .='<h1>find insert accouts records</h1>';
        $newA= new account();
        $newA->email = "'jc926@'";
        $newA->fname = "'J'";
        $newA->lname = "'C'";
        $newA->phone = "'1314'";
        $newA->save();
        $tableshow = htmltable:: Otable($newA);
        $form .=$tableshow;
        $form .= '</form>';

        $form .='<h1>find delete accouts records</h1>';
        //$oldA =accounts::findOne($lastid);
        $newA= new account();
        $newA->id = 88;
        $newA->delete();
        $tableshow = htmltable:: Otable($newA);
        $form .=$tableshow;
        $form .= '</form>';

        print($form);





    }
}

?>