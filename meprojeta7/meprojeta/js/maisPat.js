$(document).ready(function () {

    let todosPatrocinadores = $('.todospat').html();
    $(document).on('click', '#maisPat', function (e) {
        e.preventDefault();
        let i = $('.cadastro').length + 1;
        let pat = todosPatrocinadores.replace(/\[[1\]]\]/g, '[' + i++ + ']');
        $('.todospat').append(pat);
    });

});
