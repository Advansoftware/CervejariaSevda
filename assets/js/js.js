var $doc = $('html, body');
var base_url =   window.location.protocol + "//" + window.location.host + "/git/CervejariaSevda/";
$(document).ready(function() {
        $("#ajaxPagination a").click(function(e){
            e.preventDefault();
            var href =$(this).attr('href');
            $("#RegistrosPagina").load(href);
        });
        $("#menuFixo").scrollTop()
});

$('.scrollSuave').click(function() {
	$doc.animate({
		scrollTop: $($.attr(this, 'href')).offset().top
	}, 500);
	return false;
});
$(".page-item a").attr('class','page-link');
function envia_visita(){

    var entidade = $("#entidade").val();
    var nome = $("#nome").val();
    var data = $("#data").val();
    var ob = $("#palavra").val();
    var fd = new FormData();
    fd.append('entidade', entidade);
    fd.append('data', data);
    fd.append('nome', nome);
    fd.append('ob', ob);

    if (nome != '' && entidade != '' && data != '') {
        $.ajax({
            method: "POST",
            url: base_url+"/visitacao/whatsapp",
            dataType: 'text',
            cache: false,
            contentType: false,
            processData: false,
            data: fd,
            type: 'post'
        }).done(function(html) {
            window.open("https://api.whatsapp.com/send?phone=5535991220077&text="+html, "_blank");
        });
    } else {
        alert("Falta Preencher alguns dados");
    }
}
function envia_email(){
    var nome = $("#nome").val();
    var email = $("#email").val();
    var assunto = $("#assunto").val();
    var ob = $("#palavra").val();
    var fd = new FormData();
    fd.append('email', email);
    fd.append('assunto', assunto);
    fd.append('nome', nome);
    fd.append('ob', ob);

    if (nome != '' && email != '' && ob != '' && assunto != '') {
        $.ajax({
            method: "POST",
            url: base_url+"/contato/envia_email",
            dataType: 'text',
            cache: false,
            contentType: false,
            processData: false,
            data: fd,
            type: 'post'
        }).done(function(html) {
           console.table(html);
        });
    } else {
        alert("Falta Preencher alguns dados");
    }
}
function idades(ano_aniversario, mes_aniversario, dia_aniversario) {
    var d = new Date,
        ano_atual = d.getFullYear(),
        mes_atual = d.getMonth() + 1,
        dia_atual = d.getDate(),
        ano_aniversario = +ano_aniversario,
        mes_aniversario = +mes_aniversario,
        dia_aniversario = +dia_aniversario,
        quantos_anos = ano_atual - ano_aniversario;
    if (mes_atual < mes_aniversario || mes_atual == mes_aniversario && dia_atual < dia_aniversario) {
        quantos_anos--;
    }
    return quantos_anos < 0 ? 0 : quantos_anos;
}
function validaIdade(idade){
    if(idade>= 18){
        var fd = new FormData();
        fd.append('getsIdade', idade);
            $.ajax({
                method: "POST",
                url: base_url+"/idade/pegaidade",
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false,
                data: fd,
                type: 'post'
            }).done(function(html) {
                window.location.href=base_url+"home";
            });
    }
    else{
        $("#texto").html("Este site é recomendado para maiores de 18 anos. <br/> AGRADECEMOS A SUA VISITA!");
    }
}
$(document).on("scroll",function(){
    if($(document).scrollTop()>100){ //QUANDO O SCROLL PASSAR DOS 100px DO TOPO
        $("#logo").removeClass("large").addClass("small"); //TROCA P CLASSE MENOR
    } else{
        $("#logo").removeClass("small").addClass("large"); //VOLTA P MENU GRANDE ORIGINAL
    }
});