

$(function(){
  $('#form_comments').submit(function(e){
    e.preventDefault();

    $.ajax({
      url:baseUrl + '/ajax/store',
      data: {
        pseudo: $('#pseudo').val(),
        texte: $('#commentaire').val()
      },
      method: 'get',
      success: function(reponsePHP){
        alert(reponsePHP);
      },
      error: function(){
        alert("Problème durant la transaction");
      }
    });
  });
});
