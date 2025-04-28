const apiUrl = 'https://api.weatherapi.com/v1/current.json?key=2643ba8c05ed41b7910113259251804&q=London&aqi=yes';

async function getweather(){
    try {
        const response =  await fetch(apiUrl);
        if (!response.ok) {
            throw new Error(`HTTP error agaya bhaiya: ${response.status}`);
        }
        const data = await response.json();

        // ek bar json me data agyaya na phir me dekh lunga
        document.getElementById('weatherData').innerText = `
            Location: ${data.location.name}, ${data.location.country}
            Temperature: ${data.current.temp_c}°C
            Condition: ${data.current.condition.text}
        `;
    } catch (error) {
        console.error('Error fetching data:', error);
        document.getElementById('weatherData').innerText = 'Unable to fetch weather data.';
    }
}
getweather();