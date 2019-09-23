$(document).ready(function(){
 	console.log("HEllo");
	const starTotal = 5;
	const rating = document.getElementById('rating').value;

	const starPercentage = (rating/ starTotal) * 100;
	const starPercentageRounded = `${(Math.round(starPercentage / 10) * 10)}%`;
	  document.querySelector(`.stars-inner`).style.width = starPercentageRounded; 
});

if(document.getElementById('due_date') < Date.now()) {
	console.log("Due date passed");
}