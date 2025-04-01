<?php
declare(strict_types=1);

class UserController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $connection = $this->di->get('db');

        $result = $connection->query("SELECT sqlite_version() AS version")->fetch();
        echo "SQLite Version: " . $result["version"];
    }

    public function showAction($id)
    {
        $user = Users::findFirst($id);

        echo "User ID: " . $user->id;
        echo "User Name: " . $user->name;
    }

//require 'public/index.php';
//$user = new Users();
//$user->name = 'John Doe';
//$user->email = 'john@example.com';
//$user->password = password_hash("secret", PASSWORD_BCRYPT);
//$user->created_at = date('Y-m-d H:i:s');
//$user->save();
}

