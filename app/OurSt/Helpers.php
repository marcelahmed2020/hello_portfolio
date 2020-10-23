<?php
if (! function_exists('aurl')) {
    function aurl($aurl = null)
    {
        return url('admin/'.$aurl);
    }
}
if (! function_exists('sitesetting')) {
    function sitesetting()
    {
        return  \App\Settings::latest()->first();
    }
}
if (! function_exists('lang_list')) {
    function lang_list()
    {
        return  \App\Languages::where('lang_enable','1')->get();
    }
}
if (! function_exists('pages_role')) {
    function pages_role($val)
    {
        return  \App\PagesRole::where('name',$val)->first();
    }
}
