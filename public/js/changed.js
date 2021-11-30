//主題、要約セクションに書き込む
function post(where, which){
    let target= document.getElementById(where);
    let subject=document.getElementById(which).value;
    target.insertAdjacentHTML('beforeend','<p>'+subject+'</p>');
    $('#box').val("");
};


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
