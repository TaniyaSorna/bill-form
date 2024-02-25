<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="wrapper" style="width: 424px; height: 730px; background: skyblue; padding: 20px; margin-left: 450px;">
        <div class="logo" style="background: black; color: white; font-weight: 700; font-size: 25px; border-radius: 15px; padding: 10px; width: 35%;">
            <img src="img/i l 1.webp" alt="My Logo" width="40%" ; height="40%" ;>
        </div>
        <div class="line">
            <hr class="line" style="padding: 5px; background: tomato; border: none;">
        </div>
        <div class="text" style="margin-top: 70px;">
            <h2>Bill To:</h2>
            <h4 style="line-height: 2px;">Mr. X</h4>
            <p>+123-456-789 <br> Anywhere st, Any city</p>
        </div>
        <div class="date" style="margin-bottom: 20px; text-align: end;">
            <p>Date: 10 September 2024</p>
        </div>
        <table border="1px" cellspacing="0" style="width: 100%; text-align: center;">
            <thead style="background: tomato;">
                <tr>
                    <th style="color: white;">No.</th>
                    <th>Description</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>01.</td>
                    <td> <?php echo 'Pizza' ?></td>
                    <td>1</td>
                    <td><?php echo '250' ?></td>
                    <td><?php echo '250' ?></td>
                </tr>
                <tr>
                    <td>02.</td>
                    <td><?php echo 'Burger' ?></td>
                    <td>1</td>
                    <td><?php echo '150' ?></td>
                    <td><?php echo '150' ?></td>
                </tr>
                <tr>
                    <td>03.</td>
                    <td><?php echo 'Kids Menu' ?></td>
                    <td>1</td>
                    <td><?php echo '350' ?></td>
                    <td><?php echo '350' ?></td>
                </tr>
                <tr>
                    <td>04.</td>
                    <td><?php echo 'Egg Curry' ?></td>
                    <td>1</td>
                    <td><?php echo '55' ?></td>
                    <td><?php echo '55' ?></td>
                </tr>
                <tr>
                    <td>05.</td>
                    <td><?php echo 'Shami Kabab' ?></td>
                    <td>1</td>
                    <td><?php echo '60' ?></td>
                    <td><?php echo '60' ?></td>
                </tr>
                <tr>
                    <td>06.</td>
                    <td><?php echo 'French Fries' ?></td>
                    <td>1</td>
                    <td><?php echo '5o' ?></td>
                    <td><?php echo '5o' ?></td>
                </tr>
            </tbody>
        </table>
        <div style="padding-left: 280px;">
            <table border="1px" cellspacing="0" style="width: 100%; text-align: center;">
                <tbody>
                    <tr>
                        <td>Total</td>
                        <td>$ 0.00</td>
                    </tr>
                    <tr>
                        <td>Discount</td>
                        <td>$ 0.00</td>
                    </tr>
                    <tr style="background: tomato;">
                        <td>Sub Total</td>
                        <td>$ 0.00</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="payment" style="margin-top: 40px;">
            <h4>Payment Information:</h4>
            <h3 style="line-height: 1px; display: inline;"">Bank:</h3>
            <p style=" display: inline;">Name Bank</p><br>
                <h3 style=" display: inline;">No Bank:</h3>
                <p style=" display: inline;">+123-456-789</p><br>
                <h3 style="line-height: 1px; display: inline;">Email:</h3>
                <p style=" display: inline;">mr.x@gmail.com</p>
        </div>
        <div class="signetur" style="margin-top: 15px; padding-left: 280px;">
            <h4 style=" text-transform: uppercase; display: inline;">Samira hadid</h4><br>
            <p style="display: inline;">Manager Company</p>
        </div>
        <div class="footer-line">
            <hr class="line" style="border: none; background: black; padding: 5px;">
        </div>
    </div>
</body>

</html>