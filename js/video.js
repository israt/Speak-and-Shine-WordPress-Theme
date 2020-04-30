var vid = document.getElementById("bgvid");
var pauseButton = document.querySelector("#polina button");

function vidFade() {
  vid.classList.add("stopfade");
}

vid.addEventListener('ended', function()
{
// only functional if "loop" is removed 
vid.pause();
// to capture IE10
vidFade();
}); 


pauseButton.addEventListener("click", function() {
  vid.classList.toggle("stopfade");
  if (vid.paused) {
    vid.play();
    pauseButton.innerHTML = "<img src='http://localhost/shine-wp/wp-content/uploads/2016/06/playy.png'/>";
  } else {
    vid.pause();
    pauseButton.innerHTML = "<img src='http://localhost/shine-wp/wp-content/uploads/2016/06/push.png'/>";
  }
})
