<?php

namespace Revolut\Payment\Gateway\Validator;

class ResponseValidator extends GeneralResponseValidator
{
    
    /**
     * @return array
     */
    protected function getResponseValidators()
    {
        return array_merge(
            parent::getResponseValidators(),
            [
                
            ]
        );
    }
}
