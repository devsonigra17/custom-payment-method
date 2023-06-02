<?php

namespace Dev\PaymentMethod\Model;

/**
 * Pay In Store payment method model
 */
class PaymentMethod extends \Magento\Payment\Model\Method\AbstractMethod
{

    /**
     * Payment code
     *
     * @var string
     */
    const METHOD_CODE = 'custompayment';
    protected $_code = self::METHOD_CODE;
}