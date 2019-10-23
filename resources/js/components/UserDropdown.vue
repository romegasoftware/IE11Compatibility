<template>
    <dropdown-trigger class="h-9 flex items-center" slot-scope="{toggle}" :handle-click="toggle">
        <slot name="user-trigger"></slot>
    </dropdown-trigger>
</template>
