<?php
// Sample transaction data (dictionary/associative array)
$transactions = [
    "2023-11-01" => [
        ["account" => "Savings", "type" => "Deposit", "amount" => 1000.00],
        ["account" => "Checking", "type" => "Withdrawal", "amount" => -200.00]
    ],
    "2023-11-02" => [
        ["account" => "Investment", "type" => "Dividend", "amount" => 150.50],
        ["account" => "Checking", "type" => "Transfer", "amount" => 500.00]
    ],
    "2023-11-03" => [
        ["account" => "Savings", "type" => "Withdrawal", "amount" => -300.00],
        ["account" => "Checking", "type" => "Deposit", "amount" => 1200.00]
    ]
];

// Function to display transactions for a date (fragmentation)
function displayTransactionsForDate($date, $transactions) {
    if (isset($transactions[$date])) {
        echo "<h3>$date</h3>";
        foreach ($transactions[$date] as $transaction) {
            $amountClass = $transaction['amount'] >= 0 ? 'positive' : 'negative';
            echo "<div class='transaction'>";
            echo "<span class='$amountClass'>";
            echo "[" . $transaction['account'] . "] ";
            echo $transaction['type'] . ": ";
            echo ($transaction['amount'] >= 0 ? "+" : "") . "$" . number_format(abs($transaction['amount']), 2);
            echo "</span>";
            echo "</div>";
        }
    } else {
        echo "<p>No transactions for $date</p>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Transaction History</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Transaction History</h1>
        
        <div class="nav">
            <a href="../index.php">Accounts</a>
            <a href="./index.php">Transactions</a>
        </div>
        
        <h2>Recent Transactions</h2>
        
        <?php
        // Display all transactions
        foreach ($transactions as $date => $dailyTransactions) {
            displayTransactionsForDate($date, $transactions);
        }
        ?>
        
        <h3>Sample Date Filter</h3>
        <?php
        // Demonstrate filtering by date
        displayTransactionsForDate("2023-11-02", $transactions);
        ?>
    </div>
</body>
</html>