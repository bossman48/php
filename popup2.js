		var name ;
      var surname ;
      var address ;
      var phone ;
      var email ;

function handle_form_submission()
      {
		  console.log("osman");
         name = document.getElementById("billing_first_name").value;
         surname = document.getElementById("billing_last_name").value;
         address = document.getElementById("billing_address_1").value;
         phone = document.getElementById("billing_phone").value;
         email = document.getElementById("billing_email").value;
        if (name == "") {
            alert("Name must be filled out");
            return false;
        }
        if (surname == "") {
            alert("Surname must be filled out");
            return false;
        }
        if (address == "") {
            alert("Adress must be filled out");
            return false;
        }
        if (phone == "") {
            alert("Phone must be filled out");
            return false;
        }
        if (email == "") {
            alert("Email must be filled out");
            return false;
        }
        document.getElementById("loader").style.display = "block";
      }

      var modal;
      var modali;
      var modal9;
      var modal10;
      console.log("dış");
function ponpili(){
   modal = document.getElementById('popup2myModal');
   modal.style.display = "block";
   console.log("popup2");
 }
function ponpilii(){
   modali = document.getElementById('popup3myModal');
   modali.style.display = "block";
}
function ponpili2(){
   modal = document.getElementById('popup2myModal');
   modal.style.display = "none";
}
function popup9Close(){
   modal9 = document.getElementById('popup9myModal');
   modal9.style.display = "none";
   console.log("içerdeyim");
}
function popup10Close(){
   modal10 = document.getElementById('popup10myModal');
   modal10.style.display = "none";
}
function ponpilii2(){
   modali = document.getElementById('popup3myModal');
   modali.style.display = "none";
}

      function stop_rotating()
            {
              document.getElementById("loader").style.display = "none";
            }

            function validateForm() {
          var x = document.forms["myForm"]["fname"].value;
          if (x == "") {
              alert("Name must be filled out");
              return false;
          }
      }
// Get the button that opens the modal
modal = document.getElementById('popup2myModal');
modali = document.getElementById('popup3myModal');
modal9 = document.getElementById('popup9myModal');
moda10 = document.getElementById('popup10myModal');
var myVar;
var btn2 = document.getElementById("insert_empty_cart_button");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
 // When the user clicks on <span> (x), close the modal


// When the user clicks anywhere outside of the modal, close it
function ponpili3(){
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
};
}

function ponpilii3(){
window.onclick = function(event) {
    if (event.target == modali) {
        modali.style.display = "none";
    }
};
}
function popup9(){
window.onclick = function(event) {
    if (event.target == modal9) {
        modal9.style.display = "none";
    }
};
}
function popup10(){
window.onclick = function(event) {
    if (event.target == modal10) {
        modal10.style.display = "none";
    }
};
}
window.addEventListener('load',
  function() {
document.getElementById("hasan1").addEventListener("click", myFunction);

function myFunction() {
    document.getElementById("hasan1").getAttribute('href');
    document.getElementById("tab1").style.display="block";
    document.getElementById("tab2").style.display="none";
    document.getElementById("tab3").style.display="none";
    
}
 }, false);
 window.addEventListener('load',
   function() {
document.getElementById("hasan2").addEventListener("click", myFunction2);

function myFunction2() {
    document.getElementById("hasan1").getAttribute('href');
    document.getElementById("tab2").style.display="block";
    document.getElementById("tab1").style.display="none";
    document.getElementById("tab3").style.display="none";

}
 }, false);
window.addEventListener('load',
  function() {
document.getElementById("hasan3").addEventListener("click", myFunction3);

function myFunction3() {
    document.getElementById("hasan1").getAttribute('href');
    document.getElementById("tab3").style.display="block";
    document.getElementById("tab2").style.display="none";
    document.getElementById("tab1").style.display="none";

}
 }, false);
