<?php
 namespace MailPoetVendor\Symfony\Component\Validator\Constraints; if (!defined('ABSPATH')) exit; class NegativeOrZero extends \MailPoetVendor\Symfony\Component\Validator\Constraints\LessThanOrEqual { use NumberConstraintTrait; public $message = 'This value should be either negative or zero.'; public function __construct($options = null) { parent::__construct($this->configureNumberConstraintOptions($options)); } public function validatedBy() : string { return \MailPoetVendor\Symfony\Component\Validator\Constraints\LessThanOrEqualValidator::class; } } 