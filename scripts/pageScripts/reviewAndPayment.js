let token = sessionStorage.getItem('token')
console.log(token)
document.addEventListener('DOMContentLoaded', async () => {
    loadinggg(true)

    try {
        const apiUrl = 'https://mvc.extravelmoney.com/api-etm/';
        const params = new URLSearchParams({
            action: 'summary',
            token: token
        });

        const response = await fetch(apiUrl, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: params.toString(),
        });

        if (!response.ok) {
            throw new Error(`HTTP error! Status: ${response.status}`);
        }

        const resp = await response.json();

        if (resp) {
            console.log(resp);


            if(sessionStorage.getItem('productPage')==='fx'){
                if (resp.delivery_opted === '0') {
                    document.querySelector('#doorDeliveryData').style.display = "none"
                    
                }else{
                    document.querySelector('#deliveryFee').innerHTML = '₹' + resp.door_fee;
                }
                document.querySelector('#totalAmnt').innerHTML = '₹' + resp.total;
    
                document.querySelector('#gst').innerHTML = '₹' + resp.gst;
                // Handle the response
    
                const productListContainer = document.getElementById('productList');
                // Clear the existing product list (if any)
                productListContainer.innerHTML = '';
    
                let productList=resp.order_details
                // Loop through the productList array and generate HTML for each product
                productList.forEach(product => {
                    const productHTML = generateProductHTML(product);
                    productListContainer.appendChild(productHTML);
                });
            }

            if(sessionStorage.getItem('productPage')==='mt'){
                document.querySelector('#currencyMt').textContent=`${resp.order_details[0].currency} @ ${resp.order_details[0].rate}`;
                document.querySelector('#currencyMtAmnt').textContent=resp.order_details[0].amount;
                document.querySelector('#currencyMtAmntinr').textContent=`₹  ${formatIndianCurrency(resp.order_details[0].amount*resp.order_details[0].rate)}`

                document.querySelector('#gstMt').innerHTML = '₹ ' + resp.gst;
                document.querySelector('#totalAmnt').innerHTML = '₹ ' +formatIndianCurrency(resp.total);
            }

            

            loadinggg(false)
        }
    } catch (error) {
        console.error('Error fetching data:', error);
        location.href='/error.html'

    }
});
function formatAmount(amount) {
    return `₹ ${parseFloat(amount).toLocaleString('en-IN', { maximumFractionDigits: 2 })}`;
}

// Function to generate the HTML for each product
function generateProductHTML(product) {
    const { currency, amount, rate } = product;

    // Create the product container
    const productDiv = document.createElement('div');
    productDiv.classList.add('justify-between', 'items-start', 'inline-flex');

    // Create the rate paragraph
    const rateParagraph = document.createElement('p');
    rateParagraph.classList.add('text-[#677489]', 'text-sm', 'font-medium', 'tracking-tight');
    rateParagraph.textContent = `${currency} (Note) @ ${rate}`;

    // Create the amount paragraph
    const amountParagraph = document.createElement('p');
    amountParagraph.classList.add('text-[#111729]', 'text-sm', 'font-medium', 'tracking-tight');
    amountParagraph.textContent = formatAmount(amount * rate);

    // Append the rate and amount paragraphs to the product container
    productDiv.appendChild(rateParagraph);
    productDiv.appendChild(amountParagraph);

    return productDiv;
}



document.getElementById('radio1').addEventListener('click', function () {
    toggleRadio(this, 'radio2');
});

document.getElementById('radio2').addEventListener('click', function () {
    toggleRadio(this, 'radio1');
});

function toggleRadio(selected, other) {
    selected.classList.add('selectedRadio');
    selected.classList.remove('radio');
    document.getElementById(other).classList.add('radio');
    document.getElementById(other).classList.remove('selectedRadio');


}


document.querySelector('#summaryConfirm').addEventListener('click', () => {
    loadinggg(true)
    placeOrder();
})

const placeOrder= async ()=>{
    console.log('hey')
    try {
        const apiUrl = 'https://mvc.extravelmoney.com/api-etm/';
        const params = new URLSearchParams({
            action: 'create_order',  // Removed extra whitespace
            token: token 
        });

        const response = await fetch(apiUrl, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: params.toString(),
        });

        if (!response.ok) {
            throw new Error(`HTTP error! Status: ${response.status}`);
        }

        const resp = await response.json();
        
        if (resp.status) {
            console.log(resp)
            
            sessionStorage.setItem('orderId',resp.orderID)
            location.href='/Complete-KYC'
            setTimeout(() => {
                loadinggg(false)
            }, 2000);
        }
    } catch (error) {
        console.error('Error fetching data:', error);
        location.href='/error.html'
       
    }
}