function contactformvalidation() {
    
    // document.getElementById("umane").innerHTML="";
    var name =document.forms["contactform"]["name"].value;
    var email =document.forms["contactform"]["email"].value;
    var number =document.forms["contactform"]["number"].value;
    var message =document.forms["contactform"]["message"].value;

    if (name == "" || name == null) {
        // document.getElementById("umane").innerHTML="*required";
        alert("Enter Your Name !");
        return false;
    }

    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

		if (!email.match(emailPattern) && email!=""){

			alert("not valid !");
            return false;

		}
        else if (email == "" || email == null) {
            alert("Enter Your email !");
            return false;
        }

        var phnopat = /^[0][0-9]{2}[-\s][0-9]{3}[-\s][0-9]{4}$/;

		if (!number.match(phnopat) && number!=""){

			alert("not valid !");
            return false;

		}
        else if (number == "" || number == null) {
            alert("Enter Your email !");
            return false;
        }
}