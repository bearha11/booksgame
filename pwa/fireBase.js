var fireBase = fireBase || firebase;
var hasInit = false;
  var config = {
    apiKey: "AIzaSyD1A5Q5tLE330sotG-cbKo8QyWYwLlw9H0",
    authDomain: "books-game.firebaseapp.com",
    databaseURL: "https://books-game.firebaseio.com",
    projectId: "books-game",
    storageBucket: "books-game.appspot.com",
    messagingSenderId: "140649252093"
  };
if(!hasInit){
    firebase.initializeApp(config);
    hasInit = true;
}


