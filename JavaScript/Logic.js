//FAQ Acorddion

const faq=document.querySelectorAll('.visible-pannel');
faq.forEach(item => {
    item.addEventListener("click",(fun) =>{
    const reponce =fun.target.parentElement.getElementsByClassName('reponce')[0];
    const question= fun.target.parentElement;
    console.log(reponce);
    reponce.classList.toggle("reponce-click");
    question.classList.toggle("questions-click");
    })
});

//fin FAQ Acorddion

//comment-ca-marche Acorddion

const co=document.querySelectorAll('.cart'); 
co.forEach(item => {
    item.addEventListener("click",(fd) =>{
    const textDescption = fd.target.getElementsByClassName('text-descption')[0];
    console.log(textDescption);
    const clickCent = fd.target.parentElement;
    console.log(clickCent);
    textDescption.classList.toggle("text-descption-click");
    clickCent.classList.toggle("cent-click");
    })
});

//fin comment-ca-marche Acorddion

const test = document.querySelectorAll('.hamburger span');
test.forEach(item => {
    item.addEventListener("click",(hhj) =>{
        this.toggleClass( "active" );
    })
});
/*$('.hamburger').click(function() {
    $( this ).toggleClass( "active" );
  });*/

const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");

accordionItemHeaders.forEach(accordionItemHeader => {
    accordionItemHeader.addEventListener("click", event => {
              
    accordionItemHeader.classList.toggle("click-nav-header");

    const accordionItemBody = accordionItemHeader.nextElementSibling;
    const accordionItemHeadersParent = accordionItemHeader.parentElement;

    if(accordionItemHeader.classList.contains("click-nav-header")) {
      accordionItemBody.classList.add("show-links");
      accordionItemHeadersParent.classList.add("click-parent-of-links-cv-creat");
    }

    else {
      accordionItemBody.classList.remove("show-links");
      accordionItemHeadersParent.classList.remove("click-parent-of-links-cv-creat");
    }      
  });
});

const dropArea = document.querySelector(".drag-area");
let button = dropArea.querySelector(".button");
let input = dropArea.querySelector("input");
let file;

dropArea.onclick = () => {
  input.click();
};

// when browse
input.addEventListener("change", function () {
  file = this.files[0];
  dropArea.classList.add("active");
  displayFile();
});

// when file is inside drag area
dropArea.addEventListener("dragover", (event) => {
  event.preventDefault();
  dropArea.classList.remove("active");
  // console.log('File is inside the drag area');
});

// when file is dropped
dropArea.addEventListener("drop", (event) => {
  event.preventDefault();
  // console.log('File is dropped in drag area');

  file = event.dataTransfer.files[0]; // grab single file even of user selects multiple files
  // console.log(file);
  displayFile();
});

function displayFile() {
  let fileType = file.type;
  // console.log(fileType);

  let validExtensions = ["image/jpeg", "image/jpg", "image/png"];

  if (validExtensions.includes(fileType)) {
    // console.log('This is an image file');
    let fileReader = new FileReader();

    fileReader.onload = () => {
      let fileURL = fileReader.result;
      // console.log(fileURL);
      let imgTag = `<img src="${fileURL}" alt="">`;
      dropArea.innerHTML = imgTag;
    };
    fileReader.readAsDataURL(file);
  } else {
    alert("This is not an Image File");
    dropArea.classList.remove("active");
  }
}















// add 

const rk = document.querySelectorAll('#rk');
rk.onclick = () => {
    alert("ggggggg");
}