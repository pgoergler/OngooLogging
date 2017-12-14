<?php

namespace Logging\Appenders;

/**
 * Description of ErrorAppender
 *
 * @author paul
 */
class ErrorAppender extends DefaultAppender
{

    protected function write($message)
    {
        error_log($message);
    }

}
