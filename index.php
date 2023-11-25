<?php
    include "gateway/config.php";
?>
<body style="width: 80%; margin-left: 10%;">
    <h1>Hello, Wellcome to Jazz Cash Payment Integration in PHP</h1>
    <br>
    <div>
        <p>Integrating JazzCash into PHP is a fantastic way to enhance payment options on your website or application. To begin the integration process, you'll need to access the JazzCash developer documentation that provides comprehensive guides and APIs for PHP integration. Here's a brief outline of steps you might follow:</p>
        <p>1. <b>Developer Account</b>: Sign up for a developer account on the JazzCash website to get access to their APIs and credentials required for integration.</p>
        <p>2. <b>API Documentation</b>: Review the JazzCash API documentation specifically tailored for PHP. Understand endpoints, request methods, parameters, and responses.</p>
        <p>3. <b>Integration Code</b>: Utilize PHP to create functions or classes that interact with JazzCash APIs. This involves making requests, handling responses, and securely processing payment information.</p>
        <p>4. <b>Testing</b>: Set up a testing environment to ensure the integration works as expected. Use sandbox or test credentials provided by JazzCash to simulate transactions without affecting real financial data.</p>
        <p>5. <b>Security Measures</b>: Implement necessary security measures such as encryption, validation checks, and best practices to safeguard sensitive information during payment transactions.</p>
        <p>6. <b>User Experience</b>: Focus on providing a seamless user experience during the payment process. Error handling and clear communication with users are crucial.</p>
        <br>
        <p>Please update the Merchant ID, Merchant Password, Integrity Salt, and Return URL in the 'Gateway/config.php' file from the JazzCash portal for seamless integration of JazzCash Payment Gateway on any PHP-based website.</p>
        <p>After updating the above-mentioned details go to <a href="<?=BASE_URL.'payment.php'?>">payment page</a>.</p>
        <br>
    </div>
</body>