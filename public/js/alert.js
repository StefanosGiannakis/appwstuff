
// Get the modal
// var modal = document.getElementById('myModal');

// Get the button that opens the modal
// var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
// btn.onclick = function() {
//   modal.style.display = "block";
// }

// When the user clicks on <span> (x), close the modal
// span.onclick = function() {
//   modal.style.display = "none";
// }

// When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
//   if (event.target == modal) {
//     modal.style.display = "none";
//   }
// }
// alert("i am loaded"+Date.now());

if(true){
    onload = function() {
        this.addModalToBody();
        var modal = document.getElementById('myModal');
        modal.style.display = "block";
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
        span.onclick = function() {
            modal.style.display = "none";
        }
        window.onclick = function(event) {
            if (event.target == modal) {
              modal.style.display = "none";
            }
        }
      }
}
else{
    console.log("nope")
}

function addModalToBody(){
    // The Modal
    htmlModal="";
    htmlModal+='<div id="myModal" class="modal">';
    htmlModal+='<div class="modal-content"><div class="modal-content"><span class="close">&times;</span>';
    htmlModal+='<p>'+ getInfoMessage() +'</p></div></div>';
    document.getElementsByTagName('body')[0].innerHTML+=htmlModal;
}

function getInfoMessage(){

    return "<h1>I am the message</h1>";
}