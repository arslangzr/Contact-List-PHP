<?php

include('connection.php');
include('header.php');

?>

<body>

    <div id="wrapper">


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Contacts List
                        </h1>

                    </div>
                </div>
                <!-- /.row -->


                <div class="col-lg-12">
                    <?php
                    // $fname = $_POST['firstname'];
                    // $lname = $_POST['lastname'];
                    // $mname = $_POST['Middlename'];
                    // $address = $_POST['Address'];
                    // $contct = $_POST['Contact'];
                    // $comment = $_POST['comment'];
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


                    switch ($_GET['action']) {
                        case 'add':
                            $query = "INSERT INTO `contact`(
                                    `contact_type`,
                                    `name`,
                                    `organization`,
                                    `phone_number`,
                                    `phone_number_type`,
                                    `email`,
                                    `email_type`,
                                    `notes`,
                                    `phonetic_family_name`,
                                    `phonetic_middle_name`,
                                    `phonetic_given_name`,
                                    `im_name`,
                                    `im_type`,
                                    `ringtone`,
                                    `address`,
                                    `address_type`,
                                    `nickname`,
                                    `website`,
                                    `birthday`,
                                    `anniversary`,
                                    `important_date`,
                                    `relationship`,
                                    `coworkers_group`,
                                    `family_group`,
                                    `friends_group`,
                                    `my_contacts_group`
                                )
                                VALUES(
                                    '$contactType',
                                    '$name',
                                    '$organizationName',
                                    '$phoneNumber',
                                    '$phoneType',
                                    '$email',
                                    '$emailType',
                                    '$notes',
                                    '$phoneticFamilyName',
                                    '$phoneticMiddleName',
                                    '$phoneticGivenName',
                                    '$IMname',
                                    '$IMtype',
                                    '$ringtone',
                                    '$address',
                                    '$addressType',
                                    '$nickname',
                                    '$website',
                                    '$birthday',
                                    '$anniversary',
                                    '$importantDate',
                                    '$relationship',
                                    '$coworkersCheckbox',
                                    '$familyCheckbox',
                                    '$friendsCheckbox',
                                    '$myContactsCheckbox'
                                )";
                            mysqli_query($db, $query) or die('Error in updating Database');

                            break;
                    }
                    ?>
                    <script type="text/javascript">
                        alert("Successfully added.");
                        window.location = "index.php";
                    </script>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->



</body>

</html>