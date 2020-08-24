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


//background video playlist


// var video = document.getElementById('myVideo');
// var source = document.createElement('source');
//
// source.setAttribute('src', 'https://static.videezy.com/system/resources/previews/000/032/846/original/girllistensong1.mp4');
//
// video.appendChild(source);
// video.play();
//
// 
// setTimeout(function() {
//     video.pause();
//
//     source.setAttribute('src', 'https://static.videezy.com/system/resources/previews/000/012/979/original/record_player_011.mp4');
//
//     video.load();
//     video.play();
// }, 14000);
