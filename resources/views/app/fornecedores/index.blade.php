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
    if(empty($variavel)){} //retora true se a variável estiver vazia
    - ''
    - 0
    - 0.0
    - null
    - false
    - array()
    - $var
    */
@endphp
{{--@dd($fornecedores)--}}
{{-- @unless executa se o retorno for false --}}

@isset($fornecedores)
    {{--@for ($i = 0; isset($fornecedores[$i]); $i++)
        Fornecedor: {{ $fornecedores[$i]['nome']}}
        <br>
        Status: {{ $fornecedores[$i]['status'] }}
        <br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'Dado não preenchido'}}
        <br>
        Telefone: ({{ $fornecedores[$i]['ddd']  ?? 'Dado não informado'}}) {{ $fornecedores [$i] ['telefone'] ?? 'Dado não informado'}}
        @switch($fornecedores[$i]['ddd'])
            @case('11')
                <h3>São Paulo - SP</h3>
                @break
            @case('21')
                Rio de Janeiro - RJ
                @break
            @case('85')
                    Fortaleza - CE
                @break
            @default
                Não Informado
        @endswitch
        <hr>
    @endfor--}}

    {{--@isset($fornecedores[0]['cnpj'])
        CNPJ: {{ $fornecedores[0]['cnpj'] }}
        @empty($fornecedores[0]['cnpj'])
            -Vazio
        @endempty

    @endisset--}}

    @forelse ($fornecedores as $indice => $fornecedor)
        Iteração atual: {{ $loop->iteration }}
        Fornecedor: {{ $fornecedor['nome']}}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado não preenchido'}}
        <br>
        Telefone: ({{ $fornecedor['ddd']  ?? 'Dado não informado'}}) {{ $fornecedor  ['telefone'] ?? 'Dado não informado'}}
        @switch($fornecedor['ddd'])
            @case('11')
                <h3>São Paulo - SP</h3>
                @break
            @case('21')
                Rio de Janeiro - RJ
                @break
            @case('85')
                    Fortaleza - CE
                @break
            @default
                Não Informado
        @endswitch
        <hr>
        @if ($loop->first)
            Primeira iteração do loop
        @endif
        @if ($loop->last)
            Última iteração do loop
            <br>
            Total de registro: {{ $loop->count }}
        @endif
    @empty
        Não existem fornecedores cadastrados!!!

    @endforelse


@endisset


{{--@if(!($fornecedores[0]['status'] == 'S'))
    Fornecedor Inativo!
@endif
<br>
@unless ($fornecedores[0]['status'] == 'S')<!--se o retorno da condição for false-->
    Fornecedor Inativo!
@endunless--}}

