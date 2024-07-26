<div class="sidebar" id="sidebar">

    {{-- Dashboard --}}
    <ul class="list-unstyled mb-5">
        <li class="sidebar-list-item "><a class="sidebar-link text-muted active" href="{{ route('dashboard') }}">
                <span class="sidebar-link-title fs-5">Dashboards</span></a>
        </li>
        {{-- User Profile --}}
        <li class="sidebar-list-item py-2 "><a class="sidebar-link text-muted" href="{{ route('profile') }}"><i
                    class="fa-regular fa-user me-2 text-info"></i>
                <span class="sidebar-link-title fs-5">Profile</span></a>
        </li>

        {{-- Organization --}}
        <li class="sidebar-list-item py-2"><a class="sidebar-link text-muted " href="#"
                data-bs-target="#widgetsDropdown" role="button" aria-expanded="false" data-bs-toggle="collapse"><i
                    class="fa-solid fa-building me-2  text-info"></i>
                <span class="sidebar-link-title fs-5">Organization</span></a>
            <ul class="sidebar-menu   list-unstyled collapse " id="widgetsDropdown">
                <li class="sidebar-list-item py-2  fs-6"><a class="sidebar-link text-muted ms-3"
                        href=""><i
                            class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>Department</a>
                </li>
                <li class="sidebar-list-item fs-6"><a class="sidebar-link text-muted ms-3"
                       ><i
                            class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>Position</a>
                </li>
            </ul>
        </li>


     

        {{-- Employees --}}
        <li class="sidebar-list-item py-2 "><a class="sidebar-link text-muted " href="#" data-bs-target="#cmsDropdown"
                role="button" aria-expanded="false" data-bs-toggle="collapse"><i
                    class="fa-solid fa-user-group me-2 text-info"></i>
                <span class="sidebar-link-title fs-5">Employees</span></a>
            <ul class="sidebar-menu list-unstyled collapse " id="cmsDropdown">
                <li class="sidebar-list-item py-2 fs-6"><a class="sidebar-link text-muted ms-3"
                        href=""><i
                            class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>Add
                        Employee</a></li>
                <li class="sidebar-list-item fs-6"><a class="sidebar-link text-muted ms-3"
                        href=""><i
                            class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>View Employee</a></li>
            </ul>
        </li>

          {{-- Manage Leave --}}
          <li class="sidebar-list-item py-2 "><a class="sidebar-link text-muted " href="#"
            data-bs-target="#componentsDropdown" role="button" aria-expanded="false" data-bs-toggle="collapse"><i
                class="fa-solid fa-person-walking-arrow-right me-2 text-info"></i>
            <span class="sidebar-link-title fs-5">Leave</span></a>
        <ul class="sidebar-menu   list-unstyled collapse " id="componentsDropdown">
            <li class="sidebar-list-item py-2 fs-6"><a class="sidebar-link text-muted ms-3"
                    href="{{ route('leave.leaveForm') }}"><i
                        class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>Apply
                    Leave</a>
            </li>
            <li class="sidebar-list-item py-2 fs-6"><a class="sidebar-link text-muted ms-3"
                    href="{{ route('leave.myLeave') }}"><i
                        class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>My Leave</a>
            </li>
            <li class="sidebar-list-item fs-6"><a class="sidebar-link text-muted ms-3"
                    href="{{ route('leave.myLeaveBalance') }}"><i
                        class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>My Leave Balance</a>
            </li>

            <li class="sidebar-list-item py-2 fs-6"><a class="sidebar-link text-muted ms-3"
                    href="{{ route('leave.leaveStatus') }}"><i
                        class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>Leave Request</a>
            </li>
            <li class="sidebar-list-item fs-6"><a class="sidebar-link text-muted ms-3"
                    href="{{ route('leave.leaveType') }}"><i
                        class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>Leave Type</a>
            </li>
        </ul>
    </li>
    </ul>
    <hr>


</div>