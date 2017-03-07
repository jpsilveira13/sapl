jQuery('#btnSearchLicitacao').on('click',function (e) {
    e.preventDefault();

    search(1);
});

function search(page) {

    var filters = jQuery('#formSearchLicitacao').serialize()+ "&page=" +page;

    if(status == 0){
        status = 1;

        jQuery.ajax ({
            url: "scope-licitacao",
            type: 'GET',
            cache: false,
            data: filters,
            beforeSend: function () {
                jQuery('.pagination').hide();
                jQuery('#licitacao').css('opacity','0.5');
                jQuery('html, body').animate({
                    scrollTop: jQuery("#licitacao").offset().top}, 1800);
            }, success: function (data) {
                console.log(data);
                jQuery('#licitacao').empty();
                jQuery('#licitacao').css('opacity','1');
                if(data.total < 6){
                    jQuery('.pagination').hide();
                }else{
                    mostra_paginacao(data.currentPage,data.last_page);
                    jQuery('.pagination').show();
                }
                if(data.data.length != 0){

                    //inicia o html aqui
                    var html = "";
                    //irei precisar disso depois
                    //  $('#page').val(data.current_page);
                    var licitacao = data.data;
                    var len = licitacao.length;

                    console.log(licitacao);

                    for(var i = 0;i<len;i++){
                        console.log(licitacao[i].documentos);
                        html+= '<article class="blog-post type3">';
                        html+= '<div class="entry-meta"><div class="date"><p><span>26</span><br>Jan</p></div></div>';
                        html+= '<div class="entry-detail"><div class="responsive">';
                        html+='<table class="table table-bordered table-striped">';
                        html+='<tbody><tr><th style="width: 35%;" class="text-nowrap item_lic_titulo" scope="row">'+licitacao[i].titulo+'</th><td class="item_lic_titulo item_lic_datapub text-nowrap">Publicação: 26/01/2017</td></tr><tr> <th class="item_lic_data_abertura text-nowrap" scope="row">Processo Administrativo Nº '+licitacao[i].numero_processo+'</th> <td class="item_lic_situacao">'+licitacao[i].situacao.nome+'</td> </tr><tr><th style="border-right: 2px solid #666;" class="item_lic_data_abertura text-nowrap" scope="row">Local</th> <td>'+licitacao[i].local+'</td></tr><tr><td class="alerta" colspan="4"><a>'+licitacao[i].comunicado+'</a></td></tr><tr><th style="border-right: 2px solid #666;" class="item_lic_data_abertura text-nowrap" scope="row">Objeto</th><td colspan="4">'+licitacao[i].objeto+'</td></tr><tr> <th class="item_lic_titulo text-nowrap" scope="row"> DOCUMENTOS </th> <td class="item_lic_titulo item_lic_datapub text-nowrap"></td></tr>';
                        //aqui será o js do pdf :D
                        if(licitacao[i].documentos){
                            for(var j = 0;j<licitacao[i].documentos.length;j++){
                                html+='<tr><th style="border-right: 2px solid #666;" class="alerta text-nowrap" scope="row"><a target="_blank" href="/arquivos/'+licitacao[i].documentos[j].url_pdf+'"><span class="fa fa-file-pdf-o iconpdf"> </span> '+licitacao[i].documentos[j].titulo+'</a></th><td colspan="4">Tamanho:  215 KB | Publicado: 16/01/2017</td></tr>';

                            }
                        }
                        html+='</tbody></table></div></div></article>';
                    }
                    jQuery('#licitacao').append(html);

                }else{

                    jQuery('#licitacao').append('<h1 class="text-error-search">Nenhum resultado foi encontrado!</h1>');
                    jQuery('.pagination').hide();
                }

                status = 0;
            }

        });
    }
}

function mostra_paginacao(page_inicial, last_page){

    jQuery('.pagination').bootpag({
        total: last_page,
        page: page_inicial,
        maxVisible: 6

    }).on("page", function(event, page){
        event.preventDefault();
        search(page,1);
    });
}