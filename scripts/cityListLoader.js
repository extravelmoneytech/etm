const cityData = {
    "Ernakulam": ["Cochin", "Kochi", "Tripunithura"],
    "Kozhikode": ["Calicut"],
    "Thiruvananthapuram": ["Trivandrum"],
    "Coimbatore": ["Vadakovai", "RS Puram", "Kovai"],
    "Bangalore": ["Bengaluru", "Banglore", "BANGALORE", "Yeswanthpur"],
    "Adyar": ["Adayar"],
    "Puducherry": ["Puducherry"],
    "Kannur": ["Thellisserry"],
    "Odisha": ["Orissa"],
    "Kollam": ["Shakthikulangara"],
    "Palakkad": ["Palghat", "Mannarkad"],
    "Alappuzha": ["Alleppey", "Alappuzha"],
    "Pathanamthitta": ["Tiruvalla", "Changanacherry"],
    "Hyderabad": ["Liberty", "Trimulgherry"],
    "Barakhamba Road": ["Connaught place"],
    "Gurgaon": ["Gurugram", "Gurgaon", "Gurgaon, Gurugram"],
    "Mysore": ["Mysuru"],
    "Dibrugarh": ["Dibrugarh"],
    "Dehradun": ["Dehradun"],
    "Vadodara": ["Baroda", "RaceCourse", "Baroda,RaceCourse", "Vadodara,Baroda"],
    "Goa": ["Panjim"],
    "Visakhapatnam": ["Vizag", "Vishakhapatnam"],
    "Mangalore": ["Mangaluru"],
    "Trichy": ["Tiruchirappalli", "Thiruchirappalli"],
    "New Delhi": ["Barkhamba Road"],
    "Kolkata": ["Park Street"],
    "Ahmedabad": ["Navarngapura"],
    "Puttur": ["Puthur"],
    "Coorg": ["Kodagu"],
    "Udupi": ["Bannanje", "Murumarga"],
    "Thane": ["Naupada"],
    "Chittorgarh": ["Chittaurgarh"],
    "Malappuram": ["Edappal", "Perinthalmanna"],
  "Thrissur": ["Irinjalakuda", "Kodungallur", "Kunnamkulam"],
  "Kasaragod": ["Kanhangad"],
  "Chennai": ["Egmore"]
}



document.addEventListener('DOMContentLoaded', function () {
    const MIN_LENGTH = 2; // Minimum length to trigger filtering
    const cityInput = document.getElementById('citySelector');
    const resultsContainer = document.getElementById('results');
    const searchSpinner = document.getElementById('searchspin');
  
    // Define a list of popular cities
    const popularCities = ["Bangalore", "Hyderabad","Ernakulam", "Mumbai", "Delhi", "Chennai", "Pune", "Kolkata", "Ahmedabad"];
  
    // Convert JSON data to a flat list for easier search
    const cityList = Object.keys(cityData);
  
    // Hide the results container initially
    resultsContainer.style.display = 'none';
  
    // Function to display popular cities
    function displayPopularCities() {
      resultsContainer.innerHTML = ''; // Clear previous results
  
      popularCities.forEach(city => {
        const cityElement = createCityElement(city);
        resultsContainer.appendChild(cityElement);
      });
  
      resultsContainer.style.display = 'flex'; // Show results container with popular cities
    }
  
    // Function to create a city element
    function createCityElement(city) {
      const cityElement = document.createElement('div');
      cityElement.setAttribute('value', city);
      cityElement.className = 'cityBtn h-7 px-3 py-2 bg-[#e7eef5] rounded-xl justify-center items-center gap-1 inline-flex cursor-pointer';
  
      const cityText = document.createElement('p');
      cityText.className = 'text-xs font-medium leading-3';
      cityText.textContent = city;
  
      cityElement.appendChild(cityText); // Append the text to the city element
  
      // Add click event to each city element
      cityElement.addEventListener('click', function () {
        cityInput.value = city; // Update input value with the selected city
        highlightSelectedCity(cityElement); // Highlight the selected city
      });
  
      return cityElement;
    }
  
    // Function to highlight the selected city element
    function highlightSelectedCity(selectedElement) {
      // Remove 'selectedCity' class from any previously selected city element
      const previousSelected = document.querySelector('.selectedCity');
      if (previousSelected) {
        previousSelected.classList.remove('selectedCity');
      }
  
      // Add 'selectedCity' class to the newly selected city element
      selectedElement.classList.add('selectedCity');
    }
  
    // Function to filter and display city results
    function filterCities(keyword) {
      resultsContainer.innerHTML = ''; // Clear previous results
  
      if (keyword.length >= MIN_LENGTH) {
        searchSpinner.style.display = 'block'; // Show loading spinner
  
        const filteredCities = cityList.filter(city => {
          const alternatives = cityData[city];
          // Check if the city name or any of its alternatives include the keyword
          return city.toLowerCase().includes(keyword.toLowerCase()) ||
            alternatives.some(alt => alt.toLowerCase().includes(keyword.toLowerCase()));
        });
  
        // Display filtered cities or 'No cities found'
        if (filteredCities.length > 0) {
          filteredCities.forEach(city => {
            const cityElement = createCityElement(city);
            resultsContainer.appendChild(cityElement); // Append city element to the results container
          });
  
          resultsContainer.style.display = 'flex'; // Show results container if there are results
        } else {
          const noResultsItem = document.createElement('div');
          noResultsItem.className = 'h-7 px-3 py-2 text-red-500 rounded-xl justify-center items-center gap-1 inline-flex';
          noResultsItem.textContent = 'No cities found';
          resultsContainer.appendChild(noResultsItem);
  
          resultsContainer.style.display = 'flex'; // Show results container even if no results are found
        }
  
        searchSpinner.style.display = 'none'; // Hide loading spinner
      } else {
        displayPopularCities(); // Show popular cities if input length is less than MIN_LENGTH
      }
    }
  
    // Initial display of popular cities
    displayPopularCities();
  
    // Event listener for keyup event on city input
    cityInput.addEventListener('keyup', function () {
      const keyword = cityInput.value.trim(); // Get input value and remove extra spaces
      filterCities(keyword); // Call function to filter and display results
    });
  
    // Event listener for input field focus event to show popular cities when input is cleared
    cityInput.addEventListener('input', function () {
      if (cityInput.value.trim() === '') {
        displayPopularCities(); // Show popular cities when input is cleared
      }
    });
  });
  
  