<?php

// src/Service/SimXmlService.php

namespace CommonGateway\SimXmlBundle\Service;

class SimXmlService
{

    /*
     * Returns a welcoming string
     * 
     * @return array 
     */
    public function simXmlHandler(array $data, array $configuration): array
    {
        return ['response' => 'Hello. Your SimXmlBundle works'];
    }
}
