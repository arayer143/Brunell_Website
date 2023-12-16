


// Wrap every letter in a span
var textWrapper = document.querySelector('.ml1 .letter');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml1 .letter',
    scale: [0.3,1],
    opacity: [0,1],
    translateZ: 0,
    easing: "easeOutExpo",
    duration: 2000,
    delay: (el, i) => 70 * (i+1)
  }).add({
    targets: '.ml1 .line',
    scaleX: [0,1],
    opacity: [0.5,1],
    easing: "easeOutExpo",
    duration: 4000,
    offset: '-=875',
    delay: (el, i, l) => 80 * (l - i)
  }).add({
    targets: '.ml1',
    opacity: 0,
    duration: 2000,
    easing: "easeOutExpo",
    delay: 1000
  });




//Adds the Hyphen's in the phone number on the contact page 

	function addHyphen (element) {
    	let ele = document.getElementById(element.id);
        ele = ele.value.split('-').join('');    // Remove dash (-) if mistakenly entered.

        let finalVal = ele.replace(/(\d)(\d)(\d)(\d)(\d)(\d)(\d)(\d)(\d)(\d)/, '$1$2$3-$4$5$6-$7$8$9$10')
        document.getElementById(element.id).value = finalVal;
    }




