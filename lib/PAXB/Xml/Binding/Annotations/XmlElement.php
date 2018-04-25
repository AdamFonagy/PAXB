<?php

namespace PAXB\Xml\Binding\Annotations;

/**
 * @Annotation
 */
class XmlElement extends XmlAnnotation {
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type = '';

    /**
		 * @var int
		 */
		public $minoccurs = 1;

    /**
		 * @var string
		 */
		public $namespace = '';
}