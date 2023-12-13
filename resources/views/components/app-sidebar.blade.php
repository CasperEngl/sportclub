<aside x-data>
    <button x-on:click="$store.sidebar.open = !$store.sidebar.open">
        Toggle sidebar
    </button>

    <div x-show="$store.sidebar.open" x-cloak>
        Sidebar content
    </div>
</aside>
