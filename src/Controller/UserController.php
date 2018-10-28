<?php
/**
 * Created by PhpStorm.
 * User: jefdc
 * Date: 28/10/2018
 * Time: 12:22
 */

namespace User\Controller;


use User\Model\UserManager;

class UserController
{
    protected $twig;
    public function __construct()
    {
        $loader = new \Twig_Loader_Filesystem('../src/View');
        $this->twig = new \Twig_Environment($loader);
    }

    public function index()
    {
        $userManager = new UserManager();
        $users = $userManager->selectAll();
        return $this->twig->render('Admin/index.html.twig', ['users' => $users]);

    }

}