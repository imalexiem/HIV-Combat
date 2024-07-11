<?php
$servername = "localhost";
$username = "root"; 
$password = "holmes"; 
$dbname = "hivdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}
echo "Connected successfully";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $demographic_stmt = $conn->prepare("INSERT INTO demographic (PhilHealthNum, Name, DateOfBirth, Sex, SelfIdentity, CurrentResidence, PermanentResidence, PlaceOfBirth, Nationality, HighestEducationalAttainment, CivilStatus, LivingWithPartner, PregnantStatus) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $demographic_stmt->bind_param("sssssssssssss", $philhealth_num, $name, $date_of_birth, $sex, $self_identity, $current_residence, $permanent_residence, $place_of_birth, $nationality, $educ_attainment, $civil_status, $living_with_partner, $pregnant_status);

    $philhealth_num = $_POST['philhealth-number'];
    $name = $_POST['name'];
    $date_of_birth = $_POST['birthdate'];
    $sex = $_POST['sex'];
    $self_identity = $_POST['self-identity'];
    $current_residence = $_POST['current-residence'];
    $permanent_residence = $_POST['permanent-residence'];
    $place_of_birth = $_POST['place-of-birth'];
    $nationality = $_POST['nationality'] == 'Filipino'? 'Filipino' : $_POST['other-nationality'];
    $educ_attainment = $_POST['educ-attainment'];
    $civil_status = $_POST['civilstatus'];
    $living_with_partner = $_POST['living-with-partner'];
    $pregnant_status = $_POST['pregnant-status'];

    var_dump($philhealth_num, $name, $date_of_birth, $sex, $self_identity, $current_residence, $permanent_residence, $place_of_birth, $nationality, $educ_attainment, $civil_status, $living_with_partner, $pregnant_status);

    if ($demographic_stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: ". $demographic_stmt->error;
    }

    $demographic_stmt->close();

    $occupation_stmt = $conn->prepare("INSERT INTO Occupation (CurrentOccupation, PreviousOccupation, SchoolStatus, SchoolLevel, WorkedOverseas, LastContractReturnDate, WorkLocation, LastWorkCountry) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $occupation_stmt ->bind_param("sssssiss", $current_occupation, $previous_occupation, $school_status, $school_level, $worked_overseas, $last_contract_return_date, $work_location, $last_work_country);
    
    $current_occupation = $_POST['current-work'];
    $previous_occupation = $_POST['previous-work'];
    $school_status = $_POST['school-status'];
    $school_level = $_POST['school-level'];
    $worked_overseas = $_POST['worked-overseas'];
    $last_contract_return_date = $_POST['return-date'];
    $work_location = $_POST['work-location'];
    $last_work_country = $_POST['work-country'];
    
    var_dump($current_occupation, $previous_occupation, $school_status, $school_level, $worked_overseas, $last_contract_return_date, $work_location, $last_work_country);
    
    if ($occupation_stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: ". $occupation_stmt->error;
    }

    $occupation_stmt->close();

    $exposure_stmt = $conn->prepare("INSERT INTO ExposureHistory (MotherHIVStatus, PartnerType, ActivityType, ProtectionType, PaymentForSex, DrugsExposure, STIorSTD, AgeAtFirstSex, AgeAtFirstDrugUse, FemaleSexPartnerOccurrences, YearsOfLastSexFemale, MaleSexPartnerOccurrences, YearsOfLastSexMale) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $exposure_stmt->bind_param("sssssssiiiiii", $motherHIVStatus, $partnerType, $activityType, $protectionType, $paymentForSex, $drugsExposure, $stiOrStd, $ageAtFirstSex, $ageAtFirstDrugUse, $femaleSexPartnerOccurrences, $yearsOfLastSexFemale, $maleSexPartnerOccurrences, $yearsOfLastSexMale);

    // Set parameters and execute
    $motherHIVStatus = $_POST['MotherHIVstatus'];
    $partnerTypes = isset($_POST['partner-type']) ? (array)$_POST['partner-type'] : [];
    $activityTypes = isset($_POST['activity-type']) ? (array)$_POST['activity-type'] : [];
    $protectionType = $_POST['ProtectionType'];
    $paymentForSex = $_POST['PaymentForSex'];
    $drugsExposure = $_POST['DrugsExposure'];
    $stiOrStd = $_POST['STIorSTD'];
    $ageAtFirstSex = $_POST['AgeAtFirstSex'];
    $ageAtFirstDrugUse = $_POST['AgeAtFirstDrugUse'];
    $femaleSexPartnerOccurrences = $_POST['FemaleSexPartnerOccurences'];
    $yearsOfLastSexFemale = $_POST['YearsOfLastSexFemale'];
    $maleSexPartnerOccurrences = $_POST['MaleSexPartnerOccurences'];
    $yearsOfLastSexMale = $_POST['YearsOfLastSexMale'];

    // Convert arrays to comma-separated strings
    $partnerType = implode(",", $partnerTypes);
    $activityType = implode(",", $activityTypes);

    // Debugging output to check the converted strings
    echo "Partner Types: " . $partnerType . "<br>";
    echo "Activity Types: " . $activityType . "<br>";

    // Debugging output
    var_dump($motherHIVStatus, $partnerType, $activityType, $protectionType, $paymentForSex, $drugsExposure, $stiOrStd, $ageAtFirstSex, $ageAtFirstDrugUse, $femaleSexPartnerOccurrences, $yearsOfLastSexFemale, $maleSexPartnerOccurrences, $yearsOfLastSexMale);

    if ($exposure_stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $exposure_stmt->error;
    }

    $exposure_stmt->close();

    

    function insertARVUseHistory($conn, $arvMedicineStatus, $arvType, $arvMedication, $dateBegan, $dateLastUsed) {
        // Prepare and bind
        $arv_stmt = $conn->prepare("INSERT INTO ARV_Use (ARVMedicineStatus, ARVUseType, ARVMedication, DateBegan, DateLastUsed) VALUES (?, ?, ?, ?, ?)");
        $arv_stmt->bind_param("sssss", $arvMedicineStatus, $arvType, $arvMedication, $dateBegan, $dateLastUsed);
    
        // Execute the query
        var_dump($arvMedicineStatus, $arvType, $arvMedication, $dateBegan, $dateLastUsed);

        if ($arv_stmt->execute()) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $arv_stmt->error;
        }
    
        $arv_stmt->close();
    }
    
    // Retrieve ARV Medicine Status
    $arvMedicineStatus = isset($_POST['ARVMedicineStatus']) ? $_POST['ARVMedicineStatus'] : '';
    
    // Check and insert for each ARV type
    if (isset($_POST['hivTxCheckbox'])) {
        insertARVUseHistory($conn, $arvMedicineStatus, 'HIV Tx', $_POST['hivTxMedication'], $_POST['hivTxDateBegan'], $_POST['hivTxDateLastUsed']);
    }
    
    if (isset($_POST['prepCheckbox'])) {
        insertARVUseHistory($conn, $arvMedicineStatus, 'PrEP', $_POST['prepMedication'], $_POST['prepDateBegan'], $_POST['prepDateLastUsed']);
    }
    
    if (isset($_POST['pepCheckbox'])) {
        insertARVUseHistory($conn, $arvMedicineStatus, 'PEP', $_POST['pepMedication'], $_POST['pepDateBegan'], $_POST['pepDateLastUsed']);
    }
    
    if (isset($_POST['pmtctCheckbox'])) {
        insertARVUseHistory($conn, $arvMedicineStatus, 'PMTCT', $_POST['pmtctMedication'], $_POST['pmtctDateBegan'], $_POST['pmtctDateLastUsed']);
    }
    
    if (isset($_POST['hbvTxCheckbox'])) {
        insertARVUseHistory($conn, $arvMedicineStatus, 'HBV Tx', $_POST['hbvTxMedication'], $_POST['hbvTxDateBegan'], $_POST['hbvTxDateLastUsed']);
    }
    
    if (isset($_POST['otherCheckbox'])) {
        insertARVUseHistory($conn, $arvMedicineStatus, 'Other', $_POST['otherMedication'], $_POST['otherDateBegan'], $_POST['otherDateLastUsed']);
    }

    function insertInfectionHistory($conn, $infectionStatus, $infectionType, $diagnosisDate, $treatmentStartDate, $treatmentEndDate, $treatmentOutcome, $hivTestResult, $hivTestDate, $hivTestLocation) {
        // Prepare and bind
        $inf_stmt = $conn->prepare("INSERT INTO Infection (InfectionStatus, InfectionType, DiagnosisDate, TreatmentStartDate, TreatmentEndDate, TreatmentOutcome, HIVTestResult, HIVTestDate, HIVTestLocation) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $inf_stmt->bind_param("sssssssss", $infectionStatus, $infectionType, $diagnosisDate, $treatmentStartDate, $treatmentEndDate, $treatmentOutcome, $hivTestResult, $hivTestDate, $hivTestLocation);
    
        // Execute the query
        var_dump($infectionStatus, $infectionType, $diagnosisDate, $treatmentStartDate, $treatmentEndDate, $treatmentOutcome, $hivTestResult, $hivTestDate, $hivTestLocation);

        if ($inf_stmt->execute()) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $inf_stmt->error;
        }
    
        $inf_stmt->close();
    }
    
    // Retrieve Infection Status
    $infectionStatus = isset($_POST['InfectionStatus']) ? $_POST['InfectionStatus'] : '';
    
    // Check and insert for each infection type
    if (isset($_POST['pcpCheckbox'])) {
        insertInfectionHistory($conn, $infectionStatus, 'Pneumocystis jirovecii pneumonia (PCP)', $_POST['pcpDiagnosisDate'], $_POST['pcpTreatmentStartDate'], $_POST['pcpTreatmentEndDate'], $_POST['pcpTreatmentOutcome'], $_POST['pcpHIVTestResult'], $_POST['pcpHIVTestDate'], $_POST['pcpHIVTestLocation']);
    }
    
    if (isset($_POST['candidiasisCheckbox'])) {
        insertInfectionHistory($conn, $infectionStatus, 'Candidiasis', $_POST['candidiasisDiagnosisDate'], $_POST['candidiasisTreatmentStartDate'], $_POST['candidiasisTreatmentEndDate'], $_POST['candidiasisTreatmentOutcome'], $_POST['candidiasisHIVTestResult'], $_POST['candidiasisHIVTestDate'], $_POST['candidiasisHIVTestLocation']);
    }
    
    if (isset($_POST['tbCheckbox'])) {
        insertInfectionHistory($conn, $infectionStatus, 'Tuberculosis (TB)', $_POST['tbDiagnosisDate'], $_POST['tbTreatmentStartDate'], $_POST['tbTreatmentEndDate'], $_POST['tbTreatmentOutcome'], $_POST['tbHIVTestResult'], $_POST['tbHIVTestDate'], $_POST['tbHIVTestLocation']);
    }
    
    if (isset($_POST['cryptococcalCheckbox'])) {
        insertInfectionHistory($conn, $infectionStatus, 'Cryptococcal meningitis', $_POST['cryptococcalDiagnosisDate'], $_POST['cryptococcalTreatmentStartDate'], $_POST['cryptococcalTreatmentEndDate'], $_POST['cryptococcalTreatmentOutcome'], $_POST['cryptococcalHIVTestResult'], $_POST['cryptococcalHIVTestDate'], $_POST['cryptococcalHIVTestLocation']);
    }
    
    if (isset($_POST['toxoplasmosisCheckbox'])) {
        insertInfectionHistory($conn, $infectionStatus, 'Toxoplasmosis', $_POST['toxoplasmosisDiagnosisDate'], $_POST['toxoplasmosisTreatmentStartDate'], $_POST['toxoplasmosisTreatmentEndDate'], $_POST['toxoplasmosisTreatmentOutcome'], $_POST['toxoplasmosisHIVTestResult'], $_POST['toxoplasmosisHIVTestDate'], $_POST['toxoplasmosisHIVTestLocation']);
    }
    
    if (isset($_POST['cmvCheckbox'])) {
        insertInfectionHistory($conn, $infectionStatus, 'Cytomegalovirus (CMV)', $_POST['cmvDiagnosisDate'], $_POST['cmvTreatmentStartDate'], $_POST['cmvTreatmentEndDate'], $_POST['cmvTreatmentOutcome'], $_POST['cmvHIVTestResult'], $_POST['cmvHIVTestDate'], $_POST['cmvHIVTestLocation']);
    }
    
    if (isset($_POST['hsvCheckbox'])) {
        insertInfectionHistory($conn, $infectionStatus, 'Herpes simplex virus (HSV)', $_POST['hsvDiagnosisDate'], $_POST['hsvTreatmentStartDate'], $_POST['hsvTreatmentEndDate'], $_POST['hsvTreatmentOutcome'], $_POST['hsvHIVTestResult'], $_POST['hsvHIVTestDate'], $_POST['hsvHIVTestLocation']);
    }
    
    if (isset($_POST['othersCheckbox'])) {
        insertInfectionHistory($conn, $infectionStatus, $_POST['othersInfectionType'], $_POST['othersDiagnosisDate'], $_POST['othersTreatmentStartDate'], $_POST['othersTreatmentEndDate'], $_POST['othersTreatmentOutcome'], $_POST['othersHIVTestResult'], $_POST['othersHIVTestDate'], $_POST['othersHIVTestLocation']);
    }

}
$conn->close();

?>
