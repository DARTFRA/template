<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require ROOT . '/../vendor/autoload.php';

class SMTPMailer
{
    private string $host = 'smtp.gmail.com';
    private string $username = 'noreply@neyron.shop';
    private string $password = 'ejebdzfozzlnouoq'; // mot de passe d'application Gmail
    private int $port = 587;
    private string $fromEmail = 'noreply@neyron.shop';
    private string $fromName  = 'NEYRON SHOP';
    private string $charset = 'UTF-8'; // <-- ajouté ici

    /**
     * Envoie un email
     *
     * @param string $to Destinataire
     * @param string $subject Sujet du mail
     * @param string $body Contenu HTML
     * @param string|null $altBody Contenu texte alternatif
     * @return bool|string True si envoyé, sinon message d'erreur
     */

    private static function log($message) {
        file_put_contents(ROOT . '/../logs/mail.log', date('[Y-m-d H:i:s] ') . $message . PHP_EOL, FILE_APPEND);
    }

    public function send(string $to, string $subject, string $body, ?string $altBody = null)
    {
        $mail = new PHPMailer(true);

        try {
            // Config SMTP
            $mail->isSMTP();
            $mail->CharSet = $this->charset; // <-- utilise la propriété
            $mail->Host       = $this->host;
            $mail->SMTPAuth   = true;
            $mail->Username   = $this->username;
            $mail->Password   = $this->password;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = $this->port;

            // Expéditeur
            $mail->setFrom($this->fromEmail, $this->fromName);

            // Destinataire
            $mail->addAddress($to);

            // Contenu
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $body;
            $mail->AltBody = $altBody ?? strip_tags($body);
            // debug("true", true); 
            $mail->send();
            self::log("MAIL : Envoyé");

            return true;
        } catch (Exception $e) {
            self::log("Erreur MAIL : " . $e->getMessage());

            return $mail->ErrorInfo;
        }
    }
}
