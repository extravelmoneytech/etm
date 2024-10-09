// otp functionality

// OTP functionality
const otpInputAll = document.querySelectorAll('.otpInputBlock input');
// Function to retrieve the OTP value from all input fields
function getOtpValue() {
    let otp = '';
    otpInputAll.forEach(input => {
        otp += input.value; // Concatenate each input's value
    });
    return otp;
}

document.addEventListener('DOMContentLoaded', function () {
    let inputs = otpInputAll;

    inputs.forEach((input, index) => {
        input.addEventListener('input', (event) => {
            const currentInput = event.target;
            currentInput.style.backgroundColor = 'rgba(14, 81, 160, 1)'; // Set background opacity to 1

            if (currentInput.value.length > 1) {
                currentInput.value = currentInput.value.slice(0, 1); // Ensure only one character per input
            }

            // Move to the next input if any
            if (currentInput.value !== '' && index < inputs.length - 1) {
                inputs[index + 1].focus();
            } else if (index === inputs.length - 1) {
                // Only log OTP if all inputs are filled
                if (areAllInputsFilled()) {
                    const otp = getOtpValue();
                    console.log('Final OTP:', otp); // Log the final OTP
                }
            }
        });

        input.addEventListener('keydown', (event) => {
            if (event.key === 'Backspace') {
                const currentInput = event.target;
                currentInput.style.backgroundColor = 'rgba(14, 81, 160, 0.1)'; // Reset background opacity

                if (currentInput.value === '' && index > 0) {
                    inputs[index - 1].focus();
                }
            }
        });

        input.addEventListener('focus', (event) => {
            event.target.select(); // Select the input content when focused
        });
    });

    // Function to retrieve the OTP value from all input fields
    function getOtpValue() {
        let otp = '';
        inputs.forEach(input => {
            otp += input.value; // Concatenate each input's value
        });
        return otp;
    }

    // Function to check if all OTP input fields are filled
    function areAllInputsFilled() {
        return Array.from(inputs).every(input => input.value !== '');
    }
});





// Fetch country data from the optimized RestCountries API
fetch('https://restcountries.com/v3.1/all?fields=name,cca2,idd')
  .then(response => response.json())
  .then(data => {
    // Sort the data so that India appears first
    data.sort((a, b) => {
      if (a.name.common === 'India') return -1;
      if (b.name.common === 'India') return 1;
      return 0;
    });

    // Get the <ul> element where country codes will be appended
    const countryCodeDropDown = document.getElementById("countryCodeDropDown");
    const countryCodeContainer = document.querySelector(".countryCodeContainer");

    // Iterate through the country data and generate the dropdown
    data.forEach(country => {
      if (country.idd && country.idd.root) { // Ensure the country has a phone code
        const dialCode = `${country.idd.root}${country.idd.suffixes ? country.idd.suffixes[0] : ''}`;
        const countryName = country.name.common;  // Country name
        const countryISO = country.cca2;  // ISO2 code

        // Create <li> for each country
        const li = document.createElement("li");
        li.className = "text-sm";
        li.setAttribute('value', `${dialCode}`);
        li.setAttribute('alternativeName', countryName);

        // Set the innerHTML for each <li> with country name and dial code
        li.innerHTML = `<span>${dialCode}</span><span> ${countryISO}</span>`;

        // Append <li> to the dropdown
        countryCodeDropDown.appendChild(li);
      }
    });

    // Select the first dropdown item (which is now India)
    selectFirstDropdownItem(countryCodeContainer);
  })
  .catch(error => console.error('Error fetching country data:', error));
