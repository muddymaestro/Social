var postId = '';
var postBodyElement = null;

$('.post').find('.interaction').find('.edit').on('click', function(event){
  event.preventDefault();
  postBodyElement = event.target.parentNode.parentNode.childNodes[1];
  var postBody = postBodyElement.textContent;
  postId = $('#post_id').val();
  $('#body').val(postBody);
  $('#postid').val(postId);
});

// $('#modal-save').on('click', function(){
//   $.ajax({
//     dataType: 'json',
//     method: 'POST',
//     url: url,
//     data: { body: $('#body').val(), postId: postId, token: token }
//   }).done(function(msg){
//     $(postBodyElement).text(msg['new-body']);
//   });
// });

$('#modal-save').on('click', function(){
  var body = $('#body').val();
  var post_id = $('#postid').val();
  $.post("/update", {
    body: body,
    postId: post_id
  },
    function(data){
      alert(data);
    }
  )
});
