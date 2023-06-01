<h1>Sintaxe blade</h1>
<br/>
<a href="{{ route('instrucao') }}">Instruções</a><br/><br/>
{{--@dd($lista)--}}

@for ($i = 0; $i<count($lista); $i++)
    <div>
    Nome: {{ $lista[$i]['nome']}}.<br/>
    Idade: {{ $lista[$i]['idade']}}. <br/>
    @isset($lista[$i]['cpf']) {{-- retorna "true" se estiver setado (setado é existir) --}}
        CPF: {{ $lista[$i]['cpf']}} <br/>
        Documentação completa. 
    @endisset
                    {{--@unless($lista[$i]['cpf'])  retorna "true" se NÃO estiver setado 
                    CPF Ainda sem valor registrado!!!
                    @endunless--}}  

        {{-- @emty  @endempty
        Retorna "true" se estiver VAZIO. E considera vazio o valores:
        '', 0, 0.0, '0', null, false, array() <array vazio>, $var <variável sem atribuição> --}}
    @empty ($lista[$i]['cpf'])
        
        Atenção:
        <?php
            echo ($lista[$i]['idade']>=18)?$lista[$i]['nome'].' já possui '.$lista[$i]['idade'].' anos. 
            Registro de CPF é obrigatório e tardio.':
            (($lista[$i]['idade']>=5)?'Com '.$lista[$i]['idade'].' anos, '.$lista[$i]['nome'].' já pode ser cadastrado(a)':
            'Relaxe. '.$lista[$i]['nome'].' possui apenas '.$lista[$i]['idade'].' anos.');
                //acima, foi incluído (encadeado) um oerador ternário dentro do comando do negativo do anterior.
                //(expressao) ? (comando para true) : ((expressao) ? (comando para true) : (comando para false));
        ?>
        
    @endempty
    <br/>
    {{-- ??  
    O operador de condicional com valor default (??):
    testa a variável dentro do parêntesis duplo.
    se estiver setado (isset == true), ele a emprime.
    SENÃO (??) será impresso o novo foco.
    --}}
    
    {{ $lista[$i]['nome'] }} é {{ $lista[$i]['job'] ?? ' desocupado(a)'}}.<br/>

    

    
    
    
    </div>
    <br/>
@endfor



