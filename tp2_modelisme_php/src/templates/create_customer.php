<!-- Page d'ajout d'un client -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>PHP</title>
    <link rel="stylesheet" href="css/formulaire.css">
</head>

<button class="button button-secondary" ><a href="index.php" >Accueil</a></button>
<!-- Formulaire de saisie d'un nouveau client -->
<div class="indexbody">
    <form class="generic-form" action="create_customer.php" method="post">
        <fieldset>
            <legend><i class="fa fa-sticky-note-o"></i> Nouveau client :</legend>
            
            <ul>
                <li>
                    <label for="customerNumber">Numéro de client :</label>
                    <input type="number" id="customerNumber" name="customerNumber">
                </li>
                <li>
                    <label for="customerName">Mail :</label>
                    <input type="text" id="customerName" name="customerName">
                </li>
                <li>
                    <label for="contactLastName">Nom :</label>
                    <input type="text" id="contactLastName" name="contactLastName">
                </li>
                <li>
                    <label for="contactFirstName">Prénom :</label>
                    <input type="text" id="contactFirstName" name="contactFirstName">
                </li>
                <li>
                    <label for="phone">Téléphone :</label>
                    <input type="text" id="phone" name="phone">
                </li>
                <li>
                    <label for="addressLine1">Adresse :</label>
                    <input type="text" id="addressLine1" name="addressLine1">
                </li>
                <li>
                    <label for="addressLine2">Complément d'adresse :</label>
                    <input type="text" id="addressLine2" name="addressLine2">
                </li>
                <li>
                    <label for="city">Ville :</label>
                    <input type="text" id="city" name="city">
                </li>
                <li>
                    <label for="state">Région :</label>
                    <input type="text" id="state" name="state">
                </li>
                <li>
                    <label for="postalCode">Code postal :</label>
                    <input type="text" id="postalCode" name="postalCode">
                </li>
                <li>
                    <label for="country">Pays :</label>
                    <input type="text" id="country" name="country">
                </li>
                <li>
                    <label for="salesRepEmployeeNumber">Employé :</label>
                    <select id="salesRepEmployeeNumber" name="salesRepEmployeeNumber">
                        <?php foreach($employees as $employee): ?>
                            <option value="<?= intval($employee['employeeNumber']) ?>"><?= htmlspecialchars($employee['lastName']) ?> <?= htmlspecialchars($employee['firstName']) ?></option>
                        <?php endforeach ?>
                    </select>
                </li>
                <li>
                <label for="creditLimit">Limite de crédit :</label>
                    <input type="text" id="creditLimit" name="creditLimit">
                </li>
                <li>
                    <button class="button button-primary" type="submit">Enregistrer</button>
                    <button class="button button-cancel" href="index.php">Annuler</button>
                </li>
            </ul>
        </fieldset>
    </form>
</div>

