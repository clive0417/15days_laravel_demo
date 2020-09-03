$.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  //delete_post的function code
  deletePost = function (id) {
    let result = confirm('Do you want to delete post?');
    //console.log(result); 驗證result 帶入0,1 OK
    
    if (result) {
        let actionUrl ='/posts/'+id;//組合網址
        //console.log(actionurl);位置驗證OK
        $.post(actionUrl,{_method:'delete'}).done(function() {
            console.log('test');
            location.href = '/posts/admin';//重新整理頁面 

        });

    };


  };