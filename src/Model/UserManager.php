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
        $query->setFetchMode(\PDO::FETCH_CLASS, 'User\Model\User');

        //recupere et retourne
        return $users = $query->fetchAll();
    }

    public function selectById($id)
    {
        try {
            $pdo = new \PDO("mysql:host=localhost;dbname=mvc", "root", "claude05");
        }   catch (\Exception $error) {
                return $error->getMessage();
        }
        $query = $pdo->prepare("SELECT * FROM user WHERE id= :id");
        $query->bindValue('id', $id, \PDO::PARAM_STR);
        $query->execute();
        $query->setFetchMode(\PDO::FETCH_CLASS, 'User\Model\User');
        return $user = $query->fetch();
    }
}