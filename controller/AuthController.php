<?php

require_once __DIR__ . '/../repository/UtilisateurRepository.php';
require_once __DIR__ . '/../model/Utilisateur.php';

class AuthController {
    private PDO $db;
    private UtilisateurRepository $userRepo; // <- ici

    public function __construct(PDO $db) {
        $this->db = $db;
        $this->userRepo = new UtilisateurRepository($db); // <- et ici
    }

    public function showLogin(): void {
        require __DIR__ . '/../views/login.php';
    }

    public function login(): void {
        session_start();

        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        if (empty($email) || empty($password)) {
            $error = "Veuillez remplir tous les champs.";
            require __DIR__ . '/../views/login.php';
            return;
        }

        $user = $this->userRepo->findByEmail($email);

        if (!$user || !password_verify($password, $user->getPassword())) {
            $error = "Email ou mot de passe incorrect.";
            require __DIR__ . '/../views/login.php';
            return;
        }

        $_SESSION['user_id'] = $user->getId();
        $_SESSION['user_email'] = $user->getEmail();
        $_SESSION['user_role'] = $user->getRole();

        header("Location: /dashboard");
        exit;
    }

    public function logout(): void {
        session_start();
        session_unset();
        session_destroy();
        header("Location: /login");
        exit;
    }
}

?>