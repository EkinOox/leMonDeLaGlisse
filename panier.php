<?php
require '_header.php';
if (isset($_GET['del'])) {
    $panier->del($_GET['del']);
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styles/checkout.css">
    <link rel="stylesheet" href="styles/responsive.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
</head>

<body>
    <div class='container'>
        <div class='window'>
            <div class='order-info'>
                <div class='order-info-content'>
                    <h2>Récapitulatif de la commande</h2>
                    <!-- objet N°1-->
                    <?php
                    $ids =  array_keys($_SESSION['panier']);
                    if (empty($ids)) {
                        $products = array();
                    } else {
                        $products = $DB->query('SELECT * FROM products WHERE id IN (' . implode(',', $ids) . ')');
                    }
                    foreach ($products as $product) :
                    ?>
                        <div class='line'></div>
                        <table class='order-table'>
                            <tbody>
                                <tr>
                                    <td><img src='images/<?= $product->id; ?>.jpg' class='full-width'></img>
                                    </td>
                                    <td>
                                        <br> <span class='thin'><?= $product->name; ?></span>
                                        <br><span class='thin small'> Color: *, Size: *<br></span>
                                        <span class='thin small'> Quantité : <?= $_SESSION['panier'][$product->id]; ?><br><br></span>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <div class='price'><?= number_format($product->price * 1.196, 2, ',', ''); ?>€</div>
                                        <a href="panier.php?del=<?= $product->id; ?>"><button class="btn-remove">Remove</button></a>
                                    </td>
                                </tr>
                            </tbody>

                        </table>
                    <?php endforeach; ?>

                    <!--flexbox prix total-->
                    <div class='line'></div>
                    <div class='total'>
                        <span style='float:left;'>
                            TOTAL :
                        </span>
                        <span style='float:right; text-align:right;'>

                            <?= number_format($panier->total() * 1.196, 2, ',', ''); ?>€
                        </span>
                    </div>
                </div>
            </div>

            <!--credit card info-->
            <div class='credit-info'>
                <div class='credit-info-content'>
                    <table class='half-input-table'>
                        <tr>
                            <td>Veuillez entrer votre carte: </td>
                            <td>
                                <div class='dropdown' id='card-dropdown'>
                                    <div class='dropdown-btn' id='current-card'>Visa</div>
                                    <div class='dropdown-select'>
                                        <ul>
                                            <li>Master Card</li>
                                            <li>American Express</li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <img src='https://dl.dropboxusercontent.com/s/ubamyu6mzov5c80/visa_logo%20%281%29.png' height='80' class='credit-card-image' id='credit-card-image'></img>
                    Card Number
                    <input class='input-field'></input>
                    Card Holder
                    <input class='input-field'></input>
                    <table class='half-input-table'>
                        <tr>
                            <td> Expires
                                <input class='input-field'></input>
                            </td>
                            <td>CVC
                                <input class='input-field'></input>
                            </td>
                        </tr>
                    </table>
                    <a href="vetement_femme.html"><button class='back-btn'>Revenir à la boutique</button></a>
                    <a href="#"><button class='pay-btn'>Checkout</button></a>
                </div>

            </div>

        </div>
    </div>
    <script src="js/checkout.js"></script>
</body>

</html>