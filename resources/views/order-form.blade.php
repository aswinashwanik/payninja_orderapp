<!DOCTYPE html>
<html>
<head>
    <title>Test Order API</title>
</head>
<body>
    <h1>Create Order</h1>
    <form method="POST" action="/web-orders" id="orderForm">
        @csrf
        <label>Customer Name:</label>
        <input type="text" name="customer_name" value="Jane Smith" required><br><br>

        <label>Amount:</label>
        <input type="number" name="amount" step="0.01" value="199.99" required><br><br>

        <button type="submit">Submit</button>
    </form>
    <div id="result"></div>

    <script>
        document.getElementById('orderForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            const formData = new FormData(this);
            const response = await fetch('/web-orders', {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                body: formData
            });

            const result = await response.json();
            document.getElementById('result').innerText = JSON.stringify(result);
        });
    </script>
</body>
</html>
