$(document).ready(function(){
    $("#nome").blur(function(){
       // $("#nome").show();
        if ($("#nome").length>=2) {
        $("#nome").css("border","1px solid red");    
        }else{
            $("#nome").css("border","1px solid red");    
        }
    })
})

function validacao() {   
    if (document.formulario.nome.value == "") 
    {
        //alert('if');
        alert("preencha o nome.");
        document.formulario.nome.focus();
    }
    else if(document.formulario.mensagem.value==0){
    
        //alert('if else');
        alert("preencha a mensagem.");
        document.formulario.mensagem.focus();
    } 
    else{
        //alert('else');
        document.formulario.method="post";
        document.formulario.submit();
        //alert(<?php echo $status;?>);    
    }
}


function teste(){
    alert('teste');
}

//variaveis
		var variavel;
		var a =1;
		var b ="abc";
		var c=false;
		var matriz=["agua","suco","bebida"];
		var car = {
					type:"Fiat", 
					model:"500", 
					color:"white"
				};
		//DOM document- DOM element - DOM atributes - DOM events - DOM style
		//Windows Navigator Screen History Location
		//method string -ex.: variavel.length
			//string() toString() length() Indexof() lastIndexof() search() slice() substring() substr() replace() toUpperCase() toLowerCase() concat() charat() split();			
		//number method 
			//number() bulean() toExponential() toFixed() toPrecision() valueOf() parseInt() parseFloat() MAX_VALUE MIN_VALUE  NEGATIVEINFINITY NaN POSITIVE_INFINITY 
		//DATE METHOD
			//GETDATE() GETDAY() GETFULLYEAR() GETHOURS() GETMILISECONDS() GETMINUTES() GETMONTH() GETSECONDS() GetTIME() setdate() setfullyear() sethours() setmiliseconds() setmilliseconds() setMinutes() setMonth() setSeconds() setTime() getUTCdate() getutcDay() getUtCfullyear() getUTChour() getUTCmiliseconds() getUTCminutes() getUTCmonth() getUTCSeconds() 
		//array method
			//join() pop() push() shift() unshift() 
			 	
	/*CONDITIONAL
		
		if (condition1) {
			block of code to be executed if condition1 is true
			} else if (condition2) {
				block of code to be executed if the condition1 is false and condition2 is true
			} else {
				block of code to be executed if the condition1 is false and condition2 is false
			}

		switch(expression) {
			case n:
				code block
				break;
			case n:
				code block
				break;
			default:
				default code block
		}
		
	LOOP
		while (condition) {
			code block to be executed
		}	

		for (i = 0; i < cars.length; i++) { 
			text += cars[i] + "<br>";
		}

	FUNCTION
		function functionName(parameters) {
		  code to be executed
		}
	
	Errors
		try { 
			if(x == "") throw "is empty";
			if(isNaN(x)) throw "is not a number";
			x = Number(x);
			if(x > 10) throw "is too high";
			if(x < 5) throw "is too low";
		}
		catch(err) {
			message.innerHTML = "Error: " + err + ".";
		}
		finally {
			document.getElementById("demo").value = "";
		}

	Debugging
		<script>
			a = 5;
			b = 6;
			c = a + b;
			console.log(c);
		</script>
	
	Forms
		function validateForm() {
			var x = document.forms["myForm"]["fname"].value;
			if (x == "") {
				alert("Name must be filled out");
				return false;
			}
		}
	
	Forms API
		<script>
		function myFunction() {
			var inpObj = document.getElementById("id1");
			if (inpObj.checkValidity() == false) {
				document.getElementById("demo").innerHTML = inpObj.validationMessage;
			}
		}

		function myFunction() {
			var txt = "";
			if (document.getElementById("id1").validity.rangeUnderflow) {
			   txt = "Value too small";
			}
			document.getElementById("demo").innerHTML = txt;
		}
		</script>
			//methods: checkValidity() setCustomValidity()
			//Constraint validation DOM Properties: validity validationMessage willValidate
			//Validity Properties:  customError patternMismatch rangeOverflow rangeUnderflow stepMismatch tooLong typeMismatch valueMissing valid
		
	OBJECT
		//exemplo
		<script>
			var person = new Object();
			person.firstName = "John";
			person.lastName = "Doe";
			person.age = 50;
			person.eyeColor = "blue"; 

			document.getElementById("demo").innerHTML =
			person.firstName + " is " + person.age + " years old.";
		</script>

		//exemplo2
		function person(first, last, age, eye) {
			this.firstName = first;
			this.lastName = last;
			this.age = age;
			this.eyeColor = eye;
		}
		var myFather = new person("John", "Doe", 50, "blue");
		var myMother = new person("Sally", "Rally", 48, "green");
		//exemplo3
		var x1 = new Object();    // A new Object object
		var x2 = new String();    // A new String object
		var x3 = new Number();    // A new Number object
		var x4 = new Boolean();   // A new Boolean object
		var x5 = new Array();     // A new Array object
		var x6 = new RegExp();    // A new RegExp object
		var x7 = new Function();  // A new Function object
		var x8 = new Date();      // A new Date object
		
		Accessing JavaScript Properties: objectName.property (person.age) or objectName["property"] (person["age"]) or objectName[expression] (x = "age"; person[x])
		Adding new properties: person.nationality = "English";
		Deleting Properties:


		//loop
		var person = {fname:"John", lname:"Doe", age:25}; 
		for (x in person) {
			txt += person[x];
		}

	EXEMPLOS ACESSO AO DOM:

	document.getElementById('demo').innerHTML = 'Hello JavaScript!'
	document.getElementById('myImage').src='pic_bulbon.gif'	
	document.getElementById('demo').style.fontSize='35px'
	document.getElementById('demo').style.display='none'
	
	window.alert(5 + 6);
	document.write(5 + 6);
	document.getElementById("demo").innerHTML = 5 + 6;
	document.getElementById("demo").innerHTML =variavel1 + "<br>" + variavel2 + "<br>" + variavel3;
	document.getElementById("demo").innerHTML ="The value is: " +car + "<br>" +"The type is: " + typeof car;
	document.getElementById("demo").innerHTML = car.type;
	document.getElementById("demo").innerHTML = myFunction(4, 3);
	<button onclick="this.innerHTML=Date()">The time is?</button>

	//Finding html elements
		document.getElementById(id)
		document.getElementsByTagName(name)
		document.getElementsByClassName(name)

	//changing HTML Elements
		element.innerHTML =  new html content
		element.attribute = new value
		element.setAttribute(attribute, value)
		element.style.property = new style

	//Adding and Deleting Elements
		document.createElement(element)
		document.removeChild(element)
		document.appendChild(element)
		document.replaceChild(element)
		document.write(text)

	//Finding objects html
		document.anchors	Returns all <a> elements that have a name attribute	
		document.applets	Returns all <applet> elements (Deprecated in HTML5)	
		document.baseURI	Returns the absolute base URI of the document	
		document.body	Returns the <body> element	
		document.cookie	Returns the document's cookie	
		document.doctype	Returns the document's doctype	
		document.documentElement	Returns the <html> element	
		document.documentMode	Returns the mode used by the browser	
		document.documentURI	Returns the URI of the document	
		document.domain	Returns the domain name of the document server	
		document.domConfig	Obsolete. Returns the DOM configuration	
		document.embeds	Returns all <embed> elements	
		document.forms	Returns all <form> elements	
		document.head	Returns the <head> element	
		document.images	Returns all <img> elements	
		document.implementation	Returns the DOM implementation	
		document.inputEncoding	Returns the document's encoding (character set)	
		document.lastModified	Returns the date and time the document was updated	
		document.links	Returns all <area> and <a> elements that have a href attribute	
		document.readyState	Returns the (loading) status of the document	
		document.referrer	Returns the URI of the referrer (the linking document)	
		document.scripts	Returns all <script> elements	
		document.strictErrorChecking	Returns if error checking is enforced	
		document.title	Returns the <title> element	
		document.URL	Returns the complete URL of the document	

	//DOM CSS 
		document.getElementById('id1').style.color = 'red'


	*/


