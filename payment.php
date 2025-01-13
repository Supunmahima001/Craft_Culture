<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Sheet</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="payment-container">
        <h2>Payment Details</h2>
        <form action="/submit-payment" method="POST">
            <div class="form-group">
                <label for="cardholder-name">Cardholder Name</label>
                <input type="text" id="cardholder-name" name="cardholder-name" required>
            </div>
            <div class="form-group">
                <label for="card-number">Card Number</label>
                <input type="text" id="card-number" name="card-number" required>
            </div>
            <div class="form-group">
                <label for="expiry-date">Expiry Date</label>
                <input type="text" id="expiry-date" name="expiry-date" placeholder="MM/YY" required>
            </div>
            <div class="form-group">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" required>
            </div>
            <button type="submit">Submit Payment</button>
        </form>
    </div>
    <style>body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.payment-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
}

h2 {
    margin-bottom: 20px;
    font-size: 24px;
    text-align: center;
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

input[type="text"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #28a745;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: #218838;
}
</style>

</body>
</html>
