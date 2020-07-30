document.getElementById("date").innerHTML = getDate();

var stockArray;

var doc = firebase.firestore().collection('Swing Trades').get().then(doc => {
    doc.forEach(doc => {
        stockArray = doc.data();
        console.log(Object.keys(stockArray).length);
        for (var i = 0; i < Object.keys(stockArray).length; i++) {
            setUpSwing(stockArray[i][0], stockArray[i][1]);
        }
    });
});

function setUpSwing(symbol, description) {
    document.getElementById("swing").innerHTML += `<div class="item title-two-list color-two">${symbol} - ${description}</div>`;
}


var doc = firebase.firestore().collection('Day Trades').get().then(doc => {
    doc.forEach(doc => {
        stockArray = doc.data();
        for (var i = 0; i < Object.keys(stockArray).length; i++) {
            setUpDay(stockArray[i][0], stockArray[i][1]);
        }
    });
});

function setUpDay(symbol, description) {
    document.getElementById("day").innerHTML += `<div class="item title-two-list color-two">${symbol} - ${description}</div>`;
}

function getDate() {
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0');
    var yyyy = today.getFullYear();

    today = mm + '/' + dd + '/' + yyyy;
    return today;
}