// Your web app's Firebase configuration
var firebaseConfig = {
    apiKey: "AIzaSyBPEq6D0mA-XWqJqIfvj_C5wfEwsIq-CX8",
    authDomain: "thebullishchannel-c4048.firebaseapp.com",
    databaseURL: "https://thebullishchannel-c4048.firebaseio.com",
    projectId: "thebullishchannel-c4048",
    storageBucket: "thebullishchannel-c4048.appspot.com",
    messagingSenderId: "387691105387",
    appId: "1:387691105387:web:fd78e7be66ddf62d96b52e",
    measurementId: "G-GDQMFYZFMX"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();


firebase.auth().onAuthStateChanged(user => {
    if (user) {
        setupUI(user);
        //$('#login-form').replaceWith('<ul class="nav navbar-nav navbar-right"><li class="nav-item"><a class="nav-link" id="sign-out" type="click">Sign Out</a></li></ul>');
    } else {
        setupUI();
    }
})


const loggedOut = document.querySelectorAll('.logged-out')
const loggedIn = document.querySelectorAll('.logged-in')

const setupUI = (user) => {
    if (user) {
        loggedIn.forEach(item => item.style.display = 'block');
        loggedOut.forEach(item => item.style.display = 'none');
    } else {
        loggedIn.forEach(item => item.style.display = 'none');
        loggedOut.forEach(item => item.style.display = 'block');
    }
}


//LOGOUT 
const signOut = document.querySelector('#sign-out');
 
signOut.addEventListener('click', (e) => {
    e.preventDefault();

    firebase.auth().signOut().then(() => {
        console.log("success");
    });
});
