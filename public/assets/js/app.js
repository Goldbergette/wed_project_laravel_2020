  const baseUrl = $('body').attr('data-baseURL');
$(function(){
  let offsetCalc = 10;


  $('.page-link').click(function(e){
    e.preventDefault();
    $.ajax({
      url: this.dataset.route,
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
