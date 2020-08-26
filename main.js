var image=document.getElementById('portrait');
var text=document.getElementById('biographie');
var bulle=document.getElementById('bulle');

image.addEventListener("mouseenter", function( event ) {
  biographie.style.opacity="1",
  bulle.style.opacity="0";})

image.addEventListener("mouseleave" , function( event ) {
  biographie.style.opacity="0",
  bulle.style.opacity="1"})


image.addEventListener("mouseenter", function( event ) {
  biographie.style.transform="scale(1)",
  bulle.style.transform="scale(0)"})

image.addEventListener("mouseleave", function( event ) {
  biographie.style.transform="scale(0)",
  bulle.style.transform="scale(1)"})


//Bulle
