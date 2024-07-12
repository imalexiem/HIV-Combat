<?php
$servername = "localhost";
$username = "root";
$password = "holmes";
$dbname = "hivdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle form submission to update records
    $PatientID = $_POST["PatientID"];
    // Demographic table fields
    $PhilHealthNum = $_POST["PhilHealthNum"];
    $Name = $_POST["Name"];
    $DateOfBirth = $_POST["DateOfBirth"];
    $Sex = $_POST["Sex"];
    $SelfIdentity = $_POST["SelfIdentity"];
    $CurrentResidence = $_POST["CurrentResidence"];
    $PermanentResidence = $_POST["PermanentResidence"];
    $PlaceOfBirth = $_POST["PlaceOfBirth"];
    $Nationality = $_POST["Nationality"];
    $HighestEducationalAttainment = $_POST["HighestEducationalAttainment"];
    $CivilStatus = $_POST["CivilStatus"];
    $LivingWithPartner = $_POST["LivingWithPartner"];
    $PregnantStatus = $_POST["PregnantStatus"];

    $sql = "UPDATE demographic SET 
            PhilHealthNum='$PhilHealthNum', 
            Name='$Name', 
            DateOfBirth='$DateOfBirth', 
            Sex='$Sex', 
            SelfIdentity='$SelfIdentity', 
            CurrentResidence='$CurrentResidence', 
            PermanentResidence='$PermanentResidence', 
            PlaceOfBirth='$PlaceOfBirth', 
            Nationality='$Nationality', 
            HighestEducationalAttainment='$HighestEducationalAttainment', 
            CivilStatus='$CivilStatus', 
            LivingWithPartner='$LivingWithPartner', 
            PregnantStatus='$PregnantStatus' 
            WHERE PatientID='$PatientID'";

    if ($conn->query($sql) === TRUE) {
        echo "Demographic record updated successfully<br>";
    } else {
        echo "Error updating demographic record: " . $conn->error;
    }

    // Occupation table fields
    $CurrentOccupation = $_POST["CurrentOccupation"];
    $PreviousOccupation = $_POST["PreviousOccupation"];
    $SchoolStatus = $_POST["SchoolStatus"];
    $SchoolLevel = $_POST["SchoolLevel"];
    $WorkedOverseas = $_POST["WorkedOverseas"];
    $LastContractReturnDate = $_POST["LastContractReturnDate"];
    $LastWorkCountry = $_POST["LastWorkCountry"];

    $sql = "UPDATE Occupation SET 
            CurrentOccupation='$CurrentOccupation', 
            PreviousOccupation='$PreviousOccupation', 
            SchoolStatus='$SchoolStatus', 
            SchoolLevel='$SchoolLevel', 
            WorkedOverseas='$WorkedOverseas', 
            LastContractReturnDate='$LastContractReturnDate', 
            LastWorkCountry='$LastWorkCountry' 
            WHERE PatientID='$PatientID'";

    if ($conn->query($sql) === TRUE) {
        echo "Occupation record updated successfully<br>";
    } else {
        echo "Error updating occupation record: " . $conn->error;
    }

    // ExposureHistory table fields
    $MotherHIVStatus = $_POST["MotherHIVStatus"];
    $PartnerType = $_POST["PartnerType"];
    $ActivityType = $_POST["ActivityType"];
    $ProtectionType = $_POST["ProtectionType"];
    $PaymentForSex = $_POST["PaymentForSex"];
    $DrugsExposure = $_POST["DrugsExposure"];
    $STIorSTD = $_POST["STIorSTD"];
    $AgeAtFirstSex = $_POST["AgeAtFirstSex"];
    $AgeAtFirstDrugUse = $_POST["AgeAtFirstDrugUse"];
    $FemaleSexPartnerOccurrences = $_POST["FemaleSexPartnerOccurrences"];
    $YearsOfLastSexFemale = $_POST["YearsOfLastSexFemale"];
    $MaleSexPartnerOccurrences = $_POST["MaleSexPartnerOccurrences"];
    $YearsOfLastSexMale = $_POST["YearsOfLastSexMale"];

    $sql = "UPDATE ExposureHistory SET 
            MotherHIVStatus='$MotherHIVStatus', 
            PartnerType='$PartnerType', 
            ActivityType='$ActivityType', 
            ProtectionType='$ProtectionType', 
            PaymentForSex='$PaymentForSex', 
            DrugsExposure='$DrugsExposure', 
            STIorSTD='$STIorSTD', 
            AgeAtFirstSex='$AgeAtFirstSex', 
            AgeAtFirstDrugUse='$AgeAtFirstDrugUse', 
            FemaleSexPartnerOccurrences='$FemaleSexPartnerOccurrences', 
            YearsOfLastSexFemale='$YearsOfLastSexFemale', 
            MaleSexPartnerOccurrences='$MaleSexPartnerOccurrences', 
            YearsOfLastSexMale='$YearsOfLastSexMale' 
            WHERE PatientID='$PatientID'";

    if ($conn->query($sql) === TRUE) {
        echo "Exposure history record updated successfully<br>";
    } else {
        echo "Error updating exposure history record: " . $conn->error;
    }

    // ARV_Use table fields
    $ARVMedicineStatus = $_POST["ARVMedicineStatus"];
    $ARVUseType = $_POST["ARVUseType"];
    $ARVMedication = $_POST["ARVMedication"];
    $DateBegan = $_POST["DateBegan"];
    $DateLastUsed = $_POST["DateLastUsed"];

    $sql = "UPDATE ARV_Use SET 
            ARVMedicineStatus='$ARVMedicineStatus', 
            ARVUseType='$ARVUseType', 
            ARVMedication='$ARVMedication', 
            DateBegan='$DateBegan', 
            DateLastUsed='$DateLastUsed' 
            WHERE PatientID='$PatientID'";

    if ($conn->query($sql) === TRUE) {
        echo "ARV use history record updated successfully<br>";
    } else {
        echo "Error updating ARV use history record: " . $conn->error;
    }

    // Infection table fields
    $InfectionStatus = $_POST["InfectionStatus"];
    $InfectionType = $_POST["InfectionType"];
    $DiagnosisDate = $_POST["DiagnosisDate"];
    $TreatmentStartDate = $_POST["TreatmentStartDate"];
    $TreatmentEndDate = $_POST["TreatmentEndDate"];
    $TreatmentOutcome = $_POST["TreatmentOutcome"];
    $HIVTestResult = $_POST["HIVTestResult"];
    $HIVTestDate = $_POST["HIVTestDate"];
    $HIVTestLocation = $_POST["HIVTestLocation"];

    $sql = "UPDATE Infection SET 
            InfectionStatus='$InfectionStatus', 
            InfectionType='$InfectionType', 
            DiagnosisDate='$DiagnosisDate', 
            TreatmentStartDate='$TreatmentStartDate', 
            TreatmentEndDate='$TreatmentEndDate', 
            TreatmentOutcome='$TreatmentOutcome', 
            HIVTestResult='$HIVTestResult', 
            HIVTestDate='$HIVTestDate', 
            HIVTestLocation='$HIVTestLocation' 
            WHERE PatientID='$PatientID'";

    if ($conn->query($sql) === TRUE) {
        echo "Infection history record updated successfully<br>";
    } else {
        echo "Error updating infection history record: " . $conn->error;
    }

} else {
    $PatientID = $_GET["PatientID"];
    
    // Fetch demographic record
    $sql = "SELECT * FROM demographic WHERE PatientID='$PatientID'";
    $result = $conn->query($sql);
    $demographic = $result->fetch_assoc();

    // Fetch occupation record
    $sql = "SELECT * FROM Occupation WHERE PatientID='$PatientID'";
    $result = $conn->query($sql);
    $occupation = $result->fetch_assoc();

    // Fetch exposure history record
    $sql = "SELECT * FROM ExposureHistory WHERE PatientID='$PatientID'";
    $result = $conn->query($sql);
    $exposure = $result->fetch_assoc();

    // Fetch ARV use history record
    $sql = "SELECT * FROM ARV_Use WHERE PatientID='$PatientID'";
    $result = $conn->query($sql);
    $arv = $result->fetch_assoc();

    // Fetch infection history record
    $sql = "SELECT * FROM Infection WHERE PatientID='$PatientID'";
    $result = $conn->query($sql);
    $infection = $result->fetch_assoc();
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Record</title>
    <link rel="stylesheet" href="Dashboard.css">
</head>
<body>
    <h2>Update Record</h2>
    <form action="update.php" method="post">
        <input type="hidden" name="PatientID" value="<?php echo $demographic['PatientID']; ?>">

        <h3>Demographic Information</h3>
        <div class="row">
            <div class="attribute">PhilHealth Number</div>
            <div class="input"><input type="text" name="PhilHealthNum" value="<?php echo $demographic['PhilHealthNum']; ?>"></div>
        </div>
        <div class="row">
            <div class="attribute">Name</div>
            <div class="input"><input type="text" name="Name" value="<?php echo $demographic['Name']; ?>"></div>
        </div>
        <div class="row">
            <div class="attribute">Date of Birth</div>
            <div class="input"><input type="date" name="DateOfBirth" value="<?php echo $demographic['DateOfBirth']; ?>"></div>
        </div>
        <div class="row">
            <div class="attribute">Sex</div>
            <div class="input"><input type="text" name="Sex" value="<?php echo $demographic['Sex']; ?>"></div>
        </div>
        <div class="row">
            <div class="attribute">Self Identity</div>
            <div class="input"><input type="text" name="SelfIdentity" value="<?php echo $demographic['SelfIdentity']; ?>"></div>
        </div>
        <div class="row">
            <div class="attribute">Current Residence</div>
            <div class="input"><input type="text" name="CurrentResidence" value="<?php echo $demographic['CurrentResidence']; ?>"></div>
        </div>
        <div class="row">
            <div class="attribute">Permanent Residence</div>
            <div class="input"><input type="text" name="PermanentResidence" value="<?php echo $demographic['PermanentResidence']; ?>"></div>
        </div>
        <div class="row">
            <div class="attribute">Place Of Birth</div>
            <div class="input"><input type="text" name="PlaceOfBirth" value="<?php echo $demographic['PlaceOfBirth']; ?>"></div>
        </div>
        <div class="row">
            <div class="attribute">Nationality</div>
            <div class="input"><input type="text" name="Nationality" value="<?php echo $demographic['Nationality']; ?>"></div>
        </div>
        <div class="row">
            <div class="attribute">Highest Educational Attainment</div>
            <div class="input"><input type="text" name="HighestEducationalAttainment" value="<?php echo $demographic['HighestEducationalAttainment']; ?>"></div>
        </div>
        <div class="row">
            <div class="attribute">Civil Status</div>
            <div class="input"><input type="text" name="CivilStatus" value="<?php echo $demographic['CivilStatus']; ?>"></div>
        </div>
        <div class="row">
            <div class="attribute">Living With Partner?</div>
            <div class="input"><input type="text" name="LivingWithPartner" value="<?php echo $demographic['LivingWithPartner']; ?>"></div>
        </div>
        <div class="row">
            <div class="attribute">Pregnant Status</div>
            <div class="input"><input type="text" name="PregnantStatus" value="<?php echo $demographic['PregnantStatus']; ?>"></div>
        </div>

        <h3>Occupation Information</h3>
        <div class="row">
            <div class="attribute">Current Occupation</div>
            <div class="input"><input type="text" name="CurrentOccupation" value="<?php echo $occupation['CurrentOccupation']; ?>"></div>
        </div>
        <div class="row">
            <div class="attribute">Previous Occupation</div>
            <div class="input"><input type="text" name="PreviousOccupation" value="<?php echo $occupation['PreviousOccupation']; ?>"></div>
        </div>
        <div class="row">
            <div class="attribute">School Status</div>
            <div class="input"><input type="text" name="SchoolStatus" value="<?php echo $occupation['SchoolStatus']; ?>"></div>
        </div>
        <div class="row">
            <div class="attribute">School Level</div>
            <div class="input"><input type="text" name="SchoolLevel" value="<?php echo $occupation['SchoolLevel']; ?>"></div>
        </div>
        <div class="row">
            <div class="attribute">Worked Overseas</div>
            <div class="input"><input type="text" name="WorkedOverseas" value="<?php echo $occupation['WorkedOverseas']; ?>"></div>
        </div>
        <div class="row">
            <div class="attribute">Last Contract Return Date</div>
            <div class="input"><input type="date" name="LastContractReturnDate" value="<?php echo $occupation['LastContractReturnDate']; ?>"></div>
        </div>
        <div class="row">
            <div class="attribute">Last Work Country</div>
            <div class="input"><input type="text" name="LastWorkCountry" value="<?php echo $occupation['LastWorkCountry']; ?>"></div>
        </div>

        <h3>Exposure History</h3>
        <div class="row">
            <div class="attribute">Mother's HIV Status</div>
            <div class="input"><input type="text" name="MotherHIVStatus" value="<?php echo $exposure['MotherHIVStatus']; ?>"></div>
        </div>
        <div class="row">
            <div class="attribute">Partner Type</div>
            <div class="input"><input type="text" name="PartnerType" value="<?php echo $exposure['PartnerType']; ?>"></div>
        </div>
        <div class="row">
            <div class="attribute">Activity Type</div>
            <div class="input"><input type="text" name="ActivityType" value="<?php echo $exposure['ActivityType']; ?>"></div>
        </div>
        <div class="row">
            <div class="attribute">Protection Type</div>
            <div class="input"><input type="text" name="ProtectionType" value="<?php echo $exposure['ProtectionType']; ?>"></div>
        </div>
        <div class="row">
            <div class="attribute">Payment for Sex</div>
            <div class="input"><input type="text" name="PaymentForSex" value="<?php echo $exposure['PaymentForSex']; ?>"></div>
        </div>
        <div class="row">
            <div class="attribute">Drugs Exposure</div>
            <div class="input"><input type="text" name="DrugsExposure" value="<?php echo $exposure['DrugsExposure']; ?>"></div>
        </div>
        <div class="row">
            <div class="attribute">STI or STD</div>
            <div class="input"><input type="text" name="STIorSTD" value="<?php echo $exposure['STIorSTD']; ?>"></div>
        </div>
        <div class="row">
            <div class="attribute">Age at First Sex</div>
            <div class="input"><input type="text" name="AgeAtFirstSex" value="<?php echo $exposure['AgeAtFirstSex']; ?>"></div>
        </div>
        <div class="row">
            <div class="attribute">Age at First Drug Use</div>
            <div class="input"><input type="text" name="AgeAtFirstDrugUse" value="<?php echo $exposure['AgeAtFirstDrugUse']; ?>"></div>
        </div>
        <div class="row">
            <div class="attribute">Female Sex Partner Occurrences</div>
            <div class="input"><input type="text" name="FemaleSexPartnerOccurrences" value="<?php echo $exposure['FemaleSexPartnerOccurrences']; ?>"></div>
        </div>
        <div class="row">
            <div class="attribute">Years Since Last Sex with Female</div>
            <div class="input"><input type="text" name="YearsOfLastSexFemale" value="<?php echo $exposure['YearsOfLastSexFemale']; ?>"></div>
        </div>
        <div class="row">
            <div class="attribute">Male Sex Partner Occurrences</div>
            <div class="input"><input type="text" name="MaleSexPartnerOccurrences" value="<?php echo $exposure['MaleSexPartnerOccurrences']; ?>"></div>
        </div>
        <div class="row">
            <div class="attribute">Years Since Last Sex with Male</div>
            <div class="input"><input type="text" name="YearsOfLastSexMale" value="<?php echo $exposure['YearsOfLastSexMale']; ?>"></div>
        </div>

        <h3>ARV Use</h3>
        <div class="row">
            <div class="attribute">ARV Medicine Status</div>
            <div class="input"><input type="text" name="ARVMedicineStatus" value="<?php echo $arv['ARVMedicineStatus']; ?>"></div>
        </div>
        <div class="row">
            <div class="attribute">ARV Use Type</div>
            <div class="input"><input type="text" name="ARVUseType" value="<?php echo $arv['ARVUseType']; ?>"></div>
        </div>
        <div class="row">
            <div class="attribute">ARV Medication</div>
            <div class="input"><input type="text" name="ARVMedication" value="<?php echo $arv['ARVMedication']; ?>"></div>
        </div>
        <div class="row">
            <div class="attribute">Date Began</div>
            <div class="input"><input type="date" name="DateBegan" value="<?php echo $arv['DateBegan']; ?>"></div>
        </div>
        <div class="row">
            <div class="attribute">Date Last Used</div>
            <div class="input"><input type="date" name="DateLastUsed" value="<?php echo $arv['DateLastUsed']; ?>"></div>
        </div>

        <h3>Infection History</h3>
        <div class="row">
            <div class="attribute">Infection Status</div>
            <div class="input"><input type="text" name="InfectionStatus" value="<?php echo $infection['InfectionStatus']; ?>"></div>
        </div>
        <div class="row">
            <div class="attribute">Infection Type</div>
            <div class="input"><input type="text" name="InfectionType" value="<?php echo $infection['InfectionType']; ?>"></div>
        </div>
        <div class="row">
            <div class="attribute">Diagnosis Date</div>
            <div class="input"><input type="date" name="DiagnosisDate" value="<?php echo $infection['DiagnosisDate']; ?>"></div>
        </div>
        <div class="row">
            <div class="attribute">Treatment Start Date</div>
            <div class="input"><input type="date" name="TreatmentStartDate" value="<?php echo $infection['TreatmentStartDate']; ?>"></div>
        </div>
        <div class="row">
            <div class="attribute">Treatment End Date</div>
            <div class="input"><input type="date" name="TreatmentEndDate" value="<?php echo $infection['TreatmentEndDate']; ?>"></div>
        </div>
        <div class="row">
            <div class="attribute">Treatment Outcome</div>
            <div class="input"><input type="text" name="TreatmentOutcome" value="<?php echo $infection['TreatmentOutcome']; ?>"></div>
        </div>
        <div class="row">
            <div class="attribute">HIV Test Result</div>
            <div class="input"><input type="text" name="HIVTestResult" value="<?php echo $infection['HIVTestResult']; ?>"></div>
        </div>
        <div class="row">
            <div class="attribute">HIV Test Date</div>
            <div class="input"><input type="date" name="HIVTestDate" value="<?php echo $infection['HIVTestDate']; ?>"></div>
        </div>
        <div class="row">
            <div class="attribute">HIV Test Location</div>
            <div class="input"><input type="text" name="HIVTestLocation" value="<?php echo $infection['HIVTestLocation']; ?>"></div>
        </div>

        <div class="row">
            <input type="submit" value="Update Record">
        </div>
    </form>
</body>
</html>
