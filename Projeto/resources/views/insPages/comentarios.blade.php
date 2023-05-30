<h3>Strings e comentários (veja o arquivo .blade) em php e blade</h3>
<a href="{{ route('instrucao') }}">Instruções</a></br>

{{'String com sintaxe blade com '}}<strong>{{'parêntesis duplo.'}}</strong></br></br>
<?php echo 'string com sintaxe php via: <strong><.?php..echo()..?.></strong></br></br>' ?>

{{-- Comentário con sintaxe blade --}}

@php
    //comentários de uma linha.
    /* 
    Comentário de 
    várias linhas
    */
    echo 'Strnig impressa via <strong>@.php...echo()...@.endphp.</strong>'; 
@endphp



<p>Blade trabalha com <strong>heranças de templates</strong>, além de ter uma sintaxe prória que roda em cima de php e html</p>
<p>Veja as possibilidades de comentários em arquivo .blade no próprio arquivo /insPages/comentario.blade.php</p>