// function onScanSuccess(qrCodeMessage) {
//   window.location.href = qrCodeMessage;
// }
// function onScanError(errorMessage) {}
// var html5QrcodeScanner = new Html5QrcodeScanner("reader", {
//   fps: 10,
//   qrbox: 250,
// });
// html5QrcodeScanner.render(onScanSuccess, onScanError);

// window.location;

function onScanSuccess(qrCodeMessage) {
  window.location.href = qrCodeMessage;
}
function onScanError(errorMessage) {
  //handle scan error
}
var html5QrcodeScanner = new Html5QrcodeScanner("reader", {
  fps: 10,
  qrbox: 250,
});
html5QrcodeScanner.render(onScanSuccess, onScanError);

window.location;
