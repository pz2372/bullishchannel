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


const loginForm = document.querySelector('#login-form');

loginForm.addEventListener('submit', (e) => {
    e.preventDefault();

    //get info
    const email = loginForm['email'].value;
    const password = loginForm['password'].value;

    //signup user
    firebase.auth().signInWithEmailAndPassword(email, password).then(cred => {
        location.replace("index.html");
    })
})