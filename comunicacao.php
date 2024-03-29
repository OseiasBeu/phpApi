<?php
 class Comunicacao {
 public function enviaConteudoParaAPI($cabecalho = array(), $conteudoAEnviar, $url, $tpRequisicao) {
 try{
 //Inicializa cURL para uma URL.
 $ch = curl_init($url);
 //Marca que vai enviar por POST(1=SIM), caso tpRequisicao seja igual a "POST"
 if ($tpRequisicao == 'POST') {
 curl_setopt($ch, CURLOPT_POST, 1);
 
 //Passa o conteúdo para o campo de envio por POST
 curl_setopt($ch, CURLOPT_POSTFIELDS, $conteudoAEnviar);
 }
 //Se foi passado como parâmetro, adiciona o cabeçalho à requisição
 if (!empty($cabecalho)) {
 curl_setopt($ch, CURLOPT_HTTPHEADER, $cabecalho);
 }
 //Marca que vai receber string
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 /*
 Caso você não receba retorno da API, pode estar com problema de SSL.
 Remova o comentário da linha abaixo para desabilitar a verificação.
 */
 //curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 //Inicia a conexão
 $resposta = curl_exec($ch);
 //Fecha a conexão
 curl_close($ch);
 }catch(Exception $e){
 return $e->getMessage();
 }
 return $resposta;
 }
 }
?>