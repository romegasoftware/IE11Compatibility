<template>
    <dropdown>
        <dropdown-trigger class="h-9 flex items-center" slot-scope="{toggle}" :handle-click="toggle">
            <slot name="user-trigger"></slot>
        </dropdown-trigger>

        <dropdown-menu slot="menu" width="200" direction="rtl">
            <slot name="menu"></slot>
        </dropdown-menu>
    </dropdown>
</template>