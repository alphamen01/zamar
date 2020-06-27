<template>
	
  <div class="air__utils__header">
    <div class="air__topbar">
      <div class="air__topbar__searchDropdown dropdown mr-md-4 mr-auto">
        <div class="air__topbar__search dropdown-toggle" data-toggle="dropdown" data-offset="5,15">
          <div class="air__topbar__searchContainer">
            <i class="air__topbar__searchIcon fe fe-search"></i>
            <input
              class="air__topbar__searchInput"
              type="text"
              placeholder="Start typing to search..."
            />
          </div>
        </div>
        <div class="dropdown-menu" role="menu">
          <div class="air__customScroll">
            <div class="air__l1 height-300">
              <div class="text-uppercase font-size-12 mb-2 text-gray-6">Documents (3)</div>
              <ul class="list-unstyled">
                <li class="air__l1__item">
                  <a href="javascript: void(0);" class="air__l1__itemLink">
                    <div class="air__l1__itemPic mr-3">
                      <i class="air__l1__itemIcon fe fe-file"></i>
                    </div>
                    <div>
                      <div class="text-blue">System Requirements.pdf</div>
                      <div class="text-muted">568kb</div>
                    </div>
                  </a>
                </li>
                <li class="air__l1__item">
                  <a href="javascript: void(0);" class="air__l1__itemLink">
                    <div class="air__l1__itemPic mr-3">
                      <i class="air__l1__itemIcon fe fe-file"></i>
                    </div>
                    <div>
                      <div class="text-blue">Queue Info.pdf</div>
                      <div class="text-muted">1.2mb</div>
                    </div>
                  </a>
                </li>
                <li class="air__l1__item">
                  <a href="javascript: void(0);" class="air__l1__itemLink">
                    <div class="air__l1__itemPic mr-3">
                      <i class="air__l1__itemIcon fe fe-file"></i>
                    </div>
                    <div>
                      <div class="text-blue">Affected_app.mov</div>
                      <div class="text-muted">67mb</div>
                    </div>
                  </a>
                </li>
              </ul>
              <div class="text-uppercase font-size-12 mb-2 text-gray-6">Agents (4)</div>
              <ul class="list-unstyled">
                <li class="air__l1__item">
                  <a href="javascript: void(0);" class="air__l1__itemLink">
                    <div class="air__utils__avatar mr-3">
                      <img src="" alt="Mary Stanform" />
                    </div>
                    <div>
                      <div class="text-blue">Mary Stanform</div>
                      <div class="text-muted">Sales Manager</div>
                    </div>
                  </a>
                </li>
                <li class="air__l1__item">
                  <a href="javascript: void(0);" class="air__l1__itemLink">
                    <div class="air__utils__avatar mr-3">
                      <img src="" alt="Jamie Rockstar" />
                    </div>
                    <div>
                      <div class="text-blue">Jamie Rockstar</div>
                      <div class="text-muted">Blackoffice Agent</div>
                    </div>
                  </a>
                </li>
                <li class="air__l1__item">
                  <a href="javascript: void(0);" class="air__l1__itemLink">
                    <div class="air__utils__avatar mr-3">
                      <img src="" alt="Axel Freddie" />
                    </div>
                    <div>
                      <div class="text-blue">Axel Freddie</div>
                      <div class="text-muted">Blackoffice Agent</div>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="dropdown mr-auto d-none d-md-block">
        <a
              href=""
              class="dropdown-toggle text-nowrap"
              data-toggle="dropdown"
              aria-expanded="false"
              data-offset="0,15"     >
              <i class="dropdown-toggle-icon fe fe-book-open"></i>
              <span class="dropdown-toggle-text">Issues History</span>
        </a>
        <div class="dropdown-menu" role="menu">
          <div class="dropdown-header">Active</div>
          <a class="dropdown-item" href="javascript:void(0)">Project Management</a>
          <a class="dropdown-item" href="javascript:void(0)">User Inetrface Development</a>
          <a class="dropdown-item" href="javascript:void(0)">Documentation</a>
          <div class="dropdown-header">Inactive</div>
          <a class="dropdown-item" href="javascript:void(0)">Marketing</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="javascript:void(0)">
            <i class="dropdown-icon fe fe-settings"></i>
            Settings
          </a>
        </div>
      </div>
      <p class="mb-0 mr-4 d-xl-block d-none"> Estado
        <span class="ml-1 badge bg-success text-white font-size-12 text-uppercase air__topbar__status">Activo</span>
      </p>


      <div class="dropdown">
        <a
          href=""
          class="dropdown-toggle text-nowrap"
          data-toggle="dropdown"
          aria-expanded="false"
          data-offset="5,15"
        >
        <img class="dropdown-toggle-avatar" src="/zamar/estudiantes/foto/juanperez.png" alt="Juan Perez" />

        </a>
        <div class="dropdown-menu dropdown-menu-right" role="menu">
          <a class="dropdown-item" href="javascript:void(0)">
            <i class="dropdown-icon fe fe-user"></i>
            Perfil
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="javascript:void(0)">
            <i class="dropdown-icon fe fe-log-out"></i> Logout
          </a>
        </div>
      </div>
    </div>
  </div>
     
</template>

