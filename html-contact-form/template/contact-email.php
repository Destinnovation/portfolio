<?php
function getHTMLAcknowledgementMessage($fname, $lname, $email, $phone, $message)
{
    ob_start();
    ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Mail via Contact Form</title>
<style>
.item-body {
    margin: 0;
    font-family: 'HelveticaNeue', Helvetica, Arial, sans-serif;
    box-sizing: border-box;
    font-size: 13px;
    color: #616161;
    -webkit-font-smoothing: antialiased;
    -webkit-text-size-adjust: none;
    width: 100% !important;
    height: 100%;
    line-height: 1.6em;
    background-color: #f0f0f0;
}
</style>
</head>
<body itemscope itemtype='http://schema.org/EmailMessage'
    class="item-body">
    <table
        style='vertical-align: top; background-color: #f0f0f0; width: 100%; border: 1px solid #e4e4e4;'>
        <tr>
            <td width='600'
                style='vertical-align: top; padding: 0 !important; width: 100% !important;'>
                <div
                    style='max-width: 600px; margin: 0 auto; display: block; padding: 20px;'>
                    <table width='100%' cellpadding='0' cellspacing='0'
                        style='background-color: #fff; border-radius: 5px; border: 1px solid #e4e4e4;'>
                        <tr>
                            <td style='padding: 20px;'>
                                <table width='100%' cellpadding='0'
                                    cellspacing='0'>
                                    <tr>
                                        <td>Hello <?php echo $fname;?>,</td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='padding-bottom: 10px;'><?php echo "We have received your message and will get back to you soon. Thank you.";?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <hr />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>First Name:</strong>
                                        <?php echo $fname; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Last Name:</strong>
                                        <?php echo $lname; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Email:</strong>
                                        <?php echo $email; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Phone:</strong>
                                        <?php echo $phone; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Message:</strong>
                                        <?php echo $message; ?>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
            </td>

        </tr>
    </table>
</body>
</html>
<?php
    return ob_get_clean();
}
?>