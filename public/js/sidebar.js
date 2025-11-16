(function () {
            const sidebar = document.getElementById('adminSidebar');
            const btn = document.getElementById('btnToggle');
            const btnMobileOpen = document.getElementById('btnMobileOpen');
            const mainWrap = document.getElementById('mainWrap');


            // restore collapsed state
            if (localStorage.getItem('sidebar-collapsed') === '1') {
                sidebar.classList.add('collapsed');
                mainWrap.classList.add('collapsed');
            }


            btn.addEventListener('click', function () {
                const isCollapsed = sidebar.classList.toggle('collapsed');
                mainWrap.classList.toggle('collapsed');
                localStorage.setItem('sidebar-collapsed', isCollapsed ? '1' : '0');
            });


            if (btnMobileOpen) {
                btnMobileOpen.addEventListener('click', function () {
                    sidebar.classList.add('show-mobile');
                    // click outside to close
                    document.addEventListener('click', function close(e) {
                        if (!sidebar.contains(e.target) && !btnMobileOpen.contains(e.target) && !e.target.closest('.btn')) {
                            sidebar.classList.remove('show-mobile');
                            document.removeEventListener('click', close);
                        }
                    });
                });
            }


            // sidebar link interactions & demo content injection
            const links = document.querySelectorAll('.sidebar .nav-link');
            const content = document.querySelector('.content-area');
            links.forEach(link => {
                link.addEventListener('click', function (e) {
                    e.preventDefault();
                    links.forEach(l => l.classList.remove('active'));
                    this.classList.add('active');
                    const section = this.getAttribute('data-section') || this.textContent.trim();
                    content.innerHTML = '<div class="p-4 bg-white shadow-sm rounded"><h2>' + section.charAt(0).toUpperCase() + section.slice(1).replace('_', ' ') + '</h2><p>Đây là giao diện demo cho mục: <strong>' + section + '</strong>.</p></div>';
                    if (sidebar.classList.contains('show-mobile')) sidebar.classList.remove('show-mobile');
                });
            });


            // set initial content
            const first = document.querySelector('.sidebar .nav-link');
            if (first) first.click();


        })();