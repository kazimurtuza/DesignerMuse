importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-messaging.js');
/*
Initialize the Firebase app in the service worker by passing in the messagingSenderId.
*/
firebase.initializeApp({
    apiKey: "AIzaSyBqU_lOmKGScd5v7PjMmtLuQlN7i2DpLsM",
    authDomain: "designer-muse.firebaseapp.com",
    projectId: "designer-muse",
    storageBucket: "designer-muse.appspot.com",
    messagingSenderId: "789382647348",
    appId: "1:789382647348:web:a67a47be57a37dc0648461",
    measurementId: "G-02Y8JCVDCQ"
});

// Retrieve an instance of Firebase Messaging so that it can handle background
// messages.
const messaging = firebase.messaging();
messaging.setBackgroundMessageHandler(function(payload) {
    console.log("Message received.", payload);
    const title = "Hello world is awesome";
    const options = {
        body: "Your notificaiton message .",
        icon: "/firebase-logo.png",
    };
    return self.registration.showNotification(
        title,
        options,
    );
});
