var calendarProfit;
loadCrabie();

$(window).ready(function () {
    $("#person-one").click(function () {
        loadUzumaki();
        console.log("hi");
    });
    $("#person-two").click(function () {
        loadCrabie();
    });
    $("#person-three").click(function () {
        loadWolf();
    });
});



function loadUzumaki() {
    document.getElementById("person-one-name").innerHTML = profile[0].name;
    document.getElementById("person-info").innerHTML = profile[0].bio;

    var doc = firebase.firestore().collection(`peter-account`).get().then(doc => {
        doc.forEach(doc => {
            document.getElementById("value").innerHTML = doc.data().value;
        })
    })

    var doc = firebase.firestore().collection(`peter`).get().then(doc => {
        doc.forEach(doc => {
            calendarProfit = doc.data();
        })
        let monthAndYear = document.getElementById("monthAndYear");
        showCalendar(currentMonth, currentYear);
    })
}

function loadCrabie() {
    document.getElementById("person-one-name").innerHTML = profile[1].name;
    document.getElementById("person-info").innerHTML = profile[1].bio;

    var doc = firebase.firestore().collection(`crabie-account`).get().then(doc => {
        doc.forEach(doc => {
            document.getElementById("value").innerHTML = doc.data().value;
        })
    })

    var doc = firebase.firestore().collection(`jacky`).get().then(doc => {
        doc.forEach(doc => {
            calendarProfit = doc.data();
        })
        let monthAndYear = document.getElementById("monthAndYear");
        showCalendar(currentMonth, currentYear);
    })
}

function loadWolf() {
    document.getElementById("person-one-name").innerHTML = profile[2].name;
    document.getElementById("person-info").innerHTML = profile[2].bio;

    var doc = firebase.firestore().collection(`peter-account`).get().then(doc => {
        doc.forEach(doc => {
            document.getElementById("value").innerHTML = doc.data().value;
        })
    })

    var doc = firebase.firestore().collection(`jacky`).get().then(doc => {
        doc.forEach(doc => {
            calendarProfit = doc.data();
        })
        let monthAndYear = document.getElementById("monthAndYear");
        showCalendar(currentMonth, currentYear);
    })
}

let today = new Date();
let currentMonth = today.getMonth();
let currentYear = today.getFullYear();
let selectYear = document.getElementById("year");
let selectMonth = document.getElementById("month");

let months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];


function next() {
    currentYear = (currentMonth === 11) ? currentYear + 1 : currentYear;
    currentMonth = (currentMonth + 1) % 12;
    showCalendar(currentMonth, currentYear);
}

function previous() {
    currentYear = (currentMonth === 0) ? currentYear - 1 : currentYear;
    currentMonth = (currentMonth === 0) ? 11 : currentMonth - 1;
    showCalendar(currentMonth, currentYear);
}

function jump() {
    currentYear = parseInt(selectYear.value);
    currentMonth = parseInt(selectMonth.value);
    showCalendar(currentMonth, currentYear);
}

function showCalendar(month, year) {

    let firstDay = (new Date(year, month)).getDay();
    let daysInMonth = 32 - new Date(year, month, 32).getDate();
    let tbl = document.getElementById("calendar-body"); // body of the calendar

    // clearing all previous cells
    tbl.innerHTML = "";

    // filing data about month and in the page via DOM.
    monthAndYear.innerHTML = months[month] + " " + year;
    //selectYear.value = year;
    //selectMonth.value = month;
    let jj =  currentMonth;
    console.log(calendarProfit);
    // creating all cells
    let date = 1;
    for (let i = 0; i < 6; i++) {
        // creates a table row
        let row = document.createElement("tr");
        //creating individual cells, filing them up with data.
        for (let j = 0; j < 7; j++) {
            if (i === 0 && j < firstDay) {
                let cell = document.createElement("td");
                let cellText = document.createTextNode("");
                cell.appendChild(cellText);
                row.appendChild(cell);
            }
            else if (date > daysInMonth) {
                break;
            }
            else {
                let cell = document.createElement("td");
                let cellDiv = document.createElement("div");
                cellDiv.classList.add("date");
                let cellText = document.createTextNode(date);
                let linebreak = document.createElement("br");

                cellDiv.appendChild(cellText);
                cell.appendChild(cellDiv);

                if (calendarProfit.profit[date - 1] != undefined) {
                    let profitText = document.createTextNode(calendarProfit.profit[date - 1]);
                    let div = document.createElement("div");

                    if (calendarProfit.profit[date - 1] > -1) {
                        div.classList.add("green");
                    } else {
                        div.classList.add("red");
                    }

                    div.appendChild(profitText);
                    cell.appendChild(div);
                }
                cell.appendChild(linebreak);
                row.appendChild(cell);
                date++;
            }
        }
        tbl.appendChild(row); // appending each row into calendar body.
    }

}





