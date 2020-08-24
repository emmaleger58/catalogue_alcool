var image=document.getElementById('portrait');
var text=document.getElementById('biographie');

image.addEventListener("mouseenter", function( event ) {
  biographie.style.opacity="1";})

image.addEventListener("mouseleave" , function( event ) {
  biographie.style.opacity="0";})


image.addEventListener("mouseenter", function( event ) {
  biographie.style.transform="scale(1)";})

image.addEventListener("mouseleave", function( event ) {
  biographie.style.transform="scale(0)";})
