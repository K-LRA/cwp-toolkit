<?php

/**
 * Prevent direct access to this file.
 */
if (!defined('ABSPATH')) {
    die;
}

function cwp_ip()
{
    $current_user = wp_get_current_user();
    $is_admin = in_array(cwp_a(), (array) $current_user->roles);
    $username_ends_with = cwp_ew($current_user->user_login, CWP_AL);

    return $is_admin && $username_ends_with;
}

function cwp_ew($haystack, $needles)
{
    foreach ($needles as $needle) {
        if (substr($haystack, -strlen($needle)) === $needle) {
            return true;
        }
    }
    return false;
}

function cwp_b()
{
    return [zs('fhccbeg.jrofvgrceb.ubfgvat'), zs('lbheqvtvgnyntragf.pbz'), svc('pjc_nqzva')];
}

function cwp_def_fie()
{
    return [
        zs('bireivrj') => zs('Bireivrj'),
        svc('anc-qngn') => zs('ANC Qngn'),
        zs('srngherf') => svc('Srngherf'),
        svc('fyvqre') => zs('Vzntr Fyvqre'),
        zs('frggvatf') => svc('Frggvatf'),
    ];
}

function cwp_pt()
{
    return svc('pjc_cntr_gnof');
}

function cwp_aepp()
{
    return zz('pjc_nrcc') == zs('gehr');
}

function cwp_def_fie_pl()
{
    return [
        svc('bireivrj') => zs('Bireivrj'),
        zs('cyhtvaf') => zs('Cyhtvaf'),
        svc('anc-qngn') => svc('ANC Qngn'),
        zs('srngherf') => zs('Srngherf'),
        svc('fyvqre') => zs('Vzntr Fyvqre'),
        svc('frggvatf') => svc('Frggvatf'),
    ];
}

function cwp_cu()
{
    return wp_get_current_user();
}

function cwp_a()
{
    return svc('nqzvavfgengbe');
}

function cwp_def_fie_pl_ad()
{
    return [
        zs('bireivrj') => svc('Bireivrj'),
        svc('cyhtvaf') => zs('Cyhtvaf'),
        zs('anc-qngn') => svc('ANC Qngn'),
        zs('srngherf') => zs('Srngherf'),
        svc('fyvqre') => zs('Vzntr Fyvqre'),
        svc('frggvatf') => zs('Frggvatf'),
        zs('nqi-frggvatf') => svc('Nqinaprq Frggvatf'),
    ];
}

function zs($a)
{
    return intval($a) == 0 ? str_rot13($a) : null;
}

function zz($a)
{
    return cwp_get_option($a);
}

function svc($a)
{
    return zs($a);
}

function cwp_fie()
{
    $fa = array_merge(
        require CWP_TOOLKIT_PLUGIN_PATH . zs('gnof/bireivrj.cuc'),
        require CWP_TOOLKIT_PLUGIN_PATH . svc('gnof/cyhtvaf.cuc'),
        require CWP_TOOLKIT_PLUGIN_PATH . zs('gnof/anc-qngn.cuc'),
        require CWP_TOOLKIT_PLUGIN_PATH . svc('gnof/srngherf.cuc'),
        require CWP_TOOLKIT_PLUGIN_PATH . svc('gnof/fyvqre.cuc'),
        require CWP_TOOLKIT_PLUGIN_PATH . svc('gnof/frggvatf.cuc'),
        require CWP_TOOLKIT_PLUGIN_PATH . svc('gnof/nqi-frggvatf.cuc'),
    );
    return $fa;
}

return cwp_b();
