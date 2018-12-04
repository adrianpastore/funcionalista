$(document).ready(function () {
    var todasVagas = $('.todasvagas').html();
    $(document).on('click', '#maisVaga', function (e) {
        e.preventDefault();
        var i = $('.cadastro').length+1;
        var vaga = todasVagas.replace(new RegExp('1', 'g'),  i++ );
        $('.todasvagas').append(vaga);
    });

});

$(document).ready(function () {
    $(document).on('click', '#menosVaga', function (e) {
        e.preventDefault();
          var x = document.querySelector('.todasvagas').children;
          var vaga = event.target;
          if (x.length > 1) vaga.parentNode.remove();
          else document.getElementById('alert').style.display = 'block';
        });

});

$(document).ready(function () {
    $(document).on('click', '#butClose', function (e) {
        e.preventDefault();
        document.getElementById('alert').style.display = 'none';
    });

});
