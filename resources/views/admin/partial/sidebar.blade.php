<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li>
                <a href="{{ route('admin.dashboard') }}" aria-expanded="false">
                    <i class="flaticon-025-dashboard"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            @role(\App\Enums\Role::SUPER_ADMIN->value)
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-050-info"></i>
                        <span class="nav-text">Roles and Permission</span>
                    </a>
                    <ul aria-expanded="false">
                        @can('roles-read')
                            <li><a href="{{ route('admin.roles.index') }}">Roles</a></li>
                        @endcan
                        @can('permission-read')
                            {{-- <li><a href="{{ route('admin.permissions.index') }}">Permission</a></li> --}}
                        @endcan
                        @can('users-read')
                            <li><a href="{{ route('admin.user.index') }}">User</a></li>
                        @endcan
                    </ul>
                </li>
            @endrole

            <li>
                <a href="{{ route('admin.builder') }}" aria-expanded="false">
                    <i class="flaticon-025-dashboard"></i>
                    <span class="nav-text">Page Builder</span>
                </a>
            </li>

            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-050-info"></i>
                    <span class="nav-text">Settings</span>
                </a>
                <ul aria-expanded="false">
                    @can('category-read')
                        <li><a href="{{ route('admin.category.index', [\App\Enums\CategoryType::WEB]) }}">Tag</a>
                        </li>
                    @endif
                    @can('setting-read')
                        <li><a href="{{ route('admin.setting.index') }}">Setting</a>
                        </li>
                    @endcan
                </ul>
            </li>
        </ul>

    </div>
</div>
