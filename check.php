<?php
include './include/session.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Background Check</title>

    <link rel="stylesheet" href="./styles/check.css">
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
</head>

<body>

    <span>Background Check Authorization Form</span>

    <div class="content">
        <form action="./handler.php" method="post" class="registerForm">

            <br><br>

            <h2>Personal Details</h2>
            <br>
            <div class="ip">
                <label>Full Name</label>
                <input type="text" class="input" id="days" name="f_name" placeholder="First Name | Middle | Surname" />
                <label>ID Number</label>
                <input type="text" class="input" id="days" name="id_num" placeholder="10 Digit ID Number" />
                <label>Date of Birth</label>
                <input type="date" class="input" id="days" name="dob" />
                <br>
            </div>

            <br><br>

            <h3>Contact Information</h3>
            <br>
            <div class="ip">
                <label>Phone Number</label>
                <input type="text" class="input" name="phone_num" placeholder="Your Personal Number" />
                <label>Email Address</label>
                <input type="email" class="input" id="days" name="email" placeholder="Your Personal Email" />
                <br>
            </div>

            <br><br>

            <h3>Banking & Driving Information</h3>
            <br>
            <div class="ip">
                <label>KRA Pin</label>
                <input type="text" class="input" id="days" name="kra_pin" placeholder="Earning Number Issued By Government" />
                <label>Drivers License</label>
                <input type="text" class="input" id="days" name="license" placeholder="KeNHA issued License Number" />
                <br>
            </div>

            <br><br>

            <h3>Address</h3>
            <br>
            <div class="ip">
                <label for="county">County of Residence</label>
                <select class="input" name="county" id="county" class="input">
                    <option value="">Select...</option>
                    <option value='Baringo'>Baringo</option>
                    <option value='Bomet'>Bomet</option>
                    <option value='Bungoma'>Bungoma</option>
                    <option value='Busia'>Busia</option>
                    <option value='Elgeyo-Marakwet'>Elgeyo-Marakwet</option>
                    <option value='Embu'>Embu</option>
                    <option value='Garissa'>Garissa</option>
                    <option value='Homa Bay'>Homa Bay</option>
                    <option value='Isiolo'>Isiolo</option>
                    <option value='Kajiado'>Kajiado</option>
                    <option value='Kakamega'>Kakamega</option>
                    <option value='Kericho'>Kericho</option>
                    <option value='Kiambu'>Kiambu</option>
                    <option value='Kilifi'>Kilifi</option>
                    <option value='Kirinyaga'>Kirinyaga</option>
                    <option value='Kisii'>Kisii</option>
                    <option value='Kisumu'>Kisumu</option>
                    <option value='Kitui'>Kitui</option>
                    <option value='Kwale'>Kwale</option>
                    <option value='Laikipia'>Laikipia</option>
                    <option value='Lamu'>Lamu</option>
                    <option value='Machakos'>Machakos</option>
                    <option value='Makueni'>Makueni</option>
                    <option value='Mandera'>Mandera</option>
                    <option value='Marsabit'>Marsabit</option>
                    <option value='Meru'>Meru</option>
                    <option value='Migori'>Migori</option>
                    <option value='Mombasa'>Mombasa</option>
                    <option value='Murang' a'>Murang'a</option>
                    <option value='Nairobi City'>Nairobi City</option>
                    <option value='Nakuru'>Nakuru</option>
                    <option value='Nandi'>Nandi</option>
                    <option value='Narok'>Narok</option>
                    <option value='Nyamira'>Nyamira</option>
                    <option value='Nyandarua'>Nyandarua</option>
                    <option value='Nyeri'>Nyeri</option>
                    <option value='Samburu'>Samburu</option>
                    <option value='Siaya'>Siaya</option>
                    <option value='Taita-Taveta'>Taita-Taveta</option>
                    <option value='Tana River'>Tana River</option>
                    <option value='Tharaka-Nithi'>Tharaka-Nithi</option>
                    <option value='Trans Nzoia'>Trans Nzoia</option>
                    <option value='Turkana'>Turkana</option>
                    <option value='Uasin Gishu'>Uasin Gishu</option>
                    <option value='Vihiga'>Vihiga</option>
                    <option value='West Pokot'>West Pokot</option>
                    <option value='wajir'>wajir</option>
                </select>
                <label>Physical Address</label>
                <input type="text" class="input" id="days" name="address" placeholder="Current Address" />
                <br>
            </div>

            <br><br>

            <h3>Legal History</h3>
            <br>
            <legend>Have you been convicted of any crime?</legend>
            <br>
            <select class="input" name="crime" id="crime" class="input">
                <option value="">Select...</option>
                <option value='Yes'>Yes</option>
                <option value='No'>No</option>
            </select>

            <br><br>

            <h3>Authorization of Release Information</h3>
            <br>
            <legend>
                Applicant(s) represent(s) that all of the above information and
                statements on the application for purchase/rental are true and complete
            </legend>
            <legend>
                and hereby authorizes an
                and hereby authorizes an
                investigative
                consumer report including, but not limited to, residential history (rental
            </legend>
            <legend>
                but not limited to, residential history (rental
                or mortgage), employment
                history, criminal history
                records, court records and credit records.
            </legend>
            <legend>
                This authorization must be signed before it can be processed
                by
                management. Applicant acknowledges that false or omitted information herein
            </legend>
            <legend>
                may constitute grounds for
                rejection of
                this application, termination of right of occupancy, and/or forfeiture of fees and/or deposits and
            </legend>
            <legend>
                may constitute a criminal
                offense under the laws of this State.
            </legend>
            <br><br>
            <br>
            <div class="ip">
                <br>
                <legend>Do you agree to the above terms?</legend>
                <br>
                <select class="input" name="agree" id="agree" class="input">
                    <option value="">Select...</option>
                    <option value='Yes'>Yes</option>
                    <option value='No'>No</option>
                </select>
                <br>
            </div>

            <br><br><br>

            <div class="bt">
                <input class="action1" type="submit" value="Submit Information" name="submit">
            </div>

        </form>
    </div>

    </div>

</body>

</html>