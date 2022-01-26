<?php
$dado = $_GET['hash'];
$user = $_COOKIE['e41l'];

require_once('payments/moip-add.php');

$customer = $moip->customers()->setOwnId(uniqid())
    ->setFullname('Fulano de Tal')
    ->setEmail('fulano@email.com')
    ->setBirthDate('1988-12-30')
    ->setTaxDocument('22222222222')
    ->setPhone(11, 66778899)
    ->addAddress('BILLING',
        'Rua de teste', 123,
        'Bairro', 'Sao Paulo', 'SP',
        '01234567', 8)
    ->addAddress('SHIPPING',
                'Rua de teste do SHIPPING', 123,
                'Bairro do SHIPPING', 'Sao Paulo', 'SP',
                '01234567', 8)
    ->create();


    $order = $moip->orders()->setOwnId(uniqid())
    ->addItem("OCTA ATOMUS",1, "ATOMUS - PERSONALIZADO", 699000)
    ->setShippingAmount(3000)->setAddition(0)->setDiscount(0)
    ->setCustomer($customer)
    ->create();

$payment = $order->payments()
    ->setCreditCardHash($dado)
    ->setInstallmentCount(1)
    ->setStatementDescriptor('teste de pag')
    ->execute();
print_r($payment);


?>