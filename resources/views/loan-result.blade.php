<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Calculation Result</title>

    <style>
        body {
            background-color: #FFC0CB;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
    <h1>Your computed results are:</h1>
    <p>Loan Amount: ${{ number_format($loanAmount, 2) }}</p>
    <p>Payment Terms: {{ $paymentTerms }} months</p>
    <p>Interest: ${{ number_format($interest, 2) }}</p>
    <p><strong>Monthly Amortization: ${{ number_format($monthlyAmortization, 2) }}</strong></p>

    <a href="/loan">Go Back</a>
</body>
</html>
