$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

window.createPopupWin = function createPopupWin(pageURL, pageTitle, popupWinWidth, popupWinHeight) {
  var left = (screen.width - popupWinWidth) / 2;
  var top = (screen.height - popupWinHeight) / 4;

  var myWindow = window.open(pageURL, pageTitle,
    'resizable=yes, width=' + popupWinWidth
    + ', height=' + popupWinHeight
    + ', top=' + top
    + ', left=' + left);
}
