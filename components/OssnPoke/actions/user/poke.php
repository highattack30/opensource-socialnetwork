<?php
/**
 * Open Source Social Network
 *
 * @packageOpen Source Social Network
 * @author    Open Social Website Core Team <info@informatikon.com>
 * @copyright 2014-2016 SOFTLAB24 LIMITED
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
$poke = new OssnPoke;
$user = input('user');
if ($poke->addPoke(ossn_loggedin_user()->guid, $user)) {
    $user = ossn_user_by_guid($user);
    ossn_trigger_message(ossn_print('user:poked', array($user->fullname)), 'success');
    redirect(REF);
} else {
    ossn_trigger_message(ossn_print('user:poke:error'), 'error');
    redirect(REF);
}