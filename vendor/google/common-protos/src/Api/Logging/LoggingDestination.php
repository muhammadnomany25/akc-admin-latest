<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/logging.proto

namespace Google\Api\Logging;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration of a specific logging destination (the producer project
 * or the consumer project).
 *
 * Generated from protobuf message <code>google.api.Logging.LoggingDestination</code>
 */
class LoggingDestination extends \Google\Protobuf\Internal\Message
{
    /**
     * The monitored resource type. The type must be defined in the
     * [Service.monitored_resources][google.api.Service.monitored_resources]
     * section.
     *
     * Generated from protobuf field <code>string monitored_resource = 3;</code>
     */
    protected $monitored_resource = '';
    /**
     * Names of the logs to be sent to this destination. Each name must
     * be defined in the [Service.logs][google.api.Service.logs] section. If the
     * log name is not a domain scoped name, it will be automatically prefixed
     * with the service name followed by "/".
     *
     * Generated from protobuf field <code>repeated string logs = 1;</code>
     */
    private $logs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $monitored_resource
     *           The monitored resource type. The type must be defined in the
     *           [Service.monitored_resources][google.api.Service.monitored_resources]
     *           section.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $logs
     *           Names of the logs to be sent to this destination. Each name must
     *           be defined in the [Service.logs][google.api.Service.logs] section. If the
     *           log name is not a domain scoped name, it will be automatically prefixed
     *           with the service name followed by "/".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Logging::initOnce();
        parent::__construct($data);
    }

    /**
     * The monitored resource type. The type must be defined in the
     * [Service.monitored_resources][google.api.Service.monitored_resources]
     * section.
     *
     * Generated from protobuf field <code>string monitored_resource = 3;</code>
     * @return string
     */
    public function getMonitoredResource()
    {
        return $this->monitored_resource;
    }

    /**
     * The monitored resource type. The type must be defined in the
     * [Service.monitored_resources][google.api.Service.monitored_resources]
     * section.
     *
     * Generated from protobuf field <code>string monitored_resource = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setMonitoredResource($var)
    {
        GPBUtil::checkString($var, True);
        $this->monitored_resource = $var;

        return $this;
    }

    /**
     * Names of the logs to be sent to this destination. Each name must
     * be defined in the [Service.logs][google.api.Service.logs] section. If the
     * log name is not a domain scoped name, it will be automatically prefixed
     * with the service name followed by "/".
     *
     * Generated from protobuf field <code>repeated string logs = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLogs()
    {
        return $this->logs;
    }

    /**
     * Names of the logs to be sent to this destination. Each name must
     * be defined in the [Service.logs][google.api.Service.logs] section. If the
     * log name is not a domain scoped name, it will be automatically prefixed
     * with the service name followed by "/".
     *
     * Generated from protobuf field <code>repeated string logs = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLogs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->logs = $arr;

        return $this;
    }

}


