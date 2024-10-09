

document.querySelector('#optSend').addEventListener('click', sendOtp);

document.querySelector('#changeNumberBtn').addEventListener('click', revertScreen)

document.querySelector('#otpVerify').addEventListener('click', verifyOtp)
let token = sessionStorage.getItem('token')

let otpInputs = document.querySelectorAll('.otpInputBlock input');
document.querySelector('#mobNumber').focus()
function sendOtp() {
    console.log('ccc')
    document.querySelector('#sendOtpMain').style.display = 'none'

    document.querySelector('#verifyOtpMain').style.display = 'flex'
}

function revertScreen() {
    document.querySelector('#sendOtpMain').style.display = 'flex'

    document.querySelector('#verifyOtpMain').style.display = 'none'
}

function sendOtp() {

    let mobNumber = document.querySelector('#mobNumber');
    let otpInputContainer = document.querySelector('#otpInputContainer');
    let countryCode = document.querySelector('.countryCodeContainer').getAttribute('dataval')
    console.log(mobNumber.value)
    // Check if the mobile number value exists and is a valid number
    if (mobNumber.value === "" || !/^\d+$/.test(mobNumber.value)) {
        insertAlertBelowElement(otpInputContainer, 'Invalid mobile number');
        return;
    } else {
        removeAlertBelowElement(otpInputContainer);
    }


    // Async function for sending OTP
    (async () => {
        loadinggg(true)
        try {
            const apiUrl = 'https://mvc.extravelmoney.com/api-etm/';
            const params = new URLSearchParams({
                action: 'send_otp',
                token: token,  // Assuming `token` is defined elsewhere in your code
                country_code: countryCode,
                mobile: mobNumber.value
            });

            const response = await fetch(apiUrl, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: params.toString(),
            });

            if (!response.ok) throw new Error(`HTTP error! Status: ${response.status}`);

            const resp = await response.json();  // Use await to handle the promise returned by response.json()
            if (resp.status) {
                console.log(resp);
                document.querySelector('#sendOtpMain').style.display = 'none';
                document.querySelector('#verifyOtpMain').style.display = 'flex';
                document.querySelector('#mobNum').textContent = countryCode + " " + mobNumber.value
                otpInputs[0].focus();

                loadinggg(false)
            }
        } catch (error) {
            console.error('Error fetching data:', error);
            // location.href='error.html'
        }
    })();
}

function verifyOtp() {

    let fetchOtp = getOtpValue()

    console.log(fetchOtp.length)
    console.log(fetchOtp)
    console.log(token);

    let otpContainer = document.querySelector('.otpInputBlock')
    if (fetchOtp.length < 4) {
        insertAlertBelowElement(otpContainer, 'Enter a valid otp');
        return
    } else {
        removeAlertBelowElement(otpContainer)
    }

    (async () => {
        loadinggg(true)
        try {
            const apiUrl = 'https://mvc.extravelmoney.com/api-etm/';
            const params = new URLSearchParams({
                action: 'check_otp',
                token: token,
                otp: fetchOtp
            });

            const response = await fetch(apiUrl, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: params.toString(),
            });

            if (!response.ok) throw new Error(`HTTP error! Status: ${response.status}`);

            const resp = await response.json();  // Use await to handle the promise returned by response.json()
            console.log(resp, 'resp.verified')

            if (resp.verified) {

                console.log(resp)
                const userInfo = {
                    userId: resp.uid,
                    countryCode: resp.customer_country_code,
                    mobNum: resp.customer_mobile
                };

                // Store the object as a JSON string
                localStorage.setItem('userInfo', JSON.stringify(userInfo));

                
                window.history.back()
            }
        } catch (error) {
            console.error('Error fetching data:', error);
            location.href = '/error.html'
        }
    })();
}



// Add event listener for Enter key press
document.querySelector('#mobNumber').addEventListener('keydown', function (event) {
    if (event.key === 'Enter') {
        event.preventDefault();  // Prevent form submission or other default actions
        sendOtp();  // Call the same sendOtp function on Enter key press
    }
});


otpInputs[3].addEventListener('keydown', (event) => {
    if (event.key === 'Enter') {
        event.preventDefault();  // Prevent form submission or other default actions

        verifyOtp()
    }
})