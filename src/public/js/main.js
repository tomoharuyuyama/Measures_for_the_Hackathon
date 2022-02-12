function delete_alert(e){
  if(!window.confirm('キャパを減らしタスクを購入しますか？')){
    window.alert('キャンセルされました'); 
    return false;
  }
  document.deleteform.submit();
};

function completed_alert(e){
  if(!window.confirm('タスク完了しましたか？')){
    window.alert('キャンセルされました'); 
    return false;
  }
  document.completedform.submit();
};