var loadFile = function(event, id) {
	var image = document.getElementById(id);
	image.src = URL.createObjectURL(event.target.files[0]);
};

// function clearInputFile(file){
//     notify('{{$content->}}file{{ = null}}');
// }


function removeValue(){

    return null;
}