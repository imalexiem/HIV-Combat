<?php
$servername = "localhost";
$username = "root"; 
$password = "holmes"; 
$dbname = "hivdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM demographic";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="Dashboard.css">
    <style>
        .divider {
            border-top: 2px solid #ccc;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6f/DOH_Logo.png" alt="Logo">
            <h1>HIVCombat</h1>
        </div>
        <nav>
            <ul>
            <li><a href="#" id="edit-info">Edit Info</a></li> <!-- New Edit Info button -->
            <li><a href="#" id="logout">Logout</a></li>
            </ul>
        </nav>
    </header>

    <div class="user-information">
        <h2>User Information</h2>

        <!-- Demographic Table -->
        <div class="table-container">
            <h3>Demographic</h3>
            <div class="table">
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='row'>
                                <div class='attribute'>Patient ID</div>
                                <div class='input'>" . $row["PatientID"] . "</div>
                              </div>
                              <div class='row'>
                                <div class='attribute'>PhilHealth Number</div>
                                <div class='input'>" . $row["PhilHealthNum"] . "</div>
                              </div>
                              <div class='row'>
                                <div class='attribute'>Name</div>
                                <div class='input'>" . $row["Name"] . "</div>
                              </div>
                              <div class='row'>
                                <div class='attribute'>Date of Birth</div>
                                <div class='input'>" . $row["DateOfBirth"] . "</div>
                              </div>
                              <div class='row'>
                                <div class='attribute'>Sex</div>
                                <div class='input'>" . $row["Sex"] . "</div>
                              </div>
                              <div class='row'>
                                <div class='attribute'>Self Identity</div>
                                <div class='input'>" . $row["SelfIdentity"] . "</div>
                              </div>
                              <div class='row'>
                                <div class='attribute'>Current Residence</div>
                                <div class='input'>" . $row["CurrentResidence"] . "</div>
                              </div>
                              <div class='row'>
                                <div class='attribute'>Permanent Residence</div>
                                <div class='input'>" . $row["PermanentResidence"] . "</div>
                              </div>
                              <div class='row'>
                                <div class='attribute'>Place Of Birth</div>
                                <div class='input'>" . $row["PlaceOfBirth"] . "</div>
                              </div>
                              <div class='row'>
                                <div class='attribute'>Nationality</div>
                                <div class='input'>" . $row["Nationality"] . "</div>
                              </div>
                              <div class='row'>
                                <div class='attribute'>Highest Educational Attainment</div>
                                <div class='input'>" . $row["HighestEducationalAttainment"] . "</div>
                              </div>
                              <div class='row'>
                                <div class='attribute'>Civil Status</div>
                                <div class='input'>" . $row["CivilStatus"] . "</div>
                              </div>
                              <div class='row'>
                                <div class='attribute'>Living With Partner?</div>
                                <div class='input'>" . $row["LivingWithPartner"] . "</div>
                              </div>
                              <div class='row'>
                                <div class='attribute'>Pregnant Status</div>
                                <div class='input'>" . $row["PregnantStatus"] . "</div>
                              </div>
                                <div class='action-buttons'>
                                <a href='update.php?PatientID=" . $row["PatientID"] . "'>Edit</a>
                                <a href='delete.php?PatientID=" . $row["PatientID"] . "'>Delete</a>
                              </div>
                              <br>
                              <div class='divider'></div>";
                    }
                } else {
                    echo "0 results";
                }
                ?>
            </div>
        </div>
        <p style="margin-bottom:2cm;"></p>

        <!-- Occupation Table -->
        <?php
        $sql = "SELECT * FROM Occupation";
        $result = $conn->query($sql);
        ?>
        <div class="table-container">
            <h3>Occupation</h3>
            <div class="table">
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='row'>
                                <div class='attribute'>Current Occupation</div>
                                <div class='input'>" . $row["CurrentOccupation"] . "</div>
                              </div>
                              <div class='row'>
                                <div class='attribute'>Previous Occupation</div>
                                <div class='input'>" . $row["PreviousOccupation"] . "</div>
                              </div>
                              <div class='row'>
                                <div class='attribute'>School Status</div>
                                <div class='input'>" . $row["SchoolStatus"] . "</div>
                              </div>
                              <div class='row'>
                                <div class='attribute'>School Level</div>
                                <div class='input'>" . $row["SchoolLevel"] . "</div>
                              </div>
                              <div class='row'>
                                <div class='attribute'>Worked Overseas?</div>
                                <div class='input'>" . $row["WorkedOverseas"] . "</div>
                              </div>
                              <div class='row'>
                                <div class='attribute'>Last Contract Return Date</div>
                                <div class='input'>" . $row["LastContractReturnDate"] . "</div>
                              </div>
                              <div class='row'>
                                <div class='attribute'>Last Work Country</div>
                                <div class='input'>" . $row["LastWorkCountry"] . "</div>
                              </div>
                                                            <div class='action-buttons'>
                                <a href='update.php?OccupationID=" . $row["OccupationID"] . "'>Edit</a>
                                <a href='delete.php?OccupationID=" . $row["OccupationID"] . "'>Delete</a>
                              </div>
                              <br>
                              <div class='divider'></div>";
                    }
                } else {
                    echo "0 results";
                }
                ?>
            </div>
        </div>
        <p style="margin-bottom:2cm;"></p>

        <!-- Exposure History Table -->
        <?php
        $sql = "SELECT * FROM ExposureHistory";
        $result = $conn->query($sql);
        ?>
        <div class="table-container">
            <h3>Exposure History</h3>
            <div class="table">
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='row'>
                                <div class='attribute'>Mother HIV Status</div>
                                <div class='input'>" . $row["MotherHIVStatus"] . "</div>
                              </div>
                              <div class='row'>
                                <div class='attribute'>Partner Type</div>
                                <div class='input'>" . $row["PartnerType"] . "</div>
                              </div>
                              <div class='row'>
                                <div class='attribute'>Activity Type</div>
                                <div class='input'>" . $row["ActivityType"] . "</div>
                              </div>
                              <div class='row'>
                                <div class='attribute'>Protection Type</div>
                                <div class='input'>" . $row["ProtectionType"] . "</div>
                              </div>
                              <div class='row'>
                                <div class='attribute'>Payment For Sex?</div>
                                <div class='input'>" . $row["PaymentForSex"] . "</div>
                              </div>
                              <div class='row'>
                                <div class='attribute'>Drugs Exposure?</div>
                                <div class='input'>" . $row["DrugsExposure"] . "</div>
                              </div>
                              <div class='row'>
                                <div class='attribute'>STI or STD?</div>
                                <div class='input'>" . $row["STIorSTD"] . "</div>
                              </div>
                              <div class='row'>
                                <div class='attribute'>Age At First Sex</div>
                                <div class='input'>" . $row["AgeAtFirstSex"] . "</div>
                              </div>
                              <div class='row'>
                                <div class='attribute'>Age At First Drug Use</div>
                                <div class='input'>" . $row["AgeAtFirstDrugUse"] . "</div>
                              </div>
                              <div class='row'>
                                <div class='attribute'>Female Sex Partner Occurrences</div>
                                <div class='input'>" . $row["FemaleSexPartnerOccurrences"] . "</div>
                              </div>
                              <div class='row'>
                                <div class='attribute'>Years Of Last Sex Female</div>
                                <div class='input'>" . $row["YearsOfLastSexFemale"] . "</div>
                              </div>
                              <div class='row'>
                                <div class='attribute'>Male Sex Partner Occurrences</div>
                                <div class='input'>" . $row["MaleSexPartnerOccurrences"] . "</div>
                              </div>
                              <div class='row'>
                                <div class='attribute'>Years Of Last Sex Male</div>
                                <div class='input'>" . $row["YearsOfLastSexMale"] . "</div>
                              </div>
                                                            <div class='action-buttons'>
                                <a href='update.php?ExposureHistoryID=" . $row["ExposureHistoryID"] . "'>Edit</a>
                                <a href='delete.php?ExposureHistoryID=" . $row["ExposureHistoryID"] . "'>Delete</a>
                              </div>
                              <br>
                              <div class='divider'></div>";
                    }
                } else {
                    echo "0 results";
                }
                ?>
            </div>
        </div>
        <p style="margin-bottom:2cm;"></p>

        <!-- ARV Use History Table -->
        <?php
        $sql = "SELECT * FROM ARV_Use";
        $result = $conn->query($sql);
        ?>
        <div class="table-container">
            <h3>ARV Use History</h3>
            <div class="table">
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='row'>
                                <div class='attribute'>ARV Medicine Status</div>
                                <div class='input'>" . $row["ARVMedicineStatus"] . "</div>
                              </div>
                              <div class='row'>
                                <div class='attribute'>ARV Use Type</div>
                                <div class='input'>" . $row["ARVUseType"] . "</div>
                              </div>
                              <div class='row'>
                                <div class='attribute'>ARV Medication</div>
                                <div class='input'>" . $row["ARVMedication"] . "</div>
                              </div>
                              <div class='row'>
                                <div class='attribute'>Date Began</div>
                                <div class='input'>" . $row["DateBegan"] . "</div>
                              </div>
                              <div class='row'>
                                <div class='attribute'>Date Last Used</div>
                                <div class='input'>" . $row["DateLastUsed"] . "</div>
                              </div>
                                <div class='action-buttons'>
                                <a href='update.php?ARVUseTypeCode=" . $row["ARVUseTypeCode"] . "'>Edit</a>
                                <a href='delete.php?ARVUseTypeCode=" . $row["ARVUseTypeCode"] . "'>Delete</a>
                              </div>
                              <br>
                              <div class='divider'></div>";
                    }
                } else {
                    echo "0 results";
                }
                ?>
            </div>
        </div>
        <p style="margin-bottom:2cm;"></p>

        <!-- Infection History Table -->
        <?php
        $sql = "SELECT * FROM Infection";
        $result = $conn->query($sql);
        ?>
        <div class="table-container">
            <h3>Infection History</h3>
            <div class="table">
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='row'>
                                <div class='attribute'>Infection Status</div>
                                <div class='input'>" . $row["InfectionStatus"] . "</div>
                              </div>
                              <div class='row'>
                                <div class='attribute'>Infection Type</div>
                                <div class='input'>" . $row["InfectionType"] . "</div>
                              </div>
                              <div class='row'>
                                <div class='attribute'>Diagnosis Date</div>
                                <div class='input'>" . $row["DiagnosisDate"] . "</div>
                              </div>
                              <div class='row'>
                                <div class='attribute'>Treatment Start Date</div>
                                <div class='input'>" . $row["TreatmentStartDate"] . "</div>
                              </div>
                              <div class='row'>
                                <div class='attribute'>Treatment End Date</div>
                                <div class='input'>" . $row["TreatmentEndDate"] . "</div>
                              </div>
                              <div class='row'>
                                <div class='attribute'>Treatment Outcome</div>
                                <div class='input'>" . $row["TreatmentOutcome"] . "</div>
                              </div>
                              <div class='row'>
                                <div class='attribute'>HIV Test Result</div>
                                <div class='input'>" . $row["HIVTestResult"] . "</div>
                              </div>
                              <div class='row'>
                                <div class='attribute'>HIV Test Date</div>
                                <div class='input'>" . $row["HIVTestDate"] . "</div>
                              </div>
                              <div class='row'>
                                <div class='attribute'>HIV Test Location</div>
                                <div class='input'>" . $row["HIVTestLocation"] . "</div>
                              </div>
                                                            <div class='action-buttons'>
                                <a href='update.php?InfectionTypeCode=" . $row["InfectionTypeCode"] . "'>Edit</a>
                                <a href='delete.php?InfectionTypeCode=" . $row["InfectionTypeCode"] . "'>Delete</a>
                              </div>
                              <br>
                              <div class='divider'></div>";
                    }
                } else {
                    echo "0 results";
                }
                ?>
            </div>
        </div>
    </div>

    <?php
    $conn->close();
    ?>
</body>
</html>