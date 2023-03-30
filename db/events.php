<?php

defined('MOODLE_INTERNAL') || die();

$observers = array();

$observers[] = array(
    'eventname' => 'core\event\course_viewed',
    'callback' => 'tool_sentry_helper::observer',
    'includefile' => '/admin/tool/sentry/classes/helper.php',
    'internal' => true,
    'priority'    => 9999,
);
