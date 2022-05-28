<?php

class User {
    public $id;
    public $name;
    public $lastName;
    public $email;
    public $password;
    public $image;
    public $bio;
    public $token;
}

interface UserDAOInterface {


    public function buildUser($data);

    /**
     * Cria o usuario e já faz login.
     */
    public function create(User $user, $authUser = false);

    /**
     * Atualizar o usuário do sistema
     */
    public function update(User $user);

    /**
     * Verifica o usuário mas a rota é protegida se FALSE.
     */
    public function verifyToken($protected = false);

    /**
     * Login.
     */
    public function setTokenToSession($token, $redirect = true);

    /**
     * Usuario e senha do login.
     */
    public function authenticateUser($email, $password);

    /**
     * Busca um usuário por email.
     */
    public function findByEmail($email);
    
    /**
     * Encontrar um usuário pelo Token.
     */
    public function findByToken($token);

    /**
     * Busca um usuário pelo ID.
     */
    public function findById($id);

    /**
     * Altera a senha.
     */
    public function changePassword(User $user);




}