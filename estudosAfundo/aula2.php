<?php

interface pagamentoInterface
{
    public function pagar(string $valor): bool;
    public function retornarDadosPagamento(): array;
}

abstract class metodoDePagamento implements pagamentoInterface
{
    public $nome;
    public $endoiint;
    private $chaveDeApi;
}

class PaypalService extends metodoDePagamento implements pagamentoInterface
{
    public $endpoint = "https://api.pageseguro.com";
    public $nome = "Paypal";

    public function pagar(string $valor): bool
    {
        //requisicao baseada na endpoint
        //usando a chave de API

        return true;
    }

    public function retornarDadosPagamento(): array
    {
        return [
            'transaction_id' => 123,
            'amount' => '80.99'
        ];
    }
}

class pagSeguroService extends metodoDePagamento implements pagamentoInterface
{
    public $endpoint = "https://api.pageseguro.com";
    public $nome = "Pagseguro";

    public function pagar(string $valor): bool
    {
        // requisicao baseada na endpoint
        //usanda a chave de API
        return true;
    }

    public function retornarDadosPagamento(): array
    {
        return [
            'transaction_id' => 123,
            'amount' => '80.99'
        ];
    }
}
