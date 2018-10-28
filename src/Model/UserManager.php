<?php

namespace User\Model;


class UserManager
{
    public function selectAll()
    {
        //connnecte
        try {
            $pdo = new \PDO("mysql:host=localhost;dbname=mvc", "root", "claude05");
        } catch (\Exception $error) {
            return $error->getMessage();
        }

        //requete select
        $query = $pdo->query("SELECT * FROM user");

        //recupere et retourne
        return $users = $query->fetchAll(\PDO::FETCH_CLASS,'User\Model\User');
    }
}