<?php

namespace Revolut\Api\Types;

class SequenceType
{
    /**
     * Sequence types.
     *
     * @see https://docs.revolut.com/guides/recurring
     */
    public const SEQUENCETYPE_ONEOFF = "oneoff";
    public const SEQUENCETYPE_FIRST = "first";
    public const SEQUENCETYPE_RECURRING = "recurring";
}
