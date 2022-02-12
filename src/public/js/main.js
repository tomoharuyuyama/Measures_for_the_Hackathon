function delete_alert(e){
  if(!window.confirm('キャパを減らしタスクを購入しますか？')){
    window.alert('キャンセルされました'); 
    return false;
  }
  document.deleteform.submit();
};