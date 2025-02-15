<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <!-- Link to External CSS File -->
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <!-- Title Section -->
    <div class="title">
        <h1>Verification of User Name</h1>
        <p>“Let's Get Verify Today!”</p>
    </div>
    
    <!-- User Verification Form -->
    <form class="input-container">
        <div>
            <label>User Name:</label>
            <input type="text" id="input-username" name="username" placeholder= "Enter your username"></input>    
        </div>
        <input type="submit" id="submit-button"value="Submit">
        
        <!-- Error Message Placeholder -->
        <p class="err-msg">Key in Username and click submit</p>
    </form>

    <!-- Footer Section -->
    <footer class="footer">
        <p>&copy; 2025 Kong Min Huey. All rights reserved.</p>
    </footer>

    <!-- JavaScript for Form Validation -->
    <script src="verify_ajax.js"></script>

</body>
</html>