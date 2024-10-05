const calculate = () => {
    const num1 = parseFloat(prompt("Enter the first number: "));
    const num2 = parseFloat(prompt("Enter the second number: "));
    const multiply = num1 * num2;
    const divide = num1 / num2;
    console.log(`Multiplication: ${multiply}`);
    console.log(`Division: ${divide}`);
};
calculate();
