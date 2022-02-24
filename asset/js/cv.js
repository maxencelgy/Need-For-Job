// /////////////////////////////////////////////////////////////////////////////////
console.log("coucou cv");
$(document).ready(function () {

  
});

const options = {
  filename: "cv.pdf",
  image: {
    type: "png",
    quality: 800,
  },
  html2canvas: {
    scale: 1,
  },
  jsPDF: {
    format: "a4",
    unit: "in",
    format: "letter",
    orientation: "portrait",
  },
};

$(".btn-download").click(function (e) {
  e.preventDefault();
  const element = document.getElementById("invoice");
  html2pdf().from(element).set(options).save();
});

function printDiv(divName) {
  var printContents = document.getElementById(divName).innerHTML;
  var originalContents = document.body.innerHTML;

  document.body.innerHTML = printContents;

  window.print();
  document.body.innerHTML = originalContents;
}
