<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shoppping cart </title>
        <link rel="stylesheet" type="text/css" href="catalg.css">
        <link rel="stylesheet" type="text/css" href="nav.css">
        <link rel="icon" type="image/png" href="https://www.flaticon.com/svg/static/icons/svg/3144/3144456.svg">
        <style>
            .wrapper {
                border: 1.25px solid rgba(153, 151, 151, 0.464);
                box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.19);
                padding: 25px;
                background-color: #f1f1f1;
                width: 400px;
                height: 350px;
                margin: 100px auto;
            }
            .wrapper:hover {
                background-color:  rgb(202, 207, 209,0.9);
                transform: translate(-1px,-1px);
            }
            .wrapper > p {
                font-size: 25px;
                font-weight: 600;
                color: rgb(9, 83, 83);
                border-left: 4px solid  rgb(9, 83, 83);
            }
            .wrapper > p span {
                margin-left: 10px;
            }
            a {
                color: blue;
                margin: 20px 0 0 10px;
                font-size: large;
                font-weight: 300;
                border: 1.25px solid rgba(153, 151, 151, 0.464);
            }
        </style>
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
                <p><span>Shopping Cart</span></p>
                <div class="bdet-wpr">
                    <ul>
                        <li>
                            <p>Items in your cart: <span>1</span></p>
                        </li>
                        <li>
                            <p>Item name: <span>PHP for th web</span></p>
                        </li>
                        <li>
                            <p>Price: <span>&#x20B9;199/-</span></p>
                        </li>
                        <li>
                            <p>Quantity: <span>1</span></p>
                        </li>
                    </ul>
                </div>
                <p><a href="cred_paym.php">Proceed to pay</a></p>
            </div>
        </section>
    </body>
</html>