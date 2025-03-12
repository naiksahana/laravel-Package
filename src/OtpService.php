<?php

namespace Sahana\OtpGenerator;

class OtpService
{
    public static function generateOtp($length = 6)
    {
        return rand(pow(10, $length - 1), pow(10, $length) - 1);
    }

    public static function verifyOtp($inputOtp, $storedOtp)
    {
        return $inputOtp === $storedOtp;
    }
}
