<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact List</title>
    <meta charset="UTF-8">
    <title>Contact List</title>

    <!-- Including JavaScript File -->
    <script src="scripts/script.js"></script>
    <!-- Including jQuery File -->
    <!-- <script src="scripts/myjQuery.js"></script> -->

    <!-- Including Bootstrap Library Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Including Jquery Library -->
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.6.0.js"></script>
</head>

<body>
    <?php
    $id = $_GET['id'];
    echo $id;
    $contact_id = $_POST['contact_id'];
    // echo $contact_id;
    $contactType = $_POST['contactType'];
    $name = $_POST['name'];
    $organizationName = $_POST['organizationName'];
    $phoneNumber = $_POST['phoneNumber'];
    $phoneType = $_POST['phoneType'];
    $email = $_POST['email'];
    $emailType = $_POST['emailType'];
    $notes = $_POST['notes'];
    $phoneticFamilyName = $_POST['phoneticFamilyName'];
    $phoneticMiddleName = $_POST['phoneticMiddleName'];
    $phoneticGivenName = $_POST['phoneticGivenName'];
    $IMname = $_POST['IMname'];
    $IMtype = $_POST['IMtype'];
    $ringtone = $_POST['ringtone'];
    $address = $_POST['address'];
    $addressType = $_POST['addressType'];
    $nickname = $_POST['nickname'];
    $website = $_POST['website'];
    $birthday = $_POST['birthday'];
    $anniversary = $_POST['anniversary'];
    $importantDate = $_POST['importantDate'];
    $relationship = $_POST['relationship'];
    $coworkersCheckbox = $_POST['coworkersCheckbox'];
    $familyCheckbox = $_POST['familyCheckbox'];
    $friendsCheckbox = $_POST['friendsCheckbox'];
    $myContactsCheckbox = $_POST['myContactsCheckbox'];

    include('connection.php');

    // $query = 'UPDATE contact SET
    //             contact_type ="'.$contactType.'",
    //             name ="'.$name.'",
    //             organization ="'.$organizationName.'",
    //             phone_number ="'.$phoneNumber.'",
    //             phone_number_type ="'.$phoneType.'",
    //             email ="'.$email.'",
    //             email_type ="'.$emailType.'",
    //             notes ="'.$notes.'",
    //             phonetic_family_name ="'.$phoneticFamilyName.'",
    //             phonetic_middle_name ="'.$phoneticMiddleName.'",
    //             phonetic_given_name ="'.$phoneticGivenName.'",
    //             im_name ="'.$IMname.'",
    //             im_type ="'.$IMtype.'",
    //             ringtone ="'.$ringtone.'",
    //             address ="'.$address.'",
    //             address_type ="'.$addressType.'",
    //             nickname ="'.$nickname.'",
    //             website ="'.$website.'",
    //             birthday ="'.$birthday.'",
    //             anniversary ="'.$anniversary.'",
    //             important_date ="'.$importantDate.'",
    //             relationship ="'.$relationship.'",
    //             coworkers_group ="'.$coworkersCheckbox.'",
    //             family_group ="'.$familyCheckbox.'",
    //             friends_group ="'.$friendsCheckbox.'",
    //             my_contacts_group ="'.$myContactsCheckbox.'"
    //                WHERE contact_id = '.$id.'"';
    $query = "UPDATE `contacts`.`contact` SET                
                `contact_type` = '$contactType',
                `name` = '$name',
                `organization` = '$organizationName',
                `phone_number` = '$phoneNumber',
                `phone_number_type` = '$phoneType',
                `email` = '$email',
                `email_type` = '$emailType',
                `notes` = '$notes',
                `phonetic_family_name` = '$phoneticFamilyName',
                `phonetic_middle_name` = '$phoneticMiddleName',
                `phonetic_given_name` = '$phoneticGivenName',
                `im_name` = '$IMname',
                `im_type` = '$IMtype',
                `ringtone` = '$ringtone',
                `address` = '$address',
                `address_type` = '$addressType',
                `nickname` = '$nickname',
                `website` = '$website',
                `birthday` = '$birthday',
                `anniversary` = '$anniversary',
                `important_date` = '$importantDate',
                `relationship` = '$relationship',
                `coworkers_group` = '$coworkersCheckbox',
                `family_group` = '$familyCheckbox',
                `friends_group` = '$friendsCheckbox',
                `my_contacts_group` = '$myContactsCheckbox' WHERE contact_id =" . $_GET['id'];
    $result = mysqli_query($db, $query) or die(mysqli_error($db));

    ?>
    <script type="text/javascript">
        alert("Updated Successfully.");
        window.location = "index.php";
    </script>
</body>

</html>