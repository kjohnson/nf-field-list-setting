<?php

/*
 * Plugin Name: Ninja Forms - Field List Setting
 * Description: FOR TESTING ONLY. Example implementation of the Field List setting for testing.
 * Version: 3.0
 */

final class NF_FieldListSetting
{
    public function __construct()
    {
        add_filter( 'ninja_forms_register_actions', array( $this, 'register_actions' ) );
    }

    public function register_actions( $actions )
    {
        require_once 'action.php';
        $actions[ 'fieldlistexample' ] = new NF_FieldListSetting_Action();

        return $actions;
    }
}

new NF_FieldListSetting();
