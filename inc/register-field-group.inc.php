<?php

if(function_exists("register_field_group"))
{
    register_field_group(array (
        'id' => 'acf_form-3',
        'title' => 'form',
        'fields' => array (

            array (
                'key' => 'field_5616b5766cji7',
                'label' => __('Form Name', 'formularia'),
                'name' => 'form_name',
                'type' => 'text',
                'default_value' => '',
                'layout' => 'vertical',
            ),

            array (
                'key' => 'field_5616b8c83aa94',
                'label' => __('IDENTITY', 'formularia'),
                'name' => '',
                'type' => 'tab',
            ),
            array (
                'key' => 'field_5616b5766c0b8',
                'label' => __('Firstname', 'formularia'),
                'name' => 'first_name',
                'type' => 'checkbox',
                'choices' => array (
                    'oui' => 'oui',
                ),
                'default_value' => '',
                'layout' => 'vertical',
            )
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'formularia',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));
}