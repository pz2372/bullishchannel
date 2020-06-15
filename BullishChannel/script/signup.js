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


const signupForm = document.querySelector('#signup-form');

signupForm.addEventListener('submit', (e) => {
    e.preventDefault();

    const email = signupForm['email'].value;
    const password = signupForm['password'].value;

    firebase.auth().createUserWithEmailAndPassword(email, password).then(cred => {
        console.log("Success");
        location.replace("index.html");
    }).catch(function(error) {
        var errorCode = error.code;
        var errorMessage = error.message;
        console.log(errorcode, errormessage);
    });
});

