<h3>Fornecedores</h3>
{{-- Fica o comentário que será descartado pelo interpretador do blade --}}
{{--@if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fonecedores) > 10)
    <h3>Existem vários fonecedores cadastrados</h3>
@else
    <h3>Ainda não existem fornecedores cadastrados</h3>
@endif--}}
@php
    /*
    if(!<condicional>){} //enquanto executa se for true
    if(isset($variavel)){}//retorna true se a variável estiver definida
    */
@endphp
{{--@dd($fornecedores)--}}
{{-- @unless executa se o retorno for false --}}

@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome']}}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    @isset($fornecedores[1]['cnpj'])
        CNPJ: {{ $fornecedores[1]['cnpj'] }}
    @endisset
@endisset


{{--@if(!($fornecedores[0]['status'] == 'S'))
    Fornecedor Inativo!
@endif
<br>
@unless ($fornecedores[0]['status'] == 'S')<!--se o retorno da condição for false-->
    Fornecedor Inativo!
@endunless--}}

