<!-- Page d'ajout d'un article -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>PHP</title>
    <link rel="stylesheet" href="css/formulaire.css"></head>

    <button class="button button-secondary" ><a href="index.php" >Accueil</a></button>
<!-- Formulaire de saisie d'un nouvel article -->
<body>
    <div class="indexbody">
        <form class="generic-form" action="create_orders.php" method="post">
            <fieldset>
                <legend><i class="fa fa-sticky-note-o"></i> Nouveau bon de commande</legend>
                
                <ul>
                    <li>
                        <label for="orderNumber">Numéro de commande :</label>
                        <input type="number" id="orderNumber" name="orderNumber">
                    </li>
                    <li>
                        <label for="quantityOrdered">Quantité :</label>
                        <input type="number" id="quantityOrdered" name="quantityOrdered">
                    </li>
                    <li>
                        <label for="priceEach">Prix unitaire :</label>
                        <input type="number" id="priceEach" name="priceEach">
                    </li>
                    <li>
                        <label for="orderLineNumber">Ordre de commande :</label>
                        <input type="number" id="orderLineNumber" name="orderLineNumber">
                    </li>
                    <li>
                        <label for="status">Statut :</label>
                        <input type="text" id="status" name="status">
                    </li>
                    <li>
                        <label for="customer">Client :</label>
                        <select id="customer" name="customer">
                            <?php foreach($customers as $customer): ?>
                                <option value="<?= intval($customer['customerNumber']) ?>"><?= htmlspecialchars($customer['customerName']) ?> <?= htmlspecialchars($customer['contactFirstName']) ?> <?= htmlspecialchars($customer['contactLastName']) ?></option>
                            <?php endforeach ?>
                        </select>
                    </li>
                    <li>
                        <label for="product">Produit :</label>
                        <select id="product" name="product">
                            <?php foreach($products as $product): ?>
                                <option value="<?= $product['productCode'] ?>"><?= htmlspecialchars($product['productCode']) ?> <?= htmlspecialchars($product['productName']) ?> </option>
                            <?php endforeach ?>
                        </select>
                    </li>
                    <li>
                        <button class="button button-primary" type="submit">Enregistrer</button>
                        <button class="button button-cancel" href="index.php">Annuler</button>
                    </li>
                </ul>
            </fieldset>
        </form>
    </div>
</body>