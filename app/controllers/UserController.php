<?php
declare(strict_types=1);

class UserController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        echo "Hello from UserController!";
    }

    public function showAction($id)
    {
        $user = Users::findFirst($id);

        echo "User ID: " . $id;
    }

//$user = new Users();
//$user->name = 'John Doe';
//$user->email = 'john@example.com';
//$user->password = password_hash("secret", PASSWORD_BCRYPT);
//$user->created_at = date('Y-m-d H:i:s');
//$user->save();
}

