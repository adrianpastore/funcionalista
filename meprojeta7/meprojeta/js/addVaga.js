$(document).ready(function () {
    $(document).on('click', '#cadastrar', function (e) {
        e.preventDefault();
        var i = $('.todasVagas').length;
        console.log($('.todasVagas'));
    });
});



$(function($){
    $('#cadastrar').click(function(){
      var vagas = document.getElementsByClassName('.todasVagas');
      console.log(vagas);
    });

});
