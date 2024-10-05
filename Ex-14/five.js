const convertTemperature = (temp, unit) => {
    if (unit === "C") {
        // Celsius to Fahrenheit
        const fahrenheit = (temp * 9 / 5) + 32;
        return `${temp}°C is ${fahrenheit}°F`;
    } else if (unit === "F") {
        // Fahrenheit to Celsius
        const celsius = (temp - 32) * 5 / 9;
        return `${temp}°F is ${celsius.toFixed(9)}°C`;
    } else {
        return "Please provide a valid unit (C or F).";
    }
};

// Example calls
console.log(convertTemperature(60, "C"));
console.log(convertTemperature(45, "F"));
