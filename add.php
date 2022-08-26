<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('connection.php');
// $name = "abcdef";
// $phone = "090078601";
// $address = "Lahore";
// $sql = "INSERT INTO `contact` (`Name`, `Phone`, `Address`) VALUES ('$name', '$phone', '$address');";
// $result = mysqli_query($mysqli_db, $sql);
// if ($result) {
//     echo "query was created successfully";
// } else {
//     echo "query creation unsuccessful";
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
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
    <!-- <script src="scripts/jquery-3.6.0.js"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> -->
    <!-- <style>
        .container.col-md-6 {
            /* height: 10%; */
            width: 45%;
            height: 50%;
        } <style>
        .container.col-md-6 {
            /* height: 10%; */
            width: 45%;
            height: 50%;
        }
    <
    </style> -->
    <script>
        // Javascript max date today variable
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth() + 1; //January is 0!
        var yyyy = today.getFullYear();

        if (dd < 10) {
            dd = '0' + dd;
        }

        if (mm < 10) {
            mm = '0' + mm;
        }

        var todaydate = yyyy + '-' + mm + '-' + dd;
        // document.getElementById("birthdayDateInput").setAttribute("max", "2022-04-22");
        // document.querySelector(".birthdayDateInput").setAttribute("max", "2022-04-22");


        $(document).ready(function() {
            $("#addFieldSelectButton").click(function() {
                var addFieldlength = new $('#addFieldSelectOptions').children('option').length;
                console.log(addFieldlength);
                if (addFieldlength == 1) {
                    $("#addAnotherFieldDescription").hide();
                }

            });
            // $('.addPhoneGroup * .form-select').on('change', function() {
            //     if ($(this).val() === 'Custom') {
            //         $('#addPhoneTypeModal').modal('show');
            //     }
            // });
            $(".addPhoneGroup * .form-select > option[value='Custom']").click(function() {
                $('#addPhoneTypeModal').modal('toggle');
            });
            $("#addContactsButton").css("display", "none");
            $(".expandedNameGroup").css("display", "none");
            nameField = document.getElementById("name");
            $("#nameExpand").click(function() {
                $(".expandedNameGroup").fadeToggle(0);
                // $(nameField).fadeToggle(1000);
                // $(".name1").text("");
                if (nameField.disabled == false) {
                    $('#name').val('');
                    document.querySelector("#nameExpand").innerHTML = `Collapse <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
</svg>`;
                    nameField.disabled = true;
                } else {
                    nameField.disabled = false;
                    $('.expandedNameGroup input[type="text"]').val('');
                    document.querySelector("#nameExpand").innerHTML = `Expand <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
</svg>`;

                }

            });
            $(".expandedOrganizationGroup").css("display", "none");
            $("#expandOrganzation").click(function() {
                $(".expandedOrganizationGroup").fadeToggle(0);
                organizationText = document.getElementById("organization");
                if (organizationText.disabled == false) {
                    organizationText.disabled = true;
                    document.querySelector("#expandOrganzation").innerHTML = `Collapse <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
</svg>`;
                    $('#organization').val('');
                } else {
                    organizationText.disabled = false;
                    document.querySelector("#expandOrganzation").innerHTML = `Expand <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
</svg>`;

                }
            });
            $("#addEmailButton").click(function() {
                $("#insertEmailBefore").before(`<tr class="addEmailGroup">
                <td class="emailDescription">Email</td>
                <td class="emailInput">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Enter Your Email">
                        <select class="form-select"
                            >
                            <option selected value="home">Home</option>
                            <option value="work">Work</option>
                            <option value="other">Other</option>
                            
                        </select>
                    </div>
                </td>
            </tr>`);
            });
            let count = 0;
            $("#addPhoneButton").click(function() {
                if (count < 5) {
                    $("#insertPhoneBefore").before(`<tr class="addPhoneGroup">
                <td>Phone Number</td>
                <td>
                    <div class="input-group mb-3">
    
                        <input type="tel" class="form-control" name="phone"
                            pattern="[0]{1}[3]{1}[0-5]{1}[0-9]{8}"
                            placeholder="Enter your Phone Number (Start with 03XXXXXXXXX)">
                        <select class="form-select">
                            <option selected value="mobile">Mobile</option>
                            <option value="work">Work</option>
                            <option value="home">Home</option>
                            <option value="main">Main</option>
                            <option value="work-fax">Work Fax</option>
                            <option value="home-fax">Home Fax</option>
                            <option value="pager">Pager</option>
                            <option value="other">Other</option>
                            
                        </select>
                    </div>
                </td>
            </tr>`);
                    count = count + 1;
                    alert(count);
                } else {
                    alert("limit exceeded");
                }
            });
            $("#addIMserviceButton").click(function() {
                // language=HTML
                $("#addIMrow").before(`<tr>
                <td class="IMdescription">IM</td>
                <td class="IMnameInput">
                    <div class="input-group mb-3">
                        <input type="IMtext" class="form-control" placeholder="IM">
                        <select class="form-select" id="IMtypes">
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
                </td> </tr>
            `);
            });

            $("#addAddressButton").click(function() {
                $("#addAddressRow").before(`<tr class="AddressGroup">
            <td>Address:</td>
            <td>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="address" placeholder="Enter your Address">
                    <select class="form-select">
                        <option selected value="home">Home</option>
                        <option value="work">Work</option>
                        <option value="other">Other</option>
                        
                    </select>
                </div>
            </td>
        </tr>`);
            });

            $("#addWebsiteButton").click(function() {
                $("#addWebsiteRow").before(`<tr class="inputWebsiteRow">
            <td class="webisteDescription">Website</td>
            <td class="websiteInput">
                <input type="text" class="form-control" id="nickNameText" placeholder="Enter your Website">
            </td>
        </tr>`);
            });
            $("#addRelationshipButton").click(function() {
                $("#addRelationshipFieldRow").before(`<tr class="relationshipRow">
            <td class="relationshipDescription">Relationship:</td>
            <td class="relationshipInput">
                <select class="relationshipOptions form-select">
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
                    
                </select>
            </td>
        </tr>
`);
            });
            //             $("#resetYesButton").click(function(){
            //   console.log("clicked");
            // });

            // $("#resetYesButton").click(function () {
            //     /*Clear all input type="text" box*/
            //     $('.addContactsForm input[type="text"]').val('');
            //     $('.addPhoneGroup input[type="tel"]').val('');
            //     $('.emailInput input[type="email"]').val('');
            //     $('#notesTextArea').val('');
            //     $("#closeButton").trigger("click");
            //     $("#clearUpload").trigger("click");
            // });
            // $('input [type="tel"]').inputmask('00000000000');
        });

        function preview() {
            frame.src = URL.createObjectURL(event.target.files[0]);
        }

        function clearImage() {
            document.getElementById('uploadImageButton').value = null;
            frame.src = "resources/img_avatar.png";
        }
    </script>
</head>

<body>
    <form role="form" method="post" action="transac.php?action=add">
        <div class="container formDiv" style="margin-bottom: 10%;">

            <div class="container mt-3 d-grid gap-2 col-6 mx-auto">
                <button id="addContactsButton" type="button" class="btn btn-primary btn-lg button-center">Click Here to Add
                    Contacts</button>
            </div>
            <div class="container addContactsForm">
                <table class="table" style="width: 100%;">
                    <tbody>
                        <tr>
                            <!-- <td id="uploadPhotoDescription" style="visibility: hidden;">Upload Photo:</th> -->
                            <td id="uploadPhotoInput" class="float-left" colspan="2">
                                <div class="container col-md-6">
                                    <div class="mb-5">
                                        <label for="Image" class="form-label">Upload Contact Image</label>
                                        <input class="form-control" type="file" id="uploadImageButton" onchange="preview()">

                                    </div>
                                    <div class="card py-0 mx-5 border col-md-9">
                                        <!-- <img src="..." class="card-img-top" alt="..."> -->
                                        <img id="frame" src="resources/img_avatar.png" class="img-fluid card-img-top rounded-circle" alt="Placeholder" />
                                        <div class="card-body">
                                            <h5 class="card-title">Profile Picture</h5>
                                            <div style="width: 100%;">

                                                <button onclick="clearImage()" class="btn btn-secondary my-3" style="margin: 0 auto; display: block;" id="clearUpload">Clear
                                                    Upload</button>
                                            </div>
                                        </div>
                                    </div>
                            </td>
                        </tr>
                        <tr>
                            <td id="contactTypeDescription">Contact Type:</td>
                            <td id="contactTypeInput">
                                <select id="ContactTypeDiv" class="form-select" aria-label="Default select example" name="contactType">
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
                                        <input type="text" class="form-control name1" id="name" placeholder="Name" name="name">
                                        <button id="nameExpand" class="btn btn-outline-secondary px-5" type="button" id="expandNameButton" style="margin-right: 0%;">Expand <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                                            </svg></button>
                                        <!-- icon of arrow down -->
                                        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16"> -->
                                        <!-- <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/> -->
                                        <!-- </svg> -->
                                    </div>
                                    <div class="expandedNameGroup">
                                        <input type="text" class="form-control nameGroupInputs mt-2" id="namePrefixText" placeholder="Name Prefix">
                                        <input type="text" class="form-control nameGroupInputs mt-2" id="firstNameText" placeholder="First Name">
                                        <input type="text" class="form-control nameGroupInputs mt-2" id="middleNameText" placeholder="Middle Name">
                                        <input type="text" class="form-control nameGroupInputs mt-2" id="lastNameText" placeholder="Last Name">
                                        <input type="text" class="form-control nameGroupInputs mt-2" id="nameSuffixText" placeholder="Name Suffix">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td id="organizationDescription">Organization</td>
                            <td id="organizationInput">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="organization" placeholder="Organization" name="organizationName">
                                        <button class="btn btn-outline-secondary expandOrganizationButton px-5" type="button" id="expandOrganzation">Expand <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                                            </svg></button>
                                    </div>
                                    <div class="expandedOrganizationGroup">
                                        <input type="text" class="form-control nameGroupInputs mt-2" id="companyText" placeholder="Company">
                                        <input type="text" class="form-control nameGroupInputs mt-2" id="titleText" placeholder="Title">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="addPhoneGroup">
                            <td>Phone Number</td>
                            <td>
                                <div class="input-group mb-3">

                                    <input type="tel" class="form-control" name="phoneNumber" placeholder="Enter your Phone Number (Start with 03XXXXXXXXX)">
                                    <select class="form-select" name="phoneNumberType">
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
                        <tr id="insertPhoneBefore">
                            <td id="addPhoneColumn" colspan="2">
                                <div class="d-grid gap-2">
                                    <button id="addPhoneButton" class="btn btn-dark" type="button">Add Phone Number</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="emailDescription">Email</td>
                            <td class="emailInput">
                                <div class="input-group mb-3">
                                    <input type="email" class="form-control" placeholder="Enter Your Email" name="email">
                                    <select class="form-select" id="emailTypeOptions" name="emailType">
                                        <option selected value="home">Home</option>
                                        <option value="work">Work</option>
                                        <option value="other">Other</option>
                                        <option value="Custom">Custom</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr id="insertEmailBefore">
                            <td id="addEmailDescription" colspan="2">
                                <div class="d-grid gap-2">
                                    <button id="addEmailButton" class="btn btn-dark" type="button">Add Email</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td id="notesDescription">Notes</td>
                            <td id="notesInput">
                                <div class="form-outline">
                                    <textarea class="form-control" id="notesTextArea" rows="6" placeholder="Notes" name="notes"></textarea>
                                    <label class="form-label" for="notesTextArea"></label>
                                </div>
                            </td>
                        </tr>
                        <tr id="addPhoneticNameRow" style="display: none;">
                            <td class="phoneticNameDescription">Phonetic Name</td>
                            <td class="phoneticNameInput">
                                <input type="text" class="form-control" id="phoneticFamilyNameText" placeholder="Phonetic Family Name" name="phoneticFamilyName">
                                <input type="text" class="form-control mt-3" id="phoneticMiddleNameText" placeholder="Phonetic Middle Name" name="phoneticMiddleName">
                                <input type="text" class="form-control mt-3" id="phoneticGivenNameText" placeholder="Phonetic Given Name" name="phoneticGivenName">

                            </td>
                        </tr>
                        <tr id="IMrow" style="display:none;">
                            <td class="IMdescription">IM</td>
                            <td class="IMnameOptions">
                                <div class="input-group mb-3">
                                    <input type="IMtext" class="form-control" placeholder="IM" name="IMname">
                                    <select class="form-select" id="IMtypes" name="IMtype">
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
                        <tr id="addIMrow" style="display:none;">
                            <td id="addIMserviceSpan" colspan="2">
                                <div class="d-grid gap-2">
                                    <button id="addIMserviceButton" class="btn btn-dark" type="button">Add IM service</button>
                                </div>
                            </td>
                        </tr>
                        <tr id="applyRingtoneRow" style="display:none;">
                            <td id="applyRingtoneDescription">Ringtone:</td>
                            <td id="applyRingtoneInput">
                                <select id="applyRingtoneOptions" class="form-select" name="ringtone">
                                    <!-- <option selected>Open this select menu</option> -->
                                    <option value="None">None</option>
                                    <option selected value="Default">Default</option>
                                    <option value="Ringtone 1">Ringtone 1</option>
                                    <option value="Ringtone 2">Ringtone 2</option>
                                </select>
                            </td>
                        </tr>
                        <tr class="AddressGroup" style="display: none;">
                            <td>Address:</td>
                            <td>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="address" placeholder="Enter your Address">
                                    <select class="form-select" name="addressType">
                                        <option selected value="home">Home</option>
                                        <option value="work">Work</option>
                                        <option value="other">Other</option>
                                        <option value="custom">Custom</option>
                                    </select>
                                </div>
                            </td>
                        </tr>

                        <tr id="addAddressRow" style="display: none;">
                            <td id="addAddressSpan" colspan="2">
                                <div class="d-grid gap-2">
                                    <button id="addAddressButton" class="btn btn-dark" type="button">Add Address</button>
                                </div>
                            </td>
                        </tr>
                        <!-- <tr>
                </td>
                </td> -->
                        <tr id="addNickNameRow" style="display: none;">
                            <td class="nickNameDescription">Nickname</td>
                            <td class="nickNameInput">
                                <input type="text" class="form-control" id="nickNameText" placeholder="Enter your Nickame" name="nickname">
                            </td>
                        </tr>
                        <tr class="inputWebsiteRow" style="display:none;">
                            <td class="webisteDescription">Website</td>
                            <td class="websiteInput">
                                <input type="text" class="form-control" id="emailText" placeholder="Enter your Website" name="website">
                            </td>
                        </tr>
                        <tr id="addWebsiteRow" style="display: none;">
                            <td id="addWebsiteSpan" colspan="2">
                                <div class="d-grid gap-2">
                                    <button id="addWebsiteButton" class="btn btn-dark" type="button">Add Website</button>
                                </div>
                            </td>
                        </tr>
                        <tr class="enterBirthdayRow" style="display: none;">
                            <td class="birthdayDescription">Enter your Birthday</td>
                            <td class="birthdayInput">
                                <input type="date" class="form-control" id="birthdayDateInput" placeholder="dd-mm-yyyy" value="" min="1900-01-01" max="" name="birthday">
                            </td>
                        </tr>
                        <tr class="enterAnniversaryRow" style="display: none;">
                            <td class="anniversaryDescription">Anniversary</td>
                            <td class="anniversaryInput">
                                <input type="date" class="form-control" id="anniversaryDateInput" placeholder="dd-mm-yyyy" value="" min="1900-01-01" max="" name="anniversary">
                            </td>
                        </tr>
                        <tr class="importantDateRow" style="display: none;">
                            <td class="importantDateDescription">Important Date</td>
                            <td class="importantDateInput">
                                <input type="date" class="form-control" id="importantDateInput" placeholder="dd-mm-yyyy" value="" min="1900-01-01" max="" name="importantDate">
                            </td>
                        </tr>
                        <tr class="relationshipRow" style="display: none;">
                            <td id="relationshipDescription">Relationship:</td>
                            <td class="relationshipInput">
                                <select class="relationshipOptions form-select" name="relationship">
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
                        <tr id="addRelationshipFieldRow" style="display: none;">
                            <td id="addRelationshipSpan" colspan="2">
                                <div class="d-grid gap-2">
                                    <button id="addRelationshipButton" class="btn btn-dark" type="button">Add Relationship</button>
                                </div>
                            </td>
                        </tr>
                        <tr class="groupRow" style="display: none;">
                            <td class="groupDescription">Group</td>
                            <td class="groupInput">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="coworkersCheckbox" value="coworkers" name="coworkersCheckbox">
                                    <label class="form-check-label" for="coworkersCheckbox">Coworkers</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="familyCheckbox" value="family" name="familyCheckbox">
                                    <label class="form-check-label" for="familyCheckbox">Family</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="friendsCheckbox" value="friends" name="friendsCheckbox">
                                    <label class="form-check-label" for="friendsCheckbox">Friends</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="myContactsCheckbox" value="myContacts" name="myContactsCheckbox">
                                    <label class="form-check-label" for="myContactsCheckbox">My Contacts</label>
                                </div>

                            </td>
                        </tr>
                        <tr id="addAnotherFieldRow">
                            <td id="addAnotherFieldDescription" colspan="2">
                                <div class="d-grid gap-2">
                                    <button id="addAnotherFieldButton" class="btn btn-dark" type="button" data-bs-toggle="modal" data-bs-target="#addFieldModal">Add
                                        another field</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="addFieldModal" tabindex="-1" aria-labelledby="addFieldModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="addFieldModalLabel">Select Field Name</h5>
                                                    <button id="addFieldModalCloseButton" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div id="selectFieldWarning" class="alert alert-warning" role="alert" style="display:none;">
                                                        Please select a field
                                                    </div>
                                                    <select class="form-select" id="addFieldSelectOptions">
                                                        <option value="selectOption" selected>Select an option</option>
                                                        <option value="phoneticName">Phonetic Name</option>
                                                        <option value="IM">IM</option>
                                                        <option value="phoneRingtone">Phone Ringtone</option>
                                                        <option value="Address">Address</option>
                                                        <option value="Nickname">Nickname</option>
                                                        <option value="Website">Website</option>
                                                        <option value="Birthday">Birthday</option>
                                                        <option value="Anniversary">Anniversary</option>
                                                        <option value="importantDate">Important Date</option>
                                                        <option value="relationship">Relationship</option>
                                                        <option value="group">Group</option>
                                                    </select>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                    <button type="button" id="addFieldSelectButton" class="btn btn-primary">Select</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="submitReset" class="container mt-3">
                <input style="width: 49%; float: left;" class="btn btn-success" type="submit">
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
                <button style="width: 49%; float: right;" class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#resetModal">Reset</button>
                <!-- Modal -->
                <div class="modal fade" id="resetModal" tabindex="-1" aria-labelledby="resetModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="resetModalLabel">Reset</h5>
                                <button id="closeButton" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to clear input data?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                <button id="resetYesButton" type="button" class="btn btn-primary">Yes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="addPhoneTypeModal" tabindex="-1" role="dialog" aria-labelledby="addPhoneTypeModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addPhoneTypeModalLabel">Modal title</h5>
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
                </div>
            </div>

        </div>

        <!-- </div>
</div> -->
    </form>

    <script>
        $("#resetYesButton").click(function() {
            /*Clear all input type="text" box*/
            $('.addContactsForm input[type="text"]').val('');
            $('.addPhoneGroup input[type="tel"]').val('');
            $('.emailInput input[type="email"]').val('');
            $('#notesTextArea').val('');
            $("#closeButton").trigger("click");
            $("#clearUpload").trigger("click");
        });
        $("#addFieldSelectButton").click(function() {
            if ($("#addFieldSelectOptions").find(":selected").text() == "Select an option") {
                console.log("first selected");
                $("#selectFieldWarning").css("display", "block");
                setTimeout(() => {
                    $("#selectFieldWarning").css("display", "none");
                }, 2000);

            } else if ($("#addFieldSelectOptions").find(":selected").text() == "Phonetic Name") {
                $("#addPhoneticNameRow").css("display", "contents");
                $('#addFieldSelectOptions option:selected').remove();
                $("#addFieldModalCloseButton").trigger("click");
            } else if ($("#addFieldSelectOptions").find(":selected").text() == "IM") {
                $("#IMrow , #addIMrow").css("display", "table-row");
                $('#addFieldSelectOptions option:selected').remove();
                $("#addFieldModalCloseButton").trigger("click");
            } else if ($("#addFieldSelectOptions").find(":selected").text() == "Phone Ringtone") {
                $("#applyRingtoneRow").css("display", "table-row");
                $('#addFieldSelectOptions option:selected').remove();
                $("#addFieldModalCloseButton").trigger("click");
            } else if ($("#addFieldSelectOptions").find(":selected").text() == "Address") {
                $(".AddressGroup, #addAddressRow").css("display", "table-row");
                $('#addFieldSelectOptions option:selected').remove();
                $("#addFieldModalCloseButton").trigger("click");
            } else if ($("#addFieldSelectOptions").find(":selected").text() == "Nickname") {
                $("#addNickNameRow").css("display", "table-row");
                $('#addFieldSelectOptions option:selected').remove();
                $("#addFieldModalCloseButton").trigger("click");
            } else if ($("#addFieldSelectOptions").find(":selected").text() == "Website") {
                $(".inputWebsiteRow, #addWebsiteRow").css("display", "table-row");
                $('#addFieldSelectOptions option:selected').remove();
                $("#addFieldModalCloseButton").trigger("click");
            } else if ($("#addFieldSelectOptions").find(":selected").text() == "Birthday") {
                $(".enterBirthdayRow").css("display", "table-row");
                $('#addFieldSelectOptions option:selected').remove();
                $("#addFieldModalCloseButton").trigger("click");
            } else if ($("#addFieldSelectOptions").find(":selected").text() == "Anniversary") {
                $(".enterAnniversaryRow").css("display", "table-row");
                $('#addFieldSelectOptions option:selected').remove();
                $("#addFieldModalCloseButton").trigger("click");
            } else if ($("#addFieldSelectOptions").find(":selected").text() == "Important Date") {
                $(".importantDateRow").css("display", "table-row");
                $('#addFieldSelectOptions option:selected').remove();
                $("#addFieldModalCloseButton").trigger("click");
            } else if ($("#addFieldSelectOptions").find(":selected").text() == "Relationship") {
                $(".relationshipRow , #addRelationshipFieldRow").css("display", "table-row");
                $('#addFieldSelectOptions option:selected').remove();
                $("#addFieldModalCloseButton").trigger("click");
            } else if ($("#addFieldSelectOptions").find(":selected").text() == "Group") {
                $(".groupRow").css("display", "table-row");
                $('#addFieldSelectOptions option:selected').remove();
                $("#addFieldModalCloseButton").trigger("click");
            }
        });
    </script>
</body>

</html>