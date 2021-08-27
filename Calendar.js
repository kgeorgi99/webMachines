const date = new Date();

const renderCalendar = () => {

    const lastDay = new Date(date.getFullYear(), date.getMonth() + 1, 0).getDate();
    const prevLastDay = new Date(date.getFullYear(), date.getMonth(), 0).getDate();
    const firstDayIndex = date.getDay();
    const lastDayIndex = new Date(date.getFullYear(), date.getMonth() + 1, 0).getDay();
    const monthDays = document.querySelector(".days");
    const months = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "Oktober",
        "November",
        "December"
    ];

    document.querySelector(".date h1").innerHTML = months[date.getMonth()];
    document.querySelector(".date p").innerHTML = new Date().toDateString();

    let days = "";

    for (let x = firstDayIndex; x >= 0; x--) {
        days += `<div class="prevday">${prevLastDay - x}</div>`

    }
    for (let i = 1; i <= lastDay; i++) {
        if(i === new Date().getDate() && date.getMonth() === new Date().getMonth()){
            days +=  `<div class="today">${i}</div>`;
        } else {
            days += `<div>${i}</div>`;
        }
    }

    for (let j = lastDayIndex + 1; j <= 7; j++) {
        days += `<div class="nextday">${j - lastDayIndex}</div>`
    }
    monthDays.innerHTML = days;
}

renderCalendar();
document.querySelector(".prev").addEventListener("click",() => {
    date.setMonth(date.getMonth() - 1);
    renderCalendar();
});
document.querySelector(".next").addEventListener("click",() => {
    date.setMonth(date.getMonth() + 1);
    renderCalendar();
});
