<html>
<head>
    <title>Form Submission Redirect</title>
    <script>
        function redirectToPayment() {
            // Retrieve form data
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var amount = document.getElementById("amount").value;
            
            // Perform any necessary data validation
            
            // Redirect to payment page with form data as query parameters
            var paymentUrl = "https://pmny.in/yrfQLMgrJLHf?name=" + encodeURIComponent(name) + "&email=" + encodeURIComponent(email) + "&amount=" + encodeURIComponent(amount);
            window.location.href = paymentUrl;
        }
    </script>
</head>
<body>
    <h2>Form Submission Redirect</h2>
    
    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        
        <label for="amount">Amount:</label>
        <input type="number" id="amount" name="amount" required><br>
        
        <input type="submit" value="Proceed to Payment" onclick="redirectToPayment()">
    </form>
    
</body>
</html>
