<?php
/**
 * Response
 *
 * PHP version 5
 *
 * @category Class
 * @package  Exatia\GraphhopperRouteOptimizationClient
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Route Optimization API
 *
 * Our Route Optimization API solves the so called vehicle routing problem fast. It calculates an optimal tour for a set of vehicles, services and constraints
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Exatia\GraphhopperRouteOptimizationClient\Model;

use \ArrayAccess;

/**
 * Response Class Doc Comment
 *
 * @category    Class
 * @package     Exatia\GraphhopperRouteOptimizationClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Response implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'job_id' => 'string',
        'status' => 'string',
        'waiting_in_queue' => 'int',
        'processing_time' => 'int',
        'solution' => '\Exatia\GraphhopperRouteOptimizationClient\Model\Solution'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'job_id' => 'job_id',
        'status' => 'status',
        'waiting_in_queue' => 'waiting_in_queue',
        'processing_time' => 'processing_time',
        'solution' => 'solution'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'job_id' => 'setJobId',
        'status' => 'setStatus',
        'waiting_in_queue' => 'setWaitingInQueue',
        'processing_time' => 'setProcessingTime',
        'solution' => 'setSolution'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'job_id' => 'getJobId',
        'status' => 'getStatus',
        'waiting_in_queue' => 'getWaitingInQueue',
        'processing_time' => 'getProcessingTime',
        'solution' => 'getSolution'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const STATUS_WAITING_IN_QUEUE = 'waiting_in_queue';
    const STATUS_PROCESSING = 'processing';
    const STATUS_FINISHED = 'finished';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_WAITING_IN_QUEUE,
            self::STATUS_PROCESSING,
            self::STATUS_FINISHED,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['job_id'] = isset($data['job_id']) ? $data['job_id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['waiting_in_queue'] = isset($data['waiting_in_queue']) ? $data['waiting_in_queue'] : null;
        $this->container['processing_time'] = isset($data['processing_time']) ? $data['processing_time'] : null;
        $this->container['solution'] = isset($data['solution']) ? $data['solution'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        $allowed_values = array("waiting_in_queue", "processing", "finished");
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status', must be one of #{allowed_values}.";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        $allowed_values = array("waiting_in_queue", "processing", "finished");
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets job_id
     * @return string
     */
    public function getJobId()
    {
        return $this->container['job_id'];
    }

    /**
     * Sets job_id
     * @param string $job_id unique identify of job - which you get when posting your request to the large problem solver
     * @return $this
     */
    public function setJobId($job_id)
    {
        $this->container['job_id'] = $job_id;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status indicates the current status of the job
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array('waiting_in_queue', 'processing', 'finished');
        if (!in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'waiting_in_queue', 'processing', 'finished'");
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets waiting_in_queue
     * @return int
     */
    public function getWaitingInQueue()
    {
        return $this->container['waiting_in_queue'];
    }

    /**
     * Sets waiting_in_queue
     * @param int $waiting_in_queue waiting time in ms
     * @return $this
     */
    public function setWaitingInQueue($waiting_in_queue)
    {
        $this->container['waiting_in_queue'] = $waiting_in_queue;

        return $this;
    }

    /**
     * Gets processing_time
     * @return int
     */
    public function getProcessingTime()
    {
        return $this->container['processing_time'];
    }

    /**
     * Sets processing_time
     * @param int $processing_time processing time in ms. if job is still waiting in queue, processing_time is 0
     * @return $this
     */
    public function setProcessingTime($processing_time)
    {
        $this->container['processing_time'] = $processing_time;

        return $this;
    }

    /**
     * Gets solution
     * @return \Exatia\GraphhopperRouteOptimizationClient\Model\Solution
     */
    public function getSolution()
    {
        return $this->container['solution'];
    }

    /**
     * Sets solution
     * @param \Exatia\GraphhopperRouteOptimizationClient\Model\Solution $solution the solution. only available if status field indicates finished
     * @return $this
     */
    public function setSolution($solution)
    {
        $this->container['solution'] = $solution;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset): mixed
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Exatia\GraphhopperRouteOptimizationClient\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Exatia\GraphhopperRouteOptimizationClient\ObjectSerializer::sanitizeForSerialization($this));
    }
}
