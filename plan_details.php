<?php
session_start();

// Retrieve the plan details
$plan_name = $_SESSION['plan_name'];
$plan_price = $_SESSION['plan_price'];
$disk_space = $_SESSION['disk_space'];
$email_accounts = $_SESSION['email_accounts'];
$bandwidth = $_SESSION['bandwidth'];
$subdomains = $_SESSION['subdomains'];
$domains = $_SESSION['domains'];
?>
<form method="POST" action="process_payment.php">
    <h3>Selected Plan: <?php echo htmlspecialchars($plan_name); ?></h3>
    <p><strong>Price: </strong>$<?php echo htmlspecialchars($plan_price); ?></p>
    <ul>
        <li><strong>Disk Space:</strong> <?php echo htmlspecialchars($disk_space); ?></li>
        <li><strong>Email Accounts:</strong> <?php echo htmlspecialchars($email_accounts); ?></li>
        <li><strong>Monthly Bandwidth:</strong> <?php echo htmlspecialchars($bandwidth); ?></li>
        <li><strong>Subdomains:</strong> <?php echo htmlspecialchars($subdomains); ?></li>
        <li><strong>Domains:</strong> <?php echo htmlspecialchars($domains); ?></li>
    </ul>

     
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <label for="contact">Contact Number:</label>
    <input type="text" id="contact" name="contact" required>
    <button type="submit">Pay for Plan</button>
</form>
ß