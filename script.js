// responsive edit
let menuList = document.getElementById("menuList")
menuList.style.maxHeight = "0px";

function toggleMenu() {
    if (menuList.style.maxHeight == "0px") {
        menuList.style.maxHeight = "500px";
    }
    else {
        menuList.style.maxHeight = "0px";
    }
}

// let navmenu = document.getElementById("navmenu")
// navmenu.style.maxHeight = "0px";

// function toggleMenu(){
//     if(navmenu.style.maxHeight == "0px")
//     {
//        navmenu.style.maxHeight = "300px";   
//     }
//     else{
//         navmenu.style.maxHeight = "0px";
//     }
// }


const COLOR_BTNS = document.querySelectorAll('.color');
COLOR_BTNS.forEach(color => {
    color.addEventListener('click', () => {
        let colorNameClass = color.className;
        if (!color.classList.contains('active-color')) {
            let colorName = colorNameClass.slice(colorNameClass.indexOf('-') + 1, colorNameClass.length);
            resetActiveBtns();
            color.classList.add('active-color');
            setNewColor(colorName)
        }
    });
})

// resetting all color btns
function resetActiveBtns() {
    COLOR_BTNS.forEach(color => {
        color.classList.remove('active-color');
    });
}

// set new color on the banner right 
function setNewColor(color) {
    document.querySelector('.banner-right img').src = `images/tshirt_${color}.png`;
}


function selectSize(size) {
    // Remove active class from all sizes
    const sizes = document.querySelectorAll('.size');
    sizes.forEach(function (element) {
        element.classList.remove('active-size');
    });

    // Add active class to the selected size
    const selectedElement = document.querySelector('.size.size-' + size);
    selectedElement.classList.add('active-size');

    // Update the displayed selected size
    document.getElementById('selected-size').innerText = 'Selected Size: ' + size;
}


let canvas = new fabric.Canvas('tshirt-canvas');

function updateTshirtImage(imageURL) {
    fabric.Image.fromURL(imageURL, function (img) {
        img.scaleToHeight(195);
        img.scaleToWidth(195);
        canvas.centerObject(img);
        canvas.add(img);
        canvas.renderAll();
    }, { crossOrigin: 'anonymous' });
}

// Update the TShirt color according to the selected color by the user
document.getElementById("tshirt-color").addEventListener("change", function () {
    document.getElementById("tshirt-div").style.backgroundColor = this.value;
}, false);

// Update the TShirt color according to the selected color by the user
document.getElementById("tshirt-print").addEventListener("change", function () {

    // Call the updateTshirtImage method providing as first argument the URL
    // of the image provided by the select
    updateTshirtImage(this.value);
}, false);

// When the user clicks on upload a custom picture
document.getElementById('tshirt-custompicture').addEventListener("change", function (e) {
    var reader = new FileReader();

    reader.onload = function (event) {
        var imgObj = new Image();
        imgObj.src = event.target.result;

        // When the picture loads, create the image in Fabric.js
        imgObj.onload = function () {
            var img = new fabric.Image(imgObj);

            img.scaleToHeight(300);
            img.scaleToWidth(300);
            canvas.centerObject(img);
            canvas.add(img);
            canvas.renderAll();
        };
    };

    // If the user selected a picture, load it
    if (e.target.files[0]) {
        reader.readAsDataURL(e.target.files[0]);
    }
}, false);


// When the user selects a picture that has been added and presses the DEL key
// The object will be removed!
document.addEventListener("keydown", function (e) {
    var keycode = e.keyCode; // Get the keyCode of the pressed key

    if (keycode === 46) { // Check if the keyCode is 46 (Delete key)
        console.log("Removing selected element on Fabric.js on DELETE key!");
        canvas.remove(canvas.getActiveObject()); // Remove the active object from the canvas
    }
}, false);

// Define as node the T-Shirt Div
var node = document.getElementById('tshirt-div');

domtoimage.toPng(node).then(function (dataUrl) {
    // Print the data URL of the picture in the Console
    console.log(dataUrl);


    //You can for example to test, add the image at the end of the document
    var img = new Image();
    img.src = dataUrl;
    // document.body.appendChild(img);
}).catch(function (error) {
    console.error('oops, something went wrong!', error);
});

// MENU TOGGLE
const selectElement = function (element) {
    return document.querySelector(element);
};

let menuToggler = selectElement('.menu-toggle');
let body = selectElement('body');

menuToggler.addEventListener('click', function () {
    body.classList.toggle('show');
});

// CLOSE THE NAV WHEN NAVLNKS ARE CLICKED
let navLinks = document.querySelectorAll('.nav-link');

navLinks.forEach(function (navLink) {
    navLink.addEventListener('click', function () {
        body.classList.remove('show');
    })
})

