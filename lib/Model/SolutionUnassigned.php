<?php
/**
 * SolutionUnassigned
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
 * SolutionUnassigned Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Exatia\GraphhopperRouteOptimizationClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SolutionUnassigned implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    static $swaggerModelName = 'Solution_unassigned';

    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'services' => 'string[]',
        'shipments' => 'string[]'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'services' => 'services',
        'shipments' => 'shipments'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'services' => 'setServices',
        'shipments' => 'setShipments'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'services' => 'getServices',
        'shipments' => 'getShipments'
    );
  
    static function getters() {
        return self::$getters;
    }

    /**
      * $services An array of ids of unassigned services
      * @var string[]
      */
    protected $services;
    /**
      * $shipments An array of ids of unassigned shipments
      * @var string[]
      */
    protected $shipments;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        
        if ($data != null) {
            $this->services = $data["services"];
            $this->shipments = $data["shipments"];
        }
    }
    /**
     * Gets services
     * @return string[]
     */
    public function getServices()
    {
        return $this->services;
    }
  
    /**
     * Sets services
     * @param string[] $services An array of ids of unassigned services
     * @return $this
     */
    public function setServices($services)
    {
        
        $this->services = $services;
        return $this;
    }
    /**
     * Gets shipments
     * @return string[]
     */
    public function getShipments()
    {
        return $this->shipments;
    }
  
    /**
     * Sets shipments
     * @param string[] $shipments An array of ids of unassigned shipments
     * @return $this
     */
    public function setShipments($shipments)
    {
        
        $this->shipments = $shipments;
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
