$(function(){
  $('#grava').submit(function(){
    var cd_merc = $('#grava input[name=cd_mercadoria]').val();
    var tp_merc = $('#grava input[name=tp_mercadoria]').val();
    var qtd = $('#grava input[name=qtd]').val();
    var preco = $('#grava input[name=preco]').val();
    var tp_neg = $('#grava input[name=tp_negocio]').val();
    var nm_merc = $('#grava input[name=nm_mercadoria]').val();
    if (cd_merc!='' && tp_merc!='' && qtd!='' && preco!='' && tp_neg!='' && nm_merc)
    {
      $('#grava input[type=text]').each(function(){
      })
      $.post('grava.php', $('#grava').serialize(), function(resposta){
        $('#grava').prepend(resposta).find('p'). fadeOut("fast", function(){$(this).remove();});
        $('#grava input[type=text]');
        $('form')[0].reset();

      })
      return false;
    } 
    else {
      alert('Complete todos os campos');  
      return false;
    }
  })

})