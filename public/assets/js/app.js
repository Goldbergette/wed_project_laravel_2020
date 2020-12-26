const linkMore = document.querySelector('.page-link');

/*linkMore.onclick = function(){
  fetch('traitement.php')
    .then(function(reponsePHP){
      return reponsePHP.text();
    })
    .then(function(reponse){
      alert(reponse);
    });
};*/

$(function(){
  let offsetCalc = 10;
  const baseUrl = $('body').attr('data-baseURL');

  $('.page-link').click(function(e){
    e.preventDefault();
    $.ajax({
      url:baseUrl + '/ajax/morePosts',
      data:{
        offset: offsetCalc
      },
      method: 'get',
      success: function(reponsePHP){
       $('.blog_left_sidebar').append(reponsePHP)
                              .find('.blog_item:nth-last-of-type(-n+10)')
                              .hide()
                              .fadeIn();
       offsetCalc += 10;
      },
      error: function(){
        alert("Problème durant le chargement");
      }
    });
  });
});
