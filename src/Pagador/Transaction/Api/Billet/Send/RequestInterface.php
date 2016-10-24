<?php

namespace Webjump\Braspag\Pagador\Transaction\Api\Billet\Send;


interface RequestInterface
{
    public function getMerchantId();

    public function getMerchantKey();

    public function getMerchantOrderId();

    public function getCustomerName();

    public function getCustomerIdentity();

    public function getCustomerIdentityType();

    public function getCustomerEmail();

    public function getCustomerBirthDate();

    public function getCustomerAddressStreet();

    public function getCustomerAddressNumber();

    public function getCustomerAddressComplement();

    public function getCustomerAddressZipCode();

    public function getCustomerAddressDistrict();

    public function getCustomerAddressCity();

    public function getCustomerAddressState();

    public function getCustomerAddressCountry();

    public function getCustomerDeliveryAddressStreet();

    public function getCustomerDeliveryAddressNumber();

    public function getCustomerDeliveryAddressComplement();

    public function getCustomerDeliveryAddressZipCode();

    public function getCustomerDeliveryAddressDistrict();

    public function getCustomerDeliveryAddressCity();

    public function getCustomerDeliveryAddressState();

    public function getCustomerDeliveryAddressCountry();

    public function getPaymentType();

    public function getPaymentAmount();

    public function getPaymentProvider();

    public function getPaymentBoletoNumber();

    public function getPaymentAssignor();

    public function getPaymentDemonstrative();

    public function getPaymentExpirationDate();

    public function getPaymentIdentification();

    public function getPaymentInstructions();
}