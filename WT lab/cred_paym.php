<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Payment </title>
        <link rel="stylesheet" type="text/css" href="cred_paym.css">
        <link rel="stylesheet" type="text/css" href="nav.css">
        <link rel="icon" type="image/png" href="https://www.flaticon.com/premium-icon/icons/svg/3262/3262306.svg">
    </head>
    <body>
        <section class="main-cont">
            <header>
                <ul class="out-ul">
                    <li class="fli">
                        <span>
                            <img src="https://www.flaticon.com/svg/static/icons/svg/3285/3285719.svg" style="height: 26px; width: 32px;">  
                            Online Book Store
                        </span>
                    </li>
                </ul>
            </header>
            <div class="wrapper">
                <header style="text-align: center;">Payment Gateway</header>
                <div class="opt">
                    <p>Select card type: </p>
                    <form action="orderConf.html" method="post">
                        <label for="cardtype1">Visa
                        <input type="radio" name="cardty" id="cardtype1" value="Visa" checked="checked" /></label><br><br>
                        <label for="cardtype2">Master Card
                        <input type="radio" name="cardty" id="cardtype2" value="Master Card" /></label><br><br>
                        <label for="cardtype3">Rupay
                        <input type="radio" name="cardty" id="cardtype3" value="Rupay"></label><br><br>
                        <label for="cardtype4">American Express
                        <input type="radio" name="cardty" id="cardtype4" value="American Express"></label><br><br>
                        <p>Enter your card details: </p>
                        <div class="det">
                            <ul>
                                <li><b>Name on card</b> <input type="text" name="regname" required></li>
                                <li><b>Card Number</b><input type="number" name="cardno" required></li>
                                <li><b>Expiry</b><input type="month" min="2020-09"  name="expiry" required></li>
                                <li><b>Cvv</b><input type="number" name="cvv" required></li>
                            </ul>
                        </div>
                        <button type="submit">Continue</button>
                    </form>
                </div>
            </div>
        </section>
    </body>
</html>