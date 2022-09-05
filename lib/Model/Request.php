<?php
/**
 * Request
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
 * Request Class Doc Comment
 *
 * @category    Class
 * @package     Exatia\GraphhopperRouteOptimizationClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Request implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'vehicles' => '\Exatia\GraphhopperRouteOptimizationClient\Model\Vehicle[]',
        'vehicle_types' => '\Exatia\GraphhopperRouteOptimizationClient\Model\VehicleType[]',
        'services' => '\Exatia\GraphhopperRouteOptimizationClient\Model\Service[]',
        'shipments' => '\Exatia\GraphhopperRouteOptimizationClient\Model\Shipment[]',
        'relations' => '\Exatia\GraphhopperRouteOptimizationClient\Model\Relation[]',
        'algorithm' => '\Exatia\GraphhopperRouteOptimizationClient\Model\Algorithm',
        'objectives' => '\Exatia\GraphhopperRouteOptimizationClient\Model\Objective[]'
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
        'vehicles' => 'vehicles',
        'vehicle_types' => 'vehicle_types',
        'services' => 'services',
        'shipments' => 'shipments',
        'relations' => 'relations',
        'algorithm' => 'algorithm',
        'objectives' => 'objectives'
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
        'vehicles' => 'setVehicles',
        'vehicle_types' => 'setVehicleTypes',
        'services' => 'setServices',
        'shipments' => 'setShipments',
        'relations' => 'setRelations',
        'algorithm' => 'setAlgorithm',
        'objectives' => 'setObjectives'
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
        'vehicles' => 'getVehicles',
        'vehicle_types' => 'getVehicleTypes',
        'services' => 'getServices',
        'shipments' => 'getShipments',
        'relations' => 'getRelations',
        'algorithm' => 'getAlgorithm',
        'objectives' => 'getObjectives'
    );

    public static function getters()
    {
        return self::$getters;
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
        $this->container['vehicles'] = isset($data['vehicles']) ? $data['vehicles'] : null;
        $this->container['vehicle_types'] = isset($data['vehicle_types']) ? $data['vehicle_types'] : null;
        $this->container['services'] = isset($data['services']) ? $data['services'] : null;
        $this->container['shipments'] = isset($data['shipments']) ? $data['shipments'] : null;
        $this->container['relations'] = isset($data['relations']) ? $data['relations'] : null;
        $this->container['algorithm'] = isset($data['algorithm']) ? $data['algorithm'] : null;
        $this->container['objectives'] = isset($data['objectives']) ? $data['objectives'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
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
        return true;
    }


    /**
     * Gets vehicles
     * @return \Exatia\GraphhopperRouteOptimizationClient\Model\Vehicle[]
     */
    public function getVehicles()
    {
        return $this->container['vehicles'];
    }

    /**
     * Sets vehicles
     * @param \Exatia\GraphhopperRouteOptimizationClient\Model\Vehicle[] $vehicles An array of vehicles that can be employed
     * @return $this
     */
    public function setVehicles($vehicles)
    {
        $this->container['vehicles'] = $vehicles;

        return $this;
    }

    /**
     * Gets vehicle_types
     * @return \Exatia\GraphhopperRouteOptimizationClient\Model\VehicleType[]
     */
    public function getVehicleTypes()
    {
        return $this->container['vehicle_types'];
    }

    /**
     * Sets vehicle_types
     * @param \Exatia\GraphhopperRouteOptimizationClient\Model\VehicleType[] $vehicle_types An array of vehicle types
     * @return $this
     */
    public function setVehicleTypes($vehicle_types)
    {
        $this->container['vehicle_types'] = $vehicle_types;

        return $this;
    }

    /**
     * Gets services
     * @return \Exatia\GraphhopperRouteOptimizationClient\Model\Service[]
     */
    public function getServices()
    {
        return $this->container['services'];
    }

    /**
     * Sets services
     * @param \Exatia\GraphhopperRouteOptimizationClient\Model\Service[] $services An array of services
     * @return $this
     */
    public function setServices($services)
    {
        $this->container['services'] = $services;

        return $this;
    }

    /**
     * Gets shipments
     * @return \Exatia\GraphhopperRouteOptimizationClient\Model\Shipment[]
     */
    public function getShipments()
    {
        return $this->container['shipments'];
    }

    /**
     * Sets shipments
     * @param \Exatia\GraphhopperRouteOptimizationClient\Model\Shipment[] $shipments An array of shipments
     * @return $this
     */
    public function setShipments($shipments)
    {
        $this->container['shipments'] = $shipments;

        return $this;
    }

    /**
     * Gets relations
     * @return \Exatia\GraphhopperRouteOptimizationClient\Model\Relation[]
     */
    public function getRelations()
    {
        return $this->container['relations'];
    }

    /**
     * Sets relations
     * @param \Exatia\GraphhopperRouteOptimizationClient\Model\Relation[] $relations An array of relations
     * @return $this
     */
    public function setRelations($relations)
    {
        $this->container['relations'] = $relations;

        return $this;
    }

    /**
     * Gets algorithm
     * @return \Exatia\GraphhopperRouteOptimizationClient\Model\Algorithm
     */
    public function getAlgorithm()
    {
        return $this->container['algorithm'];
    }

    /**
     * Sets algorithm
     * @param \Exatia\GraphhopperRouteOptimizationClient\Model\Algorithm $algorithm
     * @return $this
     */
    public function setAlgorithm($algorithm)
    {
        $this->container['algorithm'] = $algorithm;

        return $this;
    }

    /**
     * Gets objectives
     * @return \Exatia\GraphhopperRouteOptimizationClient\Model\Objective[]
     */
    public function getObjectives()
    {
        return $this->container['objectives'];
    }

    /**
     * Sets objectives
     * @param \Exatia\GraphhopperRouteOptimizationClient\Model\Objective[] $objectives An array of objectives
     * @return $this
     */
    public function setObjectives($objectives)
    {
        $this->container['objectives'] = $objectives;

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
