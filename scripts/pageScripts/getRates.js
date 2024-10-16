let nextPageUrl='/Delivery-Details'
let nextPageUrlMt='/Contact-Details'
// Then on the previous page, use this to detect when the page is revisited
window.addEventListener('pageshow', function(event) {
    if (event.persisted) {
        // Force reload if the page is cached
        window.location.reload();
    }
});


// Set an initial state on page load
window.addEventListener('DOMContentLoaded', () => {
    history.replaceState({ widgetOpen: false }, '', '');
});

const token = sessionStorage.getItem('token');

console.log(token,'tokken')

if (sessionStorage.getItem('productPage') === 'fx') {



    // Retrieve the stored data from sessionStorage
    const storedDataJSON = sessionStorage.getItem('storedData');

    let productData = [];
    // Mapping of currency codes to their formal names
    const currencyNames = {
        USD: "United States Dollar",
        GBP: "British Pound",
        AUD: "Australian Dollar",
        CAD: "Canadian Dollar",
        EUR: "Euro",
        JPY: "Japanese Yen",
        MYR: "Malaysian Ringgit",
        NZD: "New Zealand Dollar",
        SGD: "Singapore Dollar",
        THB: "Thai Baht",
        AED: "United Arab Emirates Dirham"
    };

    const currencySymbols = {
        'USD': '$',      // United States Dollar
        'GBP': '£',      // British Pound
        'EUR': '€',      // Euro
        'AUD': 'A$',     // Australian Dollar
        'CAD': 'C$',     // Canadian Dollar
        'THB': '฿',      // Thai Baht
        'SGD': 'S$',     // Singapore Dollar
        'JPY': '¥',      // Japanese Yen
        'MYR': 'RM',     // Malaysian Ringgit
        'NZD': 'NZ$',    // New Zealand Dollar
        'AED': 'AED'     // UAE Dirham (using "AED" as the symbol)
    };
    let rowId;

    let buyCity;
    // Check if the stored data and token exist
    if (storedDataJSON && token) {
        loadinggg(true)
        // Parse the JSON string back into a JavaScript object
        const storedData = JSON.parse(storedDataJSON);

        console.log(storedData, 'jhj')

        // Access the data from the object
        const widgetProduct = storedData[0].widgetProduct;
        const widgetAmount = storedData[0].widgetAmount;
        buyCity = storedData[0].city;
        console.log(buyCity, 'buycity')
        const currencyCode = storedData[0].widgetCurrency;
        const recommendationText = storedData[0].recommendationText;



        // Format the widgetCurrency value
        const formattedWidgetCurrency = currencyNames[currencyCode]
            ? `${currencyNames[currencyCode]} (${currencyCode})`
            : currencyCode; // Default to code if not found

        // Update static content
        document.querySelector('.buyProduct').textContent = widgetProduct;
        document.querySelector('.buyCurrency').textContent = formattedWidgetCurrency;
        document.querySelector('.buyAmount').value = widgetAmount;

        // Handle recommendation text visibility
        if (!recommendationText || recommendationText.trim() === '') {
            document.querySelector('#recommendationTextContainer').style.display = 'none';
        } else {
            document.querySelector('#recommendationText').textContent = recommendationText;
            document.querySelector('#recommendationTextContainer').style.display = 'flex';
        }



        const params = new URLSearchParams({
            action: 'get_city_rate',
            token: token,
            city: buyCity
        });

        fetch('https://mvc.extravelmoney.com/api-etm/', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: params.toString(),
        })
            .then(response => response.json())
            .then(data => {
                console.log(data, 'mbcx')
                if (data.products) {
                    addCard(data.products)
                    
                }


                loadinggg(false)

            })
            .catch((error) => {
                console.error('Error:', error);
                // location.href='error.html'
            });


    } else {
        console.log('No data found in sessionStorage.');
    }


    let nextBtn = document.querySelector('#bestRatesFetchBtn');

    nextBtn.addEventListener('click', () => {

        if (userCheck()) {


            const params = new URLSearchParams({
                action: 'add_user_to_order',
                token: token,
                uid:sessionStorage.getItem('userId')
            });


            
            
    
            fetch('https://mvc.extravelmoney.com/api-etm/', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: params.toString(),
            })
                .then(response => response.json())
                .then(data => {
                    console.log(data, 'mbcx')
                    
    
    
                    if(data.status){
                        location.href = nextPageUrl
                    }
    
                })
                .catch((error) => {
                    console.error('Error:', error);
                    // location.href='error.html'
                });



     

        } else {
            console.log('not a user, verification required')
            openOtpWidget()
        }

    });






    let addCurrencyCardBtn = document.querySelector('#addCurrencyCardBtn');
    let addForexCardBtn = document.querySelector('#addForexCardBtn');
    let maxCards = 3;

    let productAdder = document.querySelector('#productAdder');

    // Check if the item exists in sessionStorage before parsing
    const storedIbrData = sessionStorage.getItem('ibrData');
    let parsedData;

    if (storedIbrData !== null) {
        // Parse and use the data if it exists
        parsedData = JSON.parse(storedIbrData);
        console.log(parsedData, 'parsedData')
    }

    addCurrencyCardBtn.addEventListener('click', () => {
        productAdder.style.display = 'flex'
        forceSelectDropdownItem('cardProduct', 'currency')
        updateProdAddCard()

    });

    addForexCardBtn.addEventListener('click', () => {
        productAdder.style.display = 'flex'
        forceSelectDropdownItem('cardProduct', 'forexCard')
        updateProdAddCard()
    });

    let productAdderCloseBtn = document.querySelector('#productAdderCloseBtn');

    productAdderCloseBtn.addEventListener('click', () => {
        productAdder.style.display = 'none'
    })

    document.querySelector('#prodCardAddBtn').addEventListener('click', async () => {
        loadinggg(true)

        let product = document.querySelector('#cardProduct').getAttribute('dataval');
        let currency = document.querySelector('#cardCurrency').getAttribute('dataval');

        if (product === 'forexCard') {
            product = 'Forex Card'
        }
        else if (product === 'currency') {
            product = 'Currency'
        }
        console.log(product, 'pp products')



        try {
            const apiUrl = 'https://mvc.extravelmoney.com/api-etm/';

            const params = new URLSearchParams({
                action: 'add_remove_product',
                token: token,  // Make sure token is defined
                transaction: 'buy',
                currency: currency,
                product: product,
                amount: '1000',
                function: 'add'
            });

            const response = await fetch(apiUrl, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: params.toString(),
            });

            if (!response.ok) {
                // Throw detailed error if response is not OK
                throw new Error(`HTTP error! Status: ${response.status} - ${response.statusText}`);
            }

            const resp = await response.json();
            console.log(resp, 'newresp');
            if (resp.products) {
                addCard(resp.products)
            }

            productAdder.style.display = 'none'
            loadinggg(false)
        } catch (error) {
            console.error('Error fetching data:', error);
            // Optionally redirect to an error page
            // location.href = 'error.html';
        }
    });




    function addCard(data) {

        productData = data
        console.log(data, 'adding cards');
        renderCartItems(data);

        let templateCard = document.getElementById('prodCardTemplate');
        console.log(templateCard);

        let container = document.querySelector('.prodCardContainer'); // Get the container
        container.innerHTML = ''; // Clear container before appending new cards

        // Loop through each item in the data array
        data.forEach((item) => {
            console.log(item); // Log each data item

            let newCard = templateCard.cloneNode(true); // Clone the template card
            newCard.setAttribute('rowId', item.rowID); // Set rowID
            newCard.style.display = 'block'; // Make the cloned card visible

            newCard.querySelector('.buyProduct').textContent = item.productType


            // Set the card note with market rate and city info
            newCard.querySelector('#cardNote').innerHTML = `The current market rate of <span class="currencyCode">${item.currency}</span> per 1 unit is <b>${item.rate}</b> Indian rupees in <b>${buyCity}</b>`;
            newCard.querySelector('#cardCurrencyName').textContent=item.currency
            // Format the currency value
            const formattedWidgetCurrency = currencyNames[item.currency]
                ? `${currencyNames[item.currency]} (${item.currency})`
                : item.currency; // Use currency code if name not found
            newCard.querySelector('.buyCurrency').textContent = formattedWidgetCurrency;

            // Set INR rate and input event listener
            let inrRate = newCard.querySelector('#inrRate');
            let input = newCard.querySelector('#currencyInput');

            input.value = currencySymbols[item.currency] + " " + item.amount
            inrRate.textContent = '₹' + formatIndianCurrency(item.totalINR);

            input.addEventListener('input', () => {
                const currentAmount = input.value.replace(/^\D+/, ''); // Remove currency symbol
                let finalAmount = currentAmount * item.rate;
                inrRate.textContent = '₹' + formatIndianCurrency(finalAmount.toFixed(0));

                console.log(productData, 'pdData')

                // Update the productData array by modifying the object with the matching rowID
                productData = productData.map(product => {
                    if (product.rowID === item.rowID) {
                        // Update only the amount field for the matching product
                        return { 
                            ...product, 
                            amount: currentAmount, 
                            totalINR: formatIndianCurrency(finalAmount) 
                        };
                    }
                    return product; // Return the other products unchanged
                });

                console.log(productData, 'updatedProductData'); // Log the updated productData array
                renderCartItems(productData);


                // Declare and immediately invoke the async function
                (async () => {
                    try {
                        const apiUrl = 'https://mvc.extravelmoney.com/api-etm/';
                        const params = new URLSearchParams({
                            action: 'save_amount',
                            token: token,  // Ensure token is defined
                            rowID: item.rowID,
                            amount: currentAmount
                        });

                        const response = await fetch(apiUrl, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/x-www-form-urlencoded',
                            },
                            body: params.toString(),
                        });

                        if (!response.ok) {
                            // Detailed error message
                            throw new Error(`HTTP error! Status: ${response.status} - ${response.statusText}`);
                        }

                        const resp = await response.json();
                        if (resp.status) {




                            console.log(resp);  // Log the API response if successful
                        }
                    } catch (error) {
                        console.error('Error fetching data:', error);
                        // Optionally, redirect to an error page
                        // location.href = 'error.html';
                    }
                })();  // Immediately invoke the async function
            });


            console.log(data.length, 'mnbv')
            if (data.length == 1) {
                newCard.querySelector('#deleteCard').style.display = 'none'
            } else {
                newCard.querySelector('#deleteCard').style.display = 'block'
                // Async event listener for delete button
                newCard.querySelector('#deleteCard').addEventListener('click', async () => {
                    loadinggg(true)

                    try {
                        const apiUrl = 'https://mvc.extravelmoney.com/api-etm/';

                        const params = new URLSearchParams({
                            action: 'add_remove_product',
                            token: token,  // Ensure token is defined
                            transaction: 'buy',
                            function: 'remove',
                            rowID: newCard.getAttribute('rowId')
                        });

                        const response = await fetch(apiUrl, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/x-www-form-urlencoded',
                            },
                            body: params.toString(),
                        });

                        if (!response.ok) {
                            throw new Error(`HTTP error! Status: ${response.status} - ${response.statusText}`);
                        }

                        const resp = await response.json();
                        console.log('API response:', resp);

                        // Refresh the cards with the updated product list
                        addCard(resp.products);
                        loadinggg(false)

                    } catch (error) {
                        console.error('Error fetching data:', error);
                        // Optionally, redirect or show an error message
                    }

                });
            }


            // Append the new card to the container
            container.append(newCard);

            if (data.length >= maxCards) {
                document.querySelector('#addBtnContainer').style.display = 'none'
            } else {
                document.querySelector('#addBtnContainer').style.display = 'block'
            }
        });

        console.log('All cards added');
    }




    document.querySelector('#cardProduct').addEventListener('dropdownChange', () => {
        updateProdAddCard()

    })
    document.querySelector('#cardCurrency').addEventListener('dropdownChange', () => {
        updateProdAddCard()

    })


    function updateProdAddCard() {

        let product = document.querySelector('#cardProduct').getAttribute('dataval');
        let currency = document.querySelector('#cardCurrency').getAttribute('dataval');

        document.querySelector('#ProdAddcurrencyCode').textContent = currency;
        let inrValue = parsedData[currency][product] * 1000
        document.querySelector('#prodAddInrValue').textContent = formatIndianCurrency(inrValue) + ' INR'
    }




}




if (sessionStorage.getItem('productPage') === 'mt') {
    loadinggg(true)

    let mtCity = sessionStorage.getItem('mtCity')
    const params = new URLSearchParams({
        action: 'get_city_rate_mt',
        token: token,
        city: mtCity
    });

    fetch('https://mvc.extravelmoney.com/api-etm/', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: params.toString(),
    })
        .then(response => response.json())
        .then(data => {

            generateCards(data.store_list);
            document.querySelector('#mtSavings').textContent = data.savings
            loadinggg(false)
        })
        .catch((error) => {
            console.error('Error:', error);
            // location.href='error.html'
        });



    // Function to generate and insert cards based on API data
    function generateCards(data) {
        // Get the template and container
        const template = document.getElementById('mtcardTemplate');
        const container = document.getElementById('mtcardContainer');

        // Loop through each item in the API response
        data.forEach(item => {
            // Clone the template card
            const clone = template.cloneNode(true);
            clone.style.display = 'block'; // Make it visible

            // Set the storeID as a data-val attribute
            clone.setAttribute('data-val', item.storeID);

            // Populate the card with the API data
            clone.querySelector('.bank-logo').src = `public/images/logo/${item.logo}.svg`; // Assuming logo images are stored by vendor name
            clone.querySelector('.bank-name').textContent = item.vendor_name;
            
            clone.querySelector('.payment-method1').textContent = 'Online Payment';
            clone.querySelector('.payment-method2').textContent = 'NEFT/RTGS';
            clone.querySelector('.supported-services').textContent = 'Supports Flyware, Convera, PayMyTuition';
            clone.querySelector('.bank-charges').textContent = `₹ ${item.bank_charges} Included`;

            const formattedTotalAmount = formatIndianCurrency(item.inr_total.toFixed(2));
            clone.querySelector('.total-amount').textContent = `₹ ${formattedTotalAmount}`;

            // Add event listener to the "Select" button
            const selectButton = clone.querySelector('.select-button');

            selectButton.addEventListener('click', () => {


                const params = new URLSearchParams({
                    action: 'select_store_mt',
                    token: token,
                    storeID: item.storeID
                });

                fetch('https://mvc.extravelmoney.com/api-etm/', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: params.toString(),
                })
                    .then(response => response.json())
                    .then(data => {
                        console.log(data)
                    })
                    .catch((error) => {
                        console.error('Error:', error);
                        // location.href='error.html'
                    });

                if (userCheck()) {
                    location.href = nextPageUrlMt
                }
                else {

                    userCheck()
                    openOtpWidget()

                }

            });

            // Add the clone to the container
            container.appendChild(clone);
        });
    }
}

if (!token){
    console.log('hihih')
    window.location.href='/error.html'
}












// Listen for popstate events (triggered by back/forward navigation)
window.addEventListener('popstate', (event) => {
    console.log('popstate event:', event.state);

    if (event.state === null || (event.state && !event.state.widgetOpen)) {
        closeOtpWidget();
    }
});

let chooseCityOverlay = document.querySelector('.chooseCityOverlay');
let otpWidget = document.querySelector('.otpWidget'); // Assuming this is the OTP widget element

chooseCityOverlay.addEventListener('click', (event) => {
    // Check if the click is outside the otpWidget
    if (!otpWidget.contains(event.target)) {
        closeOtpWidget(); // Only close if the click was outside the otpWidget
    }
});




function openOtpWidget() {
    window.scroll(0, 0)
    document.querySelector('.chooseCityOverlay').style.display = 'block';
    document.querySelector('body').classList.add('snipContainer');
    console.log(document.querySelector('body').classList)
    document.querySelector('.otpWidget').style.display = 'flex';
    document.querySelector('#mobNumber').focus()

    history.pushState({ widgetOpen: true }, '', '');
}
function closeOtpWidget() {
    document.querySelector('.chooseCityOverlay').style.display = 'none';
    document.querySelector('body').classList.remove('snipContainer');
    document.querySelector('.otpWidget').style.display = 'none';



    history.pushState({ widgetOpen: false }, '', '');

}
let otpInputs = document.querySelectorAll('.otpInputBlock input');
// Wrap the logic inside a function
function sendOtp() {

    let mobNumber = document.querySelector('#mobNumber');
    let otpInputContainer = document.querySelector('#otpMobileContainer');
    let countryCode = document.querySelector('.countryCodeContainer').getAttribute('dataval')


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
                mobile: mobNumber.value,
                mode:otpMode
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
                activeResendOtp()
                loadinggg(false)
            }
        } catch (error) {
            console.error('Error fetching data:', error);
            // location.href='error.html'
        }
    })();
}

let otpMode;

// Add event listener for otp sms click
document.querySelector('#optSend').addEventListener('click',()=>{
    otpMode='sms'
    sendOtp()
} );

// Add event listener for otp whatsapp click
document.querySelector('#whatsappOtpSend').addEventListener('click',()=>{
    otpMode='wa'
    sendOtp()
} );

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


document.querySelector('#otpVerify').addEventListener('click', () => {
    verifyOtp()

})


function verifyOtp() {

    
    let fetchOtp = getOtpValue()

    console.log(fetchOtp.length)
    console.log(fetchOtp)
    console.log(token);

    let otpContainer = document.querySelector('.otpInputBlock')
    removeAlertBelowElement(otpContainer)
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
                sessionStorage.setItem('userId', resp.uid)
                const userInfo = {
                    userId: resp.uid,
                    countryCode: resp.customer_country_code,
                    mobNum: resp.customer_mobile
                };

                // Store the object as a JSON string
                localStorage.setItem('userInfo', JSON.stringify(userInfo));


                closeOtpWidget()
                if (sessionStorage.getItem('productPage') === 'fx') {
                    location.href = nextPageUrl
                }
                else if (sessionStorage.getItem('productPage') === 'mt') {

                    location.href = nextPageUrlMt
                }
            }
            
            else{
                loadinggg(false)
                insertAlertBelowElement(otpContainer, 'Incorrect OTP');
                return
            }
        } catch (error) {
            console.error('Error fetching data:', error);
            // location.href='error.html'
        }
    })();
}




document.querySelector('#changeNumberBtn').addEventListener('click', () => {

    otpInputs.forEach((input) => {
        input.value = ''// Clears each OTP input field
        input.style.backgroundColor = 'rgba(14, 81, 160, 0.1)';
    });
    document.querySelector('#sendOtpMain').style.display = 'flex'
    document.querySelector('#verifyOtpMain').style.display = 'none'
})


let isResendEnabled = true; // Flag to track if resend is enabled or disabled

function activeResendOtp() {
    let otpTimer = document.querySelector('.otpTimer');
    let resendBtn = document.querySelector('.otpResendBtn');
    let timeLeft = 30; // Start the countdown from 30 seconds
    isResendEnabled = false; // Disable resend initially when timer starts

    // Initialize the countdown timer
    const countdown = setInterval(() => {
        otpTimer.textContent = `In ${timeLeft}s`; // Update the displayed time

        timeLeft--; // Decrease the time

        if (timeLeft < 0) {
            clearInterval(countdown); // Stop the countdown when it reaches 0
            otpTimer.style.display = 'none'; // Hide the timer
            resendBtn.style.opacity = '1';   // Make the resend button fully visible
            resendBtn.style.pointerEvents = 'auto'; // Enable clicking on the resend button
            isResendEnabled = true; // Enable resend when countdown ends
        }
    }, 1000); // Run this function every 1 second (1000ms)
}

// Adding click event listener to the resend span element
document.querySelector('.otpResendBtn').addEventListener('click', function () {
    if (isResendEnabled) { // Check if resend is enabled
        let otpTimer = document.querySelector('.otpTimer');
        let resendBtn = document.querySelector('.otpResendBtn');

        // Revert the changes
        otpTimer.style.display = 'block';       // Make the timer visible again
        resendBtn.style.opacity = '0.5';        // Reduce opacity to indicate it's disabled
        resendBtn.style.pointerEvents = 'none'; // Disable the resend button by blocking pointer events
        isResendEnabled = false;                // Disable further resends

        // Call the function to send OTP
        sendOtp();

        // Restart the countdown
        activeResendOtp();
    } else {
        console.log('Resend is disabled. Please wait for the timer.');
    }
});


