const checkPositiveNegative = (num1, num2) => {
    if ((num1 > 0 && num2 < 0) || (num1 < 0 && num2 > 0)) {
        return "One is positive and the other is negative.";
    } else {
        return "Both numbers are either positive or negative.";
    }
};
console.log(checkPositiveNegative(5, -3)); // Example input
