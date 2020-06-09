<?php
include 'application/bdd_connection.php';
    //HELP TO DEBUG
        //print_r("debug " . $_POST) ;
if(empty($_POST))
    {
        // Récupération de tous les clients du site.
        $query1 =
        '
            SELECT
                employeeNumber,
                lastName,
                firstName
            FROM
                employees
        ';
        $resultSet1 = $pdo->query($query1);
        $employees = $resultSet1->fetchAll();

    }
    else
    {
         // Ajout d'un article du blog.

         $query3 =
         '
             INSERT INTO
                 customers
                 (customerNumber, customerName, contactLastName, contactFirstName, phone, addressLine1, addressLine2, city, state, postalCode, country, salesRepEmployeeNumber, creditLimit)
             VALUES
                 (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
         ';
         $resultSet3=$pdo->prepare($query3);
            //HELP TO DEBUG
                //print_r($_POST['customerNumber']." ");
                //print_r($_POST['customerName']." ");
                //print_r($_POST['contactLastName']." ");
                //print_r($_POST['contactFirstName']." ");
                //print_r($_POST['phone']." ");
                //print_r($_POST['addressLine1']." ");
                //print_r($_POST['addressLine2']." ");
                //print_r($_POST['city']." ");
                //print_r($_POST['state']." ");
                //print_r($_POST['postalCode']." ");
                //print_r($_POST['country']." ");
                //print_r($_POST['salesRepEmployeeNumber']." ");
                //print_r($_POST['creditLimit']." ");
                //print_r($_POST) ;
         $resultSet3->execute([$_POST['customerNumber'], $_POST['customerName'], $_POST['contactLastName'], $_POST['contactFirstName'], $_POST['phone'], $_POST['addressLine1'], $_POST['addressLine2'], $_POST['city'], $_POST['state'], $_POST['postalCode'], $_POST['country'], $_POST['salesRepEmployeeNumber'], $_POST['creditLimit']]);
         //$resultSet3->execute(array('10427', 'commentaire', '456'));
 
                 // Retour à la page d'accueil une fois que le nouvel article du blog a été ajouté.
        //header('Location: index.php');
        //exit();
    }


//include 'templates/create_customer.php';
$template = 'create_customer';
include 'templates/layout.php';