let setElm = document.querySelectorAll('#boxList .box'),
  delaySpeed = 600,
  fadeSpeed = 1100;

window.addEventListener('load', function () { // イベント
  randomShow();
  function randomShow() { // 関数宣言
    let elmLength = setElm.length, // 画像数
      randomSet = Math.floor(Math.random() * elmLength); // ランダム数

    setElm[randomSet].style.visibility = 'visible'; // CSS指定
    setElm[randomSet].animate([{ opacity: 0 }, { opacity: 1 }], fadeSpeed); // フェードイン
    setElm = Array.from(setElm); // 配列に変換
    setElm.splice(randomSet, 1); // 要素の取り除き

    if (elmLength > 1) {
      setTimeout(randomShow, delaySpeed); // 時間差処理
    } else {
      return false;
    }
  }
});

