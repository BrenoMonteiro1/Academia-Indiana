<?php

/*3- Termine o script abaixo. A variável $preco contém o valor da venda. Acrescente 12% ao
preço do produto, divida em 10 parcelas e mostre na tela o valor de cada parcela e o valor total
da compra.
<?php
$preco = 320;*/

$preco = 320;
$preco_acrescimo = $preco * 1.12;
$preco_parcela = $preco_acrescimo /10;

echo "valor de cada parcela é: $preco_parcela e valor total é: $preco_acrescimo"

?>