<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>PHP</title>
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
            <nav>
            <button class="button button-secondary" ><a href="create_orders.php" >Creation de bon de commande</a></button>
            <button class="button button-secondary" ><a href="create_customer.php" >Nouveau client</a></button>
            </nav>

      <div>
        <table >
            <h1>Liste des commandes</h1>
            <thead>
                <tr>
                    <th>Commande</th>
                    <th>Date de la commande</th>
                    <th>Date de livraison</th>
                    <th>Statut</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($orders as $order): ?>
                    <tr>
                        <td>
                            <a href="order-form.php?orderNumber=<?= $order['orderNumber'] ?>"><?= $order['orderNumber'] ?></a>
                        </td>
                        <td><?= $order['orderDate'] ?></td>
                        <td><?= $order['shippedDate'] ?></td>
                        <td><?= $order['status'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
            </table>
      </div>
    </section>
</body>
</html>