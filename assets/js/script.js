function fecharModal() {
    $('.modal_bg').hide();
}

$(function(){
    $('.add_tab').on('click', function(){
        var html = '<h1>Escolha uma Sala de Bate Papo</h1><hr>';
        html += '<div id="groupList">Carregando...</div>';
        html +='<button onclick="fecharModal()">Fechar</button>';
        $('.modal_area').html(html);
        $('.modal_bg').show();

        chat.loadGroupList(function(json){
            var html = '';
            for(var i in json.list){
                html+= '<button data-id="'+json.list[i].id+'">'+json.list[i].name+'</button>';
            }
            $('#groupList').html(html);

            $('#groupList').find('button').on('click', function(){
                var cid = $(this).attr('data-id');
                var cnm = $(this).text();
                chat.setGroup(cid, cnm);
                fecharModal()
            });
        });
    });

});