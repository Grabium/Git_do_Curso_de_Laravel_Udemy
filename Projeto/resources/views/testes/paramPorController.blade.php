<h1>Recebimento de parâmetros direto de Controller</h1>

Parâmetros exibidos via html</br>
P1 = {{ $acont }}</br>
P2 = {{ $bcont }}</br>
</br>
</br>

<?php
echo "Parâmetros exibidos via php:</br>
P1 = $acont </br>
P2 = $bcont";
?>


@if($nota >= 6)
    <h4>Nota recebida direta do controller ParamPorContr_testContr: {{$nota}}. Aprovado</h4>
@else
    <h4>Nota recebida direta do controller ParamPorContr_testContr: {{$nota}}. Rerovado</h4>
@endif


@php
    echo ('teste');
    print_r($sagradaFamilia);
    echo "</br></br>Chefe: {$sagradaFamilia[2]}.</br>Mãe: {$sagradaFamilia[0]}.</br>Salvador: {$sagradaFamilia[1]}.";
@endphp

<br>
<h4>Impressão de um índice de Array:</h4>

@dd($sagradaFamilia[3])



