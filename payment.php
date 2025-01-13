<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Sheet</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            padding: 20px;
        }

        .payment-container {
            width: 80%;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        td {
            background-color: #fafafa;
        }

        tr:nth-child(even) td {
            background-color: #f1f1f1;
        }

        tr:hover td {
            background-color: #e0e0e0;
        }
    </style>
</head>
<body>

    <div class="payment-container">
        <h1>Payment Details</h1>
        
        <table>
            <thead>
                <tr>
                    <th>Payment ID</th>
                    <th>Order ID</th>
                    <th>Payment Method</th>
                    <th>Payment Status</th>
                    <th>Amount Paid</th>
                    <th>Payment Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>1001</td>
                    <td>Credit Card</td>
                    <td>Completed</td>
                    <td>$150.00</td>
                    <td>2025-01-13 12:34:56</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>1002</td>
                    <td>PayPal</td>
                    <td>Pending</td>
                    <td>$50.00</td>
                    <td>2025-01-12 15:20:30</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>1003</td>
                    <td>Debit Card</td>
                    <td>Failed</td>
                    <td>$120.00</td>
                    <td>2025-01-10 11:15:10</td>
                </tr>
            </tbody>
        </table>
    </div>

</body>
</html>
