<?php
namespace Phppot;

class MailService
{

    function sendContactMail($postValues)
    {
        $name = $postValues["contact-first-name"] . " " . $postValues["contact-last-name"];
        $email = $postValues["contact-email"];
        $fname = $postValues["contact-first-name"];
        $lname = $postValues["contact-last-name"];
        $phone = $postValues["contact-phone"];
        $message = $postValues["contact-message"];
        if ($postValues["contact-subject"] == "others") {
            $subject = $postValues["contact-other-subject"];
        } else {
            $subject = $postValues["contact-subject"];
        }
        require_once __DIR__ . '/../template/contact-email.php';
        $content = getHTMLAcknowledgementMessage($fname, $lname, $email, $phone, $message);
        $toEmail = "destinyfelix823@gmail.com";
        $mailHeaders = "MIME-Version: 1.0\r\n";
        $mailHeaders .= "Content-type: text/html; charset=UTF-8\r\n";
        $mailHeaders .= "From: " . $name . "<" . $email . ">\r\n";

        if (!(mail($toEmail, $subject, $content, $mailHeaders))) {
            $response = array(
                "message" => "Mail sent successfully.",
                "type" => "success"
            );
        } else {
            $response = array(
                "message" => "Problem in sending email",
                "type" => "error"
            );
        }
        return $response;
    }
}
?>
