<?php

include('connection.php');
include('header.php');

?>

<body>




    <?php
    $query = 'SELECT * FROM contact
              WHERE
              contact_id =' . $_GET['id'];
    $result = mysqli_query($db, $query) or die(mysqli_error($db));
    while ($row = mysqli_fetch_array($result)) {
        $contactType_row = $row['contact_type'];
        $name_row = $row['name'];
        $organizationName_row = $row['organization'];
        $phoneNumber_row = $row['phone_number'];
        $phoneType_row = $row['phone_number_type'];
        $email_row = $row['email'];
        $emailType_row = $row['email_type'];
        $notes_row = $row['notes'];
        $phoneticFamilyName_row = $row['phonetic_family_name'];
        $phoneticMiddleName_row = $row['phonetic_middle_name'];
        $phoneticGivenName_row = $row['phonetic_given_name'];
        $IMname_row = $row['im_name'];
        $IMtype_row = $row['im_type'];
        $ringtone_row = $row['ringtone'];
        $address_row = $row['address'];
        $addressType_row = $row['address_type'];
        $nickname_row = $row['nickname'];
        $website_row = $row['website'];
        $birthday_row = $row['birthday'];
        $anniversary_row = $row['anniversary'];
        $importantDate_row = $row['important_date'];
        $relationship_row = $row['relationship'];
        $coworkersCheckbox_row = $row['coworkers_group'];
        $familyCheckbox_row = $row['family_group'];
        $friendsCheckbox_row = $row['friends_group'];
        $mycontactsCheckbox_row = $row['my_contacts_group'];
    }

    $id = $_GET['id'];

    ?>
    <?php

    echo '<form role="form" method="post" action="edit1.php?id='.$id.'">';
    ?>
        <div class="container formDiv" style="margin-bottom: 10%;">


            <div class="container addContactsForm">
                <table class="table" style="width: 100%;">
                    <tbody>

                        <tr>
                            <td id="contactTypeDescription">Contact Type:</td>
                            <td id="contactTypeInput">
                                <select id="ContactTypeDiv" class="form-select" aria-label="Default select example" name="contactType" value="<?php echo $contactType_row; ?>">
                                    <!-- <option selected>Open this select menu</option> -->
                                    <option selected value="Google">Google</option>
                                    <option value="Phone">Phone</option>
                                    <option value="SIM1">SIM 1</option>
                                    <option value="SIM2">SIM 2</option>
                                </select>


                            </td>
                        </tr>
                        <tr>
                            <td id="nameDescription">Name<br></td>
                            <td id="nameInput">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <!-- <label for="exampleInputEmail1">Email address</label> -->
                                        <input type="text" class="form-control name1" id="name" placeholder="Name" name="name" value="<?php echo $name_row; ?>">
                                        <!-- icon of arrow down -->
                                        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16"> -->
                                        <!-- <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/> -->
                                        <!-- </svg> -->
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td id="organizationDescription">Organization</td>
                            <td id="organizationInput">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="organization" placeholder="Organization" name="organizationName" value="<?php echo $organizationName_row; ?>">
                                    </div>

                                </div>
                            </td>
                        </tr>
                        <tr class="addPhoneGroup">
                            <td>Phone Number</td>
                            <td>
                                <div class="input-group mb-3">

                                    <input type="tel" class="form-control" name="phoneNumber" placeholder="Enter your Phone Number (Start with 03XXXXXXXXX)" value="<?php echo $phoneNumber_row; ?>">
                                    <select class="form-select" name="phoneNumberType" value="<?php echo $phoneType_row; ?>">
                                        <option selected value="mobile">Mobile</option>
                                        <option value="work">Work</option>
                                        <option value="home">Home</option>
                                        <option value="main">Main</option>
                                        <option value="work-fax">Work Fax</option>
                                        <option value="home-fax">Home Fax</option>
                                        <option value="pager">Pager</option>
                                        <option value="other">Other</option>
                                        <option value="Custom">Custom</option>
                                    </select>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="emailDescription">Email</td>
                            <td class="emailInput">
                                <div class="input-group mb-3">
                                    <input type="email" class="form-control" placeholder="Enter Your Email" name="email" value="<?php echo $email_row; ?>">
                                    <select class="form-select" id="emailTypeOptions" name="emailType" value="<?php echo $emailType_row; ?>">
                                        <option selected value="home">Home</option>
                                        <option value="work">Work</option>
                                        <option value="other">Other</option>
                                        <option value="Custom">Custom</option>
                                    </select>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td id="notesDescription">Notes</td>
                            <td id="notesInput">
                                <div class="form-outline">
                                    <textarea class="form-control" id="notesTextArea" rows="6" placeholder="Notes" name="notes"> <?php echo $notes_row; ?></textarea>
                                    <label class="form-label" for="notesTextArea"></label>
                                </div>
                            </td>
                        </tr>
                        <tr id="addPhoneticNameRow">
                            <td class="phoneticNameDescription">Phonetic Name</td>
                            <td class="phoneticNameInput">
                                <input type="text" class="form-control" id="phoneticFamilyNameText" placeholder="Phonetic Family Name" name="phoneticFamilyName" value="<?php echo $phoneticFamilyName_row; ?>">
                                <input type="text" class="form-control mt-3" id="phoneticMiddleNameText" placeholder="Phonetic Middle Name" name="phoneticMiddleName" value="<?php echo $phoneticMiddleName_row; ?>">
                                <input type="text" class="form-control mt-3" id="phoneticGivenNameText" placeholder="Phonetic Given Name" name="phoneticGivenName" value="<?php echo $phoneticGivenName_row; ?>">

                            </td>
                        </tr>
                        <tr id="IMrow">
                            <td class="IMdescription">IM</td>
                            <td class="IMnameOptions">
                                <div class="input-group mb-3">
                                    <input type="IMtext" class="form-control" placeholder="IM" name="IMname" value="<?php echo $IMname_row; ?>">
                                    <select class="form-select" id="IMtypes" name="IMtype" value="<?php echo $IMtype_row; ?>">
                                        <option selected value="AIM">AIM</option>
                                        <option value="windowLive">Live</option>
                                        <option value="yahoo">Yahoo</option>
                                        <option value="skype">Skype</option>
                                        <option value="QQ">QQ</option>
                                        <option value="hangouts">Hangouts</option>
                                        <option value="icq">ICQ</option>
                                        <option value="jabber">Jabber</option>
                                        <option value="customIM">Custom</option>
                                    </select>
                                </div>
                            </td>
                        </tr>

                        <tr id="applyRingtoneRow">
                            <td id="applyRingtoneDescription">Ringtone:</td>
                            <td id="applyRingtoneInput">
                                <select id="applyRingtoneOptions" class="form-select" name="ringtone" value="<?php echo $ringtone_row; ?>">
                                    <!-- <option selected>Open this select menu</option> -->
                                    <option value="None">None</option>
                                    <option selected value="Default">Default</option>
                                    <option value="Ringtone 1">Ringtone 1</option>
                                    <option value="Ringtone 2">Ringtone 2</option>
                                </select>
                            </td>
                        </tr>
                        <tr class="AddressGroup">
                            <td>Address:</td>
                            <td>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="address" placeholder="Enter your Address" value="<?php echo $address_row; ?>">
                                    <select class="form-select" name="addressType" value="<?php echo $addressType_row; ?>">
                                        <option selected value="home">Home</option>
                                        <option value="work">Work</option>
                                        <option value="other">Other</option>
                                        <option value="custom">Custom</option>
                                    </select>
                                </div>
                            </td>
                        </tr>


                        <!-- <tr>
                </td>
                </td> -->
                        <tr id="addNickNameRow">
                            <td class="nickNameDescription">Nickname</td>
                            <td class="nickNameInput">
                                <input type="text" class="form-control" id="nickNameText" placeholder="Enter your Nickame" name="nickname" value="<?php echo $nickname_row; ?>">
                            </td>
                        </tr>
                        <tr class="inputWebsiteRow">
                            <td class="webisteDescription">Website</td>
                            <td class="websiteInput">
                                <input type="text" class="form-control" id="emailText" placeholder="Enter your Website" name="website" value="<?php echo $website_row; ?>">
                            </td>
                        </tr>

                        <tr class="enterBirthdayRow">
                            <td class="birthdayDescription">Enter your Birthday</td>
                            <td class="birthdayInput">
                                <input type="date" class="form-control" id="birthdayDateInput" placeholder="dd-mm-yyyy" min="1900-01-01" max="" name="birthday" value="<?php echo $birthday_row; ?>">
                            </td>
                        </tr>
                        <tr class="enterAnniversaryRow">
                            <td class="anniversaryDescription">Anniversary</td>
                            <td class="anniversaryInput">
                                <input type="date" class="form-control" id="anniversaryDateInput" placeholder="dd-mm-yyyy" min="1900-01-01" max="" name="anniversary" value="<?php echo $anniversary_row; ?>">
                            </td>
                        </tr>
                        <tr class="importantDateRow">
                            <td class="importantDateDescription">Important Date</td>
                            <td class="importantDateInput">
                                <input type="date" class="form-control" id="importantDateInput" placeholder="dd-mm-yyyy" min="1900-01-01" max="" name="importantDate" value="<?php echo $importantDate_row; ?>">
                            </td>
                        </tr>
                        <tr class="relationshipRow">
                            <td id="relationshipDescription">Relationship:</td>
                            <td class="relationshipInput">
                                <select class="relationshipOptions form-select" name="relationship" value="<?php echo $relationship_row; ?>">
                                    <!-- <option selected>Open this select menu</option> -->
                                    <option selected value="Default">Select relationship</option>
                                    <option value="None">None</option>
                                    <option value="Assistant">Assistant</option>
                                    <option value="Brother">Brother</option>
                                    <option value="Child">Child</option>
                                    <option value="Domestic Partner">Domestic Partner</option>
                                    <option value="Father">Father</option>
                                    <option value="Friend">Friend</option>
                                    <option value="Manager">Manager</option>
                                    <option value="Mother">Mother</option>
                                    <option value="Parent">Parent</option>
                                    <option value="Partner">Partner</option>
                                    <option value="Referred By">Referred By</option>
                                    <option value="Relative">Relative</option>
                                    <option value="Sister">Sister</option>
                                    <option value="Spouse">Spouse</option>
                                    <option value="Custom">Custom</option>
                                </select>
                            </td>
                        </tr>

                        <tr class="groupRow">
                            <td class="groupDescription">Group</td>
                            <td class="groupInput">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="coworkersCheckbox" value="coworkers" name="coworkersCheckbox" value="<?php echo $coworkersCheckbox_row; ?>">
                                    <label class="form-check-label" for="coworkersCheckbox">Coworkers</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="familyCheckbox" value="family" name="familyCheckbox" value="<?php echo $familyCheckbox_row; ?>">
                                    <label class="form-check-label" for="familyCheckbox">Family</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="friendsCheckbox" value="friends" name="friendsCheckbox" value="<?php echo $friendsCheckbox_row; ?>">
                                    <label class="form-check-label" for="friendsCheckbox">Friends</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="myContactsCheckbox" value="myContacts" name="myContactsCheckbox" value="<?php echo $mycontactsCheckbox_row; ?>">
                                    <label class="form-check-label" for="myContactsCheckbox">My Contacts</label>
                                </div>

                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div id="submitReset" class="container mt-3">
                <input style="width: 100%; float: left;" class="btn btn-success" type="submit" value="Submit">
                <!-- <div class="modal fade" id="SubmitModal" tabindex="-1" role="dialog" aria-labelledby="SubmitModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="SubmitModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div> -->


            </div>

            <!-- </div>
</div> -->
    </form>
    <script>
        $(document).ready(function() {
            $(`select[name="phoneNumberType"]`).val("<?php echo $phoneType_row; ?>");
            $(`select[name="addressType"]`).val("<?php echo $addressType_row; ?>");
            $(`select[name="relationship"]`).val("<?php echo $relationship_row; ?>");
            $(`#emailTypeOptions`).val("<?php echo $emailType_row; ?>");
            $(`#IMtypes`).val("<?php echo $IMtype_row; ?>");
            $(`#applyRingtoneOptions`).val("<?php echo $ringtone_row; ?>");
            console.log("<?php echo $coworkersCheckbox_row; ?> " + "<?php echo $familyCheckbox_row; ?> " + "<?php echo $friendsCheckbox_row; ?> " + "<?php echo $mycontactsCheckbox_row; ?>");
            if("<?php echo $coworkersCheckbox_row; ?>" == "1"){
                $("#coworkersCheckbox").prop('checked', 1);
            }
            if("<?php echo $familyCheckbox_row; ?>" == "1"){

                $("#familyCheckbox").prop('checked', 1);
            }
            if("<?php echo $friendsCheckbox_row; ?>" == "1"){

                $("#friendsCheckbox").prop('checked', 1);
            }
            if("<?php echo $mycontactsCheckbox_row; ?>" == "1"){

                $("#myContactsCheckbox").prop('checked', 1);
            }
        });
        console.log("<?php echo "$id" ?>");
    </script>
</body>

</html>