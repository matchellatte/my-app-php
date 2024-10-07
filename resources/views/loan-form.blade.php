<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Calculator</title>
    

    <style>
        body {
            background-color: #FFC0CB;
            font-family: Arial, sans-serif;
        }

    </style>
</head>
<body>
    <h1>Loan Calculator</h1>
    <h3>by Grechelle Ann Boneo</h3>
    <container>
    <form action="/loan" method="post">
        @csrf
        <label for="loan_amount">Enter Loan Amount:</label>
        <input type="number" name="loan_amount" id="loan_amount" min="0" required>
        <br><br>

        <label for="payment_terms">Enter Payment Terms (in months):</label>
        <input type="number" name="payment_terms" id="payment_terms" min="1" required>
        <br><br>

        <input type="submit" value="Compute">
        <button type="submit" formaction="/loan/clear" formmethod="POST">Clear</button>
    </form>
    </container>
    
</body>
</html>
