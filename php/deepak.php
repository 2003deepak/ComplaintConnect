<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Complaint Connect</title>
    <!-- Poppins  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Biryani&family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <!-- Biryani  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Biryani&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="content">
        <div class="complaintInfo">
            <div class="action">
                <p>Take Actions</p>
                <select id="actions" onchange="displayBtn()">
                    <option value="volvo">Initial Visit Done</option>
                    <option value="saab">Complaint Solved</option>
                </select>

                <!-- OTP Container -->
                <div id="otp-container" style="display: none;">
                    <form id="otp-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <label for="otp">Enter OTP:</label>
                        <input type="number" id="otp" name="otp">
                        <input type="submit" name="save" value="Submit">
                    </form>
                </div>

                <!-- Submit Button Container -->
                <div id="submit-btn-container" style="display: none;">
                    <button type="button" name="save" onclick="sendEmail()">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function displayBtn() {
            var selectedOption = document.getElementById("actions").value;
            var otpContainer = document.getElementById("otp-container");
            var submitBtnContainer = document.getElementById("submit-btn-container");

            if (selectedOption === "volvo") {
                otpContainer.style.display = "block";
                submitBtnContainer.style.display = "none";
                
                // Automatically send email when the first option is selected
                sendEmail();
            } else {
                otpContainer.style.display = "none";
                submitBtnContainer.style.display = "block";
            }
        }

        function sendEmail() {
            var selectedOption = document.getElementById("actions").value;

            if (selectedOption === "volvo") {
                var formData = new FormData(document.getElementById("emailForm"));

                var xhr = new XMLHttpRequest();
                xhr.open("POST", "sendEmail.php", true);

                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        alert(xhr.responseText);
                    }
                };

                xhr.send(formData);
            }
        }

        function generateRandomOTP() {
            return Math.floor(100000 + Math.random() * 900000);
        }
    </script>
</body>
</html>
