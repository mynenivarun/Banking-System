<?php
    include "validate_customer.php";
    include "header.php";
    include "customer_navbar.php";
    include "customer_sidebar.php";
    include "session_timeout.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>SAV BANK</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="customer_add_style.css">
</head>

<body>
    <form class="add_customer_form" action="atm_simulator_action.php" method="post">
        <div class="flex-container-form_header">
            <h1 id="form_header">ATM Simulator</h1>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Enter Amount (in INR) :</label><br>
                <input name="amt" size="24" type="text" required />
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Type :</label>
            </div>
            <div class="flex-container-radio">
                <div class="container">
                    <input type="radio" name="type" value="debit" id="debit-radio" checked>
                    <label id="radio-label" for="debit-radio"><span class="radio">Debit</span></label>
                </div>
                <div class="container">
                    <input type="radio" name="type" value="credit" id="credit-radio">
                    <label id="radio-label" for="credit-radio"><span class="radio">Credit</span></label>
                </div>
            </div>
        </div>

        <div class="flex-container">
            <div  class=container>
                <label>PIN(4 digit) :</b></label><br>
                <input name="pin" size="12" type="password" required />
            </div>
        </div>

        <div class="flex-container">
            <div class="container">
                <button type="submit">Submit</button>
            </div>

            <div class="container">
                <button type="reset" class="reset" onclick="return confirmReset();">Reset</button>
            </div>
        </div>

    </form>

    <script>
    function confirmReset() {
        return confirm('Do you really want to reset?')
    }
    </script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5fa8f9170a68960861bd0329/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>
