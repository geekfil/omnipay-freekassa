<?php
/**
 * FreeKassa driver for Omnipay PHP payment library
 *
 * @link      https://github.com/hiqdev/omnipay-freekassa
 * @package   omnipay-freekassa
 * @license   MIT
 * @copyright Copyright (c) 2017, HiQDev (http://hiqdev.com/)
 */

namespace Omnipay\FreeKassa\Message;

use Money\Currency;

class PurchaseRequest extends AbstractRequest
{
    public function getData()
    {
        $this->validate(
            'purse', 'secretKey',
            'amount', 'currency', 'transactionId'
        );

        if (!empty($this->getPs())){
            $i = $this->getPs();
        }else{
            $i = strtolower($this->getCurrency());
        }

        return array_filter([
            'm' => $this->getPurse(),
            'oa' => $this->getAmount(),
            'o' => $this->getTransactionId(),
            'i' => $i,
            's' => $this->calculateSignature(),
            'lang' => $this->getLanguage(),
            'em' => $this->getEmail()
        ]);
    }

    public function calculateSignature()
    {
        return md5(implode(':', [
            $this->getPurse(),
            $this->getAmount(),
            $this->getSecretKey(),
            $this->getTransactionId()
        ]));
    }

    public function sendData($data)
    {
        return $this->response = new PurchaseResponse($this, $data);
    }
}
