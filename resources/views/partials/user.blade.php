<user-dropdown>
    <template slot="user-trigger" class="h-9 flex items-center">
        <img src="https://secure.gravatar.com/avatar/{{ md5(auth()->user()->email) }}?size=512" class="rounded-full w-8 h-8 mr-3"/>

        <span class="text-90">
            {{ auth()->user()->name }}
        </span>
    </template>
    <template slot="menu">
        <ul class="list-reset">
            <li>
                <a href="{{ route('nova.logout') }}" class="block no-underline text-90 hover:bg-30 p-3">
                    {{ __('Logout') }}
                </a>
            </li>
        </ul>
    </template>
</user-dropdown>
