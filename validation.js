// Index Slider Range Validation Start

    document.getElementById('health').addEventListener('change', validateHealth);

    function validateHealth() {
        var health = document.getElementById('health').value;
        if (health < 1 || health > 5) {
            alert("Invalid health value. Please select a value between 1 and 5.");
            return false;
        }
        return true;
    }

    document.getElementById('health-form').addEventListener('submit', function(event){
        if (!validateHealth()) {
            event.preventDefault();
        }
    });

// Index Slider Range Validation End




// Question 2 CheckBox Yes or No Validation Start
    function validateForm() {
        var radios = document.getElementsByName("supplements");
        var formValid = false;

        var i = 0;
        while (!formValid && i < radios.length) {
            if (radios[i].checked) formValid = true;
            i++;        
        }

        if (!formValid) alert("Please select one checkbox to continue.");
        return formValid;
    }
// Question 2 CheckBox Yes or No Validation End


// Question 3 Validation Start
    document.getElementById('activity').addEventListener('change', validateActivity);

    function validateActivity() {
        var activity = document.getElementById('activity').value;
        if (activity < 1 || activity > 5) {
            alert("Invalid activity value. Please select a value between 1 and 5.");
            return false;
        } else if (activity == 0) {
            alert("Please select a value different from the default one");
            return false;
        }
        return true;
    }

    document.getElementById('activity-form').addEventListener('submit', function(event){
        if (!validateActivity()) {
            event.preventDefault();
        }
    });
// Question 3 Validation End


// Question 4 Validation Start

    function validateForm() {
        var checkboxes = document.getElementsByName("activity");
        var checkboxChecked = false;
        for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i].checked) {
            checkboxChecked = true;
            break;
        }
        }
        if (!checkboxChecked) {
        alert("Please select at least one checkbox.");
        return false;
        }
        var otherCheckbox = document.getElementById("other");
        var otherInput = document.getElementById("other-input");
        if (otherCheckbox.checked && otherInput.value == "") {
            alert("Please enter a value for 'Other'");
            return false;
        }
        return true;
    }

// Question 4 Validation End


// Question 5 Validation Start

// Question 5 Validation End


// Question 6 Validation Start

// Question 6 Validation End


// Question 7 Validation Start

// Question 7 Validation End


// Question 8 Validation Start

// Question 8 Validation End


// Question 9 Validation Start

// Question 9 Validation End


// Question 10 Validation Start

// Question 10 Validation End








