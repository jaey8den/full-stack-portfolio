function openForm() {
	document.getElementById("loginPopup").style.display = "block";
}
function closeForm() {
	document.getElementById("loginPopup").style.display = "none";
}

function toggleForm(){
	var popup = document.getElementById("loginPopup");
	popup.classList.toggle("show");
}
