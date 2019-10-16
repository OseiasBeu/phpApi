<html>
 <head>
 <title>Método Geral Comunicação API - GET e POST</title>
 </head>
 <body>
 <?php
 //Faz o include da classe Comunicacao
 include 'comunicacao.php';
 
 //Cria um novo objeto da classe
 $Comunicacao = new Comunicacao;
 
 //Define os dados de cabeçalho da requisição
 $cabecalho = array(
 'Content-Type: application/json',
 'X-AUTH-TOKEN: @@@@@@@@@@@@@@@@@@@'
 );
 
 //Configura o conteúdo a ser enviado
 $conteudo = '{"NFe": { "infNFe":{ "versao":"3.10", "ide":{ "cUF":"43", "natOp":"VENDA", "indPag":"0", "mod":"65", "serie":"0", "nNF":"8636", "dhEmi":"2018-03-01T15:29:09-03:00", "tpNF":"1", "idDest":"1", "cMunFG":"4303509", "tpImp":"4", "tpEmis":"1", "tpAmb":"2", "finNFe":"1", "indFinal":"1", "indPres":"1", "procEmi":"0", "verProc":"1.0.0.0" }, "emit":{ "CNPJ":"07364617000135", "xNome":"NF-E EMITIDA EM AMBIENTE DE HOMOLOGACAO - SEM VALOR FISCAL", "enderEmit":{ "xLgr":"AV ANTONIO DURO", "nro":"100", "xBairro":"CENTRO", "cMun":"4303509", "xMun":"CAMAQUA", "UF":"RS", "CEP":"96180000", "cPais":"1058", "xPais":"BRASIL" }, "IE":"0170108708", "CRT":"3" }, "det":[ { "nItem":1, "prod":{ "cProd":"2", "cEAN":"7897348203810", "xProd":"NOTA FISCAL EMITIDA EM AMBIENTE DE HOMOLOGACAO - SEM VALOR FISCAL", "NCM":"30023010", "CFOP":"5102", "uCom":"UN", "qCom":"1", "vUnCom":"132.00", "vProd":"132.00", "cEANTrib":"7897348203810", "uTrib":"UN", "qTrib":"1", "vUnTrib":"132.00", "indTot":"1" }, "imposto":{ "ICMS":{ "ICMS00":{ "orig":"0", "CST":"00", "modBC":"3", "vBC":"132.00", "pICMS":"18.00", "vICMS":"23.76" } }, "PIS":{ "PISAliq":{ "CST":"01", "vBC":"132.00", "pPIS":"0.00", "vPIS":"0.00" } }, "COFINS":{ "COFINSAliq":{ "CST":"01", "vBC":"132.00", "pCOFINS":"0.00", "vCOFINS":"0.00" } } } } ], "total":{ "ICMSTot":{ "vBC":"132.00", "vICMS":"23.76", "vBCST":"0.00", "vST":"0.00", "vProd":"132.00", "vFrete":"0.00", "vSeg":"0.00", "vDesc":"0.00", "vII":"0.00", "vIPI":"0.00", "vPIS":"0.00", "vCOFINS":"0.00", "vOutro":"0.00", "vNF":"132.00", "vICMSDeson":"0.00" } }, "transp":{ "modFrete":"9" }, "pag":{ "tPag":"01", "vPag":"132.00" }, "infAdic":{ "infCpl":"NOTA FISCAL EMITIDA EM AMBIENTE DE HOMOLOGACAO - SEM VALOR FISCAL" } } }}';
 
 //Define a URL para consumo do serviço
 $url = 'https://nfce.ns.eti.br/v1/nfce/issue';
 
 //Tipo de requisição: POST
 $tpRequisicao = 'GET';
 
 //Faz a chamada da função, passando os parâmetros
 $resposta = $Comunicacao->enviaConteudoParaAPI($cabecalho, $conteudo, $url, $tpRequisicao);
 
 //Exibe a resposta da API
 echo $resposta;
 ?>
 </body>
</html>