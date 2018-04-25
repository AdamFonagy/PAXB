<?php

namespace PAXB\Xml\Binding\Structure;

use PAXB\Xml\Binding\Metadata\ClassMetadata;

class Element extends Base {

  /**
   * @var int
   */
  private $type;

  /**
   * @var int
   */
  private $minoccurs;

  /**
   * @var string
   */
  private $typeValue;

  /**
   * @var string
   */
  private $namespace;

  /**
   * @var string
   */
  private $wrapperName;

  /**
   * @var bool
   */
  private $phpCollection = false;

  public function __construct($name, $source, $type = ClassMetadata::RUNTIME_TYPE, $typeValue = '', $wrapperName = null, $phpCollection = false, $minoccurs = 1, $namespace='') {
    $this->name = $name;
    $this->type = $type;
    $this->typeValue = $typeValue;
    $this->source = $source;
    $this->wrapperName = $wrapperName;
    $this->phpCollection = $phpCollection;
    $this->minoccurs = $minoccurs;
    $this->namespace = $namespace;
  }

  /**
   * @return mixed
   */
  public function getType() {
    return $this->type;
  }

  /**
   * @return string
   */
  public function getTypeValue() {
    return $this->typeValue;
  }

  /**
   * @return mixed
   */
  public function getWrapperName() {
    return $this->wrapperName;
  }

  /**
   * @param string $wrapperName
   * @return $this
   */
  public function setWrapperName($wrapperName) {
    $this->wrapperName = $wrapperName;
    return $this;
  }

  /**
   * @param string $typeValue
   * @return $this
   */
  public function setTypeValue($typeValue) {
    $this->type = ClassMetadata::DEFINED_TYPE;
    $this->typeValue = $typeValue;
    return $this;
  }

  /**
   * @param boolean $phpCollection
   * @return $this
   */
  public function setPhpCollection($phpCollection) {
    $this->phpCollection = $phpCollection;
    return $this;
  }

  /**
   * @return boolean
   */
  public function getPhpCollection() {
    return $this->phpCollection;
  }

  /**
   * @return int
   */
  public function getMinoccurs() {
    return $this->minoccurs;
  }

  /**
   * @param int $minoccurs
   * @return $this
   */
  public function setMinoccurs($minoccurs) {
    $this->minoccurs = $minoccurs;
    return $this;
  }

  /**
   * @return string
   */
  public function getNamespace() {
    return $this->namespace;
  }

  /**
   * @param string $namespace
   * @return $this
   */
  public function setNamespace($namespace) {
    $this->namespace = $namespace;
    return $this;
  }

}
