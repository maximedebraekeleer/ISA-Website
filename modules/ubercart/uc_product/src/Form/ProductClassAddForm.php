<?php

namespace Drupal\uc_product\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\node\Entity\NodeType;
use Drupal\uc_product\Controller\ProductController;

/**
 * Defines the form for adding a product feature to the features tab.
 */
class ProductClassAddForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'uc_product_class_add_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form = [];

    $form['add'] = [
      '#type' => 'container',
    ];
    $form['add']['name'] = [
      '#title' => $this->t('Name'),
      '#type' => 'textfield',
      '#description' => $this->t('The human-readable name of this content type. This text will be displayed as part of the list on the <em>Add content</em> page. This name must be unique.'),
      '#required' => TRUE,
      '#size' => 30,
    ];

    $form['add']['type'] = [
      '#type' => 'machine_name',
      '#maxlength' => EntityTypeInterface::BUNDLE_MAX_LENGTH,
      '#machine_name' => [
        'exists' => ['Drupal\node\Entity\NodeType', 'load'],
        'source' => ['add', 'name'],
      ],
      '#description' => $this->t('A unique machine-readable name for this content type. It must only contain lowercase letters, numbers, and underscores. This name will be used for constructing the URL of the %node-add page, in which underscores will be converted into hyphens.', [
        '%node-add' => $this->t('Add content'),
      ]),
    ];

    $form['add']['description'] = [
      '#title' => $this->t('Description'),
      '#type' => 'textarea',
      '#description' => $this->t('This text will be displayed on the <em>Add new content</em> page.'),
      '#required' => TRUE,
    ];

    $form['add']['actions'] = ['#type' => 'actions'];
    $form['add']['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Add'),
    ];

    $controller = ProductController::create(\Drupal::getContainer());
    $form['overview'] = $controller->classOverview();

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $values = $form_state->getValues();
    // Don't need the overview form element to create the node type.
    $params = ['type' => $values['type']];
    $product_class = new NodeType($params, 'node_type');
    $product_class->set('entityTypeId', 'node_type');
    $product_class->set('name', $values['name']);
    $product_class->set('description', $values['description'] . $this->t('<br /><em>This type is an Ubercart Product</em>'));
    $product_class->setThirdPartySetting('uc_product', 'product', TRUE);
    $product_class->original = new NodeType($params, 'node_type');
    $product_class->save();
    $form_state->setRedirect('uc_product.classes');
  }

}
