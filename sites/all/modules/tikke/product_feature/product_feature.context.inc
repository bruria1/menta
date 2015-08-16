<?php
/**
 * @file
 * product_feature.context.inc
 */

/**
 * Implements hook_context_default_contexts().
 */
function product_feature_context_default_contexts() {
  $export = array();

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'products';
  $context->description = '';
  $context->tag = '';
  $context->conditions = array(
    'path' => array(
      'values' => array(
        'node/369' => 'node/369',
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'views-products_view-block_1' => array(
          'module' => 'views',
          'delta' => 'products_view-block_1',
          'region' => 'highlighted',
          'weight' => '-10',
        ),
        'views-products_view-block' => array(
          'module' => 'views',
          'delta' => 'products_view-block',
          'region' => 'content',
          'weight' => '-10',
        ),
      ),
    ),
  );
  $context->condition_mode = 0;
  $export['products'] = $context;

  return $export;
}
