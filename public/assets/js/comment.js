$(function(){
  $('#form_comments').submit(function(e){
    e.preventDefault();

    $.ajax({
      url:baseUrl + '/ajax/store',
      data: {
        post_id: $('.single-post').attr('data-id'),
        pseudo: $('#pseudo').val(),
        texte: $('#commentaire').val()
      },
      method: 'get',
      success: function(reponsePHP){
        if (reponsePHP == 1){
          let code = `<li class="list-group-item">
          <div class="title">Pseudo:` + $('#pseudo').val() + `</div>
          <div class="text truncate">Commentaire:` + $('#commentaire').val() + `</div>
          </li>`;
        $('.list-group').prepend(code)
                        .find('li:first')
                        .hide()
                        .slideDown();
        $('#pseudo').val('');
        $('#commentaire').val('');
        }
        else {
          alert("Problème durant l'ajout de votre commentaire");
        }
      },
      error: function(){
        alert("Problème durant la transaction");
      }
    });
  });
});
