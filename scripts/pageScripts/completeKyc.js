let customerGreeting = document.querySelector('#customerGreeting');

let copyBtn = document.querySelector('#copyBtn')


let orderId = sessionStorage.getItem('orderId');


document.getElementById('orderId').textContent = sessionStorage.getItem('orderId')
customerGreeting.textContent = `Hello ${sessionStorage.getItem('customerName')},`

copyBtn.addEventListener('click', () => {

    const textElement = document.getElementById('orderId');

    // Create a temporary input element
    const tempInput = document.createElement('input');

    // Set its value to the textContent of the target element
    tempInput.value = textElement.textContent;

    // Append the input to the body
    document.body.appendChild(tempInput);

    // Select the text in the input
    tempInput.select();

    // Copy the text to the clipboard
    document.execCommand('copy');

    // Remove the temporary input element from the body
    document.body.removeChild(tempInput);


})



const kycData = async () => {
    let txn = sessionStorage.getItem('productPage')
    if (txn === 'fx') {
        txn = 'buy'
    }
    console.log('hey')
    try {
        const apiUrl = 'https://mvc.extravelmoney.com/api-etm/';
        const params = new URLSearchParams({
            action: 'kyc_data',  // Removed extra whitespace
            orderID: orderId,
            txn: txn

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
        console.log(resp.kyc_list)
        createKycUploaders(resp.kyc_list)
    } catch (error) {
        console.error('Error fetching data:', error);
        location.href = '/error.html'

    }
}

document.addEventListener('DOMContentLoaded', () => {
    console.log('bbbb')
    kycData()


})







// Function to create KYC Uploaders dynamically based on provided documents object
function createKycUploaders(documentObject) {
    // Get the template element
    const template = document.getElementById('kyc-uploader-template');
    const kycListContainer = document.querySelector('.kycList');

    // Clear existing content
    kycListContainer.innerHTML = '';

    // Loop through the documentObject and create KYC uploader elements
    Object.entries(documentObject).forEach(([key, doc]) => {
        const clone = template.content.cloneNode(true);

        // Populate the cloned template with the document data
        clone.querySelector('.doc-name').textContent = doc.kyc_name;
        clone.querySelector('.file_upload').setAttribute('tag', doc.tag);

        const deleteButton = clone.querySelector('.deleteIcon'); // Assume delete button in the template

        // Handle preview if file_exists is true
        if (doc.file_exists) {
            const uploader = clone.querySelector('.kycUploader');
            const kycExtender = uploader.querySelector('.kycExtender');
            const progressBar = kycExtender.querySelector('.progressBar');
            const progressContainer = kycExtender.querySelector('.uploadProgress');
            const fileNameSpan = kycExtender.querySelector('span');
            const previewLink = clone.querySelector('.preview_link');

            // Set the preview link
            previewLink.setAttribute('href', doc.preview);
            previewLink.style.display = 'block'; // Show the preview link

            // Set the file name and style to appear uploaded
            fileNameSpan.textContent = "File uploaded";
            progressBar.style.display = 'none'; // Hide the progress bar
            uploader.classList.add('kycUploaderActive'); // Add class to indicate active state
            kycExtender.style.display = 'flex'; // Show the extender as if file is uploaded
            progressContainer.style.display = 'none'; // Hide the upload progress
            uploader.querySelector('input[type="file"]').style.display = 'none'; // Hide file input

            // Show the delete button
            deleteButton.style.display = 'inline-block';

            // Add delete functionality
            deleteButton.addEventListener('click', () => {
                // API call to delete the uploaded file
                const tag = doc.tag; // Use tag for API identification

                // Call the delete API
                deleteFileFromApi(tag)
                    .then((response) => {
                        if (response.success) {
                            // Clear the uploader state (resetting to initial empty state)
                            fileNameSpan.textContent = '';
                            progressBar.style.display = 'none';
                            previewLink.style.display = 'none';
                            deleteButton.style.display = 'none'; // Hide delete button after file is deleted
                            uploader.querySelector('input[type="file"]').style.display = 'block'; // Show file input for new upload
                            kycExtender.style.display = 'none'; // Hide the extender when no file is uploaded
                            uploader.classList.remove('kycUploaderActive'); // Remove active state
                        } else {
                            alert('Failed to delete the file. Please try again.');
                        }
                    })
                    .catch((error) => {
                        console.error('API error:', error);
                        alert('An error occurred while deleting the file.');
                    });
            });
        } else {
            const previewLink = clone.querySelector('.preview_link');
            previewLink.style.display = 'none'; // Hide the preview link if the file doesn't exist
            deleteButton.style.display = 'none'; // Hide the delete button when no file exists
        }

        // Append the populated clone to the container
        kycListContainer.appendChild(clone);
    });

    // After rendering the uploaders, initialize the file upload listeners
    initFileUploadListeners();
}

// Mock API function for deleting a file (Replace this with your actual API call)
function deleteFileFromApi(tag) {
    // Simulate an API call with a promise that resolves to a success response
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            // Simulating success
            resolve({ success: true });
        }, 1000); // Simulated API delay
    });
}

// Function to initialize file upload listeners after the DOM is updated
function initFileUploadListeners() {
    // Select all elements with the class 'kycUploader'
    let kycUploaders = document.querySelectorAll('.kycUploader');

    kycUploaders.forEach((uploader) => {
        // Get the file input, kycExtender elements inside each uploader
        let fileInput = uploader.querySelector('input[type="file"]');
        let kycExtender = uploader.querySelector('.kycExtender');
        let fileNameSpan = kycExtender.querySelector('span');
        let progressBar = kycExtender.querySelector('.progressBar');
        let progressContainer = kycExtender.querySelector('.uploadProgress');
        let progressText = kycExtender.querySelector('.uploadProgress span'); // The percentage text
        let deleteButton = uploader.querySelector('.deleteIcon'); // The delete button
        let previewLink = uploader.querySelector('.preview_link');

        // Add an event listener to the file input
        fileInput.addEventListener('change', async function (event) {
            // Get the uploaded file
            let file = event.target.files[0];

            if (file) {
                // Check if a previous file exists and delete it before uploading a new one
                let existingTag = fileInput.getAttribute('tag');
                if (uploader.classList.contains('kycUploaderActive')) {
                    // If there's an active file, delete it
                    await deleteFileFromApi(existingTag).then((response) => {
                        if (!response.success) {
                            alert('Error deleting the previous file. Please try again.');
                            return; // Prevent the new upload if the delete fails
                        }
                    });
                }

                // Display the file name inside the kycExtender span
                fileNameSpan.textContent = file.name;
                progressContainer.style.display = 'flex';

                // Reset the progress bar
                progressBar.style.width = '0%';
                progressText.textContent = '0%';

                // Add the 'kycUploaderDelay' class to indicate uploading is in progress
                uploader.classList.add('kycUploaderDelay');

                // Show the progress bar and kycExtender
                kycExtender.style.display = 'flex';
                progressBar.style.display = 'flex';

                let progress = 0;
                let isApiResponseReceived = false;

                // Start API call simulation
                let tag = fileInput.getAttribute('tag');
                let personal = tag === 'passport_image' || tag === 'pan_image' || tag === 'passport2_image' ? '1' : '0';
                let data = {
                    file: file,
                    file_type: tag,
                    personal: personal,
                };

                const apiResponsePromise = uploadFileToApi(data).then((response) => {
                    console.log(response);
                    isApiResponseReceived = true;
                    if (response.result) {
                        // Once the API responds, fast-complete the progress bar
                        let completionSpeed = setInterval(() => {
                            if (progress < 100) {
                                progress += 10;
                                if (progress >= 100) {
                                    progress = 100;
                                    clearInterval(completionSpeed);

                                    // Finalize the upload process
                                    uploader.classList.remove('kycUploaderDelay');
                                    progressBar.style.display = 'none';
                                    kycExtender.querySelector('svg').style.display = 'block';
                                    uploader.classList.add('kycUploaderActive');
                                    progressContainer.style.display = 'none';

                                    

                                    // Set the preview link
                                    previewLink.setAttribute('href', response.file);
                                    previewLink.style.display = 'block'; // Show the preview link
                                    // Show delete button after successful upload
                                    deleteButton.style.display = 'inline-block';

                                    // Add delete functionality for the new file
                                    deleteButton.addEventListener('click', () => {
                                        deleteFileFromApi(tag)
                                            .then((response) => {
                                                if (response.success) {
                                                    fileNameSpan.textContent = '';
                                                    previewLink.style.display = 'none';
                                                    deleteButton.style.display = 'none';
                                                    progressBar.style.display = 'none';
                                                    uploader.querySelector('input[type="file"]').style.display = 'block';
                                                    uploader.classList.remove('kycUploaderActive');
                                                }
                                            });
                                    });
                                }
                                // Update progress bar and text
                                progressBar.style.width = `${progress}%`;
                                progressText.textContent = `${Math.floor(progress)}%`;
                            }
                        }, 50); // Speed up to complete fast after response
                    }
                });

                // Simulate progress bar animation while waiting for the API response
                let progressInterval = setInterval(() => {
                    if (!isApiResponseReceived) {
                        progress += 1; // Increment slowly while waiting for response
                        if (progress >= 90) {
                            progress = 90; // Cap the progress at 90% until response
                        }
                        // Update progress bar width and text
                        progressBar.style.width = `${progress}%`;
                        progressText.textContent = `${Math.floor(progress)}%`;
                    }

                    if (isApiResponseReceived) {
                        // Stop the interval once the response is received
                        clearInterval(progressInterval);
                    }
                }, 100); // Slower updates while waiting for the response
            }
        });
    });
}




let uid = sessionStorage.getItem('userId');
let token = sessionStorage.getItem('token');
let action = 'kyc_upload'
async function uploadFileToApi(data) {
    console.log(data)
    const formData = new FormData();
    formData.append('file', data.file);
    formData.append("file_type", data.file_type);
    formData.append("action", action)
    formData.append("uid", uid)
    formData.append("personal", data.personal)
    formData.append("token", token)
    formData.append('order_no', orderId)

    const response = await fetch('https://mvc.extravelmoney.com/api-etm/', {
        method: 'POST',
        body: formData,
    });

    return await response.json(); // Return response in JSON format
}