<?php

/**
 * DmTestDomainTranslation form base class.
 *
 * @method DmTestDomainTranslation getObject() Returns the current form's model object
 *
 * @package    retest
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDmTestDomainTranslationForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'title'      => new sfWidgetFormInputText(),
      'is_active'  => new sfWidgetFormInputCheckbox(),
      'lang'       => new sfWidgetFormInputHidden(),
      'created_by' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CreatedBy'), 'add_empty' => true)),
      'updated_by' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UpdatedBy'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'title'      => new sfValidatorString(array('max_length' => 255)),
      'is_active'  => new sfValidatorBoolean(array('required' => false)),
      'lang'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('lang')), 'empty_value' => $this->getObject()->get('lang'), 'required' => false)),
      'created_by' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('CreatedBy'), 'required' => false)),
      'updated_by' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('UpdatedBy'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dm_test_domain_translation[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DmTestDomainTranslation';
  }

}
