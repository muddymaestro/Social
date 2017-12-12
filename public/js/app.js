var postId = '';
var postBodyElement = null;

$('.post').find('.interaction').find('.edit').on('click', function(event){
  event.preventDefault();
  postBodyElement = event.target.parentNode.parentNode.childNodes[1];
  var postBody = postBodyElement.textContent;
  postId = event.target.parentNode.parentNode.dataset['postId'];
  $('#body').val(postBody);
});

$('#modal-save').on('click', function(){
  $.ajax({
    method: 'POST',
    url: url,
    data: { body: $('#body').val(), postId: postId, token: token }
  }).done(function(msg){
    $(postBodyElement).text(msg['new-body']);
  });
});
