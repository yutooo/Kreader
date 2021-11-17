
function post(where, which){
    let target= document.getElementById(where);
    let subject=document.getElementById(which).value;
    target.insertAdjacentHTML('beforeend','<p>'+subject+'</p>');
    $('#box').val("");
};
//<p>のところにidを追加することでその要素を編集、削除できるようにする
//html(php?)のほうに予め番号振っておいてその番号を取得し、それをidとし、最後に１追加しておく

//ボタンクリックされたとき!!

$('body').on('mouseup', function(e){  //mouseupでイベント発火
    var selectedStr;
    if(window.getSelection){  //selectionオブジェクト取得
      selectedStr = window.getSelection().toString();  //文章取得
      if(selectedStr !== '' && selectedStr !== '\n'){  //文章チェック
        $('#box').val(selectedStr);
      }
    }
  });
