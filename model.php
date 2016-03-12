<?php
/**
 * Part of the Platform Attributes extension.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the WTFPL license.
 *
 * @package    Platform Attributes extension
 * @version    3.0.0
 * @author     Sanatorium
 * @license    WTFPL
 * @copyright  2016, Sanatorium
 * @link       http://sanatorium.ninja
 */

return [

	'general' => [

		'legend'         => 'Details',

        'id'             => '#',
        'id_help'        => 'Unikátní identifikátor.',

        'created_at'     => 'Vytvořeno',

		'name'           => 'Název',
		'name_help'      => 'Napište popisný název pro váš atribut.',

		'description'      => 'Popis',
		'description_help' => 'Napište informativní popis pro váš atribut.',

		'slug'           => 'Slug',
		'slug_help'      => 'Napište unikátní identifikátor "slug" pro váš atribut (měl by obsahovat pouze malá písmena bez diakritiky a případně čísla, podtržítka apod.).',

		'namespace'      => 'Namespace',
		'namespace_help' => "Vyberte namespace atributu.",

		'enabled'        => 'Status',
		'enabled_help'   => 'Vyberte status atributu.',

	],

	'types' => [

		'legend'       => 'Typ atributu',

		'type'         => 'Typ',
		'type_help'    => 'Vyberte typ atributu.',

		'option_value' => 'Hodnota možnosti',

		'option_label' => 'Popis možnosti',

		'option' => [
			'checkbox'    => 'Checkbox',
			'input'       => 'Input',
			'multiselect' => 'Multi Select',
			'radio'       => 'Radio',
			'select'      => 'Select',
			'textarea'    => 'Textarea',
		],

	],

];
