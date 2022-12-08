/*
$(function () {
  var setElm = $('#boxList img'),
    delaySpeed = 100,
    fadeSpeed = 500;

  $(window).on('load', function () {
    randomShow();
    function randomShow() {
      var elmLength = setElm.length,
        randomSet = Math.floor(Math.random() * elmLength);

      $(setElm[randomSet]).css({ display: 'block', opacity: '0' }).animate({ opacity: '1' }, fadeSpeed);
      setElm.splice(randomSet, 1);

      if (elmLength > 0) {
        setTimeout(function () { randomShow(); }, delaySpeed);
      } else {
        return false; //全てロード終了後に処理を加える際はココに
      }
    }
  });
});
*/

let setElm = document.querySelectorAll('#boxList img'),
  delaySpeed = 100,
  fadeSpeed = 500;

window.addEventListener('load', function () { // イベント
  randomShow();
  function randomShow() { // 関数宣言
    let elmLength = setElm.length, // 画像数
      randomSet = Math.floor(Math.random() * elmLength);
    console.log(randomSet);
  }
});

