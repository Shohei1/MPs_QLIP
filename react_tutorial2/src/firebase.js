// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
    apiKey: "AIzaSyC6_MH3wzNwHzwp61qPL0-HCeJjJFp5HPc",
    authDomain: "test1-36f9c.firebaseapp.com",
    projectId: "test1-36f9c",
    storageBucket: "test1-36f9c.appspot.com",
    messagingSenderId: "446345812477",
    appId: "1:446345812477:web:da0fc4547ad9d964aba194",
    measurementId: "G-T6M0WKFHPQ",
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);
