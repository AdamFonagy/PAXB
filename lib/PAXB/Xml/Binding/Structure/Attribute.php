<?php

namespace PAXB\Xml\Binding\Structure;

class Attribute extends Base {

  /**
   * @var string
   */
  private $namespace;

  public function __construct($name, $source, $namespace) {
    $this->name = $name;
    $this->source = $source;
    $this->namespace = $namespace;
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
