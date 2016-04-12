<?php
/**
 * Service
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
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Exatia\GraphhopperRouteOptimizationClient\Model;

use \ArrayAccess;
/**
 * Service Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Exatia\GraphhopperRouteOptimizationClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Service implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    static $swaggerModelName = 'Service';

    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'type' => 'string',
        'name' => 'string',
        'address' => '\Exatia\GraphhopperRouteOptimizationClient\Model\Address',
        'duration' => 'int',
        'time_windows' => '\Exatia\GraphhopperRouteOptimizationClient\Model\TimeWindow[]',
        'size' => 'int[]',
        'required_skills' => 'string[]',
        'allowed_vehicles' => 'string[]'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'type' => 'type',
        'name' => 'name',
        'address' => 'address',
        'duration' => 'duration',
        'time_windows' => 'time_windows',
        'size' => 'size',
        'required_skills' => 'required_skills',
        'allowed_vehicles' => 'allowed_vehicles'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'type' => 'setType',
        'name' => 'setName',
        'address' => 'setAddress',
        'duration' => 'setDuration',
        'time_windows' => 'setTimeWindows',
        'size' => 'setSize',
        'required_skills' => 'setRequiredSkills',
        'allowed_vehicles' => 'setAllowedVehicles'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'type' => 'getType',
        'name' => 'getName',
        'address' => 'getAddress',
        'duration' => 'getDuration',
        'time_windows' => 'getTimeWindows',
        'size' => 'getSize',
        'required_skills' => 'getRequiredSkills',
        'allowed_vehicles' => 'getAllowedVehicles'
    );
  
    static function getters() {
        return self::$getters;
    }

    /**
      * $id Unique identifier of service
      * @var string
      */
    protected $id;
    /**
      * $type type of service
      * @var string
      */
    protected $type;
    /**
      * $name name of service
      * @var string
      */
    protected $name;
    /**
      * $address 
      * @var \Exatia\GraphhopperRouteOptimizationClient\Model\Address
      */
    protected $address;
    /**
      * $duration duration of service, i.e. time in ms the corresponding activity takes
      * @var int
      */
    protected $duration;
    /**
      * $time_windows array of time windows. currently, only a single time window is allowed
      * @var \Exatia\GraphhopperRouteOptimizationClient\Model\TimeWindow[]
      */
    protected $time_windows;
    /**
      * $size array of capacity dimensions
      * @var int[]
      */
    protected $size;
    /**
      * $required_skills array of required skills
      * @var string[]
      */
    protected $required_skills;
    /**
      * $allowed_vehicles array of allowed vehicle ids
      * @var string[]
      */
    protected $allowed_vehicles;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        
        if ($data != null) {
            $this->id = $data["id"];
            $this->type = $data["type"];
            $this->name = $data["name"];
            $this->address = $data["address"];
            $this->duration = $data["duration"];
            $this->time_windows = $data["time_windows"];
            $this->size = $data["size"];
            $this->required_skills = $data["required_skills"];
            $this->allowed_vehicles = $data["allowed_vehicles"];
        }
    }
    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
  
    /**
     * Sets id
     * @param string $id Unique identifier of service
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
  
    /**
     * Sets type
     * @param string $type type of service
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array("service", "pickup", "delivery");
        if (!in_array($type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'service', 'pickup', 'delivery'");
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
  
    /**
     * Sets name
     * @param string $name name of service
     * @return $this
     */
    public function setName($name)
    {
        
        $this->name = $name;
        return $this;
    }
    /**
     * Gets address
     * @return \Exatia\GraphhopperRouteOptimizationClient\Model\Address
     */
    public function getAddress()
    {
        return $this->address;
    }
  
    /**
     * Sets address
     * @param \Exatia\GraphhopperRouteOptimizationClient\Model\Address $address
     * @return $this
     */
    public function setAddress($address)
    {
        
        $this->address = $address;
        return $this;
    }
    /**
     * Gets duration
     * @return int
     */
    public function getDuration()
    {
        return $this->duration;
    }
  
    /**
     * Sets duration
     * @param int $duration duration of service, i.e. time in ms the corresponding activity takes
     * @return $this
     */
    public function setDuration($duration)
    {
        
        $this->duration = $duration;
        return $this;
    }
    /**
     * Gets time_windows
     * @return \Exatia\GraphhopperRouteOptimizationClient\Model\TimeWindow[]
     */
    public function getTimeWindows()
    {
        return $this->time_windows;
    }
  
    /**
     * Sets time_windows
     * @param \Exatia\GraphhopperRouteOptimizationClient\Model\TimeWindow[] $time_windows array of time windows. currently, only a single time window is allowed
     * @return $this
     */
    public function setTimeWindows($time_windows)
    {
        
        $this->time_windows = $time_windows;
        return $this;
    }
    /**
     * Gets size
     * @return int[]
     */
    public function getSize()
    {
        return $this->size;
    }
  
    /**
     * Sets size
     * @param int[] $size array of capacity dimensions
     * @return $this
     */
    public function setSize($size)
    {
        
        $this->size = $size;
        return $this;
    }
    /**
     * Gets required_skills
     * @return string[]
     */
    public function getRequiredSkills()
    {
        return $this->required_skills;
    }
  
    /**
     * Sets required_skills
     * @param string[] $required_skills array of required skills
     * @return $this
     */
    public function setRequiredSkills($required_skills)
    {
        
        $this->required_skills = $required_skills;
        return $this;
    }
    /**
     * Gets allowed_vehicles
     * @return string[]
     */
    public function getAllowedVehicles()
    {
        return $this->allowed_vehicles;
    }
  
    /**
     * Sets allowed_vehicles
     * @param string[] $allowed_vehicles array of allowed vehicle ids
     * @return $this
     */
    public function setAllowedVehicles($allowed_vehicles)
    {
        
        $this->allowed_vehicles = $allowed_vehicles;
        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
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