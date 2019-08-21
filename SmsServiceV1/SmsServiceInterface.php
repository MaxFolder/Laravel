<?php

namespace SmsServiceV1;

interface SmsServiceInterface {
    /**
     * @param $phoneNumber
     * @param $smsText
     * @return mixed
     */
    public function send($phoneNumber, $smsText);
    public function smsStatus($id);
}
