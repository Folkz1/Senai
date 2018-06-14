<?php 
//caminhão
$tamanhoCaminhao = 14*2.6*1.5;//m
$pesoCaminhao = 6000;//Kg
$tanque = 150;//L
$consumoDoCombustivel = 2.5;// K/L
$quantiaDeKmAteParada = $tanque*$consumoDoCombustivel;
//echo $quantiaDeKmAteParada;
//echo '<br>';




//combustivel
$precoCombustivel = 3.15;//Reais cada litro
$precoParaEncherOTanque = $tanque*$precoCombustivel;

//Caixa
$tamanhoCaixa = 0.6*0.4*0.25;//m
$pesoCaixa = 0.4;//KG
$quantidadeDeEmbalagemcaixa = 60;//un

//carregou as 910
$cabeDentroDocaminhao = $tamanhoCaminhao/$tamanhoCaixa;
//echo $cabeDentroDocaminhao;//910 caixas

//Distância 
$distanciaViagemMuranoTopaziaSafirahome = 130; //Km
$distanciaBrilhanteEsmeraldaHome = 49.8; //Km

//Tempo 
$abastecimento = 30;//min
$descarga = 25;//min
$carregamentoDaCarga = 50;//min
$descargaCadaEmbalagem = 30;//s
$intervaloParaDescaco = 60;//min
$tempoDescargaMurano = 234*$descargaCadaEmbalagem/60;//min
$tempoDescargaTopazia = 328*$descargaCadaEmbalagem/60;//min
$tempoDescargaSafira = 25;//min
$tempoDescargaEsmeralda = 25;//min
$tempoDescargaBrilhantes = 144*30/60;//min
$tempoViagemMuranoTopaziaSafirahome = 145;//min 2h 10
$tempoBrutoDia =(18-8)*60+30-60; 
$descontoDeTempo1 = $carregamentoDaCarga+$intervaloParaDescaco+$tempoDescargaTopazia+$tempoDescargaMurano+$tempoViagemMuranoTopaziaSafirahome+$tempoDescargaSafira;
$tempoDia1total =  $tempoBrutoDia-$descontoDeTempo1;
echo "<h1>Informações Principais</h1>";
echo "<ul>
		<li>Quantia de caixas que cabem no caminhão: $cabeDentroDocaminhao un</li>
		<li>Autonomia de kilometros até a parada: $quantiaDeKmAteParada Km</li>
		<li>Tempo bruto para o trabalho diário: $tempoBrutoDia min</li>
		<li></li>

	</ul>";
echo "<h1>Dia1</h1>";
echo "Tempo gasto com paradas,descargas e descanço foi de ". ($descontoDeTempo1/60). "h e tempo sobrando depois do percurso ". $tempoDia1total. "min<br>";
echo "Kilometragem Percorrida foi de $distanciaViagemMuranoTopaziaSafirahome Km, assim, sobrou de autonomia para o veículo ". ($quantiaDeKmAteParada-$distanciaViagemMuranoTopaziaSafirahome). " Km";

echo "<h1>Dia2</h1>";
$tempoBrilhanteEsmeraldaHome = 73;//min
$descontoDeTempo2 = $tempoBrilhanteEsmeraldaHome + $tempoDescargaBrilhantes + $tempoDescargaEsmeralda;
$tempoDia2Total = $tempoBrutoDia - $descontoDeTempo2;
echo "Tempo gasto com paradas,descargas e descanço foi de ". ($descontoDeTempo2/60). "h e tempo sobrando depois do percurso ". $tempoDia2Total. "min<br>";
echo "Kilometragem Percorrida foi de $distanciaBrilhanteEsmeraldaHome Km, assim, sobrou de autonomia para o veículo ". (($quantiaDeKmAteParada-$distanciaViagemMuranoTopaziaSafirahome)-$distanciaBrilhanteEsmeraldaHome). " Km";






echo "<h1>Custos</h1>". "A viajem custará apenas o salário do motorista e possiveis avarias ao caminhão, já que com o tanque cheio o caminhão fará $quantiaDeKmAteParada . E adicionará os encargos trabalhistas"


 ?>