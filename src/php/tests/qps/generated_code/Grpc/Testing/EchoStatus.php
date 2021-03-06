<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: src/proto/grpc/testing/messages.proto

namespace Grpc\Testing;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * A protobuf representation for grpc status. This is used by test
 * clients to specify a status that the server should attempt to return.
 * </pre>
 *
 * Protobuf type <code>grpc.testing.EchoStatus</code>
 */
class EchoStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 code = 1;</code>
     */
    private $code = 0;
    /**
     * <code>string message = 2;</code>
     */
    private $message = '';

    public function __construct() {
        \GPBMetadata\Src\Proto\Grpc\Testing\Messages::initOnce();
        parent::__construct();
    }

    /**
     * <code>int32 code = 1;</code>
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * <code>int32 code = 1;</code>
     */
    public function setCode($var)
    {
        GPBUtil::checkInt32($var);
        $this->code = $var;
    }

    /**
     * <code>string message = 2;</code>
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * <code>string message = 2;</code>
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;
    }

}

