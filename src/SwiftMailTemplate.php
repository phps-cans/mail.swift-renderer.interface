<?php

namespace TheCodingMachine\Mail;

interface SwiftMailTemplate
{
    public function renderMail(array $data) : \Swift_Message;
}
