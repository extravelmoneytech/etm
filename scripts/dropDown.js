function selectFirstDropdownItem(dropdownMain) {
    const dropdownList = dropdownMain.querySelector('.dropdownList');
    const selectedItem = dropdownMain.querySelector('.selectedItem');
    const items = dropdownList.querySelectorAll('li:not(.template)'); // Exclude template item

    if (items.length > 0) {
        const firstItem = items[0];
       
        selectedItem.innerHTML = firstItem.innerHTML;
        dropdownMain.setAttribute('dataVal', firstItem.getAttribute("value"));

        // Add 'selected' class to the first item instead of hiding it
        firstItem.classList.add('selectedDropDown');
        
        // Store the selected value in sessionStorage
        sessionStorage.setItem(`dropdown_${dropdownMain.id}_selected`, firstItem.getAttribute("value"));

        // Dispatch a custom event after the first item is selected
        const selectEvent = new CustomEvent('dropdownFirstItemSelected', {
            detail: {
                value: firstItem.getAttribute('value'),
                text: firstItem.innerHTML,
                dropdown: dropdownMain
            }
        });
        dropdownMain.dispatchEvent(selectEvent);
    }
}

document.addEventListener('DOMContentLoaded', () => {
    const dropdowns = document.querySelectorAll('.dropdownMain');

    dropdowns.forEach(dropdownMain => {
        const dropdownList = dropdownMain.querySelector('.dropdownList');
        const selectedItem = dropdownMain.querySelector('.selectedItem');
        const searchEnabled = dropdownMain.hasAttribute('data-search');
        let searchInput;

        if (searchEnabled) {
            searchInput = document.createElement('input');
            searchInput.type = 'text';
            searchInput.placeholder = 'Search...';
            searchInput.classList.add('dropdownSearch');
            searchInput.style.width = '100%';
            searchInput.style.padding = '8px';
            searchInput.style.boxSizing = 'border-box';
            searchInput.style.position = 'sticky'; 
            searchInput.style.top = '0'; 
            dropdownList.insertBefore(searchInput, dropdownList.firstChild);

            searchInput.addEventListener('click', (event) => {
                event.stopPropagation(); 
            });
        }

        const storedValue = sessionStorage.getItem(`dropdown_${dropdownMain.id}_selected`);
        if (storedValue) {
            const item = dropdownList.querySelector(`li[value="${storedValue}"]`);
            if (item) {
                selectedItem.innerHTML = item.innerHTML;
                dropdownMain.setAttribute('dataVal', item.getAttribute("value"));

                // Add 'selected' class to the stored item
                item.classList.add('selectedDropDownItem');
            }
        } else {
            selectFirstDropdownItem(dropdownMain);
        }

        dropdownMain.addEventListener('click', (event) => {
            event.stopPropagation();
            dropdowns.forEach(d => {
                if (d !== dropdownMain) {
                    d.classList.remove('open');
                }
            });

            const items = dropdownList.querySelectorAll('li:not(.template)');
            const selectedValue = dropdownMain.getAttribute('dataVal');
            items.forEach(item => {
                if (item.getAttribute('value') === selectedValue) {
                    item.classList.add('selectedDropDownItem'); // Keep the selected class
                } else {
                    item.classList.remove('selectedDropDownItem'); // Remove from others
                }
            });

            dropdownMain.classList.toggle('open');

            // if (searchEnabled && searchInput) {
            //     searchInput.focus();
            // }
        });

        dropdownList.addEventListener('click', (event) => {
            const item = event.target.closest('li');
            if (item && item !== dropdownList && !item.classList.contains('template')) {
                event.stopPropagation();

                const previouslySelected = dropdownList.querySelector('li.selectedDropDownItem');

                if (previouslySelected) {
                    previouslySelected.classList.remove('selectedDropDownItem');
                }

                selectedItem.innerHTML = item.innerHTML;
                dropdownMain.setAttribute('dataVal', item.getAttribute("value"));

                // Add 'selected' class to the newly selected item
                item.classList.add('selectedDropDownItem');
                dropdownMain.classList.remove('open');

                // Clear the search input
                if (searchEnabled && searchInput) {
                    searchInput.value = '';

                    // Reset the visibility of all items (show all items)
                    const items = dropdownList.querySelectorAll('li:not(.template)');
                    items.forEach(item => {
                        item.style.display = ''; // Show all items
                    });
                }

                sessionStorage.setItem(`dropdown_${dropdownMain.id}_selected`, item.getAttribute("value"));

                const changeEvent = new CustomEvent('dropdownChange', {
                    detail: {
                        value: item.getAttribute('value'),
                        text: item.innerHTML,
                        dropdown: dropdownMain
                    }
                });
                dropdownMain.dispatchEvent(changeEvent);
            }
        });


        if (searchEnabled && searchInput) {
            searchInput.addEventListener('input', () => {
                const filter = searchInput.value.toLowerCase();
                const items = dropdownList.querySelectorAll('li:not(.template)');
                
                items.forEach(item => {
                    const text = item.innerHTML.toLowerCase();
                    const alternativeName = item.getAttribute('alternativeName') ? item.getAttribute('alternativeName').toLowerCase() : '';
                    
                    if (text.includes(filter) || alternativeName.includes(filter)) {
                        item.style.display = ''; 
                    } else {
                        item.style.display = 'none'; 
                    }
                });
            });
        }
    });

    document.addEventListener('click', () => {
        dropdowns.forEach(dropdownMain => {
            dropdownMain.classList.remove('open');
        });
    });
});

document.addEventListener('dropdownChange', (event) => {
    console.log('Dropdown changed:', event.detail);
});

function getSelectedDropdownItemElement(dropdownId) {
    const dropdownMain = document.getElementById(dropdownId);
    
    if (!dropdownMain) {
        console.error(`Dropdown with ID ${dropdownId} not found.`);
        return null;
    }

    const dropdownList = dropdownMain.querySelector('.dropdownList');
    const selectedValue = dropdownMain.getAttribute('dataVal');

    if (selectedValue) {
        const selectedItemElement = dropdownList.querySelector(`li[value="${selectedValue}"]`);
        
        if (selectedItemElement) {
            return selectedItemElement; 
        }
    }

    return null;
}

function forceSelectDropdownItem(dropdownId, valueToSelect) {
    const dropdownMain = document.getElementById(dropdownId);
    
    if (!dropdownMain) {
        console.error(`Dropdown with ID ${dropdownId} not found.`);
        return;
    }

    const dropdownList = dropdownMain.querySelector('.dropdownList');
    const selectedItem = dropdownMain.querySelector('.selectedItem');
    
    const item = dropdownList.querySelector(`li[value="${valueToSelect}"]`);
    
    if (item) {
        // Update the selected item display
        selectedItem.innerHTML = item.innerHTML;
        dropdownMain.setAttribute('dataVal', item.getAttribute('value'));

        // Remove 'selectedDropDownItem' class from any previously selected item
        const previouslySelected = dropdownList.querySelector('li.selectedDropDownItem');
        if (previouslySelected) {
            previouslySelected.classList.remove('selectedDropDownItem');
        }

        // Add 'selectedDropDownItem' class to the newly selected item
        item.classList.add('selectedDropDownItem');

        // Store the selected value in sessionStorage
        sessionStorage.setItem(`dropdown_${dropdownMain.id}_selected`, item.getAttribute("value"));

        // Dispatch the dropdownChange event
        const changeEvent = new CustomEvent('dropdownChange', {
            detail: {
                value: item.getAttribute('value'),
                text: item.innerHTML,
                dropdown: dropdownMain
            }
        });
        dropdownMain.dispatchEvent(changeEvent);
    } else {
        console.warn(`Dropdown item with value "${valueToSelect}" not found.`);
    }
}



// Function to save input field data to sessionStorage
function saveInputData() {
    // Select only input fields with the 'data-save' attribute
    const inputs = document.querySelectorAll('input[data-save], textarea[data-save], select[data-save]');

    // Loop through each input field
    inputs.forEach(input => {
        // Save the input's value in sessionStorage using its unique ID or name as the key
        sessionStorage.setItem(input.id || input.name, input.value);
    });
}

// Function to load saved data from sessionStorage and set it to the input fields
function loadInputData() {
    // Select only input fields with the 'data-save' attribute
    const inputs = document.querySelectorAll('input[data-save], textarea[data-save], select[data-save]');

    // Loop through each input field
    inputs.forEach(input => {
        const savedValue = sessionStorage.getItem(input.id || input.name);
        if (savedValue) {
            // Set the saved value to the input field if it exists in sessionStorage
            input.value = savedValue;
        }
    });
}

// Listen for DOMContentLoaded event to restore the input data on page load
document.addEventListener('DOMContentLoaded', loadInputData);

// Attach event listeners to all input fields to save data when they change
document.addEventListener('input', saveInputData);