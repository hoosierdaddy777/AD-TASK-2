<?php
// Sample account data (array)
$accounts = [
    ["id" => 1001, "name" => "Savings Account", "balance" => 5000.00],
    ["id" => 1002, "name" => "Checking Account", "balance" => 2500.50],
    ["id" => 1003, "name" => "Investment Account", "balance" => 12000.75]
];

// Function to calculate total balance
function calculateTotalBalance($accounts) {
    $total = 0;
    foreach ($accounts as $account) {
        $total += $account['balance'];
    }
    return $total;
}

// Function to simulate transfer (fragmentation)
function simulateTransfer(&$accounts, $fromId, $toId, $amount) {
    foreach ($accounts as &$account) {
        if ($account['id'] == $fromId) {
            $account['balance'] -= $amount;
        }
        if ($account['id'] == $toId) {
            $account['balance'] += $amount;
        }
    }
    return "Transfer of $" . number_format($amount, 2) . " completed";
}

// Simulate a transfer
$transferMessage = "";
if (isset($_GET['action']) && $_GET['action'] == 'transfer') {
    $transferMessage = simulateTransfer($accounts, 1001, 1002, 500);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Account Overview</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Bank Account Overview</h1>
        
        <?php if ($transferMessage): ?>
            <div class="notification"><?= $transferMessage ?></div>
        <?php endif; ?>
        
        <div class="nav">
            <a href="./index.php">Accounts</a>
            <a href="./page/index.php">Transactions</a>
        </div>
        
        <h2>Your Accounts</h2>
        
        <?php foreach ($accounts as $account): ?>
            <div class="account">
                <h3><?= $account['name'] ?> (<?= $account['id'] ?>)</h3>
                <p>Balance: $<?= number_format($account['balance'], 2) ?></p>
            </div>
        <?php endforeach; ?>
        
        <h3>Total Balance: $<?= number_format(calculateTotalBalance($accounts), 2) ?></h3>
        
        <div class="nav">
            <a href="./page/index.php?action=transfer">Simulate Transfer ($500 Savings to Checking)</a>
        </div>
    </div>
</body>
</html>