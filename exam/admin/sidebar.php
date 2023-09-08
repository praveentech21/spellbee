				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
				    <div class="sidebar-header">
				        <div class="sidebar-title">
				            Navigation
				        </div>
				        <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
				            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
				        </div>
				    </div>
				
				    <div class="nano">
				        <div class="nano-content">
				            <nav id="menu" class="nav-main" role="navigation">
				            
				                <ul class="nav nav-main">
				                    <li>
				                        <a class="nav-link" href="dashboard.php">
				                            <i class="fas fa-home" aria-hidden="true"></i>
				                            <span>Dashboard</span>
				                        </a>                        
				                    </li>
				                    <li>
				                        <a class="nav-link" href="registrations.php">
				                            <i class="fas fa-users" aria-hidden="true"></i>
				                            <span>Registrations</span>
				                        </a>                        
				                    </li>

				                    <li>
				                        <a class="nav-link" href="category.php?tid=E">
				                            <i class="fas fa-edit" aria-hidden="true"></i>
				                            <span>EASY</span>
				                        </a>                        
				                    </li>
				                    <li>
				                        <a class="nav-link" href="category.php?tid=M">
				                            <i class="fas fa-edit" aria-hidden="true"></i>
				                            <span>MODERATE</span>
				                        </a>                        
				                    </li>
				                    <li>
				                        <a class="nav-link" href="category.php?tid=C">
				                            <i class="fas fa-edit" aria-hidden="true"></i>
				                            <span>COMPLEX</span>
				                        </a>                        
				                    </li>
				                </ul>
				            </nav>
				
				
				            <hr class="separator" />
				
				        </div>
				
				        <script>
				            // Maintain Scroll Position
				            if (typeof localStorage !== 'undefined') {
				                if (localStorage.getItem('sidebar-left-position') !== null) {
				                    var initialPosition = localStorage.getItem('sidebar-left-position'),
				                        sidebarLeft = document.querySelector('#sidebar-left .nano-content');
				                    
				                    sidebarLeft.scrollTop = initialPosition;
				                }
				            }
				        </script>
				        
				
				    </div>
				
				</aside>
				<!-- end: sidebar -->
