// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementsByClassName("mdlImg");
var modalImg = document.getElementById("img01");

for (var i = 0; i < img.length; i++) {
    img[i].onclick = function(){
        //Disable modal on XS viewpoint
        if($(window).width() > 768){   
            modal.style.display = "block";
            modalImg.src = this.src;
        }
    }
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close_button")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}