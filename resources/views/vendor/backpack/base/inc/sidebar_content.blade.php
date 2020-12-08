<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<style>
    li{
        font-size:22px;
    }
</style>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('projet') }}'><i class='nav-icon la la-tasks'></i> Projets</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('images') }}'><i class='nav-icon la la-image'></i> Images</a></li>