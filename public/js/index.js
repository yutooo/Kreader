//伸縮するテキストエリア
function flexTextarea(el) {
    const dummy = el.querySelector('.FlexTextarea__dummy')
    el.querySelector('.FlexTextarea__textarea').addEventListener('input', e => {
      dummy.textContent = e.target.value + '\u200b'     //最後の改行が無視されないように
    })
}
document.querySelectorAll('.FlexTextarea').forEach(flexTextarea)
