<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HIV Form</title>
    <link rel="stylesheet" href="style.css?v=13">
</head>
<body>
    
    <div id="page" class="site">
        <div class="container">
            <div class="form-box">
                <div class="progress">
                    <div class="logo"><a href="/"> <span>HIV</span>COMBAT</a></div>
                    <ul class="form-steps">
                        <li class="step active">
                            <span>1</span>
                            <p>Demographic Data<br> <span>Demographic Information</span></p>
                        </li>
                        <li class="step">
                            <span>2</span>
                            <p>Occupation<br> <span>Occupation Information</span></p>
                        </li>
                        <li class="step">
                            <span>3</span>
                            <p>History of Exposure<br> <span>Exposure History Information</span></p>
                        </li>
                        <li class="step">
                            <span>4</span>
                            <p>ARV Use History<br> <span>ARV Use History Information</span></p>
                        </li>
                        <li class="step">
                            <span>5</span>
                            <p>Opportunistic Infection<br> <span>Additional information</span></p>
                        </li>
                        <li class="step">
                            <span>6</span>
                            <p>Review<br> <span>Display information</span></p>
                        </li>
                    </ul>
                </div>

                <form action="create.php" method="POST">
                    <div class="form-one form-step active">
                        <div class="bg-svg"></div>
                        <h2>Demographic</h2>
                        <p>Enter your personal information correctly.</p>
                        <div id="philhealth-container">
                            <label for="philhealth-number">Philhealth Number</label>
                            <input type="text" id="philhealth-number" name="philhealth-number" placeholder="00-000000000-0" required>
                            <label>
                                <input type="checkbox" name="philhealth-option"> 
                                Not enrolled in PhilHealth
                            </label>
                        </div>
                
                        <div id="name-container">
                            <label for="name">Name (Full Name) </label>
                            <input type="text" id="name" name="name" placeholder="LN, FN, MI" required>
                        </div>
                
                        <div id="birthdate-container">
                            <label for="birthdate">Birth Date</label>
                            <input type="date" id="birthdate" name="birthdate" required>
                        </div>
                
                        <div id="sex-at-birth-container"> 
                            <legend>Sex (at Birth):</legend>
                            <label>
                                <input type="radio" name="sex" value="male" required>
                                Male
                            </label>
                            <label>
                                <input type="radio" name="sex" value="female" required>
                                Female
                            </label>
                        </div>
                
                        <div id="self-identity-container">
                            <label for="self-identity">Self-Identity: </label>
                            <input type="text" id="self-identity" name="self-identity" placeholder="Sexual Orientation">
                        </div>
                
                        <div id="residence-current-container">
                            <label for="current residence">Current Residence</label>
                            <input type="text" id="current-residence" name="current-residence" placeholder="City, Province" required>
                        </div>
                
                        <div id="residence-permanent-container">
                            <label for="permanent residence">Permanent Residence</label>
                            <input type="text" id="permanent-residence" name="permanent-residence" placeholder="City, Province" required>
                        </div>
                
                        <div id="birth-place-container">
                            <label for="place of birth">Place of Birth</label>
                            <input type="text" id="place-of-birth" name="place-of-birth" placeholder="City, Province" required>
                        </div>
                
                        <div id="nationality">
                            <div class="radio-container">
                                <legend> Nationality:</legend>
                                <input type="radio" name="nationality" value="Filipino" required> Filipino
                            </div>
                            <div class="radio-container">
                                <label for="other-nationality">Others, please specify: </label>
                                <input type="text" id="other-nationality" name="other-nationality" placeholder="Other Nationality">
                            </div>
                        </div>
                
                        <div id="educational-attainment">
                            <label for="educ-label">Highest Educational Attainment</label>
                            <select id="educ-attainment" name="educ-attainment">
                                <option value="None" selected>None</option>
                                <option value="Elementary">Elementary</option>
                                <option value="Highschool">Highschool</option>
                                <option value="College">College</option>
                                <option value="Vocational">Vocational</option>
                                <option value="Post-Graduate">Postgraduate</option>
                            </select>
                        </div>
                
                        <div id="civil-status">
                            <label for="civstat-label">Civil Status</label>
                            <select id="civilstatus" name="civilstatus">
                                <option value="Single" selected>Single</option>
                                <option value="Married">Married</option>
                                <option value="Widowed">Widowed</option>
                                <option value="Separated">Separated</option>
                            </select>
                        </div>
                
                        <div id="livingwithpartner">
                            <label for="living-with-partner">Are you currently living with a partner? </label>
                            <label class="living-with-partner-radio">
                                <input type="radio" name="living-with-partner" value="N" required>
                                No
                            </label>
                            <label>
                                <input type="radio" name="living-with-partner" value="Y" required>
                                Yes
                            </label>
                        </div>
                
                        <div id="pregnantstatus">
                            <label for="pregnantstatus">Are you currently pregnant? (if female only) </label>
                            <label>
                                <input type="radio" name="pregnant-status" value="N" required>
                                No
                            </label>
                            <label>
                                <input type="radio" name="pregnant-status" value="Y" required>
                                Yes
                            </label>
                        </div>
                    </div>

                    
                    <div class="form-two form-step">
                        <div class="bg-svg"></div>
                        <h2>Occupation</h2>
                        <p>Enter your Occupation information correctly.</p>

                        <div id="current-work">
                            <label for="current-work"> <b>Current Occupation</b>
                            (please specify main source of income):
                            </label>
                            <input type="text" id="current-work" name="current-work" placeholder="Current Occupation" required>
                        </div>
                    
                        <div id="previous-work">
                            <label for="current-work">
                                If no current work, please specify previous occupation:
                                </label>
                                <input type="text" id="previous-work" name="previous-work" placeholder="Previous Occupation" required>
                        </div>
                    
                        <div id="current-school-container">
                            <div id="school-status">
                                <label for="school-status">Currently in school? </label>
                                <label>
                                    <input type="radio" name="school-status" value="N">
                                    No
                                </label>
                            
                                <label>
                                    <input type="radio" name="school-status" value="Y">
                                    Yes
                                </label>
                            </div>
                
                            <div id="school-level">
                                <select id="school-level" name="school-level">
                                    <option value="None" selected>None</option>
                                    <option value="Highschool">Highschool</option>
                                    <option value="College">College</option>
                                    <option value="Vocational">Vocational</option>
                                    <option value="Postgraduate">Postgraduate</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                        </div>
                    
                        <div id="worked-overseas">
                            <label for="worked-overseas-label">Did you work overseas/abroad in the past 5 years? </label>
                            <label>
                                <input type="radio" name="worked-overseas" value="N">
                                No
                            </label>
                        
                            <label>
                                <input type="radio" name="worked-overseas" value="Y">
                                Yes
                            </label>
                        </div>
            
                        <div id="lastcontractreturndate">
                            <label for="return-date">
                                If yes, when did you return your last contract
                                </label>
                                <input type="text" id="return-date" name="return-date" placeholder="Year">
                        </div>
                    
                        <div id="work-location">
                            <label for="work-location-label">Where were you based? </label>
                            <label class="work-location-radio">
                                <input type="radio" name="work-location" value="Ship">
                                On a ship
                            </label>
                        
                            <label>
                                <input type="radio" name="work-location" value="Land">
                                Land
                            </label>
                        </div>
                    
                        <div id="lastworkcountry">
                            <label for="work-country">
                                What country did you last work in?
                                </label>
                                <input type="text" id="work-country" name="work-country" placeholder="Country">
                        </div>
                    </div>
                    
                    <div class="form-three form-step">
                        <div class="bg-svg"></div>
                        <h2>History of Exposure</h2>
                        <p>Enter your Exposure History information correctly.</p>

                        <div id="MotherHIVstatus">
                            <label for="MotherHIVstatus">Did your <u> <b>birth mother</b></u> have HIV when you were born?</label>
                            <label>
                                <input type="radio" name="MotherHIVstatus" value="N">
                                No
                            </label>
                        
                            <label>
                                <input type="radio" name="MotherHIVstatus" value="Y">
                                Yes
                            </label>
                        </div>
                    
                        <div id="partner-type">
                            <label for="partner-type"> Which kind of partner are you? </label>
                            <label class="partnertype-checkbox">
                                <input type="checkbox" name="partner-type[]" value="Receptive">
                                Receptive
                            </label>
            
                            <label class="partnertype-checkbox">
                                <input type="checkbox" name="partner-type[]" value="Insertive">
                                Insertive
                            </label>
            
                            <label class="partnertype-checkbox">
                                <input type="checkbox" name="partner-type[]" value="Sides">
                                Sides
                            </label>
                        </div>
        
                        <div id="activity-type">
                            <label for="activity-type"> Which of the following sex practices <br> are you rececntly engaged to? </label>
            
                            <label class="activitytype-checkbox">
                                <input type="checkbox" name="activity-type[]" value="Oral">
                                Oral
                            </label>
            
                            <label class="activitytype-checkbox">
                                <input type="checkbox" name="activity-type[]" value="Vaginal">
                                Vaginal
                            </label>
            
                            <label class="activitytype-checkbox">
                                <input type="checkbox" name="activity-type[]" value="Anal">
                                Anal
                            </label>
                        </div>
                    
                        <div id="exposure-experience-container">
                            <label> <b>Have you ever experienced any of the following? Please check the appropriate answer for each item.</b> </label>
                            <div id="ProtectionType">
                                <div>
                                    <label>Have you had sex with a female, male, or someone whom you know has HIV without a condom?</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="radio" name="ProtectionType" value="N">
                                        No
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="radio" name="ProtectionType" value="Y">
                                        Yes
                                    </label>
                                </div>
                            </div>
                
                            <div id="PaymentForSex">
                                <br>
                                <div>
                                    <label>Have you regularly accepted payment for sex?</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="radio" name="PaymentForSex" value="N">
                                        No
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="radio" name="PaymentForSex" value="Y">
                                        Yes
                                    </label>
                                </div>
                            </div>
                
                            <div id="DrugsExposure">
                                <br>
                                <div>
                                    <label>Have you ever injected drugs without a doctor's advice, received a blood transfusion, experienced occupational exposure (such as a needlestick or sharps injury), or gotten a tattoo?</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="radio" name="DrugsExposure" value="N">
                                        No
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="radio" name="DrugsExposure" value="Y">
                                        Yes
                                    </label>
                                </div>
                            </div>
                
                            <div id="STIorSTD">
                                <br>
                                <div>
                                    <label>Have you been tested for sexually transmitted infections (STIs/STDs)?</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="radio" name="STIorSTD" value="N">
                                        No
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="radio" name="STIorSTD" value="Y">
                                        Yes
                                    </label>
                                </div>
                            </div>
                        </div>
                    
                        <div id="AgeAtFirstSex">
                            <label for="AgeAtFirstSex-label">Age at first sex:</label>
                            <input type="text" id="AgeAtFirstSex-text" name="AgeAtFirstSex" placeholder="Age" required>
                        
                            <label>
                                <input type="checkbox" name="AgeAtFirstSex-option"> 
                                Not applicable
                            </label>
                        </div>
        
                        <div id="AgeAtFirstDrugUse">
                            <label for="AgeAtFirstDrugUse-label">Age at first injecting drug use: :</label>
                            <input type="text" id="AgeAtFirstDrugUse-text" name="AgeAtFirstDrugUse" placeholder="Age" required>
                        
                            <label>
                                <input type="checkbox" name="AgeAtFirstDrugUse-option"> 
                                Not applicable
                            </label>
                        </div>
                    
                        <label> <b>If you have ever had sex, please answer this section. If the answer is none, write '0' in the box.</b> </label>
                        <div id="sex-experience-female">
                                <label for="FemaleSexPartnerOccurences">
                                How many FEMALE sex partners have you ever had?
                                </label>
                                <input type="text" id="FemaleSexPartnerOccurences" name="FemaleSexPartnerOccurences" placeholder="Insert number here" required>
                
                                <label for="YearsOfLastSexFemale-label">Years of last sex with a female</label>
                                <input type="text" id="YearsOfLastSexFemale-text" name="YearsOfLastSexFemale" placeholder="Year" required>
                        </div>

                        <div id="sex-experience-male">
                                <label for="MaleSexPartnerOccurences">
                                How many MALE sex partners have you ever had?
                                </label>
                                <input type="text" id="MaleSexPartnerOccurences" name="MaleSexPartnerOccurences" placeholder="Insert number here" required>
                
                                <label for="YearsOfLastSexMale-label">Years of last sex with a male</label>
                                <input type="text" id="YearsOfLastSexMale-text" name="YearsOfLastSexMale" placeholder="Year" required>
                        </div>
                    </div>

                    
                    <div class="form-four form-step">
                        <h2>Antiretroviral Use History</h2>
                        <p>Enter your ARV Use History information correctly.</p>

                        <div id="ARVMedicineStatus">
                            <label for="ARVMedicineStatus">Has the patient ever used <b>antiretroviral medicines?</b> </label>
                            <label>
                                <input type="radio" name="ARVMedicineStatus" value="N">
                                No
                            </label>
                        
                            <label>
                                <input type="radio" name="ARVMedicineStatus" value="Y">
                                Yes
                            </label>

                            <label>
                                <input type="radio" name="ARVMedicineStatus" value="U">
                                Unknown
                            </label>
                        </div>

                        <label>
                            <input type="checkbox" id="hivTxCheckbox" name="hivTxCheckbox" onchange="toggleFields('hivTxCheckbox', 'hivTxFields')">
                            HIV TX
                        </label><br>
                        <div id="hivTxFields" class="hidden">
                            ARV Medication: <input type="text" name="hivTxMedication"><br>
                            Date Began: <input type="date" name="hivTxDateBegan"><br>
                            Date last used: <input type="date" name="hivTxDateLastUsed"><br>
                        </div><br>
                
                        <label>
                            <input type="checkbox" id="prepCheckbox" name="prepCheckbox" onchange="toggleFields('prepCheckbox', 'prepFields')">
                            PrEP
                        </label><br>
                        <div id="prepFields" class="hidden">
                            ARV Medication: <input type="text" name="prepMedication"><br>
                            Date Began: <input type="date" name="prepDateBegan"><br>
                            Date last used: <input type="date" name="prepDateLastUsed"><br>
                        </div><br>
                
                        <label>
                            <input type="checkbox" id="pepCheckbox" name="pepCheckbox" onchange="toggleFields('pepCheckbox', 'pepFields')">
                            PEP
                        </label><br>
                        <div id="pepFields" class="hidden">
                            ARV Medication: <input type="text" name="pepMedication"><br>
                            Date Began: <input type="date" name="pepDateBegan"><br>
                            Date last used: <input type="date" name="pepDateLastUsed"><br>
                        </div><br>
                
                        <label>
                            <input type="checkbox" id="pmtctCheckbox" name="pmtctCheckbox" onchange="toggleFields('pmtctCheckbox', 'pmtctFields')">
                            PMTCT
                        </label><br>
                        <div id="pmtctFields" class="hidden">
                            ARV Medication: <input type="text" name="pmtctMedication"><br>
                            Date Began: <input type="date" name="pmtctDateBegan"><br>
                            Date last used: <input type="date" name="pmtctDateLastUsed"><br>
                        </div><br>
                
                        <label>
                            <input type="checkbox" id="hbvTxCheckbox" name="hbvTxCheckbox" onchange="toggleFields('hbvTxCheckbox', 'hbvTxFields')">
                            HBV Tx
                        </label><br>
                        <div id="hbvTxFields" class="hidden">
                            ARV Medication: <input type="text" name="hbvTxMedication"><br>
                            Date Began: <input type="date" name="hbvTxDateBegan"><br>
                            Date last used: <input type="date" name="hbvTxDateLastUsed"><br>
                        </div><br>
                
                        <label>
                            <input type="checkbox" id="otherCheckbox" name="otherCheckbox" onchange="toggleFields('otherCheckbox', 'otherFields')">
                            Other
                        </label><br>
                        <div id="otherFields" class="hidden">
                            ARV Medication: <input type="text" name="otherMedication"><br>
                            Date Began: <input type="date" name="otherDateBegan"><br>
                            Date last used: <input type="date" name="otherDateLastUsed"><br>
                        </div><br>
                    </div>

                    <div class="form-five form-step">
                        <h2>Opportunistic Infections</h2>
                        <p>Enter your additional information correctly.</p>

                        <div id="InfectionStatus">
                            <label for="InfectionStatus">Has the patient been diagnosed with <b>other infections?</b> </label>
                            <label>
                                <input type="radio" name="InfectionStatus" value="N">
                                No
                            </label>
                        
                            <label>
                                <input type="radio" name="InfectionStatus" value="Y">
                                Yes
                            </label>

                            <label>
                                <input type="radio" name="InfectionStatus" value="U">
                                Unknown
                            </label>
                        </div>

                        <label>
                            <input type="checkbox" id="pcpCheckbox" name="pcpCheckbox" onchange="toggleFields('pcpCheckbox', 'pcpFields')">
                            Pneumocystis jirovecii pneumonia (PCP)
                        </label><br>
                        <div id="pcpFields" class="hidden">
                            Diagnosis Date: <input type="date" name="pcpDiagnosisDate"><br>
                            Treatment Start Date: <input type="date" name="pcpTreatmentStartDate"><br>
                            Treatment End Date: <input type="date" name="pcpTreatmentEndDate"><br>
                            Treatment Outcome: <input type="text" name="pcpTreatmentOutcome"><br>
                            HIV Test Result: <input type="text" name="pcpHIVTestResult"><br>
                            HIV Test Date: <input type="date" name="pcpHIVTestDate"><br>
                            HIV Test Location: <input type="text" name="pcpHIVTestLocation"><br>
                        </div><br>
                
                        <label>
                            <input type="checkbox" id="candidiasisCheckbox" name="candidiasisCheckbox" onchange="toggleFields('candidiasisCheckbox', 'candidiasisFields')">
                            Candidiasis
                        </label><br>
                        <div id="candidiasisFields" class="hidden">
                            Diagnosis Date: <input type="date" name="candidiasisDiagnosisDate"><br>
                            Treatment Start Date: <input type="date" name="candidiasisTreatmentStartDate"><br>
                            Treatment End Date: <input type="date" name="candidiasisTreatmentEndDate"><br>
                            Treatment Outcome: <input type="text" name="candidiasisTreatmentOutcome"><br>
                            HIV Test Result: <input type="text" name="candidiasisHIVTestResult"><br>
                            HIV Test Date: <input type="date" name="candidiasisHIVTestDate"><br>
                            HIV Test Location: <input type="text" name="candidiasisHIVTestLocation"><br>
                        </div><br>
                
                        <label>
                            <input type="checkbox" id="tbCheckbox" name="tbCheckbox" onchange="toggleFields('tbCheckbox', 'tbFields')">
                            Tuberculosis (TB)
                        </label><br>
                        <div id="tbFields" class="hidden">
                            Diagnosis Date: <input type="date" name="tbDiagnosisDate"><br>
                            Treatment Start Date: <input type="date" name="tbTreatmentStartDate"><br>
                            Treatment End Date: <input type="date" name="tbTreatmentEndDate"><br>
                            Treatment Outcome: <input type="text" name="tbTreatmentOutcome"><br>
                            HIV Test Result: <input type="text" name="tbHIVTestResult"><br>
                            HIV Test Date: <input type="date" name="tbHIVTestDate"><br>
                            HIV Test Location: <input type="text" name="tbHIVTestLocation"><br>
                        </div><br>
                
                        <label>
                            <input type="checkbox" id="cryptococcalCheckbox" name="cryptococcalCheckbox" onchange="toggleFields('cryptococcalCheckbox', 'cryptococcalFields')">
                            Cryptococcal meningitis
                        </label><br>
                        <div id="cryptococcalFields" class="hidden">
                            Diagnosis Date: <input type="date" name="cryptococcalDiagnosisDate"><br>
                            Treatment Start Date: <input type="date" name="cryptococcalTreatmentStartDate"><br>
                            Treatment End Date: <input type="date" name="cryptococcalTreatmentEndDate"><br>
                            Treatment Outcome: <input type="text" name="cryptococcalTreatmentOutcome"><br>
                            HIV Test Result: <input type="text" name="cryptococcalHIVTestResult"><br>
                            HIV Test Date: <input type="date" name="cryptococcalHIVTestDate"><br>
                            HIV Test Location: <input type="text" name="cryptococcalHIVTestLocation"><br>
                        </div><br>
                
                        <label>
                            <input type="checkbox" id="toxoplasmosisCheckbox" name="toxoplasmosisCheckbox" onchange="toggleFields('toxoplasmosisCheckbox', 'toxoplasmosisFields')">
                            Toxoplasmosis
                        </label><br>
                        <div id="toxoplasmosisFields" class="hidden">
                            Diagnosis Date: <input type="date" name="toxoplasmosisDiagnosisDate"><br>
                            Treatment Start Date: <input type="date" name="toxoplasmosisTreatmentStartDate"><br>
                            Treatment End Date: <input type="date" name="toxoplasmosisTreatmentEndDate"><br>
                            Treatment Outcome: <input type="text" name="toxoplasmosisTreatmentOutcome"><br>
                            HIV Test Result: <input type="text" name="toxoplasmosisHIVTestResult"><br>
                            HIV Test Date: <input type="date" name="toxoplasmosisHIVTestDate"><br>
                            HIV Test Location: <input type="text" name="toxoplasmosisHIVTestLocation"><br>
                        </div><br>
                
                        <label>
                            <input type="checkbox" id="cmvCheckbox" name="cmvCheckbox" onchange="toggleFields('cmvCheckbox', 'cmvFields')">
                            Cytomegalovirus (CMV)
                        </label><br>
                        <div id="cmvFields" class="hidden">
                            Diagnosis Date: <input type="date" name="cmvDiagnosisDate"><br>
                            Treatment Start Date: <input type="date" name="cmvTreatmentStartDate"><br>
                            Treatment End Date: <input type="date" name="cmvTreatmentEndDate"><br>
                            Treatment Outcome: <input type="text" name="cmvTreatmentOutcome"><br>
                            HIV Test Result: <input type="text" name="cmvHIVTestResult"><br>
                            HIV Test Date: <input type="date" name="cmvHIVTestDate"><br>
                            HIV Test Location: <input type="text" name="cmvHIVTestLocation"><br>
                        </div><br>
                
                        <label>
                            <input type="checkbox" id="hsvCheckbox" name="hsvCheckbox" onchange="toggleFields('hsvCheckbox', 'hsvFields')">
                            Herpes simplex virus (HSV)
                        </label><br>
                        <div id="hsvFields" class="hidden">
                            Diagnosis Date: <input type="date" name="hsvDiagnosisDate"><br>
                            Treatment Start Date: <input type="date" name="hsvTreatmentStartDate"><br>
                            Treatment End Date: <input type="date" name="hsvTreatmentEndDate"><br>
                            Treatment Outcome: <input type="text" name="hsvTreatmentOutcome"><br>
                            HIV Test Result: <input type="text" name="hsvHIVTestResult"><br>
                            HIV Test Date: <input type="date" name="hsvHIVTestDate"><br>
                            HIV Test Location: <input type="text" name="hsvHIVTestLocation"><br>
                        </div><br>
                
                        <label>
                            <input type="checkbox" id="othersCheckbox" name="othersCheckbox" onchange="toggleFields('othersCheckbox', 'othersFields')">
                            Others
                        </label><br>
                        <div id="othersFields" class="hidden">
                            Infection Type: <input type="text" name="othersInfectionType"><br>
                            Diagnosis Date: <input type="date" name="othersDiagnosisDate"><br>
                            Treatment Start Date: <input type="date" name="othersTreatmentStartDate"><br>
                            Treatment End Date: <input type="date" name="othersTreatmentEndDate"><br>
                            Treatment Outcome: <input type="text" name="othersTreatmentOutcome"><br>
                            HIV Test Result: <input type="text" name="othersHIVTestResult"><br>
                            HIV Test Date: <input type="date" name="othersHIVTestDate"><br>
                            HIV Test Location: <input type="text" name="othersHIVTestLocation"><br>
                        </div><br>
                    </div>

                    <div class="form-six form-step">
                        <h2>Display Information</h2>
                        <p>Display information of the patient.</p>
                    </div>

                    <div class="btn-group">
                        <button type="button" class="btn-prev" disabled>Back</button>
                        <button type="button" class="btn-next">Next Stage</button>
                        <button class="btn-submit">Submit</button>
                    </div>                    
                </form>
            </div>
        </div>
    </div>
    <script src="script.js?v=13"></script>
</body>
</html>