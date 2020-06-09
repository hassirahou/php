<?php
include 'application/bdd_connection.php';

if(empty($_POST))
    {
        // Récupération de tous les clients du site.
        $query1 =
        '
            SELECT
                customerNumber,
                customerName,
                contactFirstName,
                contactLastName
            FROM
                customers
        ';
        $resultSet1 = $pdo->query($query1);
        $customers = $resultSet1->fetchAll();

        // Récupération de toutes les produits du site.
        $query2 =
        '
            SELECT
                productCode,
                productName
            FROM
                products
        ';
        $resultSet2 = $pdo->query($query2);
        $products = $resultSet2->fetchAll();

        // Sélection et affichage du template PHTML.
        //$template = 'add_post';
        //include 'templates/layout.php';
    }
    else
    {
        // Ajout d'un article du blog.

        $query3 =
        '
            INSERT INTO
                orders
                (orderNumber, orderDate, requiredDate, status, customerNumber)
            VALUES
                (?, NOW(), NOW()+INTERVAL 10 DAY, ?, ?)
        ';
        $resultSet3=$pdo->prepare($query3);
        //print_r($_POST['orderNumber']);
        //print_r($_POST['customer']);
        $resultSet3->execute([$_POST['orderNumber'], $_POST['status'], $_POST['customer']]);
        //$resultSet3->execute(array('10427', 'commentaire', '456'));



        $query4 =
        '
            INSERT INTO
                orderdetails
                (productCode, orderNumber, quantityOrdered, priceEach, orderLineNumber)
            VALUES
                (?, ? ,?, ?, ?)
        ';
        
        //print_r($_POST['product'] . " ");

        //print_r($_POST['orderNumber'] . " ");

        //print_r($_POST['quantityOrdered'] . " ");

        //print_r($_POST['priceEach'] . " ");

        //print_r($_POST['orderLineNumber'] . " ");

        $resultSet4=$pdo->prepare($query4);
        $resultSet4->execute([$_POST['product'], $_POST['orderNumber'], $_POST['quantityOrdered'], $_POST['priceEach'],$_POST['orderLineNumber']]);


        // Retour à la page d'accueil une fois que le nouvel article du blog a été ajouté.
        header('Location: index.php');
        exit();
    }

//include 'templates/create_orders.php';
$template = 'create_orders';
include 'templates/layout.php';