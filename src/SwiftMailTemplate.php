<?php

namespace Mail\Swift\RendererInterface;

interface SwiftMailTemplate
{
    public function renderMail(array $data) : \Swift_Message;
}
