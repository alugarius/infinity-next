<nav class="cp-inner">
    <section class="cp-innertabs">
        <ul class="cp-linkgroups">
            <li class="cp-linkgroup">
                <ul class="cp-linkitems">
                    <li class="cp-linkitem">
                    @foreach ([
                        'assets' => "assets",
                        'config' => "basic",
                        'pages'  => "pages",
                        'roles'  => "roles",
                        'staff'  => "staff",
                        'tags'   => "tags",
                    ] as $url => $name)
                        <a class="linkitem-name {{ isset($tab) && $tab == $name ? 'linkitem-active' : '' }}"
                            href="{{ $board->getPanelUrl($name) }}"
                        >{{ trans("nav.panel.tertiary.board_settings.{$name}") }}</a>
                    @endforeach
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</nav>
