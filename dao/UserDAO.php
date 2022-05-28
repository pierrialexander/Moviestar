<?php
require_once('models/User.php');

class UserDAO implements UserDAOInterface{
    
    public function authenticateUser($email, $password) {
        
    }

    public function buildUser($data) {
        
    }

    public function changePassword(\User $user) {
        
    }

    public function create(\User $user, $authUser = false) {
        
    }

    public function findByEmail($email) {
        
    }

    public function findById($id) {
        
    }

    public function findByToken($token) {
        
    }

    public function setTokenToSession($token, $redirect = true) {
        
    }

    public function update(\User $user) {
        
    }

    public function verifyToken($protected = false) {
        
    }

}