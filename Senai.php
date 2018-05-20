<?php 
//caminhão
$tamanhoCaminhao = 14*2.6*1.5;//m
$pesoCaminhao = 6000;//Kg
$tanque = 150;//L
$consumoDoCombustivel = 2.5;// K/L
$quantiaDeKmAteParada = $tanque/$consumoDoCombustivel;
//echo $quantiaDeKmAteParada;
//echo '<br>';


//combustivel
$precoCombustivel = 3.15;//Reais cada litro
$precoParaEncherOTanque = $tanque*$precoCombustivel;

//Caixa
$tamanhoCaixa = 0.6*0.4*0.25;//m
$pesoCaixa = 0.4;//KG
$quantidadeDeEmbalagemcaixa = 60;//un


//Tempo 
$abastecimento = 30;//min
$descarga = 25;//min
$carregamentoDaCarga = 50;//min
$descargaCadaEmbalagem = 30;//s
$intervaloParaDescaco = 60;//min
$tempoDescargaMurano = 234*30/60;//min
$tempoDescargaTopazia = 328*30/60;//min
$tempoDescargaSafira = 25;
$tempoDescargaEsmeralda = 25;
$tempoDescargaBrilhantes = 144*30/60;
$tempoViagemMuranoTopaziaSafirahome = 144;//min 2h 10
$tempoBrutoDia = ((60*18)+30)-(8*60);
$descontoDeTempo1 = ($abastecimento*2)+$carregamentoDaCarga+$intervaloParaDescaco+$tempoDescargaTopazia+$tempoDescargaMurano+$tempoViagemMuranoTopaziaSafirahome+$tempoDescargaSafira;
$tempoDia1total =  $tempoBrutoDia-$descontoDeTempo1;
echo "<h1>Dia1</h1>";
echo "Tempo sobrando depois de ir há MuranoLTDA,TopázioLTDA e SafiraLTDA: ".$tempoDia1total."min";
//Total de minutos que sobraram; 2minutos.
$gasolinaSobrou = (60*3)-130; echo "<br>Gasolina que sobrou dia1: " . $gasolinaSobrou."l";
echo "<br>Quantia de Km possiveis até acabar a gasolina: ". $gasolinaSobrou/$consumoDoCombustivel. "Km/l";

echo "<h1>Dia2</h1>";
$tempoDeViajem = 60+13;//min
$descontoDeTempo2 = $tempoDeViajem + $tempoDescargaBrilhantes + $tempoDescargaEsmeralda + $abastecimento;
$tempoDia2Total = $tempoBrutoDia - $descontoDeTempo2;
echo "Tempo sobrando Depois de ir na BrilhanteLTDA e EsmeraldaLTDA: $tempoDia2Total Min<br>";
$gasolinaSobrou2 = ($gasolinaSobrou/$consumoDoCombustivel)+60-49.8;
echo "Gasolina sobrando: ". $gasolinaSobrou2 ;

//carregou as 910
$cabeDentroDocaminhao = $tamanhoCaminhao/$tamanhoCaixa;

//echo $cabeDentroDocaminhao;//910 caixas


echo "<h1>Custo:</h1>". "A viajem custará exatamente 3 abastecimento no valor de $precoParaEncherOTanque: R$".$precoParaEncherOTanque*3;
echo "<p>Isso mais os custos de manutenção do caminhão o pagamento de vale refeição e salário aos empregados e claro os encargos.</p>";


 ?>