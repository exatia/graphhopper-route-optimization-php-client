<?php
/**
 * Address
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
 * Address Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Exatia\GraphhopperRouteOptimizationClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Address implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    static $swaggerModelName = 'Address';

    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'location_id' => 'string',
        'lon' => 'double',
        'lat' => 'double'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'location_id' => 'location_id',
        'lon' => 'lon',
        'lat' => 'lat'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'location_id' => 'setLocationId',
        'lon' => 'setLon',
        'lat' => 'setLat'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'location_id' => 'getLocationId',
        'lon' => 'getLon',
        'lat' => 'getLat'
    );
  
    static function getters() {
        return self::$getters;
    }

    /**
      * $location_id Unique identifier of location
      * @var string
      */
    protected $location_id;
    /**
      * $lon longitude
      * @var double
      */
    protected $lon;
    /**
      * $lat latitude
      * @var double
      */
    protected $lat;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        
        if ($data != null) {
            $this->location_id = $data["location_id"];
            $this->lon = $data["lon"];
            $this->lat = $data["lat"];
        }
    }
    /**
     * Gets location_id
     * @return string
     */
    public function getLocationId()
    {
        return $this->location_id;
    }
  
    /**
     * Sets location_id
     * @param string $location_id Unique identifier of location
     * @return $this
     */
    public function setLocationId($location_id)
    {
        
        $this->location_id = $location_id;
        return $this;
    }
    /**
     * Gets lon
     * @return double
     */
    public function getLon()
    {
        return $this->lon;
    }
  
    /**
     * Sets lon
     * @param double $lon longitude
     * @return $this
     */
    public function setLon($lon)
    {
        
        $this->lon = $lon;
        return $this;
    }
    /**
     * Gets lat
     * @return double
     */
    public function getLat()
    {
        return $this->lat;
    }
  
    /**
     * Sets lat
     * @param double $lat latitude
     * @return $this
     */
    public function setLat($lat)
    {
        
        $this->lat = $lat;
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
