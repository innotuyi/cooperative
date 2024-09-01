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
                <span class="sidebar-link-title fs-7">Manage Member</span></a>
            <ul class="sidebar-menu   list-unstyled collapse " id="widgetsDropdown">
                <li class="sidebar-list-item py-2  fs-7"><a class="sidebar-link text-muted ms-3"
                        href="{{ route('organization.department') }}"><i
                            class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>Guardians</a>
                </li>

                <li class="sidebar-list-item py-2  fs-6"><a class="sidebar-link text-muted ms-3"
                        href="{{ route('organization.member') }}"><i
                            class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>Members</a>
                </li>

            </ul>
        </li>










        {{-- Employees --}}
        {{-- <li class="sidebar-list-item py-2 "><a class="sidebar-link text-muted " href="#" data-bs-target="#cmsDropdown"
            role="button" aria-expanded="false" data-bs-toggle="collapse"><i
                class="fa-solid fa-user-group me-2 text-info"></i>
            <span class="sidebar-link-title fs-5">Employees</span></a>
        <ul class="sidebar-menu list-unstyled collapse " id="cmsDropdown">
            <li class="sidebar-list-item py-2 fs-6"><a class="sidebar-link text-muted ms-3"
                    href="{{ route('manageEmployee.addEmployee') }}"><i
                        class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>Add
                    Employee</a></li>
            <li class="sidebar-list-item fs-6"><a class="sidebar-link text-muted ms-3"
                    href="{{ route('manageEmployee.ViewEmployee') }}"><i
                        class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>View Employee</a></li>
        </ul>
    </li> --}}

        {{-- Manage Leave --}}
        <li class="sidebar-list-item py-2 "><a class="sidebar-link text-muted " href="#"
                data-bs-target="#componentsDropdown" role="button" aria-expanded="false" data-bs-toggle="collapse"><i
                    class="fa-solid fa-person-walking-arrow-right me-2 text-info"></i>
                <span class="sidebar-link-title fs-7">Manage Loan</span></a>
            <ul class="sidebar-menu   list-unstyled collapse " id="componentsDropdown">
                <li class="sidebar-list-item py-2 fs-6"><a class="sidebar-link text-muted ms-3"
                        href="{{ route('loan.loanForm') }}"><i
                            class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>Apply
                        Loan</a>
                </li>
                <li class="sidebar-list-item py-2 fs-6"><a class="sidebar-link text-muted ms-3"
                        href="{{ route('leave.myLeave') }}"><i
                            class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>My Loan</a>
                </li>


                <li class="sidebar-list-item py-2 fs-6"><a class="sidebar-link text-muted ms-3"
                        href="{{ route('loan.loanStatus') }}"><i
                            class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>Loan Request</a>
                </li>

            </ul>
        </li>

        {{-- Organization --}}
        <li class="sidebar-list-item py-2"><a class="sidebar-link text-muted " href="#" data-bs-target="#share"
                role="button" aria-expanded="false" data-bs-toggle="collapse"><i
                    class="fa-solid fa-building me-2  text-info"></i>
                <span class="sidebar-link-title fs-7">Manage Share</span></a>
            <ul class="sidebar-menu   list-unstyled collapse " id="share">
                <li class="sidebar-list-item py-2  fs-6"><a class="sidebar-link text-muted ms-3"
                        href="{{ route('organization.share') }}"><i
                            class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>Share</a>
                </li>

            </ul>
        </li>

        {{-- Organization --}}
        <li class="sidebar-list-item py-2"><a class="sidebar-link text-muted " href="#" data-bs-target="#property"
                role="button" aria-expanded="false" data-bs-toggle="collapse"><i
                    class="fa-solid fa-building me-2  text-info"></i>
                <span class="sidebar-link-title fs-7">Manage Property</span></a>
            <ul class="sidebar-menu   list-unstyled collapse " id="property">
                <li class="sidebar-list-item py-2  fs-6"><a class="sidebar-link text-muted ms-3"
                        href="{{ route('organization.properties') }}"><i
                            class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>Property</a>
                </li>

            </ul>
        </li>

        {{-- Organization --}}
        <li class="sidebar-list-item py-2"><a class="sidebar-link text-muted " href="#" data-bs-target="#meeting"
                role="button" aria-expanded="false" data-bs-toggle="collapse"><i
                    class="fa-solid fa-building me-2  text-info"></i>
                <span class="sidebar-link-title fs-7">Manage Meeting</span></a>
            <ul class="sidebar-menu   list-unstyled collapse " id="meeting">
                <li class="sidebar-list-item py-2  fs-6"><a class="sidebar-link text-muted ms-3"
                        href="{{ route('organization.meeting') }}"><i
                            class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>Meeting</a>
                </li>

            </ul>
        </li>


        {{-- Organization --}}
        <li class="sidebar-list-item py-2"><a class="sidebar-link text-muted " href="#"
                data-bs-target="#punishment" role="button" aria-expanded="false" data-bs-toggle="collapse"><i
                    class="fa-solid fa-building me-2  text-info"></i>
                <span class="sidebar-link-title fs-7">Manage Punishment</span></a>
            <ul class="sidebar-menu   list-unstyled collapse " id="punishment">
                <li class="sidebar-list-item py-2  fs-6"><a class="sidebar-link text-muted ms-3"
                        href="{{ route('organization.punishment') }}"><i
                            class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>Punishment</a>
                </li>

            </ul>
        </li>

        {{-- Organization --}}
        <li class="sidebar-list-item py-2"><a class="sidebar-link text-muted " href="#"
                data-bs-target="#expenduture" role="button" aria-expanded="false" data-bs-toggle="collapse"><i
                    class="fa-solid fa-building me-2  text-info"></i>
                <span class="sidebar-link-title fs-7">Manage Expenduture</span></a>
            <ul class="sidebar-menu   list-unstyled collapse " id="expenduture">
                <li class="sidebar-list-item py-2  fs-6"><a class="sidebar-link text-muted ms-3"
                        href="{{ route('organization.expenduture') }}"><i
                            class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>Expenduture</a>
                </li>
                <li class="sidebar-list-item py-2  fs-6"><a class="sidebar-link text-muted ms-3"
                        href="{{ route('organization.expendutureCategory') }}"><i
                            class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>Category</a>
                </li>

            </ul>
        </li>

        {{-- Organization --}}
        <li class="sidebar-list-item py-2"><a class="sidebar-link text-muted " href="#"
                data-bs-target="#agent" role="button" aria-expanded="false" data-bs-toggle="collapse"><i
                    class="fa-solid fa-building me-2  text-info"></i>
                <span class="sidebar-link-title fs-7">Manage Agents</span></a>
            <ul class="sidebar-menu   list-unstyled collapse " id="agent">
                <li class="sidebar-list-item py-2  fs-6"><a class="sidebar-link text-muted ms-3"
                        href="{{ route('organization.agent') }}"><i
                            class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>Agents</a>
                </li>
                {{-- <li class="sidebar-list-item py-2  fs-6"><a class="sidebar-link text-muted ms-3"
                        href="{{ route('organization.expenduture') }}"><i
                            class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>Category</a>
                </li> --}}
                <li class="sidebar-list-item py-2  fs-6"><a class="sidebar-link text-muted ms-3"
                    href="{{ route('organization.expenduture') }}"><i
                        class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>Profit</a>
            </li>

            </ul>
        </li>

    </ul>
    <hr>


</div>
