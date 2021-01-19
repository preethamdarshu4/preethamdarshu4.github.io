<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Order Confirmation </title>
        <link rel="stylesheet" type="text/css" href="catalg.css">
        <link rel="stylesheet" type="text/css" href="nav.css">
        <link rel="icon" type="image/png" href="https://www.flaticon.com/svg/static/icons/svg/3144/3144456.svg">
        <style>
            body {
                background-color: rgba(10, 128, 175, 0.185);
            }
            .wrapper {
                border: 1.25px solid rgba(153, 151, 151, 0.464);
                box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.19);
                padding: 25px;
                background-color: white;
                width: 400px;
                height: 350px;
                margin: 100px auto;
            }
            .wrapper:hover {
                background-color:  #f1f1f1;
                transform: translate(-1px,-1px);
            }
            .wrapper > p {
                font-size: 25px;
                font-weight: 400;
                color: rgb(9, 83, 83);
                border-left: 4px solid  rgb(9, 83, 83);
            }
            .wrapper > p span {
                margin-left: 10px;
            }
            a {
                font-size: medium;
                font-weight: 300;
            } 
            h1 {
                text-align: center;
                font-weight: 500;
                background-color: #f3ec78;
                background-image: linear-gradient(45deg, #af4261, #e4db33);
                background-size: 100%;
                background-clip: text;
                -webkit-background-clip: text;
                -moz-background-clip: text;
                -webkit-text-fill-color: transparent; 
                -moz-text-fill-color: transparent;
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
                <h1>Order Confirmed :)</h1>
                <p><span>Order Details: </span></p>
                <ul>
                    <li>
                        <p>Item name: <span>PHP for th web</span></p>
                    </li>
                    <li>
                        <p>Price: <span>&#x20B9;199/-</span></p>
                    </li>
                    <li>
                        <p>Quantity: <span>1</span></p>
                    </li>
                    <li>
                        <p>Expected delivery time: <span>4 days</span></p>
                    </li>
                <button><a href="catalogue.php">Continue Shoppping</a></button>
            </div>
        </section>
    </body>
</html>