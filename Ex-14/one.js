const displayDateTime = () => {
    const days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    const today = new Date();
    console.log(`Today is : ${days[today.getDay()]}.`);
};
displayDateTime();
