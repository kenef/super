var myImage = document.getElementById("whater-the-image-id-will-be");
var imageArray = ["string-of-url-to-image","string-of-url-to-image,","string-of-url-to-image"];
var imageIndex = 0;

function changeImage() {
	myImage.setAttribute("src", imageArray[imageIndex]);
	imageIndex++;
	if (imageIndex >= imageArray.length) {
		imageIndex = 0;
	}
}


// use this to call the changeImage function: 
//	setInterval(changeImage, 5000) <-- the 5000 is miliseconds, so this is 5 seconds. also setInterval is a browser func.

//	we could also use something like this to be able to stop the timer onClick:
//	var intervalHandle = setInterval(changeImage,5000);
//
//	myImage.onClick = function() {
//		clearInterval(intervalHandle);
//	}

//	There are 4 solid methods for working with timers in javascript. they are:

//	1. setTimeout(timoutFunc, 5000); <-- this will execute timeoutFunc AFTER 5 seconds

//	2. setInterval(intervalFunc, 5000); <-- this will execute intervalFunc EVER 5 seconds

//	3. clearTimout(); <-- I'm guessing this clears a timeout action someout

//	4. clearInterval(); <-- this is used to stop/reset the timer.