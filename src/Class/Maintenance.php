<?php
require_once ROOT . '/../config/db.php';

class Maintenance
{
    private array $allowedIps;

    public function __construct()
    {
        $this->allowedIps = ['127.0.0.1', '172.71.134.230'];
    }

    public function detectClientIp(): string
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            return $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        return $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';
    }

    private function isAllowed(): bool
    {
        $clientIp = $this->detectClientIp();
        return in_array($clientIp, $this->allowedIps);
    }
    public function checkMaintenance()
    {
        global $pdo;

        // Récupérer la config
        $stmt = $pdo->prepare("SELECT * FROM config WHERE id = 2");
        $stmt->execute();
        $config = $stmt->fetch(PDO::FETCH_ASSOC);

        $maintenance = (int) $config['value'];
        if (
            $maintenance === 0
        ) {

            // Sinon afficher la page de maintenance
            http_response_code(503);
            header('Retry-After: 3600');
            require ROOT . '/../views/ocas/maintenance.php';
            exit;
        }
    }
}
