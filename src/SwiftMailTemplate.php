<?php

namespace PSCS\Mail\Swift\RendererInterface;

interface MailSwiftRenderer
{
    public function renderMail(array $data) : \Swift_Message;
}
