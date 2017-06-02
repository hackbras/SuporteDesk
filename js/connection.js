
  // Initialize Firebase
	  var config = {
			apiKey: "AIzaSyDPToQN1pKEYU6sTXIZCaVNVwklf3tVAQA",
			authDomain: "suportedesk-5fb73.firebaseapp.com",
			databaseURL: "https://suportedesk-5fb73.firebaseio.com",
			storageBucket: "suportedesk-5fb73.appspot.com",
			messagingSenderId: "322871332024"
	  };
	  firebase.initializeApp(config);

	 var email= document.getElementById('email-company');
	 var dbRef = firebase.database().ref().child('email');
	 dbRef.on('value',snap=> email.innerText = snap.val());

	 var whatsapp= document.getElementById('whatsapp');
	 var dbRef = firebase.database().ref().child('watsapp');
	 dbRef.on('value',snap=> whatsapp.innerText = snap.val());

	 var phone= document.getElementById('phone');
	 var dbRef = firebase.database().ref().child('phone');
	 dbRef.on('value',snap=> phone.innerText = snap.val());

	 var dev= document.getElementById('dev');
	 var dbRef = firebase.database().ref().child('developer');
	 dbRef.on('value',snap=> dev.innerText = snap.val());

	 var end= document.getElementById('end');
	 var dbRef = firebase.database().ref().child('endereco');
	 dbRef.on('value',snap=> end.innerText = snap.val());

	 var tel= document.getElementById('tel');
	 var dbRef = firebase.database().ref().child('telefone');
	 dbRef.on('value',snap=> tel.innerText = snap.val());