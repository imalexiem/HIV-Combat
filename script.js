const nextButton = document.querySelector('.btn-next');
const prevButton = document.querySelector('.btn-prev');
const submitButton = document.querySelector('.btn-submit');
const steps = document.querySelectorAll('.step');
const form_steps = document.querySelectorAll('.form-step');
let active = 1;

nextButton.addEventListener('click', () => {
    active++;   
    if (active > steps.length) {
        active = steps.length;
    }
    updateProgress();
});

prevButton.addEventListener('click', () => {
    active--;
    if (active < 1) {
        active = 1;
    }
    updateProgress();
});

submitButton.addEventListener('click', () => {
    alert('Form submitted');
    
    // Check if we are not already on the last step
    if (active < steps.length) {
        active++;
    }
    updateProgress();
});


const updateProgress = () => {
    console.log('steps.length => ' + steps.length);
    console.log('active => ' + active);

    //toggle active class for steps
    steps.forEach((step, idx) => {
        if (idx == (active - 1)) {
            step.classList.add('active');
            form_steps[idx].classList.add('active');
            console.log('i ->' + idx);
        } else {
            step.classList.remove('active');
            form_steps[idx].classList.remove('active');
        }
    });

    //enable or disable prev and next button
    if (active === 1) {
        prevButton.disabled = true;
    } else if (active === steps.length) {
        nextButton.disabled = true;
        submitButton.disabled = false;
    } else {
        prevButton.disabled = false;
        nextButton.disabled = false;
    }

    //if active is the last step, let
}

function toggleFields(elementId, targetId) {
    var checkbox = document.getElementById(elementId);
    var targetField = document.getElementById(targetId);

    if (checkbox.checked) {
        targetField.classList.remove('hidden');
    } else {
        targetField.classList.add('hidden');
    }
}

const workedOverseasRadio = document.querySelectorAll('input[name="worked-overseas"]');
const returnDateField = document.getElementById('return-date');
const workLocationRadios = document.querySelectorAll('input[name="work-location"]');
const workCountryField = document.getElementById('work-country');

// Function to toggle fields based on radio button selection
function toggleOverseasFields() {
    const checkedValue = document.querySelector('input[name="worked-overseas"]:checked').value;

    if (checkedValue === 'Y') {
        returnDateField.disabled = false;
        workLocationRadios.forEach(radio => {
            radio.disabled = false;
        });
        workCountryField.disabled = false;
    } else {
        returnDateField.disabled = true;
        workLocationRadios.forEach(radio => {
            radio.disabled = true;
        });
        workCountryField.disabled = true;
    }
}

// Add event listeners to radio buttons
workedOverseasRadio.forEach(radio => {
    radio.addEventListener('change', toggleOverseasFields);
});

const arvMedicineStatusRadios = document.querySelectorAll('input[name="ARVMedicineStatus"]');
const fieldsToDisable = [
    document.querySelector('#hivTxCheckbox'),
    document.querySelector('#prepCheckbox'),
    document.querySelector('#pepCheckbox'),
    document.querySelector('#pmtctCheckbox'),
    document.querySelector('#hbvTxCheckbox'),
    document.querySelector('#otherCheckbox'),
    document.querySelector('#hivTxFields'),
    document.querySelector('#prepFields'),
    document.querySelector('#pepFields'),
    document.querySelector('#pmtctFields'),
    document.querySelector('#hbvTxFields'),
    document.querySelector('#otherFields')
];

function toggleARVFields() {
    const checkedValue = document.querySelector('input[name="ARVMedicineStatus"]:checked').value;
    const disable = (checkedValue === 'N');

    fieldsToDisable.forEach(field => {
        if (field.tagName === 'INPUT') {
            field.disabled = disable;
            field.checked = false;
        } else {
            field.classList.toggle('hidden', disable);
        }
    });
}

arvMedicineStatusRadios.forEach(radio => {
    radio.addEventListener('change', toggleARVFields);
});

// Initial toggle to set fields based on pre-selected value
toggleARVFields();

