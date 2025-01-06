<?php
use Phppot\MailService;

if (! empty($_POST["send"])) {
    require_once __DIR__ . '/lib/MailService.php';
    $mailService = new MailService();
    $response = $mailService->sendContactMail($_POST);
    if (! empty($response)) {
        $message = $response["message"];
        $type = $response["type"];
    }
}
?>

<html>
<head>
<title>HTML Contact Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="assets/css/style.css" type="text/css" rel="stylesheet" />
</head>
<body>
    <div class="form-container">
        <h1 class="text-center">HTML Contact Form</h1>
        <form name="frmContact" id="" frmContact"" method="post"
            action="" enctype="multipart/form-data"
            onsubmit="return validateContactForm()">

            <div class="row">
                <div class="inline-block right-margin">
                    <div class="label">
                        First Name <span id="firstName-info"
                            class="info"></span>
                    </div>
                    <input type="text" class="input-field"
                        name="contact-first-name"
                        id="contact-first-name" />
                </div>
                <div class="inline-block responsive">
                    <div class="label">
                        Last Name <span id="lastName-info" class="info"></span>
                    </div>
                    <input type="text" class="input-field"
                        name="contact-last-name" id="contact-last-name" />
                </div>
            </div>

            <div class="row">
                <div class="inline-block right-margin">
                    <div class="label">
                        Email <span id="email-info" class="info"></span>
                    </div>
                    <input type="text" class="input-field"
                        name="contact-email" id="contact-email" />
                </div>
                <div class="inline-block responsive">
                    <div class="label">
                        Phone <span id="phone-info" class="info"></span>
                    </div>
                    <input type="text" class="input-field"
                        name="contact-phone" id="contact-phone" />
                </div>
            </div>

            <div class="row">
                <div class="inline-block right-margin">
                    <div class="label">
                        Subject <span id="subject-info" class="info"></span>
                    </div>
                    <div class="input-field-radio">
                        <div>
                            <input type="radio" name="contact-subject"
                                class="subject-option" id="subject1"
                                value="project-enquiry" />Project
                            Enquiry
                        </div>
                        <div>
                            <input type="radio" name="contact-subject"
                                class="subject-option" id="subject2"
                                value="feedback" />Feedback
                        </div>
                        <div>
                            <input type="radio" name="contact-subject"
                                class="subject-option" id="subject3"
                                value="others" />Others
                            <div id="other-subject">
                                <input type="text" class="input-field"
                                    name="contact-other-subject" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="inline-block responsive">
                    <div class="label">
                        Message <span id="message-info" class="info"></span>
                    </div>
                    <textarea name="contact-message"
                        id="contact-message" class="input-field"
                        cols="60" rows="6"></textarea>
                </div>
            </div>
            <div class="row">
                <input type="submit" name="send" class="btn-submit"
                    value="Send" />
            </div>
            <div class="row">
                <div id="statusMessage">
                        <?php
                        if (! empty($message)) {
                            ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                        ?>
                    </div>
            </div>
        </form>
    </div>
    <script type="text/javascript"
        src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="assets/js/form.js" type="text/javascript"></script>
</body>
</html>