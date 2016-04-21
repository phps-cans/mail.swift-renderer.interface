<?php

namespace TheCodingMachine\Mail;


interface SwiftMailGenerator
{
    public function getMail(array $data) : \Swift_Message;
}