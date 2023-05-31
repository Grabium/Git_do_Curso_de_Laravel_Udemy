<h1>Sintaxe blade</h1>
<br/>
<a href="{{ route('instrucao') }}">Instruções</a><br/><br/>
{{--@dd($lista)--}}

@for ($i = 0; $i<count($lista); $i++)
    <div>
    Nome: {{ $lista[$i]['nome']}} <br/>
    Idade: {{ $lista[$i]['idade']}} <br/>
    @isset($lista[$i]['cpf'])
        CPF: {{ $lista[$i]['cpf']}}
    @endisset
    @unless($lista[$i]['cpf'])
        ___CPF Ainda não registrado!!!
    @endunless
    </div>
    <br/>
@endfor


